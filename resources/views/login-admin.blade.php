@extends('layouts.normal-user')

@section('main')
    <div class="container">
        <div class="row justify_content_center align-self-center">
            <div class="col">
                <div class="card justify_content_center mx-auto my-5 " style="width: 50rem">

                    <div class="card-header bg-danger text-white">
                        <h2 align="center">Login Admin GameForm</h2>
                    </div>

                    <form action="" method="post">
                        <div class="card-body">
                            <div class="container">
                                <div class="row my-2">
                                    <div class="col">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="masukan username" required>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="masukan password" required>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-md-10 ">
                                        <button type="submit" name="login" class="btn btn-danger btn-block ">Login</button>
                                    </div>
                                    <div class="col-md-2 ">
                                        <a href="index.php" class="btn btn-danger mx-auto">Kembali</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
