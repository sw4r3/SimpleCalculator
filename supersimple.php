<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Kalkulatorrr</title>
</head>

<body>
    <div class="container text-center " style="margin-top:100px;">

        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8  display-4">
                <p>
                    KALKULATOR
                </p>
            </div>
            <div class="col-2">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">
                <form action="simplekal.php" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" value="0" name="angka1" placeholder="Angka 1">
                    </div>

                    <div class="form-group">
                        <select name="operasi" class="form-control" id="exampleFormControlSelect1">
                            <option value="0">Pilih operasi</option>
                            <option value="+">Penjumlahan</option>
                            <option value="-">Pengurangan</option>
                            <option value="/">Pembagian</option>
                            <option value="*">Perkalian</option>
                        </select>
                    </div>
                    <div class="form-group">

                        <input class="form-control" name="angka2" value="0"type="text" placeholder="Angka 2">
                    </div>
                    <div class="form-group">

                        <button type="submit" name="submit" class="btn btn-info btn-block">Hitung</button>
                    </div>




                </form>
            </div>
            <div class="col-2">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8 display-5">
            <p>
            <?php
                        if(isset($_POST['submit'])){
                            if($_POST['angka1']==0 && $_POST['angka2']==0){
                                echo "Anda harus mengetik angka terlebih dahulu!";
                            }else{
                                $satu = $_POST['angka1'];
                                $dua = $_POST['angka2'];
                                $opera = $_POST['operasi'];
                                if($opera == "0"){
                                    echo "Anda harus memasukan operasi dulu!";
                                }else if($opera == "+"){
                                    $hasil = $satu + $dua;
                                    echo "Hasilnya :" . " " . $hasil;
                                }else if($opera == "-"){
                                    $hasil = $satu - $dua;
                                    echo "Hasilnya :" . " " . $hasil;
                                }else if($opera == "*"){
                                    $hasil = $satu * $dua;
                                    echo "Hasilnya :" . " " . $hasil;
                                }else if($opera == "/"){
                                    $hasil = $satu / $dua;
                                    echo "Hasilnya :" . " " . $hasil;
                                }
                            }

                        }
                    ?>
            </p>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>