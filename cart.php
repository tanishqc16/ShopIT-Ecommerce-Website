
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="cart.css" type="text/css">
	<link rel="stylesheet" href="index.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Shop.IT</title>
    <style type="text/css">
        .table tbody td{
        vertical-align: middle;
        }
        </style>
		<script type="text/javascript" src="index.js"></script>
</head>
<body>

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
						<a class="nav-link active" aria-current="page" href="/index.html">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="/index.html">Collections</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="/index.html">Popular</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="/cart.html">Cart</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#login">Login</a>
				  </li>
				</ul>
			  </div>
			</div>
		  </nav>
			  <!-- Navbar ends-->
	<!-- cart starts -->
    <div class="container my-3">
		<h1 class="cart-title" style="text-align: center;">Cart</h1>
		<div class="d-flex py-3"><h3 class="Total-title">Total Price    </h3> <a class="mx-3 btn btn-primary" href="cart-check-out">Check Out</a></div>
		<h3 class="Total-price">0 $</h3>
		<table class="table table-light">
			<thead>
				<tr>
					<th class="cart_tit" scope="col">Name</th>
					<th class="cart_tit" scope="col">Category</th>
					<th class="cart_tit" scope="col">Price</th>
					<th class="cart_tit" scope="col">Buy Now</th>
					<th class="cart_tit" scope="col">Cancel</th>
				</tr>
			</thead>
			<tbody class="cart-content">
				<tr class="cart-box">
					<th >Apple iPhone 14 Pro 1TB Deep Purple</th>
					<th >Electronic</th>
					<th >₹1,79,900.00</th>
					<th>
					<input type="number" name="quantity" class="card-quantity" value="1" placeholder="Quantity" > 
					</th>
					<th><a  class="cart-box">Remove</a></th>
				</tr>
				
				<!-- <tr class="cart-box">
					<td class="">Apple iPhone 14 Pro 1TB Deep Purple</td>
					<td >Electronic</td>
					<td >₹1,79,900.00</td>
					<td>
					<input type="number" name="quantity" class="card-quantity" value="1" placeholder="Quantity" > 
					</td>
					<td><a  class=" cart-remove">Remove</a></td>
				</tr>

				<tr class="cart-box">
					<td class="">Apple iPhone 14 Pro 1TB Deep Purple</td>
					<td >Electronic</td>
					<td >₹1,79,900.00</td>
					<td>
					<input type="number" name="quantity" class="card-quantity" value="1" placeholder="Quantity" > 
					</td>
					<td><a  class=" cart-remove">Remove</a></td>
				</tr> -->
			</tbody>
		</table>
	</div>
</body>
</html>