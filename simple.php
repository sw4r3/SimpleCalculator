<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">

  <style>
    body {
      background-color: black;
      background-image: url(img/rb.jpg);
    }
  </style>

  <title>KALKULATOR</title>

</head>

<body>
  <div class="container text-center">
    <div class="row">
      <div class="col-4">
      </div>
      <div class="col-4">

        <div class="container" style="margin-top:170px">

          <div class="row">
            <div class="col-sm-12  bg-dark text-light text-right display-4">
              <p>
                <?php
              session_start();
              if(isset($_POST['angka'])){
                $lah =  $_POST['angka'];
                if(!empty($_SESSION['bilangan'])){
                  $_SESSION['bilangan'] =  $_SESSION['bilangan'] . $lah;
                  echo $_SESSION['bilangan'];
                }else{
                  $_SESSION['bilangan']=0;
                  $_SESSION['bilangan'] =  $_SESSION['bilangan'] . $lah;
                  echo $_SESSION['bilangan'];
                }
               
              }

              elseif(isset($_POST['operator']))
              {
                $_SESSION['bil1'] = $_SESSION['bilangan'];
                unset( $_SESSION['bilangan']);
                $_SESSION['opera'] = $_POST['operator'];
                echo $_SESSION['bil1'].$_SESSION['opera'];
              }

              else if(isset($_POST['clear']))
              {
                session_unset();
                echo "0";
              }

              elseif (isset($_POST['hasil'])) {
                if($_SESSION['opera']=="+"){
                  $hasil = $_SESSION['bil1'] + $_SESSION['bilangan'];
                  session_unset();
                  echo $hasil;
                }else if ($_SESSION['opera']=="-") {
                  $hasil = $_SESSION['bil1'] - $_SESSION['bilangan'];
                  session_unset();
                  echo $hasil;
                }else if ($_SESSION['opera']=="/") {
                  $hasil = $_SESSION['bil1'] / $_SESSION['bilangan'];
                  session_unset();
                  echo $hasil;
                }else if ($_SESSION['opera']=="*") {
                  $hasil = $_SESSION['bil1'] * $_SESSION['bilangan'];
                  session_unset();
                  echo $hasil;
                  $_SESSION['bilangan']=$hasil;
                }
              }
              else{
                echo "0";
              }
            

            ?>
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-3 bg-light text-dark">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="angka" value="7" checked>
                <button class="btn btn-light" type="submit">7</button>
              </form>
            </div>
            <div class="col-sm-3 bg-light text-dark">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="angka" value="8" checked>
                <button class="btn btn-light" type="submit">8</button>
              </form>
            </div>
            <div class="col-sm-3 bg-light text-dark">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="angka" value="9" checked>
                <button class="btn btn-light" type="submit">9</button>
              </form>
            </div>
            <div class="col-3 bg-warning text-light">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="operator" value="*" checked>
                <button class="btn btn-warning text-light" type="submit">x</button>
              </form>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-3 bg-light text-dark">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="angka" value="4" checked>
                <button class="btn btn-light" type="submit">4</button>
              </form>
            </div>
            <div class="col-sm-3 bg-light text-dark">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="angka" value="5" checked>
                <button class="btn btn-light" type="submit">5</button>
              </form>
            </div>
            <div class="col-sm-3 bg-light text-dark">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="angka" value="6" checked>
                <button class="btn btn-light" type="submit">6</button>
              </form>
            </div>
            <div class="col-3 bg-warning text-light">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="operator" value="-" checked>
                <button class="btn btn-warning text-light" type="submit">-</button>
              </form>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-3 bg-light text-dark">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="angka" value="1" checked>
                <button class="btn btn-light" type="submit">1</button>
              </form>
            </div>
            <div class="col-sm-3 bg-light text-dark">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="angka" value="2" checked>
                <button class="btn btn-light" type="submit">2</button>
              </form>
            </div>
            <div class="col-sm-3 bg-light text-dark">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="angka" value="3" checked>
                <button class="btn btn-light" type="submit">3</button>
              </form>
            </div>
            <div class="col-3 bg-warning text-light">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="operator" value="+" checked>
                <button class="btn btn-warning text-light" type="submit">+</button>
              </form>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-3 bg-light text-dark">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="angka" value="0" checked>
                <button class="btn btn-light" type="submit">0</button>
              </form>
            </div>
            <div class="col-3  bg-success text-light">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="hasil" value="=" checked>
                <button class="btn btn-success text-light" type="submit">=</button>
              </form>
            </div>
            <div class="col-3  bg-danger text-light">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="clear" value="C" checked>
                <button class="btn btn-danger text-light" type="submit">C</button>
              </form>
            </div>
            <div class="col-3 bg-warning text-light">
              <form action="index.php" method="post">
                <input type="radio" style="display:none;" name="operator" value="/" checked>
                <button class="btn btn-warning text-light" type="submit">/</button>
              </form>
            </div>
          </div>


        </div>
      </div>
      <div class="col-4">
      </div>
    </div>

  </div>

  <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>