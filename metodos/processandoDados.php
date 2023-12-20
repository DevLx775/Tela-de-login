<?php 
    session_start();
    include_once ("../metodos/configDb.php");
    $userAplication = $_POST['username'];
    $passwordUserAplication = $_POST['password'];
    if(!isset($userAplication) || !isset($passwordUserAplication))
    {
        echo "<script>
        alert('Preencha os dados para continuar!');
        window.location.href = '../index.html';
        </script>";    
    }
    // Consultar usuario e senha
    $sql = "SELECT * FROM usuariosadmin WHERE usuario = '$userAplication' AND senha = '$passwordUserAplication' ";
    $sql_exec = mysqli_query($conexao,$sql);
    $resultado_row_sql = $sql_exec->fetch_assoc();

    if($sql_exec->num_rows <= 0)
    { 
        echo "<script>
        alert('Usuario e senha inconsistentes verifique os dados para continuar.');
        window.location.href = '../index.html';
        </script>";
    }
    else{
        $_SESSION['useraplicationlogged'] = true;
        $_SESSION['user'] = $resultado_row_sql['usuario'];
        echo "<script>
        alert('Redirecionando. . . ');
        window.location.href = '../paginas/admin.php'</script>";
    }
    ?>