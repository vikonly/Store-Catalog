<?php include "./connection/connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<header>
	<a href="index.php"><img src="img/logo.png" alt="LOGO" class="logo"></a>
	<nav>
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">CARS</a></li>
			<li><a href="#">CONTACT</a></li>
		</ul>
	</nav>
</header>

<section class="home-page">
	<div class="container"> 
		<h1 class="title">We Can Help You Find What You Need!!
			<span>For Free Membership Click Below</span>
		</h1>
		<a href="#" class="button button-accent">JOIN US!!</a>
	</div> 
</section>

<section class="menu">
	<h1>Latest Cars That Might Be Best For You!!</h1>
	
                    <?php
                /*
                   ********************************************** 
                   Select product-id, image-url, product-name and 
                   product-price from db-table.

                   Loop through the list of products and print:
                   product-id, 
                   image-url, 
                   product-name and 
                   product-price inside the following HTML structure: 
                   <li>
                      <figure>
                         <a href="{links-to-details.php-page-and-contains-product-id-in-query-string}">
                            <img src="{url-to-image}" alt="{image-description}">
                         </a>
                         <figcaption>
                            <ul>
                               <li>
                                  <p><a href="{links-to-details.php-page-and-contains-product-id-in-query-string}">{product-name}</a></p>
                               </li>
                               <li>
                                  <p>price: {product-price}/piece</p>
                               </li>
                            </ul>
                         </figcaption>
                      </figure>
                   </li> 
                   *****
                */

                   

                 $query = "SELECT 
                                store_id,
                                name,
                                image,
                                price,
                                description
                              FROM products";
                    
                $rs = mysqli_query($conn, $query);
                    
                $products = [];
                    
                while ($row = mysqli_fetch_assoc($rs)) {
                    array_push($products, $row);
                }
                
                /*
                echo "<pre>\$products ";
                print_r($products);
                echo "</pre>"; */
                
                  for ($i = 0; $i < sizeof($products); $i += 1) {
                   echo "
                      <figure>
                             <a href=\"details.php?pro-id={$products[$i]["store_id"]}\">
                             <img src=\"{$products[$i]["image"]}\" alt=\"{$products[$i]["description"]}\">
                             </a>
                             <figcaption>

                                         <p><a href=\"details.php?pro-id={$products[$i]["name"]}\">{$products[$i]["name"]}</a></p>
                                         <p>price: $ {$products[$i]["price"]}</p>
                                </figcaption>
                            </figure>
                        </li>";    
                  }      

                ?>
<footer>
	<div class="container">
		<div class="col-3">
			<a href="index.html"><img src="img/logo.png" alt="LOGO" class="logo"></a>
		</div>
		<div class="col-1">
			<ul class="unstyled-list">
				<li><strong>Social</strong></li>
				<li><a href="www.Facebook.com">Facebook</a></li>
				<li><a href="www.twitter.com">Twitter</a></li>
				<li><a href="www.Instagram.com">Instagram</a></li>
				<li><a href="www.Youtube.com">Youtube</a></li>
			</ul>
		</div>
		<div class="col-1">
			<ul class="unstyled-list">
				<li><strong>Locations</strong></li>
				<li><a href="#">Woodroffe</a></li>
				<li><a href="#">London</a></li>
				<li><a href="#">Toronto</a></li>
				<li><a href="#">Montreal</a></li>
			</ul>
		</div>
	</div>
</footer>
</body>
</html>