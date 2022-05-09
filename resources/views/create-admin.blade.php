@extends('layouts/admin')

@section('admin-main')
<div class="container-fluid mt-3">
	<div class="row">
		<h2>Daftarkan Admin</h2>
	</div>
	<div class="row mt-3">
		<div class="col-8">
			<div class="card shadow">
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-floating mb-3">

							<input type="text" name="username" id="username" class="form-control" required autocomplete>
							<label for="username" class="form-label">Username</label>


						</div>
						<div class="form-floating mb-3">

							<input type="password" name="password" id="password" class="form-control" required>
							<label for="password" class="form-label">Password</label>


						</div>

						<div class="form-floating mb-3">

							<input type="password" name="password2" id="password2" class="form-control" required>
							<label for="password2" class="form-label">Konfirmasi Password</label>

						</div>
						<div class="row justify-content-between">
							<div class="col-1 ">
								<button type="submit" class="btn text-white btn-block " name="register" style="background-color: #b88cf5;">Register</button>
							</div>
							<div class="col-1 me-3">
								<a href="data_admin.php"><button type="button" class="btn text-white btn-block" name="kembali" style="background-color: #b88cf5;">Kembali</button></a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card shadow">
				<div class="card-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Username admin</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td></td>
									<td></td>
								</tr>
						</tbody>
					</table>


				</div>
			</div>
		</div>

	</div>
</div>
	
@endsection
