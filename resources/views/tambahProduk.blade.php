<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tambah Produk</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link Active Disabled" href="/tambahProduk">Add New</a>
                </li>
                </form>
        </div>
    </nav>
    <br />
    <div class="card-body">
        <div class="container">
            <form method="POST" action="produk/tambah">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk">
                </div>
                @if($errors->has('nama_produk'))
                <div class="text-danger">
                    {{ $errors->first('nama_produk')}}
                </div>
                @endif
                <div class="form-group">
                    <label for="exampleFormControlInput1">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                @if($errors->has('keterangan'))
                <div class="text-danger">
                    {{ $errors->first('keterangan')}}
                </div>
                @endif
                <div class="form-group">
                    <label for="exampleFormControlInput1">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="Harga Produk">
                </div>
                @if($errors->has('harga'))
                <div class="text-danger">
                    {{ $errors->first('harga')}}
                </div>
                @endif
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Produk</label>
                    <input type="text" name="jumlah" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah Produk">
                </div>
                @if($errors->has('jumlah'))
                <div class="text-danger">
                    {{ $errors->first('jumlah')}}
                </div>
                @endif

                <div class="form-group">
                    <a type="button" href="/" class="btn btn-danger"> Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>