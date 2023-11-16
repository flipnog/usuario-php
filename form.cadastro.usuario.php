<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>
<body>
    <h2>Cadastre-se</h2>
   
    <form method="post" action="cadastro.usuario.php">
 
    <label for="nome">Nome</label>
    <input type="text"  placeholder="Seu nome" name="nome">
   <br>
 

  <label for="email">Email</label>
    <input type="email"  placeholder="Seu email" name="email">
  <br>

    <label for="senha">Senha</label>
    <input type="password"  placeholder="Senha" name="senha" ><br>

 
  <button type="submit" >Cadastrar</button><br><br>

  <p>Já tem cadastro?<a href="index.php" >Fazer login</a></p>
</form>
</body>
</html>