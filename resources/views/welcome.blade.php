<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

  <title>GameForm</title>
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="">GameForm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="btn btn-primary me-2" href="/admin-dashboard">Dashboard Admin</a>
            <a class="btn btn-danger" href="logout.php">Logout</a>
            <a class="navbar-brand text-danger" href="login.php">Login Admin</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhhir navbar -->

  <!-- hheader web -->
  <div class="container-fluid py-5 mb-4" style="background-color: #c499ff;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center text-white">GameForm</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-6 text-end text-white">
          GameForm merupakan database game yang memuat informasi dari berbagai game. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur fugiat debitis voluptate a hic molestias aliquam. Mollitia, sequi.?
        </div>

        <div class="col-6 text-white">
          Ketahui informasi lebih dalam mengenai game favoritmu. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, tempora veritatis excepturi inventore, sapiente, vitae repellat harum ullam ea voluptas eum!
        </div>
      </div>
    </div>
  </div>
  <!-- akhhir hheader -->

  <div id="game-list-carousel" class="carousel slide mx-2" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col">
            <img src="image/eldenring1.png" class="d-block w-100" alt="...">
          </div>
          <div class="col">
            <img src="image/pokemonarceus.png" class="d-block w-100" alt="...">
          </div>
          <div class="col">
            <img src="image/hfw.png" class="d-block w-100" alt="...">
          </div>
          <div class="col">
            <img src="image/uncharted.png" class="d-block w-100" alt="...">
          </div>
          <div class="col">
            <img src="image/sifu.png" class="d-block w-100" alt="...">
          </div>

        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col">
            <img src="image/godofwar.png" class="d-block w-100" alt="...">
          </div>
          <div class="col">
            <img src="image/persona5.png" class="d-block w-100" alt="...">
          </div>
          <div class="col">
            <img src="image/scarletnexus.png" class="d-block w-100" alt="...">
          </div>
          <div class="col">
            <img src="image/ittakestwo.png" class="d-block w-100" alt="...">
          </div>
          <div class="col">
            <img src="image/ghostwire.png" class="d-block w-100" alt="...">
          </div>

        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#game-list-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#game-list-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <!-- body -->
  <div class="container-fluid">
    <div class="container my-5">
      <div class="row">
        <div class="col-7">
          <div class="">
            <p style="text-decoration:none; color : white; background-color: #c499ff; border-radius: 30px; text-align: center;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, at dicta!</p>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nama Game</th>
                <th>Tanggal Rilis</th>
                <th>Publisher</th>
                <th>Genre</th>
                <th></th>

              </tr>
            </thead>

            <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>

                  <td><a href="detail_game.php?id_game=" style="color: #c499ff;">Detail</a></td>
                </tr>
            </tbody>
          </table>

        </div>

        <div class="col-4 offset-1">
          <!-- cooursel on sale -->
          <div class="row">
            <div id="side-table-carousel" class="carousel slide " data-bs-ride="carousel" data-interval="10000">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href="https://store.steampowered.com/" title="Ke Steam">
                    <img src="image/steam-logo.png" class="d-block mw-100 mx-auto" alt="..." style="height: 300px;">
                  </a>
                </div>
                <div class="carousel-item" title="Ke Epic Games Store">
                  <a href="https://store.epicgames.com/">
                    <img src="image/epic-games.png" class="d-block mw-100 mx-auto" alt="..." style="height: 300px;">
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="https://www.gog.com/" title="Ke GOG.com">
                    <img src="image/gog-logo.png" class="d-block mw-100 mx-auto" alt="..." style="height: 300px;">
                  </a>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#side-table-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#side-table-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <span class="border"></span>
          </div>
          <!-- end cooursel recenly added -->




          <div class="container mt-3">
            <div class="col">
              <div class="row">
                <a href="https://store.steampowered.com/"><img src="image/steam-sale.jpg" alt="" width="100%"></a>
              </div>
              <div class="row">
                <a href="https://store.epicgames.com/"><img class="mt-3" src="image/Epic-Games-Store-Holiday-Sale-2020.jpg" alt="" width="100%"></a>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- akhhir body -->

  <div class="container">
    <div class="row">
      <div class="col-4 ">
      </div>
    </div>

  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>