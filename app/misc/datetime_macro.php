<?php
/**
* Datetime input - http://www.w3.org/TR/html-markup/input.datetime.html
*
* The input element with a type attribute whose value is "datetime" represents a control
* for setting the element’s value to a string representing a global date and time (with
* timezone information).
*
* Value - A valid date-time as defined in [RFC 3339], with these additional qualifications:
*  1. The literal letters T and Z in the date/time syntax must always be uppercase
*  2. The date-fullyear production is instead defined as four or more digits representing a
*     number greater than 0
*/
Form::macro('datetime', function($name, $value = null, $options = array())
 {
     $input =  '<input type="datetime" name="' . $name . '" value="' . $value . '"';

     foreach ($options as $key => $value) {
         $input .= ' ' . $key . '="' . $value . '"';
     }

     $input .= '>';

     return $input;
 });

