@extends('layouts.admin')

@section('admin-main')
<div class="container-fluid mt-3">
	<div class="row">
		<h2>Data Publisher</h2>
	</div>
	<div class="row">
		<div class="col">
			<div class="card mt-3 shadow">
				<div class="container-fluid mt-3">
					<div class="row">
						<div class="col">
							<a href="/create-publisher">
								<button type="button" class="btn btn-sm text-white btn-block" style="background-color: #b88cf5;">Tambah Data</button>
							</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-hover ">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Publisher</th>
								<th>Pendiri Perusahaan</th>
								<th>Tanggal Didirikan</th>
								<th>Kantor Pusat</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>
										<a href="/update-publisher" class="btn btn-success btn-sm rounded" type="button" data-toggle="tooltip" data-placement="top" title="Ubah data publisher">Ubah</a>
										<a href="/delete-publisher?id_publisher=" class="btn btn-danger btn-sm rounded" type="button" data-toggle="tooltip" data-placement="top" title="Hapus data publisher" onclick="return confirm('Hapus Data Publisher?');">Hapus</a>

									</td>
								</tr>
						</tbody>
					</table>

				</div>
			</div>

		</div>
	</div>
</div>
	
@endsection