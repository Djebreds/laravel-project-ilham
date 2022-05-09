@extends('layouts.admin')

@section('admin-main')


    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col">
                <h2>Ubah Data Game</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mt-3 shadow">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_game" value="">
                            <input type="hidden" name="poster_lama" value="">

                            <div class=" mb-3">
                                <label for="nama_game" class="form-label">Nama Game</label>
                                <input type="text" name="nama_game" id="nama_game" class="form-control" required placeholder="masukan nama baru" value="">
                            </div>

                            <div class="mb-3">
                                <label for="tgl_rilis" class="form-label">Tanggal Rilis </label>
                                <input type="date" name="tgl_rilis" id="tgl_rilis" class="form-control" required value="">
                                <div>

                                    <div class="mb-3">
                                        <label for="publisher" class="form-label">Publisher </label>
                                        <select name="publisher" class="form-select" aria-label="Default select example" required>
                                            <option value="""></option>
                                        </select>
                                    </div>


                                    <label for="" class="form-check-label">Genre </label>
                                        <div class="form-check">
                                            <input class="form-check-input" name="genre[]" type="checkbox" value="" id="" >
                                            <label class="form-check-label" for="">
                                                 <br>
                                            </label>
                                        </div>
                                    


                                    <div class="mb-3">
                                        <label for="desc_game" class="form-label">Deskripsi</label><br>
                                        <textarea class="form-control" name="desc_game" id="desc_game" style="height: 100px" required placeholder="masukan deskripsi baru"></textarea><br>

                                    </div>

                                    <div class="mb-3">
                                        <div class="row align-items-center">
                                            
                                            <div class="col-2">
                                                <label for="poster_game" class="form-label">Poster</label>
                                                <img src="img\" width="150">        
                                            </div>
                                            <div class="col-10 ">
                                                <input type="file" class="form-control " name="poster_game" id="poster_game" >                               
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="submit" class="btn text-white btn-sm" style="background-color: #b88cf5;">Ubah Data</button>
                                    <a href="/data-game" class="btn text-white btn-sm" style="background-color: #b88cf5;"> Kembali</a>
                                    <hr>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

