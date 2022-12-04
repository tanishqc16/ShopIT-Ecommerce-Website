<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="cart.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
    <title>Shop.IT</title>

</head>
<section>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" >Shop.IT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#collections">Collections</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#popular">Popular</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login_form.php">Login</a>
              </li>
              <i class="bx bx-shopping-bag" id="cart-icon"></i>
            </ul>
          </div>
        </div>
      </nav>
          <!-- Navbar ends-->
      <!-- Cart start-->
       <div class="cart">
         <h2 class="cart-title">Your Cart</h2>
          <!-- cart content -->
          <div class="cart-content">

          </div>

          <!-- total -->
         <div class="total">
            <div class="total-title">Total : </div>
            <div class="total-price"> ₹ 0</div>
         </div>
         <!-- buy button -->
         <button type="button" class="btn-buy">Buy Now</button>
         <!-- cart close -->
         <i class="bx bx-x" id="close-cart"></i>
       </div>

      <!-- Cart ends -->

    <!-- Welcome screen -->
    <div class="intro_area">
        <div>
            <img class= "ill_img" src="./images/svgimg (2).svg" alt="">
        </div>
        <div class="quotetxt">
            <li>Innovation for</li>
            <li>Simplifying</li>
            <li>Lifestyle</li>
            <button type="button" class="btn btn-primary">
              <a class="nav-link active" aria-current="page" href="#popular">Explore</a>
            </button>
        </div>
    </div>
<hr>

<!-- Collections -->
<div class="collection" >
  <a name="popular"></a>
  <h1 class="coll">TRENDINGS</h1>    
</div>

<div class = "collection-list mt-4 row gx-0 gy-3">

  <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
    <div class = "text-center">
      <img src = "./images/iphone 14 pro purple.jfif" class = "w-100 product-img">
      <p class = "text-capitalize my-1">Apple iPhone 14 Pro</p>
      <br>  
      <span class = "fw-bold product-price">₹179900.00</span>
      <i class='bx bx-shopping-bag add-cart'></i>
    </div>
  </div>

  
  <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
    <div class = "text-center">
      <img src = "./images/lenovo laptop.jpg" class = "w-100 product-img">
      <p class = "text-capitalize my-1">Lenovo IdeaPad Slim 3</p>
      <br>  
      <span class = "fw-bold product-price">₹57490.00</span>
      <i class='bx bx-shopping-bag add-cart'></i>
    </div>
  </div>

  <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
    <div class = "text-center">
      <img src = "./images/woodland shoes.jpg" class = "w-100 product-img">
      <p class = "text-capitalize my-1">Woodland Mens Sneaker</p>
      <br>  
      <span class = "fw-bold product-price">₹2726.00</span>
      <i class='bx bx-shopping-bag add-cart'></i>
      <div>
      </div>
    </div>
  </div> 

  <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
    <div class = "text-center">
      <img src = "./images/boat eardopes.jpg" class = "w-100 product-img">
      <p class = "text-capitalize my-1">boAt Airdopes</p>
      <br>  
      <span class = "fw-bold product-price">₹1199.00</span>
      <i class='bx bx-shopping-bag add-cart'></i>

    </div>
  </div>
  
  <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
    <div class = "text-center">
      <img src = "./images/nike shoes.jpeg" class = "w-100 product-img">
      <p class = "text-capitalize my-1">Nike Men's Shoes Air Max</p>
      <br>  
      <span class = "fw-bold product-price">₹58424.00</span>
      <i class='bx bx-shopping-bag add-cart'></i>

    </div>
  </div>

  <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
    <div class = "text-center">
      <img src = "./images/keyboard and mouse.jpg" class = "w-100 product-img">
      <p class = "text-capitalize my-1">MageGee Gaming Keyboard and Mouse Combo</p>
      <br>  
      <span class = "fw-bold product-price">₹6598.00</span>
      <i class='bx bx-shopping-bag add-cart'></i>

    </div>
  </div>

  <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
    <div class = "text-center">
      <img src = "./images/moniter.jpg" class = "w-100 product-img">
      <p class = "text-capitalize my-1">Acer Nitro</p>
      <br>  
      <span class = "fw-bold product-price">₹16499.00</span>
      <i class='bx bx-shopping-bag add-cart'></i>

    </div>
  </div>

  <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
    <div class = "text-center">
      <img src = "./images/oneplus mobile.jpg" class = "w-100 product-img">
      <p class = "text-capitalize my-1">OnePlus Nord</p>
      <br>  
      <span class = "fw-bold product-price">₹28999..00</span>
      <i class='bx bx-shopping-bag add-cart'></i>

    </div>
  </div>
  
