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
                    <li><a href="index.php">Bater Ponto</a></li>
                    <li class="active"><a href="relatorio.php">Relatório de Ponto</a></li>
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
                <h2>Relatório de Ponto</h2>
            </div>
            <div class="col-md-12">
                <h3>Saldo Total</h3>
                <p class="lead">12 horas e 16 minutos</p>
                <h3>Histórico</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Dia</th>
                            <th>Entrada</th>
                            <th>Ida Almoço</th>
                            <th>Volta Almoço</th>
                            <th>Saída</th>
                            <th>Tempo Total</th>
                            <th>Saldo</th>
                            <th>Observações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="active">
                            <td>18/08/2014</td>
                            <td>07:58</td>
                            <td>12:12</td>
                            <td>14:08</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr class="info">
                            <td>17/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="info">
                            <td>16/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>15/08/2014</td>
                            <td>07:58</td>
                            <td>12:12</td>
                            <td>14:08</td>
                            <td>18:05</td>
                            <td>8h11</td>
                            <td>0h11</td>
                            <td>-</td>
                        </tr>
                        <tr class="danger">
                            <td>14/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>13/08/2014</td>
                            <td>07:58</td>
                            <td>12:12</td>
                            <td>14:08</td>
                            <td>18:00</td>
                            <td>8h06</td>
                            <td>0h06</td>
                            <td>-</td>
                        </tr>
                        <tr class="warning">
                            <td>12/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>11/08/2014</td>
                            <td>08:00</td>
                            <td>12:00</td>
                            <td>14:00</td>
                            <td>18:00</td>
                            <td>8h00</td>
                            <td>0h00</td>
                            <td>-</td>
                        </tr>
                        <tr class="info">
                            <td>10/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="info">
                            <td>09/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>08/08/2014</td>
                            <td>08:00</td>
                            <td>12:00</td>
                            <td>14:00</td>
                            <td>18:00</td>
                            <td>8h00</td>
                            <td>0h00</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>07/08/2014</td>
                            <td>08:00</td>
                            <td>12:00</td>
                            <td>14:00</td>
                            <td>18:00</td>
                            <td>8h00</td>
                            <td>0h00</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>06/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>05/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>04/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>03/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>02/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>01/08/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>31/07/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>30/07/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>29/07/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>28/07/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>27/07/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr class="success">
                            <td>26/07/2014</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a></li>
                    <li class="next disabled"><a href="#">Newer &rarr;</a></li>
                </ul>
                <span class="label label-default">Hoje</span>
                <span class="label label-info">Final de Semana</span>
                <span class="label label-warning">Feriado</span>
                <span class="label label-danger">Ausência</span>
                <span class="label label-success">Férias</span>
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
