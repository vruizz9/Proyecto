<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style1.css?v=<?php echo(rand()); ?>">
    <link rel="icon" href="Images/logo.svg">
    <script src="https://kit.fontawesome.com/27010df775.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="functions.js?v=<?php echo(rand()); ?>"></script>
    <title>PetShop</title>
</head>
<body>
    <!-- barra lateral de navegación apta para dispositivos tablets y moviles-->
    <section>
        <nav id="sideNavigation" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php" target="_self">Home</a>
            <a href="#">Birds</a>
            <a href="#">Cats</a>
            <a href="petshop.php" target="_self">Dogs</a>
            <a href="#">Rodent</a>
            <a href="#">Rabbit</a>
            <a href="login.php" target="_self"><i class="fa-solid fa-user"></i></a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </nav>
        <nav class="topnav">
            <a href="#" onclick="openNav()">
              <i class="fas fa-bars"></i>
            </a>
        </nav>
        <!-- barra superior de navegacion apta para dispositivos desktop -->
        <nav class="navegacion">
            <ul>
                <img class="logo" src="Images/logo.svg" alt="logo">
                <li>
                    <a href="index.php" target="_self">Home</a>
                </li>
                <li>
                    <a href="#">Birds</a>
                </li>
                <li>
                    <a href="#">Cats</a>
                </li>
                <li>
                    <a href="petshop.php" target="_self">Dogs</a>
                </li>
                <li>
                    <a href="#">Rodent</a>
                </li>
                <li>
                    <a href="#">Rabbit</a>
                </li>
                <li>
                    <a href="login.php" target="_self"><i class="fa-solid fa-user"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
            </ul>
        </nav>
    </section>
    <section id="main">
        <section>
            <div class="presentation">
                <div>
                    <img src="Images/img1.png" alt="Dogs">
                </div>
                <div>
                    <p>More than pets, friends: We offer the best products and services for the care of your furry friends.</p>
                </div>
            </div>
        </section>
        <!-- categorias de los diferentes servicios -->
        <section>
            <div class="services">
                <div class="categories">
                    <p>Our services</p>
                    <div class="cards">
                        <div class="card" style="background-image: url(Images/img2.png)">
                            <div class="content">
                                <a href="#">Veterinary</a>
                            </div>
                        </div>
                        <div class="card" style="background-image: url(Images/img3.png)">
                            <div class="content">
                                <a href="#">Hairdressing</a>
                            </div>
                        </div>
                        <div class="card" style="background-image: url(Images/img4.png)">
                            <div class="content">
                                <a href="#">Adoption</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pie de página -->
        <footer class="footer">
            <div class="info">
                <p>Social Networks</p>
                <div class="icons">
                    <div>
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div>
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div>
                        <i class="fa-brands fa-x-twitter"></i>
                    </div>
                </div>
            </div>
            <div class="info">
                <p>Contact Us</p>
                <div class="icons">
                    <div>
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>
</html>