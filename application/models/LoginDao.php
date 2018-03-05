<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class LoginDao extends CI_Model
	{

		public function logar( $dados )
		{

			$dados = $dados['login'];

			$sql = " SELECT usuario, senha FROM funcionario WHERE usuario = ? AND senha = ? ";

			$query = $this->db->query( $sql, array(
				$dados['usuario'],
				MD5( $dados["senha"] )
			) );

			if( $query->num_rows() > 0 )
			{

				return true;

			}
			else
			{

				return false;

			}

		}

	}

?>