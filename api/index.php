<?php
session_start('iutai');
require '../vendor/autoload.php';


$app = new \Slim\Slim();

$app->post('/guardar', function () use ($app) {

$database = new medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => 'heroku_387c3fc43aa3c97',
    'server' => 'us-cdbr-east-06.cleardb.net',
    'username' => 'b1e0f854ae8d44',
    'password' => '7b0e6c62',

    // optional
    'port' => 3306,
    'charset' => 'utf8',
    // driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        //PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
    ]);   
$valor = $app->request->post();
header('Content-Type: application/json');
header("access-control-allow-origin: *");
$op  = $app->request->post('op');

if($op==1)
{
    
    $inf = "Informacion guardada correctamente";
    $stack = array();

 foreach ($valor as $key => $val) {

             $stack[$key] = $val;
 } 
 $datas = $database->insert("registrados", $stack);

}
else
    {
         $inf = "Upss, esto no deberia pasar!";
    }


$count = $database->count("registrados");
echo json_encode(["mensaje" => $inf,"counter"=>$count]);
});

$app->get('/count', function () {    

   $database = new medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => 'heroku_387c3fc43aa3c97',
    'server' => 'us-cdbr-east-06.cleardb.net',
    'username' => 'b1e0f854ae8d44',
    'password' => '7b0e6c62',

    // optional
    'port' => 3306,
    'charset' => 'utf8',
    // driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        //PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
    ]);   
    header('Content-Type: application/json');
    header("access-control-allow-origin: *");
    $count = $database->count("registrados");
    echo json_encode(["counter"=>$count]);   
});



$app->run();
 ?>