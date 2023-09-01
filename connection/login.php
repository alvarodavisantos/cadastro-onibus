<?php
  include('connection.php');

  // recebe os dados do formulário
        $username = ($_POST['username']);
        $password = ($_POST['password']);
        $password = md5($password);

  // Aqui entra a pesquisa na tab. de administradores

  $query = "select * from g30_admin where login_admin = '{$username}' and senha_admin = '{$password}'";
  $result = mysqli_query($connection, $query);
  $row = mysqli_num_rows($result);

  if($row == 1) {
    session_start();
    $_SESSION['username'] = $username;
    
    //echo("Conexão efetuada com sucesso!");
    header("location: ../logged/initial.php");
  }
  else
  {
    // inicializa a sessão
    session_start();
    // limpa a sessão
    $_SESSION = array(); // colocando a session com um array vazio faz com ela
            // fique vazia sem nenhuma variavel nela, liberando o espaço
    // destroi a sessão
    session_destroy();
    // redireciona o link para a página de aviso de erro ao autenticar usuário
    //echo("Conexão não foi efetuada com sucesso!");
    header("Location: ../index.php?error=1");
  }
?>