
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

		<h4 class="text-themecolor">Relatório de Cliente</h4>

	</div>

	<div class="col-md-7 align-self-center text-right">

		<div class="d-flex justify-content-end align-items-center">

			<ol class="breadcrumb">

				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Relatório de Cliente</a></li>

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

				<h4 class="card-title">Data Export</h4>
				<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				<div class="table-responsive m-t-40">
					<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Nome</th>
								<th>CPF</th>
								<th>Telefone</th>
								<th>Celular</th>
								<th>E-mail</th>
								<th>CEP</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Nome</th>
								<th>CPF</th>
								<th>Telefone</th>
								<th>Celular</th>
								<th>E-mail</th>
								<th>CEP</th>
							</tr>
						</tfoot>
						<tbody>
							<?php foreach( $clientes as $row ){ ?>
								
								<tr>

									<td><?php trim( $row->nome ) ?></td>

								</tr>

							<?php } ?>
						</tbody>
					</table>

				</div>

			</div>

		</div>

	</div>

</div>