<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giriş Yap - Görkem Karagöl</title>
    <link rel="stylesheet" href="css/stil.css" />
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

   

  </head>
  <body>
   

    <!-- Login Form -->
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-8 col-sm-8">
          <div class="card bg-light">
            <div class="card-title text-center border-bottom">
              <h2 class="p-3">Giriş Yap</h2>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="mb-4">
                  <label for="e-mail" class="form-label">E-posta</label>
                  <input name="email" type="text" class="form-control" placeholder="örnek@gmail.com" id="email">
                </div>

                <div class="mb-4 ">
                  <label for="password" class="form-label">Şifre</label>
                  <input name="password" type="password" class="form-control" placeholder="1234567" id="password">
                </div>
                
                <div class="mb-4">
                  <input type="checkbox" class="form-check-input " id="remember">
                  <label for="remember">Beni Hatırla</label>
                </div>

                <div class="d-grid">
                  <button type="submit" class="btn btn-outline-dark">Giriş Yap</button>
                </div>

              </form>

              <?php

                if($_POST){

                  session_start();
                  $email=$_POST["email"];
                  $password=$_POST["password"];


                  #giriş yapabilmek için alttaki bilgileri kullanınız.
                  if($email=="kullanıcı@gmail.com" and $password=="12345"){

                    $_SESSION["oturum"]=true;
                    $_SESSION["kullanici"]=$email;
                    echo "";

                    header("Refresh:2;url=anasayfa.html");
                  }else{
                    echo "Kullanıcı adınız veya şifreniz yanlış";
                  }

                }
              
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>


       
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
