<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function it_has_a_name()
    {
        $user = factory(\App\User::class)->create(['name' => 'Username', 'role_id' => 1]);
        $this->assertEquals('Username', $user->name);
    }

    /** @test */
    function it_requires_a_email(){
        $this->expectException('Illuminate\Database\QueryException');
        $user = factory(\App\User::class)->create(['email' => null]);
    }

    /** @test */
    function it_requires_a_password(){
        $this->expectException('Illuminate\Database\QueryException');
        $user = factory(\App\User::class)->create(['password' => null]);
    }

    /** @test */
    function it_has_one_role(){
        $user = factory(\App\User::class)->create(['role_id' => 8000, 'name' => 'Username' ]);
        $role = factory(\App\Role::class)->create(['id' => 8000, 'name' => 'Testrol']);
        $this->assertEquals(8000, $user->role_id);
    }
}
