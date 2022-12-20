<?php
$linksCss2 = [
	base_url . '/assets/plugins/dataTables/datatables.bootstrap5.css',
	base_url . '/assets/plugins/dataTables/botones.datatable.css',
	base_url . '/assets/css/styles/atom-one-dark.min.css',
];

$linksScript2 = [
	base_url . '/assets/js/highlight.min.js',
	base_url . '/assets/vendor/prismOkaidia.js',
	base_url . '/assets/plugins/dataTables/pdfmake.min.js',
	base_url . '/assets/plugins/dataTables/vfs_fonts.js',
	base_url . '/assets/plugins/dataTables/datatable.bootstrap5.js',
	base_url . '/assets/js/datatable.js',
	base_url . '/assets/js/vercodigo.js',
];
?>

<?php include ext('layoutdash.head') ?>
<div class="pcoded-content">
	<!-- [ breadcrumb ] start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col d-flex flex-column flex-md-row justify-content-between align-items-center">
					<div class="page-header-title">
						<h5 class="m-b-10">Panel de códigos</h5>
					</div>
					<div class="">
						<a href="<?= route('codigos.create') ?>" class="btn btn-primary btn-sm">Agregar</a>
						<input type="hidden" id="listaUrl" data-link="<?= route('codigos.lista') ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ breadcrumb ] end -->

	<!-- [ Main Content ] start -->
	<div class="row">
		<div class="col-xl-12">
			<div class="card">
				<div class="card-header p-2">
					<h5>Lista de Clientes</h5>
				</div>
				<div class="card-body  p-3">
					<table class="table table-striped table-sm dt-responsive" id="datatableAll">
						<thead>
							<tr>
								<th>#</th>
								<th>Titulo</th>
								<th>Descripción</th>
								<th>Lenguaje</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody class="table-group-divider">
							<?php $i = 1;
							foreach ($codigos as $cod) : ?>
								<tr>
									<th scope="row"><?= $i ?></th>
									<td><?= $cod->titulo  ?></td>
									<td class="text-wrap"><?= $cod->descripcion ?></td>
									<td><?= $cod->name ?></td>

									<td>
										<a href="<?= route('codigos.edit') . '?id=' . $cod->id ?>" class="btn btn-outline-warning btn-sm"><i class="bi bi-pencil"></i></a>

										<button data-link="<?= route('codigos.show')  . '?id=' . $cod->id ?>" class="btn btn-outline-success btn-sm mirarCodigo"><i class="bi bi-eye"></i></button>

										<a href=<?= route('codigos.destroy') . '?id=' . $cod->id ?>" class="btn btn-outline-danger btn-sm deleteItem"><i class="bi bi-trash3"></i></a>
									</td>
								</tr>
							<?php $i++;
							endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- [ Main Content ] end -->
</div>

<!-- Modal -->
<div class="modal fade modal-xl" id="codigoModal" tabindex="-1" aria-labelledby="codigoModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header p-3">
				<h1 class="modal-title fs-5" id="codigoModalLabel">Modal title</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-1 ">
				<div id="codigoLenguaje"></div>
			</div>
			<div class="modal-footer p-1">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
			</div>
		</div>
	</div>
</div>
<?php include ext('layoutdash.footer') ?>