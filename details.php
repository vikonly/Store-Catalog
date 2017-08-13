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
    <a href="index.php" class="button button-accent">GO Back</a>
  </div> 
</section>

<section class="menu">
  <h1>Latest Cars That Might Be Best For You!!</h1>

<?php  
if (isset($_GET["pro-id"])) {
    
    $id = mysqli_real_escape_string($conn, $_GET["pro-id"]);
    
    $db_query = "SELECT *
                  FROM products
                  WHERE store_id =" . $id;
    
    $rs = mysqli_query($conn, $db_query);
    
    if (mysqli_num_rows($rs) === 1) {
        
        $row = mysqli_fetch_assoc($rs);
        
        $_SESSION["item_" . $row["store_id"]] = $row;

    } else {
        $err = "<p>there is no product with {$_SESSION["storeid"]} </p>";
    }
}
        
        
/*echo "<pre>\$_SESSION ";
print_r($_SESSION);
echo "</pre>";*/

        /* REMOVING A PRODUCT FROM $_SESSION: 

           *****************************
           If $_GET["delete"] has value,
           *****************************

              *******************************************************************
              use unset() function to remove corresponding product from $_SESSION
              *******************************************************************

              You will get the key of corresponding product by concatenating:
              "item_" with $_GET["delete"]

           ******
           end if
           ******
        */

if (isset($_GET["delete"])) {
    //session_unset();
    
    //$key_of_max = key($x);
     unset($_SESSION["item_" . $_GET["delete"]]);
    
        
}





        /* PRINTING $_SESSION ARRAY:  

           ********************************* 
           If there is anything in $_SESSION
           *********************************

              ********************************
              Loop through $_SESSION array and
              print its content in the following HTML:
              <div class="cart-item">
                 <a href="details.php?delete={value-of-product-id}">Remove Item</a>
                 <figure>
                    <img src="{value-of-prod_image}" alt="{image-description}">
                    <figcaption>
                       <ul>
                          <li><p>{value-of-prod_name} @ {value-of-prod_price}/piece</p></li>
                          <li><p>{value-of-prod-description}</p></li>
                       </ul>
                    </figcaption>
                 </figure>
              </div>
              ******

           ******
           end if
           ******

           ****
           else
           ****

              **************************
              Redirect user to index.php
              **************************

           ********
           end else
           ********
        */
     if(isset($_SESSION) )  {
         
         if(sizeof($_SESSION) > 0 )  {
        /*     for ($i = 0; $i < sizeof($_SESSION); $i += 1) {
                 echo"<div class=\"cart-item\">
                     <a href=\"details.php?delete={$_SESSION[$i]["store_id"]}\">Remove Item</a>
                     <figure>
                     <img src=\"{$_SESSION[$i]["image"]}\" alt=\"{$_SESSION[$i]["description"]}\">
                     <figcaption>
                       <ul>
                          <li><p>{$_SESSION[$i]["name"]} @ {$_SESSION[$i]["price"]}/piece</p></li>
                          <li><p>{$_SESSION[$i]["description"]}</p></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>";   
             
             }*/
             foreach($_SESSION as $prod){
                 
                 
                 echo"<div class=\"cart-item\">
                     
                     <figure>
                     <img src=\"{$prod["image"]}\" alt=\"{$prod["description"]}\">
                     <figcaption>
                       <a href=\"details.php?delete={$prod["store_id"]}\">Remove Item</a>
                          <p>{$prod["name"]} @ {$prod["price"]}/piece</p>
                          <p>{$prod["description"]}</p>
                        
                    </figcaption>
                </figure>
            </div>";   
             }
        } else {
            header("Location: ./index.php");
        }

         
     }
         
        ?>
    </main>