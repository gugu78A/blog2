<?php
    require_once '../core/sql.php';
        $id =1;
        $nome = 'Gustavo';
        $email = 'b.ponvequi@aluno.ifsp.edu.br';
        $senha = 'bob145';
        $dados = ['nome' => $nome, 'email' => $email, 'senha' => $senha];
        $entidade = 'usuario';
        $criterio = [['id', '=', $id]];
        $campos =['id', 'nome', 'email'];
        print_r($dados);
        echo '<br>';
        print_r($criterio);
        echo '<br>';

        //TESTE DO INSERT 
        $instrucao = insert($entidade, $dados);
        echo $instrucao. '<BR>';

        //TESTE DO UPDATE
        $instrucao = update($entidade, $dados, $criterio);
        echo $instrucao. '<BR>';

        //TESTE SELECT
        $instrucao = select($entidade, $campos, $criterio);
        echo $instrucao. '<BR>';

        //TESTE DELETE
        $instrucao = delete($entidade, $criterio);
        echo $instrucao. '<BR>';
?>