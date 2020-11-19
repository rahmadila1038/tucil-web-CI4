<?= $this->extend('layout/app'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 text-center">
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="/login">Sign up</a>
      </div>
    </div>
  </header>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Rahmadila's <br>Beauty Blog</h1>
      <p class="lead my-3">Hi girls !!! welcome to my blog</p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Sunscreen Skin Aqua SPF 50++</h3>
          <div class="mb-1 text-muted">18 Nov 2020</div>
          <p class="card-text mb-auto">Skin Aqua UV Moisture Milk SPF 50 PA+++ diklaim dapat memberikan perlindungan 51x lebih lama terhadap 
            sinar matahari yang menyebabkan kulit
            <a href="/pages/detailProduk/skinAqua" class="stretched-link">...Continue reading</a> </p>
        </div>
        <div class="col-auto d-none d-lg-block">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">lip balm wardah </h3>
          <div class="mb-1 text-muted">19 Nov 2020</div>
          <p class="mb-auto">lip balm bagi sebagian orang merupakan kosmetik pertama yang menyentuh bibirnya. 
            Teksturnya ringan memberikan hasil warna yang na<a href="/pages/detailProduk/lipBalm" class="stretched-link">...Continue reading</a>.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Micellar Water Nivea </h3>
          <div class="mb-1 text-muted">19 Nov 2020</div>
          <p class="mb-auto">Nivea, baru-baru ini mengeluarkan produk  micellar water terbarunya, yaitu MicellAIR. Nivea MicellAIR ini memiliki dua jenis, 
            yaitu untuk kulit normal to oily skin (warna
            <a href="/pages/detailProduk/MWNivea" class="stretched-link">...Continue reading</a> </p>
        </div>
        <div class="col-auto d-none d-lg-block">
        </div>
      </div>
    </div>
  </div>
  </div>
</div>



<?= $this->endSection(); ?>