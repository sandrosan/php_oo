<?php
require_once '../model/Usuario.php';

$primeiro_usuario=new Usuario();
$primeiro_usuario->setNome('Sandro');
$primeiro_usuario->setEmail('sandrosan75@hotmail.com');

echo $primeiro_usuario->getNome();
echo $primeiro_usuario->getEmail();

//$primeiro_usuario-> nome="Sandro";//chamando a variavel nome e atribuindo o atributo sandro
//$primeiro_usuario->email="sandrosan75@hotmail.com";
//$primeiro_usuario->nascimento="02/11/1981";

//print_r($primeiro_usuario);  //motrar o que o objeto tem
//echo $primeiro_usuario->nome.$primeiro_usuario->email.
     //$primeiro_usuario->nascimento;
// ->metodo ascessor

?>