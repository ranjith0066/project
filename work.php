<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Freeze</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="home.css">

</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo-wrapper">
                <a class="logo" href="home.html"> <strong>MG</strong> MAGIC FREEZE </a>
            </div>
            <ul class="navbar-links">
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="registration.php">Login</a></li>
            </ul>
        </div>
    </nav>
    <div class="header">
        <div class="container">
            <div class="box">
                <h4 class="">Hello there !</h4>
                <h1 class="">I'm VIMAL</h1>
                <p class="">
                    "Photography is a way of feeling, of touching,of loving . What you have caught on flim is captured forever... it remembers little things, long after you have forgotten everthing."           
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Aaron Siskind</p>
                </p>
             
            </div>
            
          </div> 
        </div>




        <section class="gallery bg-dark" id="works">
            <div class="heading">
                <h2 class="title">My Works</h2>
                <p class="section-title2">“The picture that you took with your camera is the imagination you want to create with reality.”</p><br><br><br><br>
    
            </div>
            
            <div class="container">
                <div class="grid-wrapper">
                    
                    <?php
                    $dir ="gallery/"; // image folder name
                      if (is_dir($dir)){
                         if ($dh = opendir($dir)){
                                 while (($file = readdir($dh)) !== false){
                                    if($file=="." OR $file==".."){} else { 
                              ?>   <!---- its a loop [change the folder name on img path]----->                
                              <div class="image tall">
                                <img src="gallery/<?php echo $file;?>"/>
                            </div>                         <?php
                              }
                             }
                         closedir($dh);
                         }
                      } ?>
                </div>
            </div>
        </section>











        <footer class="footer">
            <div class="newsletter">
                <div class="container">
                    <div class="box">
                        <h2>Sign up to get latest update</h2>
                        <p>Sign up for our monthly newsletter for the latest news &amp; articles</p>
                    </div>
                    <div class="form">
                        <form>
                            <input type="email" name="email" placeholder="Enter Email Address" required="">
                            <button>Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <div class="box">
                        <div class="logo-wrapper">
                            <a class="logo" href="home.html"> <strong>MG</strong> MAGIC FREEZE </a>
                        </div>
                        <div class="text">
                            <p>"What i like about Photographs is that they capture a moment that's gone forever, impossible to reproduce."</p>
                        </div>
                    </div>
                    <div class="box">
                        <h3 class="title">Quick Links</h3>
                        <ul>
                        <li><a href="home.html">Home</a></li>

                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Services</a></li>
                        </ul>
                    </div>
    
                    <div class="box">
                        <h3 class="title">Contact</h3>
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>
                                    9087568110
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-at"></i>
                                <span>
                                    magicfreeze2024@gmail.com
                                </span>
                            </li>
                            <li>
                                <span>
                                    no.25 ,Muthu Nagar, Mutharaiyarpalayam,
                                    Puducherry
                                </span>
                            </li>
                        </ul>
                    </div>
    
                </div>
            </div>
    
            <div class=" copyright">
                <div class="box">
                   <p class="">Copyright © 2024 by <a href="#">magicfreeze</a>. All rights reserved.</p>
                </div>
                <div class="button">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/vcreativestudiopy?igsh=ZGVpbHZ5YnA5ODdw"><i class="fab fa-instagram"></i></a></li>
                </div>
            </div>
            </div>
</body>
</html>