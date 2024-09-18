<?php
$host = 'localhost'; 
$dbname = 'bd_avaliacao_2a'; 
$user = 'root'; 
$password = ''; 

$conexao = newsql ($host, $dbname, $user, $password);
  
if($conexao-> connect_errno)
{echo "Erro"; 
}
else{
echo "Conexão Efetuada com Sucesso";
}
?>
