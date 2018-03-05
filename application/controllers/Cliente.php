<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Cliente extends CI_Controller
	{

		function __construct()
		{

			parent::__construct();

		}

		public function index()
		{

			$includes = "<script type='text/javascript' src='".base_url()."assets/js/cadastro/cliente/cliente.js'></script>";
			$data['includes'] = $includes;

			$this->load->view('includes/header');
			$this->load->view('cadastro/cliente/inserir');
			$this->load->view('includes/footer', $data);

		}

		public function inserir_cliente()
		{

			$dados['cliente'] = $this->input->post();

			$retorno = $this->ClienteDao->inserir_cliente( $dados );

			echo json_encode($retorno);

		}

		public function relatorio_cliente()
		{

			$dados['clientes'] = $this->ClienteDao->get_cliente();

			$this->load->view('includes/header');
			$this->load->view('relatorios/clientes/relatorio_cliente', $dados);
			$this->load->view('includes/footer', $data);

		}

	}

?>