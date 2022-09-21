<?php 
    include("config/constants.php") ;    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMP Holistic Enterprise</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body id="content">

        <section class="header">              
                <div class="header-links text-right">
                    <ul>
                        <li>
                            <a href="#">Register</a>
                        </li>
                        
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="<?php echo SITEURL; ?>cart2.php">

                                <?php
                                        $product_num = 0 ;
                                        if(isset($_SESSION['cart']))
                                        {
                                            $product_num = count($_SESSION['cart']) ;
                                        }
                                        
                                ?>
                                   My Cart[<?php echo $product_num ; ?>]
                            </a>
                        </li>
                    </ul>                
                </div>        
        </section>
        <!-- header link section ends-->

        <section class="nav-bar">
           
                <div class="menu">
                    <a href="">
                        <div class="logo">
                            <img src="img/logo.amp.png" alt="">
                        </div>
                    </a> 
                    
                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                       <ul class="nav-links">
                            <li>
                                <a href="<?php echo SITEURL ; ?>index.php">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo SITEURL ; ?>aboutus.php">About Us</a>
                            </li>
                            <li>
                                <a href="<?php echo SITEURL ; ?>services.php">Services</a>
                            </li>
                            <li>
                                <a href="<?php echo SITEURL ; ?>products.php">Products</a>
                            </li>                        
                            <li>
                                <a href="<?php echo SITEURL ; ?>contact.php">Contact</a>
                            </li>
                        </ul>                      
                    
                </div>
                           
          
            

        

        </section>
        <!-- nav bar ends -->