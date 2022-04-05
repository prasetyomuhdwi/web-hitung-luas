<?php
require_once '../../helpers/file-storage.php';
require_once '../../helpers/calculate.php';

// mengolah data hasil import form
if (isset($_POST["submit"])) {

    // filename where to save
    $filename = '../../data/DataAll.txt';

    // fetch data from file
    $getData = getData($filename, "circle");

    // fetch the last index of array
    if (!is_null($getData)) {
        $lastRow = count($getData) - 1;
    }

    // determine id
    $id = (is_null($getData)) ? 1 : $getData[$lastRow]['id_circle'] + 1;

    // save the result of math calculate function
    $cal_result = circle($_POST["radius_circle"]);

    // array data to be stored in the file
    $data = [
        'id_triangle' => null,
        'id_square' => null,
        'id_circle' => $id,
        'student_name' => $_POST["student_name"],
        'base_triangle' => null,
        'height_triangle' => null,
        'side_square' =>  null,
        'radius_circle' => $_POST["radius_circle"],
        'result' => $cal_result,
        'datetime' => date("Y-m-d h:i:sa")
    ];

    // save data on file
    $result = save($filename, "circle", $data);

    // if the result process is successful
    // or equivalent to true or otherwise false
    // it will raise an alert and redirect user
    // to circle.php
    if ($result) {
        echo "<script type='text/javascript'>
                alert('Data berhasil disimpan...!');
                document.location.href = '../../views/circle.php';
            </script>";
    } else {
        echo "<script type='text/javascript'>
                alert('Data GAGAL disimpan...!');
                document.location.href = '../../views/forms/form_add_circle.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Perhitungan Luas Bangunan</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

</head>

<body>
    <?php include_once "../../components/navbar.php" ?>

    <div class="container py-4">

        <!-- Title website -->
        <div class="p-5 mb-3 bg-light rounded">
            <div class="container text-dark">
                <h1 class="display-6 fw-bolder ">Form Hitung Luas Lingkaran</h1>
                <p>Rumus Luas : <b>π x r²</b></p>
            </div>

            <div class="container">
                <div class="card p-4">
                    <form class="row g-3" action="" method="POST">


                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="nama" name="student_name"
                                placeholder="Ketik nama segitiga disini" required>
                        </div>

                        <div class="mb-3">
                            <label for="jari" class="form-label">Panjang jari jari</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" id="jari" name="radius_circle"
                                    placeholder="Ketik jari jari segitiga disini" required>
                                <span class="input-group-text" id="rp-addon1">cm</span>
                            </div>
                        </div>

                        <div class="mb-3 d-flex justify-content-end">
                            <a href="../circle.php" class="btn btn-secondary btn-lg mx-2" role="button">Kembali</a>

                            <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Hitung">
                        </div>


                    </form>
                </div>
            </div>

        </div>

        <script src="../../assets/js/bootstrap.min.js"></script>
</body>

</html>