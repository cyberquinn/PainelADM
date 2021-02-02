<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar serviços</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Editar serviços</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Edição de Contato </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="?pg=contato-editar" method="POST">
                            <?php foreach ($dados as $dado) {
                                ?>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nome">Contato </label>
                                        <input type="text" name="nome" value=" <?php echo $dado['nome']; ?>" class="form-control" id="nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail do contato </label>
                                        <input type="text" name="email" value=" <?php echo $dado['email']; ?>" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="mensagem">Mensagem</label>
                                        <input type="text" name="mensagem" value=" <?php echo $dado['mensagem']; ?>" class="form-control" id="mensagem">
                                    </div>
                                    <input type="hidden" value="<?php echo $dado['id']; ?>" name="id" > 
                                    
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                 
                                    <a href="?pg=contato"class="btn btn-info"><span class="">Voltar</span></a>
                                    <button type="submit" class="btn btn-dark"><span class="fa fa-save"</span> Atualizar</button>
                                    
                                </div>
                                
                            <?php } ?>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->