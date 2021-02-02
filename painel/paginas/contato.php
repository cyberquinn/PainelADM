<?php
$resultDadosTabProdutos = new Conexao();
$dados = $resultDadosTabProdutos->selecionaDados('SELECT * FROM contato');
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contato<small>- Página Contato do Painel administrativo</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Contato</li>
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
                        <div class="col-12">


                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="tabela-produtos" class="table text-center table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Mensagem</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            foreach ($dados as $dado) {
                                                ?>
                                            
                                            <tr>
                                                <td><?php echo $dado['id']; ?></td>
                                                <td><?php echo $dado['nome']; ?></td>
                                                <td><?php echo $dado['email']; ?></td>
                                                <td><?php echo $dado['mensagem']; ?></td>
                                                <td>
                                                    <!--visulizar-->
                                                    <a href="?pg=contato-visualizar&id=<?php echo $dado ['id'];?>" class=" btn btn-outline-success"><Span class="fa fa-eye"></Span></a>
                                                    <!-- Editar-->
                                                    <a href="?pg=contato-editar&id=<?php echo $dado ['id'];?>" class=" btn btn-outline-warning"><Span class="fa fa-edit"></Span></a>
                                                    <!-- Apagar-->
                                                    <a href="?pg=contato-excluir&id=<?php echo $dado ['id'];?>"class=" btn btn-outline-danger"><Span class="fa fa-trash"></Span></a>

                                                </td>
                                            </tr>
                                            
                                                <?php
                                            }
                                            ?>

                                            

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
   <!--/.content-wrapper-->

