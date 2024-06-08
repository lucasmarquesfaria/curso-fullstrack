<?php

mb_http_output('UTF-8');

$name = 'person';
$title = 'Codigos PHP';


$person = [
        'name' => 'Lucas', 
        'age' => '25',      
        'documents' => [
                'cpf' => '11938597855', 
                'cit' => 'caratinga', 
                'state' => 'mg',
                'array' => ['dadoos ok', 'dados faltando']
                ]
];


var_dump($person['age']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title?></title>
</head>
<body>
        
</body>
</html>