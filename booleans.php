<?php

/*
$_SESSION['logado'] = false;

$_SESSION['logado'] = true;

if($_SESSION['logado']){
    echo'sistema ok';
};

for($i = 0; $i <= 10; $i++){
    echo $i;
}
*/

$name ='Lucas';
$age = 38;
$logado = false;

if($name === 'Lucas' && $age > 18 && $logado === true) {
    echo 'e verdadeiro';
} else {
    echo 'e falso';
}
