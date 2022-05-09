@extends('layouts.admin')

@section('admin-main')

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col">
                    <h2>Detail Game</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <div>
                                            <img src="img\" alt="" width="150">
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <span style="color: #c499ff;">Judul Game : </span>{{ $gameData['gameName'] }} <br>
                                        <span style="color: #c499ff;">Genre : </span>{{ $gameData['genre'] }} <br>
                                        <span style="color: #c499ff;">Tanggal Rilis : </span>{{ $gameData['releaseDate'] }} <br>
                                        <span style="color: #c499ff;">Publisher : </span>{{ $gameData['publisher'] }} <br>
                                        <span style="color: #c499ff;">Deskripsi : </span> <br>
                                        <p></p>

                                    </div>
                                </div>
                                <div class="row ">
                                    <!-- justify-content-between -->
                                    <div class="col ">
                                        <a href="/data-game" class="btn text-white btn-sm" style="background-color: #c499ff; ">Kembali</a>
                                        <a href="/update-game?id_game=" class="btn text-white btn-sm" style="background-color: #c499ff;">Ubah</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Nama Game</th>
                                    <th>Publisher</th>

                                </tr>
                            </thead>

                            <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a class="btn text-white btn-sm" style="background-color: #c499ff;" href="detail-game-admin?id_game=">Detail</a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
@endsection