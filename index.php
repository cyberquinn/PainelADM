<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);

if ($pg) {
    //existe

    switch ($_GET['pg']) {

        case 'Inicio':
            include_once 'site/inicio.php';
            break;

        case 'dashboard':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos':

//            fazer uma consulta no banco e disponibilizar os resultados

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos-inserir':


            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            //Alguém apertou o botão adicionar?
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //pegando as veriáveis via POST
         
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $valor = $_POST['valor'];
                
                //Tratar os dados enviados via POST
                $parametros = array(''
                    . ':nome'=> $nome,
                     ':tipo'=> $tipo,
                     ':valor'=> $valor,
                    
                    );
                //Parametros necessarios para inserir
                $resultDados = new Conexao ();
                $resultDados->intervencaoNoBanco('INSERT INTO ' 
                        . 'produtos (nome, tipo, valor) '
                        . 'VALUES (:nome, :tipo, :valor)' , $parametros);
                
                        include_once 'painel/paginas/produtos.php';
            }else{
                include_once 'painel/paginas/produtos-inserir.php';
            }

            
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos-item':

            $id = $_GET['id'];

            $resultDadosTabProdutos = new Conexao();
            $dados = $resultDadosTabProdutos->selecionaDados('SELECT * FROM produtos WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos-item.php';
            include_once 'painel/paginas/includes/footer.php';

            break;


        case 'produtos-editar':

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Função para atualização do produto
                //echo "Editando
                //Pegando as variáveis via POST

                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $valor = $_POST['valor'];

                //Tratando os dados enviados 
                $parametros = array(
                    ':id' => $id,
                    ':nome' => $nome,
                    ':tipo' => $tipo,
                    ':valor' => $valor
                );
                //Fazendo a atulização no banco
                $atualizarProduto = new Conexao();

                $atualizarProduto->intervencaoNoBanco(''
                        . 'UPDATE produtos SET '
                        . 'nome = :nome, '
                        . 'tipo = :tipo, '
                        . 'valor = :valor '
                        . 'WHERE id = :id', $parametros);

                include_once 'painel/paginas/produtos.php';
            } else {
                //mostrar os dados do produto
                $idProdutoEditar = isset($_GET ['id']);

                //se for verdadeiro

                if ($idProdutoEditar) {
                    $resultDadosTabProdutos = new Conexao();
                    $dados = $resultDadosTabProdutos->selecionaDados('SELECT * FROM produtos WHERE id = ' . $_GET ['id']);
                    include_once 'painel/paginas/produtos-editar.php';
                    //se for falso    
                }
            }
            include_once 'painel/paginas/includes/footer.php';

            break;

        case 'produtos-excluir':

            $parametros = array(
                ':id' => $_GET['id'],
            );
            $resultDadosTabServicos = new Conexao();
            $resultDadosTabServicos->intervencaoNoBanco('' . 'DELETE FROM produtos WHERE id = :id', $parametros);
            header('Location: ?pg=produtos');

            break;


        case 'serviços':

            //            fazer uma consulta no banco e disponibilizar os resultados

            $resultDadosTabServicos = new Conexao();
            $dados = $resultDadosTabServicos->selecionaDados('SELECT * FROM servicos');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/serviços.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'servicos-lista':

            $id = $_GET['id'];

            $resultDadosTabmsg = new Conexao();
            $dados = $resultDadosTabmsg->selecionaDados('SELECT * FROM servicos WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos-lista.php';
            include_once 'painel/paginas/includes/footer.php';


        case 'servicos-editar':

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Função para atualização do produto
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $valor = $_POST['valor'];

                //Tratando os dados enviados 
                $parametros = array(
                    ':id' => $id,
                    ':nome' => $nome,
                    ':tipo' => $tipo,
                    ':valor' => $valor
                );

                //Fazendo a atulização no banco
                $atualizarServicos = new Conexao();

                $atualizarServicos->intervencaoNoBanco(''
                        . 'UPDATE servicos SET '
                        . 'nome = :nome, '
                        . 'tipo = :tipo, '
                        . 'valor = :valor '
                        . 'WHERE id = :id', $parametros);


                include_once 'painel/paginas/serviços.php';

                //se for verdadeiro
            } else {
                //mostrar os dados do produto
                $idServicosEditar = isset($_GET['id']);

                //se for verdadeiro

                if ($idServicosEditar) {
                    $resultDadosTabServicos = new Conexao();
                    $dados = $resultDadosTabServicos->selecionaDados('SELECT * FROM servicos WHERE id = ' . $_GET ['id']);
                    include_once 'painel/paginas/servicos-editar.php';
                    //se for falso    
                } else {
                    
                }
            }
            include_once 'painel/paginas/includes/footer.php';

            break;

        case 'servicos-excluir':

            $parametros = array(
                ':id' => $_GET['id'],
            );
            $resultDadosTabServicos = new Conexao();
            $resultDadosTabServicos->intervencaoNoBanco('' . 'DELETE FROM servicos WHERE id = :id', $parametros);
            header('Location: ?pg=serviços');

            break;


        case 'Contato':

            //            fazer uma consulta no banco e disponibilizar os resultados

            $resultDadosTabContato = new Conexao();
            $dados = $resultDadosTabContato->selecionaDados('SELECT * FROM contato');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/Contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'contato-visualizar':

            $id = $_GET['id'];

            $resultDadosTabmsg = new Conexao();
            $dados = $resultDadosTabmsg->selecionaDados('SELECT * FROM contato WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato-visualizar.php';
            include_once 'painel/paginas/includes/footer.php';

            break;


        case 'contato-editar':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Função para atualização do produto
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $mensagem = $_POST['mensagem'];

                //Tratando os dados enviados 
                $parametros = array(
                    ':id' => $id,
                    ':nome' => $nome,
                    ':email' => $email,
                    ':mensagem' => $mensagem
                );

                //Fazendo a atulização no banco
                $atualizarContato = new Conexao();

                $atualizarContato->intervencaoNoBanco(''
                        . 'UPDATE contato SET '
                        . 'nome = :nome, '
                        . 'email = :email, '
                        . 'mensagem = :mensagem '
                        . 'WHERE id = :id', $parametros);


                include_once 'painel/paginas/contato.php';

                //se for verdadeiro
            } else {
                //mostrar os dados do produto
                $idContatoEditar = isset($_GET['id']);

                //se for verdadeiro

                if ($idContatoEditar) {
                    $resultDadosTabContato = new Conexao();
                    $dados = $resultDadosTabContato->selecionaDados('SELECT * FROM contato WHERE id = ' . $_GET ['id']);
                    include_once 'painel/paginas/contato-editar.php';
                    //se for falso    
                } else {
                    
                }
            }
            include_once 'painel/paginas/includes/footer.php';

            break;


        case 'contato-excluir':

            $parametros = array(
                ':id' => $_GET['id'],
            );
            $resultDadosTabServicos = new Conexao();
            $resultDadosTabServicos->intervencaoNoBanco('' . 'DELETE FROM contato WHERE id = :id', $parametros);
            header('Location: ?pg=contato');

            break;


        case 'login':
            include_once 'painel/paginas/acesso/login.php';
            break;

        case 'dashboard':
            //Página inicial do Painel Adm            
            if (verificaLogin()) {
                include_once 'painel/paginas/dashboard.php';
            } else {
                echo 'Lofgdfkdkg';
            }
            break;

        default:
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once './painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
    }
} else {
    //não existe
    include_once 'painel/paginas/includes/header.php';
    include_once 'painel/paginas/includes/menus.php';
    include_once './painel/paginas/dashboard.php';
    include_once 'painel/paginas/includes/footer.php';
}

   