@extends('layouts.admin')

@section('admin-main')
    <div class="container-fluid mt-3">


        <div class="row">
            <div class="col">
                <h2>Data Game</h2>
            </div>
        </div>
        <div class="card mt-3 shadow">
            <div class="card-body ">
                <form action="" method="post">
                    <div class="container-fluid p-1">

                        <div class="row">
                            <div class="col-md-6">
                                <a href="/create-game"><button type="button" class="btn btn-sm"
                                        style="background-color: #b88cf5; color: white;">Tambahkan data game</button>
                                </a>
                            </div>


                            <div class="col-md-3 offset-3">
                                <div class="input-group">
                                    <input type="text" class="form-control " name="keyword" placeholder="cari nama game"
                                        value="" autocomplete>
                                    <button type="submit" name="cari" class="btn btn-block"
                                        style="background-color: #b88cf5; color: white;">cari</button><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="btn">
                                              <a href="read_game.php" class="btn mx-6 btn-primary">tampilkan semua data</a>
                                             </div> -->

                </form>
            </div>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>Nama Game</th>
                        <th>Tanggal Rilis</th>
                        <th>Publisher</th>
                        <th>Genre</th>
                        <!-- <th>Deskripsi</th> -->
                        <th>Aksi</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($game as $row)
                        <tr>
                            <td>{{ $row->nama_game }}</td>
                            <td>{{ date('d-M-Y', strtotime($row->tgl_rilis)) }}</td>
                            <td>{{ $row->nama_publisher }}</td>
                            <td>{{ $row->genre_game }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="/detail-game-admin/">Detail</a>
                                <a class="btn btn-success btn-sm" href="/update-game?id_game=">Ubah</a>
                                <a class="btn btn-danger btn-sm" href="delete_game.php?id_game="
                                    onclick="return confirm('Hapus Data Game?');">Hapus</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
