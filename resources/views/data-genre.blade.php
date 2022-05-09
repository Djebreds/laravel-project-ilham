@extends('layouts.admin')

@section('admin-main')
<div class="container-fluid mt-3">
	<div class="row">
		<div class="col">
			<h2>Data Genre</h2>
		</div>
	</div>
	<div class="card mt-3 shadow">
		<div class="card-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-4">
						<form class="" action="" method="post">
							<div class="input-group">
								<input type="text" class="form-control" name="tambah_genre" placeholder="tambah genre baru" autocomplete="off" required>
								<button type="submit" name="btn_tambah" class="btn btn-block btn-sm" style="background-color: #b88cf5; color: white;">tambah</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php 



			if (!empty($_GET['message'])) { ?>

				<div class="alert alert-success" role="alert">
					  Berhasil Menambahkan Data
				</div>
				 
			<?php } ?>
			<table class="table table-hover ">

				<thead>
					<tr>
						<th>No</th>
						<th>Genre</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td></td>
							<td></td>
							<!--<td> <button class="btn btn-danger btn-sm rounded" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i>Hapus</button>-->
							<td>
								<a class="btn btn-danger btn-sm" href="/delete-genre.php?id_genre=" onclick="return confirm('Hapus Data Genre?');">Hapus</a>

							</td>
						</tr>
				</tbody>
			</table>

		</div>
	</div>
</div>
	
@endsection
