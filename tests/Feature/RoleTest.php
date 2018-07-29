<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoleTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function it_has_a_name(){
        $role = factory(\App\Role::class)->create(['name' => 'Rolnaam']);
        $this->assertEquals('Rolnaam', $role->name);
    }

    /** @test */
    function it_requires_a_name(){
        $this->expectException('Illuminate\Database\QueryException');
        $role = factory(\App\Role::class)->create(['name' => null]);
    }

    /** @test */
    function it_has_multiple_users(){
        $user1 = factory(\App\User::class)->create(['role_id' => 1337]);
        $user2 = factory(\App\User::class)->create(['role_id' => 2]);
        $user3 = factory(\App\User::class)->create(['role_id' => 1337]);
        $role = factory(\App\Role::class)->create(['id' => 1337, 'name' => 'Testrol']);
        $this->assertCount(2, $role->users);
    }
}
