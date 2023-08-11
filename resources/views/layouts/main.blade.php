<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
<section>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/">PT. CITRA CAHAYA MANDIRI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Master Data
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/datapegawai">Data Pegawai</a></li>
              <li><a class="dropdown-item" href="/dataleveljabatan">Data Level Jabatan</a></li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/datagaji">Data Gaji</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Laporan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/laporangaji">Laporan Gaji</a></li>
            <li><a class="dropdown-item" href="/slipgaji">Slip Gaji</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>
</section>
<section>
  @yield('items')
</section>
  </body>
</html>