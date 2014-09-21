<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/public/css/style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<title></title>
	</head>
	<body>
<div class="container box-login">
  
  <div class="form-container off-canvas">

    <form action="login/auth" role="form" method="post" class="form-signin">
      <h2>Faça o login... </h2>

      <div class="form-group">
        <label for="Email"><span>*</span> Email</label>
        <input type="text" class="form-control" name="email" id="user_name" required>
      </div>

      <div class="form-group">
        <label for="Senha"><span>*</span> Senha</label>
        <input type="password" class="form-control" name="senha" id="password" required>
      </div>
      {{ message }}
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

    </form>
  </div>
	</body>
</html>
