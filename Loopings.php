<?php
        //for
/**   $name = ['Lucas', 'Domingos', 'Gorete'];

for ( $i = 0; $i < count($name); $i++ ){

echo $name[$i];
}

        //while

$name = ['Lucas', 'Domingos', 'Gorete'];   

$i=0;

while ($i <count($name)) {
    echo $name[$i++];
    $i++;
}
        do while
    

$name = ['Lucas', 'Domingos', 'Gorete'];


$i = 0;
do {
    echo $name[$i];
    $i++;
}while ($i < count($name));


 
        // foreach

$name = ['Lucas', 'Domingos', 'Gorete'];

foreach ($name as $key => $name) {
    echo $key.'=>',$name;
}

*/ 
        // continue - break
$name = ['Lucas', 'Domingos', 'Gorete'];

for ($i=0; $i < count ($name);  $i++) { 
    if ($i === 1){
        break;    //continue
    }
    echo $name[$i];
}
