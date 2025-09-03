<?php
require_once '../includes/funcoes.php';
require_once '../core/conexao_mysql.php';
require_once '../core/sql.php';
require_once '../core/mysqli.php';

insert_teste('joao', 'joao@ifsp.edu.br', '123456');
buscar_teste();
update_teste(38, 'gustavo', 'gug@gamil.com');
buscar_teste()

function insert_teste($nome, $email, $email, $senha): void
{


    $dados = ['nome' => $nome, 'email' =>$email, 'senha' =>$senha];
}






?>