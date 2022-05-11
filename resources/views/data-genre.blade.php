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
                            <form class="" action="/admin-dashboard/data-genre/store" method="post">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="tambah_genre"
                                        placeholder="tambah genre baru" autocomplete="off" required>
                                    <button type="submit" name="btn_tambah" class="btn btn-block btn-sm"
                                        style="background-color: #b88cf5; color: white;">tambah</button>
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
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($genre as $row)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $row->nama_genre }}</td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="/delete-genre.php?id_genre="
                                        onclick="return confirm('Hapus Data Genre?');">Hapus</a>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
