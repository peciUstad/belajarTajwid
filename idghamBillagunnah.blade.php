<html>

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 text-light">Ini Navbar</a>
            <form class="d-flex" action="/cari" method="get" role="search">
                <input class="form-control me-2 mt-3" type="search" placeholder="Mau cari apaaaa?" aria-label="Search" name="query">
                <button class="btn btn-success mt-3" type="submit">Cari</button>
            </form>
        </div>
    </nav>

    <div class="row">
        <div class="col"></div>
        <div class="col-5 mt-5">
            <div class="tes border border-primary rounded-5 mt-5 p-4">
                <h1 class="text-center">Tambah Data Pegawe</h1>
                <form method="post" action="/tambah">
                    @csrf
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Posisi</label>
                        <input type="text" class="form-control" name="posisi" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Gaji</label>
                        <input type="text" class="form-control" name="gaji">
                    </div>
                    <div class="mb-3">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div class="col-5 mt-5">
            <div class="tes border border-primary rounded-5 p-4 mt-5">
                <h1 class="text-center">Data Pegawe</h1>
                <table class="table mt-4">
                    <tr>
                        <td>Nama</td>
                        <td>Posisi</td>
                        <td>Gaji</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($data as $dataPegawe)
                    <tr>
                        <td>{{$dataPegawe -> name}}</td>
                        <td>{{$dataPegawe -> posisi}}</td>
                        <td>{{$dataPegawe -> gaji}}</td>
                        <td>
                            <a href="/hapus/{{$dataPegawe -> id}}"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div class="col"></div>
    </div>
    <footer class="text-center bg-dark text-light fixed-bottom">
        <div class="text-center text-light p-3">
            © 2023 Copyright
        </div>
    </footer>
</body>

</html>
