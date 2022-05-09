@extends('layouts/admin')

@section('admin-main')
<div class="container-fluid  mt-3">
    <div class="row">
        <h2>Ubah Data Publisher</h2>
    </div>
    <div class="row mt-3">
        <div class="col-8">
            <div class="card shadow">
                <div class="card-body">
                    <form action="" method="post">
                        <div>
                            <input type="hidden" name="id_publisher" id="id_publisher" value="">
                        </div>
                        <div>
                            <label for="nama_publisher" class="form-label">Nama Publisher</label>
                            <input type="text" name="nama_publisher" id="nama_publisher" class="form-control mb-3" placeholder="masukan nama publisher" required autocomplete="off" value="">
                        </div>
                        <div>
                            <label for="nama_pendiri" class="form-label">Nama Pendiri</label>
                            <input type="text" name="nama_pendiri" id="nama_pendiri" class="form-control mb-3" placeholder="masukan nama pendiri" autocomplete="off" value="">
                        </div>
                        <div>
                            <label for="tgl_didirikan" class="form-label">Tanggal Didirikan</label>
                            <input type="date" name="tgl_didirikan" id="tgl_didirikan" class="form-control mb-3" autocomplete value="">
                        </div>
                        <div>
                            <label for="kantor_pusat" class="form-label">Kantor Pusat</label>
                            <input type="text" name="kantor_pusat" id="kantor_pusat" class="form-control mb-3" placeholder="masukan alamat kantor pusat" autocomplete="off" value="">
                        </div>
                        <div class="">
                            <button type="submit" name="submit" id="submit" class="btn btn-sm btn-block text-white " style="background-color: #b88cf5;">submit</button>
                            <a href="/data-publisher" class="ms-3"><button type="button" class="btn btn-sm btn-block text-white " style="background-color: #b88cf5;">Kembali</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Publisher</th>
                                <th>Pendiri Perusahaan</th>
                                <th>Tanggal Didirikan</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
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
