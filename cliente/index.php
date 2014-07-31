<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Controle de Ponto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/libs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Controle de Ponto</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Bater Ponto</a></li>
                    <li><a href="relatorio.php">Relatório de Ponto</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../login.php">Sair</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Bater Ponto</h2>
            </div>
            <div class="col-md-12">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object img-circle" src="http://placehold.it/200x200" alt="Funcionário X">
                    </a>
                    <div class="media-body">
                        <h3>João Carlos Figueira Sousa</h3>
                        <p><strong>Cargo:</strong> Programador Júnior</p>
                        <p><strong>Setor:</strong> RH / Administração</p>
                        <p>
                            Em serviço há 07h36m. Entrou às 08:00. Saiu para almoço às 12:12. Voltou de almoço às 14:05.
                        </p>
                        <p>
                            <a href="#" class="btn btn-success disabled">Entrar</a>
                            <a href="#" class="btn btn-warning"> Sair para almoço</a>
                            <a href="#" class="btn btn-warning"> Voltar do almoço</a>
                            <a href="#" class="btn btn-danger">Sair</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <footer>
            <p>© 2014 - Copyrights <a href="#">Caíque de Castro Developer</a> - Built with <a href="#">Bootstrap</a></p>
        </footer>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>
