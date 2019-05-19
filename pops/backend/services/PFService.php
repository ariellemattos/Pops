<?php
    @session_start();

    $path_url = "http://".$_SERVER['HTTP_HOST']."/Tcc";
    $path_local = $_SERVER['DOCUMENT_ROOT']."/Tcc";

    $pfBusiness = "";
    require_once "../business/PessoaFisicaBusiness.php";
    require_once "$path_local/cms/upload.php";
    require_once "$path_local/cms/controller/controllerBrinde.php";
    $pfBusiness = new PessoaFisicaBusiness();
    $controllerBrinde = new ControllerBrinde();

    if(isset($_GET['op'])){
        $op = $_GET['op'];

        if($op=='login'){
            $username = $_POST['user'];
            $password = $_POST['senha'];
            //callback
            echo json_encode($pfBusiness->loginPessoaFisica($username, $password));
        }

        if($op=='dashboard'){
            $id_p_fisica = $_COOKIE['id_p_fisica'];

            echo json_encode($pfBusiness->selectByIdPessoaFisica($id_p_fisica));
        }

        if($op=='addComentario'){
            $id_p_fisica = $_COOKIE['id_p_fisica'];
            $comentario = $_POST['txtComentario'];
            $status = 0;

            //callback
            echo json_encode($pfBusiness->insertComentario(
                $id_p_fisica,
                $comentario,
                $status
            ));
        }

    }

    if(isset($_GET['acao'])){
      $acao = $_GET['acao'];
      $id = $_POST['id'];

        echo json_encode($controllerBrinde->adicionarCarrinho($acao, $id));

    }
?>
