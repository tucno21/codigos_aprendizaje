<?php include ext('layoutdash.head') ?>
<div class="pcoded-content">
	<!-- [ breadcrumb ] start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col d-flex flex-column flex-md-row justify-content-between align-items-center">
					<div class="page-header-title">
						<h5 class="m-b-10">Panel de lenguajes</h5>
					</div>
					<div class="">
						<a href="<?= route('lenguajes.create') ?>" class="btn btn-primary btn-sm">Agregar</a>
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
				<div class="card-header">
					<h5>Lista de lenguajes</h5>
				</div>
				<div class="card-body table-border-style">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">lenguaje</th>
									<th scope="col">Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($lenguajes as $r) : ?>
									<tr>
										<th scope="row"><?= $r->id ?></th>
										<td><?= $r->name ?></td>

										<td><a href="<?= route('lenguajes.edit') . '?id=' . $r->id ?>" class="btn btn-outline-warning btn-sm"><i class="bi bi-pencil"></i></a>
											<a href=<?= route('lenguajes.destroy') . '?id=' . $r->id ?>" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash3"></i></a>
										</td>

									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ Main Content ] end -->
</div>
<?php include ext('layoutdash.footer') ?>