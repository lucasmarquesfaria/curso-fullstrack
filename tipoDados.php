<?php

/**
                              array p/ object 
$person = ['name' => 'lucas', 'domingos', 'gorete'];  // string vazia gera false   

$change = (object) $person;

var_dump($change->name);

                            object p/ array

class Person {

    private $name;

    public function teste(){
        return 'teste';
    }
}
 
$person = new Person;

$change = (array) $person;

var_dump($change);

 */

