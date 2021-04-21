<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Web Simulasi Kredit Motor</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="form-group row">
                <h2>Simulasi Program Kredit Motor</h2>
            </div>
        </div>
        <div class="content">
            <form action="fungsi.php" method="post">
                <fieldset>
                    <div class="form-group row">
                        <label for="hargaMotor">Harga Motor : </label>
                        <input type="number" id="hargaMotor" name="hargaMotor" class="form-control">
                    </div>
                    <div class="from-group row">
                        <label for="uangMuka">Uang Muka :</label>
                        <input type="number" id="uangMuka" name="uangMuka" class="form-control">
                    </div>
                    <br>
                    <div class="from-group row">
                        <label for="lamaAngsuran">Lama Ansuran(tahun)</label>
                        <select name="lamaAngsuran" id="lamaAngsuran" class="form-control">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                        </select>
                    </div>
                    <br>
                    <div class="from-group row">
                        <label for="bunga">Bunga(%)</label>
                        <select name="bunga" id="bunga" class="form-control">
                            <option value=5>5%</option>
                            <option value=6>6%</option>
                            <option value=7>7%</option>
                            <option value=8>8%</option>
                            <option value=9>9%</option>
                            <option value=10>10%</option>
                        </select>
                    </div>
                    <br>
                    <div class="from-group row">
                        <button id="restart" type="reset" class="btn btn-danger">restart</button>
                        <button id="submit" type="submit" class="btn btn-success">submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <br>
        <div class="form-group row">
            <p>Made by : Bima Afrizal Malna - V3420018</p>
        </div>
    </div>
</body>

</html>