<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İletişim - Görkem Karagöl</title>
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
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto p-0">
          <nav class="navbar navbar-expand-lg navbar">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="anasayfa.html">Görkem Karagöl</a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="anasayfa.html">Anasayfa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="hakkimda.html">Hakkımda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Mirasımız
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="vakfıkebirEkmegi.html"
                          >Vakfıkebir Ekmeği</a
                        >
                      </li>

                      <li>
                        <a class="dropdown-item" href="trabzonspor.html"
                          >Trabzonspor</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ilgiAlanlarim.html"
                      >İlgi Alanlarım</a
                    >
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto content py-3 px-3 ">
          
        <h2 class="text-center py-4 px-4 baslikH3">Mesajınız İletilmiştir <br> Teşekkürler</h2>
        
        <table class="table table-hover tableStyle ">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Bilgileriniz</th>
              
          </tr>
          </thead>  
          <tbody class="tableStyle">
          <tr>
                    <th scope="row">Ad :</th>
                    <td>
                      <?php
                        echo $_POST["ad"];
                      ?>
                    </td>                  
                  </tr>
                  <tr>
                    <th scope="row">Soyad :</th>
                    <td>
                      <?php
                        echo $_POST["soyad"];
                      ?>
                    </td>             
                  </tr>
                  <tr>
                    <th scope="row">E-posta :</th>
                    <td>
                      <?php
                        echo $_POST["eposta"];
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Ülke :</th>
                    <td>
                      <?php
                        echo $_POST["ulke"];
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Şehir :</th>
                    <td>
                      <?php
                        echo $_POST["sehir"];
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Cinsiyet :</th>
                    <td>
                      <?php

                        $gelen=$_POST["cinsiyet"];
                        if($gelen=="erkek") 
                        {echo "Erkek";}
                        else 
                        {
                        echo "Kadın"; 
                        }
                      ?>                     
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Mesaj :</th>
                    <td style="overflow:hidden;">
                      <?php
                        echo $_POST["mesaj"];
                      ?>
                    </td>
                  </tr>
          </tbody>
        </table>
          
                
          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div
          class="
            col-md-10
            mx-auto
            footer
            d-flex
            justify-content-center
            align-items-center
          "
        >
          Görkem Karagöl &copy; 2021 Tüm Hakları Saklıdır.
        </div>
      </div>
    </div>

    <!-- Sticky sosyal medya ikonları başlangıcı -->
    <div class="icon-bar">
      <a
        title="Beni takip et"
        href="https://www.instagram.com/gorkemkaragl/?hl=tr"
        class="instagram"
        ><i class="fa fa-instagram"></i
      ></a>
      <a title="Beni takip et" href="#" class="twitter"
        ><i class="fa fa-twitter"></i
      ></a>
      <a
        title="Bana e-mail yolla"
        href="mailto:gorkemkaragol0@gmail.com"
        class="google"
        ><i class="fa fa-google"></i
      ></a>
      <a
        title="Beni takip et"
        href="https://www.linkedin.com/in/g%C3%B6rkemkarag%C3%B6l?originalSubdomain=tr"
        class="linkedin"
        ><i class="fa fa-linkedin"></i
      ></a>
      <a
        title="Çalışmalarıma bak"
        href="https://github.com/gorkemkaragl"
        class="github"
        ><i class="fa fa-github"></i
      ></a>
    </div>
    <!-- stick sosyal medya ikonları bitişi -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/doğrulama.js"></script>
  </body>
</html>
