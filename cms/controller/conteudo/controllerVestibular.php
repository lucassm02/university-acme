<?php

class controllerVestibular{
	
	public function __construct(){
        @session_start();
        require_once($_SESSION['require']."cms/model/conteudoClass.php");
        require_once($_SESSION['require']."cms/model/dao/conteudoDAO.php"); 
	}
    
    public function buscarVestibular($id){
        $conteudoDAO = new conteudoDAO();
        $list = $conteudoDAO->selectById($id);
        return $list;
    }
    
    
    public function atualizarInicio($id){
        //Verifica se os dados estão sendo enviados via POST pelo formulário
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            //Instancia da classe Evento da Model e preenche atributos
            
            $txtConteudo = $_POST["txtTitulo"].";".$_POST["txtSubtitulo"].";".$_POST["txtT"];
            
            $contedo = new Conteudo();

            $contedo->setIdConteudo($id);
            $contedo->setPagina("Vestibular");
            $contedo->setSessao("Inicio");
            $contedo->setConteudo($txtConteudo);
            $contedo->setFoto($_POST["txtFoto"]);
			
			$conteudoDAO = new conteudoDAO();
			$conteudoDAO->update($contedo);
			
			echo($txtConteudo);
        
        }
    }
    
    
    public function atualizarBolsaEstudos($id){
        //Verifica se os dados estão sendo enviados via POST pelo formulário
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            //Instancia da classe Evento da Model e preenche atributos
            
            $txtConteudo = $_POST["txtTitulo"].";".$_POST["txtSubtitulo"].";".$_POST["txtDesc"];
            
            $contedo = new Conteudo();

            $contedo->setIdConteudo($id);
            $contedo->setPagina("Vestibular");
            $contedo->setSessao("Bolsa de Estudos");
            $contedo->setConteudo($txtConteudo);
            $contedo->setFoto($_POST["txtFoto"]);
			
			$conteudoDAO = new conteudoDAO();
			$conteudoDAO->update($contedo);
			
			echo($txtConteudo);
        
        }
    }
    
    public function atualizarConvenio($id){
        //Verifica se os dados estão sendo enviados via POST pelo formulário
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            //Instancia da classe Evento da Model e preenche atributos
            
            $txtConteudo = $_POST["txtTitulo"].";".$_POST["txtSubtitulo"].";".$_POST["txtDesc"];
            
            $contedo = new Conteudo();

            $contedo->setIdConteudo($id);
            $contedo->setPagina("Vestibular");
            $contedo->setSessao("Convenio");
            $contedo->setConteudo($txtConteudo);
            $contedo->setFoto($_POST["txtFoto"]);
			
			$conteudoDAO = new conteudoDAO();
			$conteudoDAO->update($contedo);
			
			echo($txtConteudo);
        
        }
    }
}

?>