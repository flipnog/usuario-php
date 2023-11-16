<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>
<body>


          <form method="post" action="valida.login.php">

            <h3 >Bem-vindo(a) de volta</h3>
            <h5>Faça login para continuar</h5><br>

          
            <label for="email">Email</label>
              <input type="email" id="email" name="email"/><br><br>
              
            <label for="senha">Senha</label>
              <input type="password"  name="senha" /><br><br>
                    
              <input  type="submit" value="Entrar"></input>
         
            <p>Não tem uma conta?<a href="form.cadastro.usuario.php" class="link-info">Registre-se</a></p>

          </form>

    

</body>
</html>