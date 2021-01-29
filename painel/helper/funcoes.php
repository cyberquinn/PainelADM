<?php

function verificaLogin() {
    //No futuro as informações são 
    //trazidas do banco de dados
    $usuario = 'juliana';
    $senha = '123';

    //Verificar as informções passadas
    //pelo usuário é igual a que estão no banco.

    if ($_POST['usuario'] == $usuario &&
            $_POST['senha'] == $senha) {

        $_SESSION['usuario'] = $usuario;
        return TRUE;
    } else {
        return FALSE;
    }
}
