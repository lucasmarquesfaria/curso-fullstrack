<?php

$person = ['name' => 'Lucas', 'age' => 38, 
        'documentos' => [ 'cpf' => '123456', 'rg' => '789789', 
        'array'  => ['teste1', 'teste2']
        ]
];


var_dump($person['documentos']['array']);

