<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Contatos_model','contatos'); 
        $this->load->model('Funcao_model','funcao'); 
      
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['contatos'] = $this->contatos->listar();
        $dados['funcao'] = $this->funcao->listar();
        $this->load->view('contato', $dados);
        $this->load->view('template/footer');
    }
    
    public function inserir(){
        $dados['nome'] = $this->input->post('nome');
        $dados['email'] = $this->input->post('email');
        $dados['idfuncao'] = $this->input->post('idfuncao');
        $this->contatos->inserir($dados);
        redirect('contato');
    }

        public function excluir($id){
        $this->contatos->deletar($id);
        redirect('contato');
        
    }
    
    function editar($id){
        $this->load->view('template/header');
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Framework";
        $data['contatoEditar'] = $this->contatos->editar($id);
        $data['funcao'] = $this->funcao->listar();
        $this->load->view('contatoEditar', $data);
        $this->load->view('template/footer');
    }
    public function atualizar(){
        $data['id'] = $this->input->post('id');
        $data['nome'] = mb_convert_case ($this->input->post('nome'), MB_CASE_UPPER);
        $data['idfuncao'] = $this->input->post('idfuncao');
        $data['email'] = mb_convert_case ($this->input->post('email'),MB_CASE_LOWER) ;
        $this->contatos->atualizar($data);
        redirect('contato');
    }
  }

