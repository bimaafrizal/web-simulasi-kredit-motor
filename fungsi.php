<?php
//deklarasi
$Harga = $_POST['hargaMotor'];
$uangMuka = $_POST['uangMuka'];
$lamaAngsuran = $_POST['lamaAngsuran'];
$bunga = $_POST['bunga'];
$kredit = [];

//perhitungan
$bulan = 0;
$bunga = ($bunga / 100) / 12;
$TotalAngsuran = $Harga - $uangMuka;
$totalbunga = $bunga * $lamaAngsuran;
$bungatahun = $TotalAngsuran * $totalbunga;
$Totalangsuranbunga = $TotalAngsuran + $bungatahun;
$tanggunganBunga = $bunga * $TotalAngsuran;
$lamaAngsuran = $lamaAngsuran * 12;
$cicilan = $TotalAngsuran / $lamaAngsuran;

//menyimpan data di array
$kredit = [
    "bunga"         => $tanggunganBunga,
    "jumlahKredit"  => cicilanPerBulan(
        $cicilan,
        $tanggunganBunga
    )
];

//fungsi string
function rupiah($uang)
{
    $format = "Rp" . number_format($uang);
    return $format;
}

function cicilanPerbulan($tanggungan, $bunga)
{
    $jadi = $tanggungan + $bunga;
    return $jadi;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Kredit Anda</title>
</head>

<body>

    <div class="header">
        <div class="form-group">
            <h2>Kredit Anda:</h2>
        </div>
    </div>
    <div class="container">
        <table border="1" class="table-condensed">
            <thead>
                <tr>
                    <th scope="col">Bulan</th>
                    <th scope="col">Bunga</th>
                    <th scope="col">Jumlah yang Dibayarkan</th>
                    <th scope="col">Jumlah Tanggungan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < $lamaAngsuran; $i++) {
                    $bulan = $bulan + 1;
                ?>
                    <tr>
                        <th scope="row"><?php echo $bulan ?></th>
                        <th><?php echo rupiah(round($kredit["bunga"])) ?></th>
                        <th><?php echo rupiah($kredit["jumlahKredit"]) ?></th>
                        <th><?php echo rupiah($Totalangsuranbunga) ?> </th>

                    </tr>
                <?php
                    $Totalangsuranbunga = $Totalangsuranbunga - cicilanPerBulan(
                        $cicilan,
                        $tanggunganBunga
                    );
                }
                ?>
            </tbody>
        </table>
        <br>
        <div class="form-group">
            <button> <a href="index.php" class="btn btn-success"> Kembali</a> </button>
        </div>
    </div>
    <div class="footer">
        <div class="form-group">
            <p>Made by : Bima Afrizal Malna - V3420018</p>
        </div>
    </div>
</body>

</html>