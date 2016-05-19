<?php
//Lucas Santos RA21444918
//Marco Aurélio RA21462877
//Gustavo Garcia RA21462877
class User{
   private $nome;
private $sobrenome;
private $email;
private $senha;
private $data;
private $genero;
public function __construct($nome, $sobrenome, $email, $senha, $data, $genero){
$this->nome = $nome;
$this->sobrenome = $sobrenome;
$this->email = $email;
$this->senha = $senha;
$this->data = $data;
$this->genero = $genero;

//checar se todos os campos foram preenchidos
if($nome != null && $sobrenome != null && $email != null &&  $senha != null && $data != null && $genero != null){
	echo "Cadastro realizado com sucesso";
} else {
	echo "Volte e preencha todos os campos";
	die();
}
}
//salva as informações em um arquivo txt
public function savetofile(){
$arquivo = fopen("Usuario1.txt", "w"); 
$txt = $this->nome;
fwrite($arquivo, $txt . "\r\n");
$txt = $this->sobrenome;
fwrite($arquivo, $txt . "\r\n");
$txt = $this->email;
fwrite($arquivo, $txt . "\r\n");
$txt = $this->senha;
fwrite($arquivo, $txt . "\r\n");
$txt = $this->data;
fwrite($arquivo, $txt . "\r\n");
$txt = $this->genero;
fwrite($arquivo, $txt . "\r\n");
fclose($arquivo);
}
}

