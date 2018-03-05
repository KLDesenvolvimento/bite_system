<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		$this->load->view('login');

	}

	public function logar()
	{

		$dados['login'] = $this->input->post();

		$retorno = $this->LoginDao->logar($dados);

		echo json_encode($retorno);

	}
}
