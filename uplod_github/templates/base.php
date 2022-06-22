<!DOCTYPE html>
<html lang="en">
  <link
    rel="stylesheet"
    href="{{ url_for('static', filename='css/bootstrap.css') }}"
  />
  <link rel="stylesheet" href="{{ url_for('static', filename='style.css') }}" />
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <head>
    <meta charset="UTF-8" />
    <title>The Beauty</title>
  </head>
  <body>
     <!-- awal code navbar/menu -->
     <nav class="navbar navbar-expand-lg navbar-light bg-default border-bottom" style="height:1.7cm;font-size:17px;">
      <div class="container">
          <a class="navbar-brand mermaid mt-3 color1" href="main.php"><h3>The Beauty</h3></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
              <li class="nav-item active mr-4 mt-1">
                <form action="halaman_kategori.php" class="form-inline" method="GET">
                  <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search" style="height:0.9cm;width:10cm">
                  <button type="submit" class="btn btn-default bg1 text-white pt-1" style="height:0.9cm"><i class="bi bi-search"></i></button>
                </form>
              </li>
                <li class="nav-item active">
                  <a class="nav-link ml-3" href="shopping_bag.php"><i class="bi bi-bag"></i><enspan class="sr-only"></span></a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link ml-3" href="profil_saya.php?profile_detail=Profile+Detail"><?php echo $_SESSION['nama']; }?><span class="sr-only"></span></a>
              </li>
              <li>
                  <a class="btn btn-default ml-3" href="logout.php" style="font-size:17px">User</a>
              </li>
                  <li>
                  <a class="btn btn-default ml-3" href="logout.php" style="font-size:17px">Logout</a>
              </li>
             </ul> 
          </div>
        </div>
    </nav>
    <?php include "kategori.php";?>
    <nav class="navbar navbar-expand-lg navbar-light bg-default border-bottom" style="height:1.5cm;font-size:15px;">
		<div class="container">
		    <ul class="navbar-nav mr-auto text-secondary">
		    	<li class="nav-item active mr-4">
				    <a class="text-dark" href="halaman_kategori.php?id_kategori=K001">MAKEUP</a>
				</li>
				<li class="nav-item active mr-4">
				    <a class="text-dark" href="halaman_kategori.php?id_kategori=K002">SKINCARE</a>
				</li>
				<li class="nav-item active mr-4">
				    <a class="text-dark" href="halaman_kategori.php?id_kategori=K003">HAIR CARE</a>
				</li>
				<li class="nav-item active mr-4">
				    <a class="text-dark" href="halaman_kategori.php?id_kategori=K004">BATH & BODY</a>
				</li>
				<li class="nav-item active mr-4">
				    <a class="text-dark" href="halaman_kategori.php?id_kategori=K005">FRAGRANCE</a>
				</li>
			<ul> 
    	</div>
	  </nav>
    
    <div class="container">
          <div class="row">
            <div class="col-md-12 mt-2">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              </ol>
  
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="shopping_bag.php">
                      <img class="d-block w-100 carousel1" src="{{ url_for('static', filename='carousel4.jpg') }}" alt="First slide">
                    </a>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel1" src="{{ url_for('static', filename='carousel3.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel1" src="{{ url_for('static', filename='carousel2.jpg') }}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carousel1" src="{{ url_for('static', filename='carousel1.jpg') }}" alt="Third slide">
                </div>
              </div>
            
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
        </div>
  
        <div class="col-md-12 mt-4 mb-4">
          <h3 class="text-center mermaid">The Beauty Promotion</h3>
        </div>
        <div class="col-md-4">
          <img src="{{ url_for('static', filename='promo1.jpg') }}" class="rounded shadow-sm" style="width:9.7cm">
        </div>
        <div class="col-md-4">
          <img src="{{ url_for('static', filename='promo2.jpg') }}" class="rounded shadow-sm" style="width:9.7cm">
        </div>
        <div class="col-md-4">
          <img src="{{ url_for('static', filename='promo3.jpg') }}" class="rounded shadow-sm" style="width:9.7cm">
        </div>
  
        <div class="col-md-12 mt-4 mb-4">
          <h3 class="text-center mermaid">Shop by Categories</h3>
        </div>
        <div class="col-md-3">
          <a href="halaman_kategori.php?id_kategori=K001">
            <img src="{{ url_for('static', filename='kat1.jpg') }}" class="rounded shadow-sm" style="width:7cm">
          </a>
        </div>
        <div class="col-md-3">
          <a href="halaman_kategori.php?id_kategori=K002">
            <img src="{{ url_for('static', filename='kat2.jpg') }}" class="rounded shadow-sm" style="width:7cm">
          </a>
        </div>
        <div class="col-md-3">
          <a href="halaman_kategori.php?id_kategori=K003">
            <img src="{{ url_for('static', filename='kat3.jpg') }}" class="rounded shadow-sm" style="width:7cm">
          </a>
        </div>
        <div class="col-md-3">
          <a href="halaman_kategori.php?id_kategori=K005">
            <img src="{{ url_for('static', filename='kat3.jpg') }}" class="rounded shadow-sm" style="width:7cm">
          </a>
        </div>
      </div>
    </div>
    <?php include "{{url_for('static', filename='footer.php')}}"; ?>
    <div class="container-fluid border mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mermaid p-3">
            <h4>The Beauty</h4>
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-3 p-3">
            <h5>
              <a href="" class="text-dark"><i class="bi bi-facebook pr-4"></a></i>
              <a href="" class="text-dark"><i class="bi bi-instagram pr-4"></i></a>
              <a href="" class="text-dark"><i class="bi bi-twitter"></i></a>
            </h5>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container-fluid border">
      <div class="container mt-3 mb-3">
        <div class="row">
          <div class="col-md-3">
            <p class="font-weight-bold">INFORMATION</p>
            <p><a href="" class="color1">About Us</a></p>
            <p><a href="" class="color1">Contact Us</a></p>
            <p><a href="" class="color1">Careers</a></p>
          </div>
          <div class="col-md-3">
            <p class="pt-4"></p>
            <p><a href="" class="color1">Our Store</a></p>
            <p><a href="" class="color1">Privacy Policy</a></p>
            <p><a href="" class="color1">Terms & conditions</a></p>
          </div>
          <div class="col-md-3">
            <p class="pt-4"></p>
            <p><a href="" class="color1">Affiliate with Us</a></p>
            <p><a href="" class="color1">How To Pay</a></p>
            <p><a href="" class="color1">Help Center</a></p>
          </div>
          <div class="col-md-3">
            <p class="font-weight-bold">CUSTOMER CARE</p>
            <p><a href="">cs@thebeauty.com</a></p>
          </div>
        </div>
        <div class="text-right pt-4">
          <small>2021 The Beauty</small>
        </div>
      </div>
    </div>
      
      <!-- awal code chatboot -->
      <div class="container">
        <div class="chatbox">
          <div class="chatbox__support">
            <div class="chatbox__header">
              <div class="chatbox__image--header">
                <img
                  src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-customer-gamification-flaticons-lineal-color-flat-icons.png"
                  alt="image"
                />
              </div>
              <div class="chatbox__content--header">
                <h4 class="chatbox__heading--header">Beauty Bot</h4>
                <h5 class="chatbox__description--header">
                  Hallo. perkenalkan saya Alpha, ada yang bisa saya bantu ?
                </h5>
              </div>
            </div>
            <div class="chatbox__messages">
              <div></div>
            </div>
            <div class="chatbox__footer">
              <input type="text" placeholder="Write a message..." />
              <button class="chatbox__send--footer send__button">Send</button>
            </div>
          </div>
          <div class="chatbox__button">
            <button>
              <img
                src="{{ url_for('static', filename='images/chat.png') }}"
                width="75"
                alt=""
              />
            </button>
          </div>
        </div>
      </div>
       <!-- akhir code chatboot -->
    </section>

    <script>
      $SCRIPT_ROOT = {{ request.script_root|tojson }};
    </script>
    <script
      type="text/javascript"
      src="{{ url_for('static', filename='app.js') }}"
    ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
