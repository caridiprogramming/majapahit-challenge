


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Cek ToKoh</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ route('admin.transaksi')}}">Transaksi</a>
      <a class="nav-item nav-link active" href="{{ route('admin.user')}}">Customer</a>
      <a class="nav-item nav-link active" href="{{ route('admin.barang')}}">Barang</a>
      <a class="nav-item nav-link active" href="{{ route('admin.hadiah')}}">Hadiah</a>
      <a class="nav-item nav-link active " style="color:red" href="logout">Log Out</a>
      
    </div>
  </div>
</nav>


