<?php

/*

  Projeto: Pop'Soda Drink
  Autor: Vitoria
  Data Criação: 11/04/2019

  Data Modificação:
  Conteúdo Modificação:
  Autor Modificação:

  Objetivo da Classe: Controller do Fale conosco

 */

class ControllerFaleConosco
{

  // Iniciando a variável em null para não haver erro
  private $path_local;

  // Atributo que será instânciado
  private $faleConoscoDAO;

  function __construct()
  {

    // Variável que recebe a variáveil de sessão
    $path_local = $_SESSION['path_local'];

    // Importando a classe Setor
    require_once "$path_local/cms/model/fale_conosco.php";

    // Importando a classe SetorDAO
    require_once "$path_local/cms/model/DAO/faleConoscoDAO.php";

    // Instânciando a classe SetorDAO
    $this->faleConoscoDAO = new FaleConoscoDAO();

  }

  public function inserirRegistro(){
    //verifica qual método tá sendo requisitado do form (POST ou GET)
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $txtNome =
      $
    }
  }


  public function excluirRegistro()
  {

    $id = $_GET['id'];

    $this->faleConoscoDAO->delete($id);

  }

  public function listarRegistros()
  {

    return $this->faleConoscoDAO->selectAll();

  }

  public function buscarRegistro()
  {

    $id = $_GET['id'];

    return $this->faleConoscoDAO->selectById($id);

  }

}

 ?>
