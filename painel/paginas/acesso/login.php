<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Log in (v2)</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="painel/plugins/fontawesome-free/css/all.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="painel/plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="painel/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="painel/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Painel<br></b>Administrativo</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Entre com os seus dados de acesso</p>

                    <form action="?pg=dashboard" method="post">
                        <div class="input-group mb-3">
                            <input name="usuario" type="text" class="form-control" placeholder="Usuário">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>                       
                    </form>
                    
                    <div class="social-auth-links text-center mt-2 mb-3">
                        <button href="?pg=dashboard" class="btn btn-block btn-primary">
                            <i class="mr-2"></i> Entrar
                        </button>
                        <a href="?pg=inicial" class="btn btn-block btn-danger">
                            <i class=" mr-2"></i> Voltar ao site
                        </a>
                    </div>
                    <!-- /.social-auth-links -->
                  
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="painel/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="painel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="painel/dist/js/adminlte.min.js"></script>
    </body>
</html>