<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Talabat </title>
    <link rel="stylesheet" href="all-page.css">
    <script
      src="https://kit.fontawesome.com/c33b90f455.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <header>
        <a href="https://www.talabat.com/uae" target="_blank" class="logo-link">
            <div class="logo">talabat</div>
        </a>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="Donations.html">Donations</a></li>
                <li><a href="offer.html">Offers</a></li>
                <li><a href="partner.html">Become a partner</a></li>
                <li><a href="About.html">About Us</a></li>
                <li class="login"><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>
    <div class="parallax"></div>
    <div class="content-section">
    <main>
        <section class="login-section">
            <h1>Login</h1>
            <form class="content-section" action="signup-check.php" method="post">
                <h2>SIGN UP</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
    
                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
    
                <label>Name</label>
                <?php if (isset($_GET['name'])) { ?>
                    <input type="text" 
                           name="name" 
                           placeholder="Name"
                           value="<?php echo $_GET['name']; ?>">
                <?php }else{ ?>
                    <input type="text" 
                           name="name" 
                           placeholder="Name">
                <?php }?>
    
                <label>User Name</label>
                <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" 
                           name="uname" 
                           placeholder="User Name"
                           value="<?php echo $_GET['uname']; ?>">
                <?php }else{ ?>
                    <input type="text" 
                           name="uname" 
                           placeholder="User Name">
                <?php }?>
    
                <label>Password</label>
                <input type="password" 
                       name="password" 
                       placeholder="Password">
    
                <label>Re Password</label>
                <input type="password" 
                       name="re_password" 
                       placeholder="Re_Password">
    
                <button type="submit">Sign Up</button>
                <a href="login.php">Already have an account?</a>
            </form>
        </section>
    </main>
    </div>
    <footer>
        <div class="footer-top">
            <ul>
                     <li><a href="no">The-Careers</a></li>
                <li><a href="no">Our Terms and Conditions</a></li>
                       <li><a href="no">The FAQ</a></li>
                <li><a href="no">Our Privacy Policy</a></li>
                     <li><a href="no">Contact--Us</a></li>
                <li><a href="no">Site-map</a></li>
            </ul>
        </div>
        <div class="footer-middle">
            <div class="footer-column">
                <h3>Restaurants</h3>
                <ul>
                    <li><a href="https://careers.deliveryhero.com/talabat">The-Careers</a></li>
                    <li><a href="https://www.talabat.com/uae/terms">Our Terms and Conditions</a></li>
                           <li><a href="https://www.talabat.com/uae/faq">The FAQ</a></li>
                    <li><a href="https://www.talabat.com/uae/privacy">Our Privacy Policy</a></li>
                         <li><a href="https://www.talabat.com/uae/contact-us">Contact--Us</a></li>
                    <li><a href="https://www.talabat.com/uae/sitemap">Site-map</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Popular Cuisines</h3>
                <ul>
                    <li><a href="no">American</a></li>
                    <li><a href="no">Breakfast</a></li>
                    <li><a href="no">Burgers</a></li>
                    <li><a href="no">Cafe</a></li>
                    <li><a href="no">Chinese</a></li>
                    <li><a href="no">More Cuisines...</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Popular Areas</h3>
                <ul>
                    <li><a href="no">Haram</a></li>
                    <li><a href="no">Zayed City</a></li>
                    <li><a href="no">Dokki</a></li>
                    <li><a href="no">Mohndseen</a></li>
                    <li><a href="no">Al Baraha</a></li>
                    <li><a href="no">More Areas...</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Cities</h3>
                <ul>
                    <li><a href="no">Cairo</a></li>
                    <li><a href="no">Alex</a></li>
                    <li><a href="no">Sharkia</a></li>
                    <li><a href="no">Mnofia</a></li>
                    <li><a href="no">Al Ain</a></li>
                    <li><a href="no">More Cities...</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Follow Our Social Media On on</h3>
                <div class="social-icons">
                    <a href=""
                    ><i class="fa-brands fa-facebook"></i
                  ></a>
                  <a href=""
                    ><i class="fa-brands fa-instagram"></i
                  ></a>
                  <a href=""
                    ><i class="fa-brands fa-twitter"></i
                  ></a>
                  <a href=""
                    ><i class="fa-brands fa-youtube"></i
                  ></a>
                  <a href=""
                    ><i class="fa-brands fa-twitch"></i
                  ></a>
                </div>    
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>For any other support or help you can contact us via the Live Chat</p>
            <p>&copy;2024 talabat.com by Khalil</p>
        </div>
    </footer>
</body>
</html>
</body>
</html>