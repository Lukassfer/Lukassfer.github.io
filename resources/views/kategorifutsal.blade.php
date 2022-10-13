<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SC Duta Garden | Kategori</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="{{url('css/kategori.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="" alt="Logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kategori">Kategori</a>
            </li>
          </ul>
          <a class="btn btn-login" href="login" role="button">Masuk</a>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    {{-- Carousel   --}}
    <div class="carousel">
      <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/kategoribadmin.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/kategorifutsal.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/back.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    {{--  Akhir Carousel  --}}

    {{--  Jadwal Futsal  --}}
    <div class="jadwal-badmin">
      <div class="container-fluid" style="background-color: rgb(250, 230, 187)">
        <h1 class="text-center mt-4">Daftar Jadwal Futsal</h1>
        <div class="container tabel-jadwal">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Tgl Jadwal</th>
                <th scope="col">Nomor Lapangan</th>
                <th scope="col">Jam</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th>2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th>3</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>@fat</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    {{--  Akhir Jadwal Futsal  --}}

    <!-- Footer -->
    <div class="container-fluid footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Sport Center</h2>
            <p>Phone 021-5400000</p>
            <p>Kota Tangerang, Banten</p>
            <p>Since 2000</p>
          </div>
          <div class="col-lg-4 offset-lg-2">
            <h3>Tempat Lokasi</h3>
            <div class="maps">
              <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe
                    width="309"
                    height="160"
                    id="gmap_canvas"
                    src="https://maps.google.com/maps?q=duta%20garden%20kota%20tangerang&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                  ></iframe
                  ><a href="https://123movies-to.org"></a><br /><style>
                    .mapouter {
                      position: relative;
                      text-align: right;
                      height: 160px;
                      width: 309px;
                    }</style
                  ><a href="https://www.embedgooglemap.net">embedgooglemap.net</a
                  ><style>
                    .gmap_canvas {
                      overflow: hidden;
                      background: none !important;
                      height: 160px;
                      width: 309px;
                    }
                  </style>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="border border-top">Copyright Sport Center Duta Garden 2022</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Footer -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