</div>

<!-- Collections -->
<div class="collection" >
  <a  name="collections"></a>
    <h1 class="coll">TODAY'S DEALS</h1>    
</div>

<div class = "collection-list mt-4 row gx-0 gy-3">

    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
      <div class = "text-center">
        <img src = "./images/boat_smartwatch.jpg" class = "w-100 product-img">
        <p class = "text-capitalize my-1">boAt Xtend Smartwatch</p>
        <br>  
        <span class = "fw-bold product-price">₹2659.00 </span>
        <br>
        <span class = "fw">You Save:	₹5,331.00 (67%)</span>
        <i class='bx bx-shopping-bag add-cart'></i>

      </div>
    </div>

    
    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
      <div class = "text-center">
        <img src = "./images/iphone_13_pro.jpg" class = "w-100 product-img">
        <p class = "text-capitalize my-1">Apple iPhone 13 Pro</p>
        <br>  
        <span class = "fw-bold product-price">₹154900.00</span>
        <br>
        <span class = "fw">You Save:	₹15,000 (9%) </span>
        <i class='bx bx-shopping-bag add-cart'></i>

      </div>
    </div>

    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
      <div class = "text-center">
        <img src = "./images/Adidas.jpg" class = "w-100 product-img">
        <p class = "text-capitalize my-1">Adidas Men's Yking</p>
        <br>  
        <span class = "fw-bold product-price">₹2210.00 </span>
        <br>
        <span class = "fw">You Save:	₹390.00 (17%)</span>
        <i class='bx bx-shopping-bag add-cart'></i>

      </div>
    </div>

    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
      <div class = "text-center">
        <img src = "./images/Canon.jpg" class = "w-100 product-img">
        <p class = "text-capitalize my-1">Canon EOS</p>
        <br>  
        <span class = "fw-bold product-price">₹56490.00</span>
        <br>
        <span class = "fw">You Save:	₹3,505.00 (6%)</span>
        <i class='bx bx-shopping-bag add-cart'></i>

      </div>
    </div>
  </div>
<hr>


<!-- footer -->

<div class="footer-container">
  <div class="footer">
    <div class="footer-row-1" style="padding-top: 2% ;">
      <div class="column 1" style="padding-left:5%;">
        <h3 style="font-weight: 600; font-size: 30px; padding-bottom: 15%;">Quick Links</h3>
          <ui class="links" style="list-style:'';">
           <li style="padding:'1% 4%'; margin-left:'4%';">- <a href="/" style="color:'white';">Home</a></li>
           <li style="padding:'1% 4%'; margin-left:'4%';">- <a href="#collections" style="color:'white';">Collections</a></li>
           <li style="padding:'1% 4%'; margin-left:'4%';">- <a href="#popular" style="color:'white';">Popular</a></li>
           <li style="padding:'1% 4%'; margin-left:'4%';">- <a href="/cart.html" style="color:'white';">Cart</a></li>
           </ui>
      </div>
      <div class="column 2">
        <h3 style="padding-left: 30%; font-weight: 600; font-size: 30px;">Get In Touch</h3>
          <ul class="information" style="padding-left: 30%;">
          <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg> </span>
              <span>Survey No. 3/4, Kondhwa (Budruk)
               Pune – 411048, Maharashtra (India)<br></br>
              </span>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg></span>
            <span> Phone: 123456789 <br></br></span>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg></span>
            <span> Phone: 123456789<br></br> </span>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
             <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
             </svg> </span>
            <span> Email us : xyz@gmail <br></br></span>
            <span style="color:'rgb(151, 151, 151)';">Feel free to write us about your Experiences and Suggestions</span>
          </ul>
        </div>
    </div>
    </div>
  </div>
</section>
<!-- link to js -->
<script src="main.js"></script>
</body>
</html>