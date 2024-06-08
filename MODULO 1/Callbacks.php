<?php

function teste($name)
{
    return 'Ola, meu nome é '.$name;
}

function teste2($callback)
{
    if(is_callable($callback)){
        return $callback('Lucas');
    } else {
        echo 'Não e nada';
    }
}

$user = 'teste';

echo teste2($user);