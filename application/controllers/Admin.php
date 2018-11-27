<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		$this->load->model('produto_model');
		$dados['resultado'] = $this->produto_model->teste();
		$this->load->model('cesta_model');
		$dados['resultadoCesta'] = $this->cesta_model->teste();
		$this->load->model('cliente_model');
		$dados['resultadoReserva'] = $this->cliente_model->teste();

		$this->load->view('headerDashboard');
		$this->load->view('indexDashboard', $dados);
		$this->load->view('footerDashboard');

	}

	public function cadastroProduto(){
		$this->load->view('headerDashboard');
		$this->load->view('cadastroProduto');
		$this->load->view('footerDashboard');
	}

	public function cadastroCesta(){
		$this->load->view('headerDashboard');
		$this->load->view('cadastroCesta');
		$this->load->view('footerDashboard');
	}

	public function cadastrarProdutor(){
		$this->load->view('headerDashboard');
		$this->load->view('cadastroprodutor');
		$this->load->view('footerDashboard');
	}

	public function removerProduto($idProduto){
		$this->load->model('produto_model');
		$this->produto_model->remove($idProduto);

		echo "<script>alert('Produto Removido!')</script>";
		
		redirect('Admin/');
	}

}