<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="container mt-5">
    <h2>Form Review</h2>
    <form id="formReview502">
        <div class="form-group">
            <label for="nama502">Nama:</label>
            <input type="text" class="form-control" id="nama502" name="nama502">
        </div>
        <div class="form-group">
            <label for="review502">Review Singkat:</label>
            <input type="text" class="form-control" id="review502" name="review502">
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
    <hr>
    <h2>Review</h2>
    <input id="searchInput502" class="form-control" type="text" placeholder="Cari">
    <table id="tabelReview502" class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Review Singkat</th>
            </tr>
            <tr>
                <th>santi</th>
                <th>sangat berkualitas</th>
            </tr>
            <tr>
                <th>rizky</th>
                <th>belanja dimores sangat mantap</th>
            </tr>
        </thead>
        <tbody>
            <!-- Output dari PHP akan ditambahkan di sini -->
        </tbody>
    </table>
</div>

<div class="container-lg">
<section style="color: #000; background-color: #f3f2f2;">
  <div class="container py-5 my-3">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h3 class="fw-bold mb-4">Apa yang mereka katakan tentang kami</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
      Pelanggan kami memberikan pengalaman penuh kilau dengan koleksi perhiasan yang memikat. Inilah beberapa testimoni dari mereka yang telah merasakan keindahan abadi Mores Diamond
        </p>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="img/1.jpg"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold text-dark">Elvira S</h5>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>Berlian dari Mores Diamond sungguh tak tertandingi. Saya memilih cincin tunangan dari koleksi terbaru mereka dan hasilnya melebihi ekspektasi! 
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="img/2a.jpg"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold text-dark">Michael</h5>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>Mores Diamond menyajikan desain yang sangat modern dan menarik. Saya suka betapa mereka berhasil menggabungkan keindahan klasik dengan sentuhan kontemporer.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="img/3.jpg"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold text-dark">Jonny Putra</h5>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>Tim desainer mereka sangat sabar mendengarkan keinginan saya dan menghasilkan cincin yang benar-benar unik. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<script src="jquery-3.7.1.min.js"></script>
  <script src="uas502.js"></script>
</body>
</html>