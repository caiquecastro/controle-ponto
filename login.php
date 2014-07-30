<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Controle de Ponto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                      <h3 class="masthead-brand">Controle de Ponto</h3>
                      <ul class="nav masthead-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Funcionalidades</a></li>
                        <li class="active"><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner cover">
                    <form class="form-signin" role="form" action="auth.php" method="POST">
                        <h2 class="form-signin-heading">Área Restrita</h2>
                        <input type="email" class="form-control" placeholder="Email address" required autofocus>
                        <input type="password" class="form-control" placeholder="Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                    </form>
                </div>
                <div class="mastfoot">
                    <div class="inner">
                        <p>Desenvolvido com <a href="http://getbootstrap.com">Bootstrap</a>, por <a href="https://kyqwebdesign.com.br">Caíque de Castro</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
