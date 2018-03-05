
<!-- ============================================================== -->

<!-- Page wrapper  -->

<!-- ============================================================== -->

<div class="page-wrapper">

<!-- ============================================================== -->

<!-- Container fluid  -->

<!-- ============================================================== -->

<div class="container-fluid">

<!-- ============================================================== -->

<!-- Bread crumb and right sidebar toggle -->

<!-- ============================================================== -->

<div class="row page-titles">

	<div class="col-md-5 align-self-center">

		<h4 class="text-themecolor">Cadastro Cliente</h4>

	</div>

	<div class="col-md-7 align-self-center text-right">

		<div class="d-flex justify-content-end align-items-center">

			<ol class="breadcrumb">

				<li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>

			</ol>

			<!-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->

		</div>

	</div>

</div>

<!-- ============================================================== -->

<!-- End Bread crumb and right sidebar toggle -->

<!-- ============================================================== -->

<!-- ============================================================== -->

<!-- Start Page Content -->

<!-- ============================================================== -->

<div class="row">

	<div class="col-12">

		<div class="card">

			<div class="card-body">

				<h4 class="card-title"></h4>

				<!-- <h6 class="card-subtitle">Just add <code>floating-labels</code> class to the form.</h6> -->
				<h3 class="box-title">Dados Pessoais</h3>
                                        	<hr class="m-t-0 m-b-40">

				<form class="floating-labels m-t-40" method="post" action="<?php echo base_url() ?>inserir-cliente" id="form_inserir_cliente">

					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						
							<div class="form-group m-b-40">
								
								<input type="text" class="form-control" id="nome" name="nome">
								<span class="bar"></span>
								<label for="nome">Nome Completo</label>

							</div>

						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
						
							<div  class="form-group m-b-40">

								<input type="tel" name="cpf" id="cpf" class="form-control">
								<span class="bar"></span>
								<label for="cpf">CPF</label>
								
							</div>
							
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">

							<div class="form-group m-b-40">

								<input type="tel" name="telefone" id="telefone" class="form-control" data-mask="(99) 9999-9999">
								<span class="bar"></span>
								<label for="telefone">Telefone</label>
								
							</div>
							
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">

							<div class="form-group m-b-40">

								<input type="tel" name="celular" id="celular" class="form-control" data-mask="(99) 9.9999-9999">
								<span class="bar"></span>
								<label for="celular">Celular</label>
								
							</div>
							
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">

							<div class="form-group m-b-40">

								<select name="sexo" id="sexo" class="form-control">
									
									<option value=""></option>
									<option value="Masculino">Masculino</option>
									<option value="Feminino">Feminino</option>

								</select>
								<span class="bar"></span>
								<label for="sexo">Sexo</label>
								
							</div>
							
						</div>

					</div><!--row-->

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">

							<div class="form-group m-b-40">

								<input type="email" name="email" id="email" class="form-control">
								<span class="bar"></span>
								<label for="email">E-mail</label>
								
							</div>
							
						</div>
						
					</div><!--row-->

					<h3 class="box-title">Endereço</h3>
					<hr class="m-t-0 m-b-40">

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-1">

							<div class="form-group m-b-40">

								<input type="tel" name="cep" id="cep" class="form-control" data-mask="99.999-999">
								<span class="bar"></span>
								<label for="cep">CEP</label>

							</div>
							
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

							<div class="form-group m-b-40">

								<input type="text" name="logradouro" id="logradouro" class="form-control">
								<span class="bar"></span>
								<label for="logradouro">Logradouro</label>
								
							</div>
							
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-1">

							<div class="form-group m-b-40">

								<input type="tel" name="numero_casa" id="numero_casa" class="form-control">
								<span class="bar"></span>
								<label for="numero_casa">Nº Casa</label>
								
							</div>
							
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">

							<div class="form-group m-b-40">

								<input type="text" name="bairro" id="bairro" class="form-control">
								<span class="bar"></span>
								<label for="bairro">Bairro</label>
								
							</div>
							
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">

							<div class="form-group m-b-40">

								<input type="text" name="cidade" id="cidade" class="form-control">
								<span class="bar"></span>
								<label for="cidade">Cidade</label>
								
							</div>
							
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

							<div class="form-group m-b-40">

								<select name="uf" id="uf" class="form-control">
									<option value=""></option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
								<label for="uf">UF</label>
								
							</div>
							
						</div>
						
					</div><!--row-->

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

							<div class="form-group m-b-5">
							
								<textarea class="form-control" rows="2" id="complemento" name="complemento"></textarea>
								<span class="bar"></span>
								<label for="complemento">Complemento</label>
							
							</div>
							
						</div>
						
					</div><!--row-->

					<hr class="m-t-40 m-b-40">

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"   style="text-align: center;">

							<div class="form-group m-b-40">

								<button type="button" class="btn waves-effect waves-light btn-rounded btn-outline-primary btn-lg" name="btn_finalizar" id="btn_finalizar">Finalizar</button>
								
							</div>

						</div>
						
					</div><!--row-->

				</form>

			</div>

		</div>

	</div>

</div>

<img src="<?php echo base_url() ?>assets/images/alert/alert3.png" alt="alert" class="img-responsive model_img" id="sa-sucesso">
<img src="<?php echo base_url() ?>assets/images/alert/alert5.png" alt="alert" class="img-responsive model_img" id="sa-falha">

<!-- MODAIS -->
<div class="col-md-4">

	<!-- sample modal content -->

	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;" id="modal_alerta">

		<div class="modal-dialog modal-sm">

			<div class="modal-content">

				<div class="modal-header">

					<h4 class="modal-title" id="titulo_modal"></h4>

					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				</div>

				<div class="modal-body" id="msg_modal"></div>

			</div>

		<!-- /.modal-content -->

		</div>

		<!-- /.modal-dialog -->

	</div>

</div>

<!-- ============================================================== -->

<!-- End PAge Content -->

<!-- ============================================================== -->