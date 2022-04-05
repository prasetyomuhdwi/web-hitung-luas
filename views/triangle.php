<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Perhitungan Luas Bangunan</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

</head>

<body>
    <?php include_once "../components/navbar.php" ?>

    <div class="container py-4">

        <!-- Title website -->
        <div class="p-5 mb-3 bg-light rounded">
            <div class="container text-dark">
                <h1 class="display-6 fw-bolder text-uppercase">Segitiga</h1>
                <p>List data segitiga yang sudah dilakukan</p>
            </div>

            <div class="container">
                <a href="./forms/form_add_triangle.php" class="btn btn-primary float-end" role="button">Perhitungan
                    Baru</a>
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Alas (A)</th>
                            <th scope="col">Tinggi (T)</th>
                            <th scope="col">Hasil</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='text-center'>
                            <td colspan='6' class='p-4 bg-light text-center 
                            text-danger fw-bold'>Data Tidak Ditemukan</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>