@extends('layouts.admin')

@section('admin-main')
<div class="container-fluid mt-3">
    <h2>GameForm</h2>
    <div class="card mt-3 shadow">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class=" mb-3">
                    <label for="nama_game" class="form-label">Nama Game</label>
                    <input type="text" name="nama_game" id="nama_game" class="form-control" placeholder="masukan nama game" required autocomplete>
                </div>

                <div class="mb-3">
                    <label for="tgl_rilis" class="form-label">Tanggal Rilis </label>
                    <input type="date" name="tgl_rilis" id="tgl_rilis" class="form-control" required value="">
                    <div>

                        <div class="mb-3 ">
                            <label for="publisher" class="form-label">Publisher </label>
                            <select name="publisher" class="form-select" aria-label="Default select example" required>
                                <option value=""></option>
                            
                            </select>
                        </div>

                        <label for="" class="form-check-label">Genre </label>
                            <div class="form-check check">
                                {{-- @foreach ( $genre as $i )
                                    
                                @endforeach --}}
                                <input  class="form-check-input " name="genre[]" type="checkbox" value="" id="" >
                                <label class="form-check-label" for="">
                                    <br>
                                </label>
                            </div>
                        
                        <div class="mb-3">
                            <label for="desc_game" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="desc_game" id="desc_game" style="height: 100px" placeholder="masukan deskripsi" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="poster_game" class="">Poster</label>
                            <input type="file" class="form-control" name="poster_game" id="poster_game" required>
                        </div>

                        <button type="submit" name="submit" class="btn btn-sm text-white " style="background-color: #b88cf5;" onclick="checkout()">tambah data</button>
                        <a href="/data-game" class="ms-3"><button type="button" class="btn btn-sm btn-block text-white " style="background-color: #b88cf5;">Kembali</button>

                        <hr>
            </form>
        </div>
    </div>
</div>
    
@endsection