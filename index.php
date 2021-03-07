<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <h3>
    <h4>
      <h5>
        <h5><i class="5jasdfas fa-signal-4    "></i></h5>
      </h5>
    </h4>
  </h3>
  <!-- bootstrap 4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style/signinfuzzy.css" />

  <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> -->

  <script src="https://kit.fontawesome.com/0c4bdc880a.js" crossorigin="anonymous"></script>


  <title>LOGIN BERAS BULOG</title>
</head>

<body>

  <div class="page-auth">
    <section class="page-content">
      <div class="container page-content-signin">
        <div class="row align-items-center">

          <div class="col" data-aos="fade-up">
            <img src="images/beras.jpg" alt="" class="gambar" />
          </div>

          <div class="col-lg-5 content-form" data-aos="fade-left">
            <h2>BERAS BULOG</h2>
            <?php echo date("l");?>
            <?php echo date("d-m-Y");?>
            <span class="ml-2">
              <?php date_default_timezone_set("Asia/Bangkok");
                    echo date("H:i");?>
            </span>WIB

            <h5 class="tittle">SIGN IN</h5>

            <form action="cek.php" method="post">
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control w-75" name="username" />
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control w-75" name="password" />
              </div>
              <div>
                <button name="login" type="submit" value="administrator" class="btn btn-custom1">Sign In <i
                    class="fas fa-arrow-circle-right"></i></button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
  </div>


  <footer>
    <div class="container-fluid">
      <div class="row footer-signin">
        <div class="col-12 text-center">
          <p class="pt-4 pb-2">
            Copyright <i class="fas fa-copyright"></i> <?php echo date("Y");?> Kelompok 7
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>