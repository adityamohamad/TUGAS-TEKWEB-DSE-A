<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
footer {
    position: absolute;
    bottom: 0;
    width: 100%;
}
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">TEKWEB DSE A</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/tugas1/Contoh/index#">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/tugas1/Contoh/porto1">Rifqi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/tugas1/Contoh/porto2">Ryad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Aditya</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-sm">
        <table class="table">
            <thead>
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <!-- tambahkan kolom lainnya -->
                </tr>
            </thead>
            <tbody>

                <?php foreach ($siswa as $mhs) :  ?>

                <tr>
                    <td><?php echo $mhs['nim']; ?></td>
                    <td><?php echo $mhs['nama']; ?></td>
                    <td><?php echo $mhs['alamat']; ?></td>
                </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>

    <footer position="absolute" bottom="0" class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Belajar menggunakan CI</h5>

                    <p>
                        ini adalah halaman tampil data. yang dimana akan menampilkan beberapa data anggota kelompok ini
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Nama anggota kelompok</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-dark">Aditya MG 3411201006</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Rifqi Karunia 3411201008</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Ryad Helmi F 341120100</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-dark">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Link 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 YourWebsite.com
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>