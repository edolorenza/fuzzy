<!-- <html>
<head>
<title>Halaman Index</title>
</head>
<body bgcolor=white width=1270px height=828px>

<br>
<br>
<table bgcolor=grey width=300px height="259px" align="center">
<form action="cek.php" method="post">
<tr>
<td><font color="d5edb3"> <b>Form Login</b> </font></td>
</tr>
<tr>
<td><font color="d5edb3"><b> Username: </b></font></td>
<td><input type="password" name="username"></td>
</tr>
<tr>
<td><font color="d5edb3"> <b>Password: </b> </font></td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td><font color="d5edb3"></font></td>
<td><select name="login">
<option value="administrator">Administrator</option>

</select>
</td>
</tr>
<tr>
<td></td>
<td><input name="submit" type="submit" value="LOGIN"></td>
</tr>
</form>

</table>
</body>
</html>
 -->






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>BERAS BULOG</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/main.css" rel="stylesheet" />
    <script
      src="https://kit.fontawesome.com/0c4bdc880a.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <?php
        include ("header.php");
    ?>
    <div class="page-auth">
      <section class="page-content-signin">
        <div class="container">
          <div class="row align-items-center">
            <div class="col content-gambar" data-aos="fade-up">
              <img src="images/beras.jpg" alt="" class="gambar" />
            </div>

            <div class="col-lg-5 content-form" data-aos="fade-left">
              <h3>BERAS BULOG</h3>
              <h5 class="tittle">SIGN IN</h5>

              <form action="cek.php" method="post">
                <div class="form-group">
                  <label for="">Username</label>
                  <input name="username" type="text" class="form-control w-75" />
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input name="password" type="password" class="form-control w-75" />
                </div>
                <select name="login">
                    <option value="administrator">Administrator</option>    
                    <option value="operator">Operator</option>    
                <div>
                  <!-- <a href="/signup.html" class="btn btn-custom1"> Sign Up </a> -->
                  <input class="btn btn-custom2" name="submit" type="submit" value="LOGIN">
                 <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">
              Copyright <i class="fas fa-copyright"></i> 2020 Kelompok 7
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
