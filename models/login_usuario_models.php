<?php

session_start();
$usuario = ['usuario'];
$senha = ['senha'];

$mysqli = new mysqli ('localhost','root','','base_dados_loo');
$verificar = mysqli_query($mysqli, "SELECT * FROM tabusuario WHERE usuario = '$usuario' AND senha = '$senha'") or die("erro ao selecionar");

if(mysqli_num_rows ($verificar) > 0 ) {
    if($usuario == 'admin' && $senha == '24062019'){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('location:../home/contato.php');
    }else {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('location:../home/curso.php');
    }
}else{
    unset ($_SESSION['usuario']);
    unset ($_SESSION['senha']);
    //echo "<script>location.href='../home/index.php'; alert('Login ou senha incorretos');</script>";
}

?>