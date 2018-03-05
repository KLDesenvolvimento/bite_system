<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class ClienteDao extends CI_Model
	{

		public function inserir_cliente( $dados )
		{

			$dados = $dados['cliente'];

			$sql = " INSERT INTO cliente_fisico ( nome, cpf, telefone, celular, email, cep, logradouro, numero_casa, bairro, cidade, uf, complemento ) VALUES ( ?,?,?,?,?,?,?,?,?,?,?,? ) ";

			$query = $this->db->query( $sql, array( 

				isset( $dados['nome'] ) 		? addslashes( $dados['nome'] ) 			: '',
				isset( $dados['cpf'] ) 		? addslashes( $dados['cpf'] ) 			: '',
				isset( $dados['telefone'] ) 	? addslashes( $dados['telefone'] ) 		: '',
				isset( $dados['celular'] ) 		? addslashes( $dados['celular'] ) 			: '',
				isset( $dados['email'] ) 		? addslashes( $dados['email'] ) 			: '',
				isset( $dados['cep'] ) 		? addslashes( $dados['cep'] ) 			: '',
				isset( $dados['logradouro'] ) 	? addslashes( $dados['logradouro'] ) 		: '',
				isset( $dados['numero_casa'] ) 	? addslashes( $dados['numero_casa'] ) 		: 0,
				isset( $dados['bairro'] ) 		? addslashes( $dados['bairro'] ) 			: '',
				isset( $dados['cidade'] ) 		? addslashes( $dados['cidade'] ) 			: '',
				isset( $dados['uf'] ) 		? addslashes( $dados['uf'] ) 			: '',
				isset( $dados['complemento'] ) 	? addslashes( $dados['complemento'] ) 		: ''

			 ) );

			if( $query )
			{

				return true;

			}
			else
			{

				return false;

			}

		}

		public function get_cliente()
		{

			$sql = " 	SELECT nome, cpf, telefone, celular, email, cep, logradouro, bairro, cidade, uf, complemento 
					FROM cliente_fisico ORDER BY nome ASC ";

			return $this->db->query( $sql )->result();

		}

	}

?>