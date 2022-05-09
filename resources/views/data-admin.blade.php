@extends('layouts/admin')

@section('admin-main')
<div class="container-fluid  mt-3">
	<div class="row">
		<h2>Data Admin</h2>
	</div>
	<div class="card mt-3 shadow">
		<div class="card-body">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md">
						<a href="/register-admin"><button class="btn text-white btn-sm rounded" style="background-color: #b88cf5;" type="button" data-toggle="tooltip" data-placement="top" title="Tambah Data">Tambah Data</button></a>
					</div>
				</div>
			</div>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Username admin</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td></td>
							<td></td>
							<td>
								<a href="/delete-admin?id_admin="><button class="btn btn-danger btn-sm rounded" type="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Hapus Data Admin?');">Hapus</button></a>
							</td>
						</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
	
@endsection
