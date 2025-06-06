<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Cofee Shop Web Site</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!--Navbar-->
    <header>
        <a href="#" class="logo">
            <img src="img/logo.png" alt="">
        </a>
        <!--Menu Icon-->
        <i class='bx  bx-menu' id="menu-icon"></i>
        <!--Links-->
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#Product">Products</a></li>
            <li><a href="#customers">Customers</a></li>
        </ul>
        <!--Icons-->
        <div class="header-icon">
            <i class='bx  bx-cart'  ></i>  
            <i class='bx  bx-search-alt' id="search-icon"></i>
        </div>
        
        <!--Search Box-->
        <div class="search-box">
            <input type="search" placeholder="Search Here.....">
        </div>
    </header>
    <!--Home-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Welocome to Kandu Pinnawala</h1>
            <p>We're proud to bring you the best of Sri Lankan handmade arts and crafts – all made with love by talented local artisans. Whether you're looking for a unique gift, a beautiful souvenir, or something special for your home, you'll find it here. From wooden carvings and traditional masks to handwoven items and more, each piece tells a story.
            </p>
            <p>
            Visit us in beautiful Pinnawala or browse online – we're always happy to help you find something truly meaningful. Thank you for supporting local craftsmanship!
            </p>
            <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="home-img">
            <img src="lesterlost-travel-handmade-crafts-sri-lanka-wood-masks-1.jpg" alt="">
        </div>
    </section>
    <!--About-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/about.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Our History</h2>
            <p>
            Kandu Pinnawala Handicraft Shop was founded with a passion for preserving Sri Lanka’s rich cultural heritage and supporting local artisans. 
            Located near the world-famous Pinnawala Elephant Orphanage, 
            our shop began as a small family-run business dedicated to showcasing the beauty of traditional Sri Lankan craftsmanship.
            </p>

            <p>
            Over the years, we’ve grown into a trusted destination for authentic handmade items, including wooden carvings, masks, batik, and woven products. 
            Every piece in our collection is handcrafted with care, reflecting the skill, creativity, and stories of our local community.
            </p>

            <p>
            Today, Kandu Pinnawala is more than just a shop – it's a celebration of tradition, artistry, and the spirit of Sri Lanka.
            </p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>
    <!--Products-->
    <section class="Product" id="Product">
        <div class="heading">
            <h2>Our Popular Products</h2>
        </div>
        <!--Container-->
        <div class="product-container">

        <?php
        
        $query = "SELECT * FROM products";

        $ans = mysqli_query($con,$query);

        while($row = mysqli_fetch_assoc($ans)){
 ?>
          <div class="box">
                <img src="http://localhost/product/img/
<?php echo $row["file"]; ?>" alt="">
                <h3><?php echo $row["name"]; ?></h3>
                <div class="content">
                    <span><?php echo $row["price"]; ?></span>
                    <a href="#">Add To Cart</a>
                </div>
            </div>
     <?php
        }
        
        ?>
           

        </div>
    </section>
    <!--Customers-->
    <section class="customers" id="customers">
        <div class="heading">
            <h2>Our Customers</h2>
        </div>
        <!--container-->
        <div class="customers-container">

            <div class="box">
                <div class="stars">
                    <i class='bx  bxs-star'  ></i>
                    <i class='bx  bxs-star'  ></i> 
                    <i class='bx  bxs-star'  ></i> 
                    <i class='bx  bxs-star'  ></i> 
                    <i class='bx  bxs-star-half'  ></i>  
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem libero eius nobis, 
                fugit reiciendis porro vitae quidem. A quas dolores, cumque iusto quis perspiciatis ab, 
                accusantium quos repudiandae, repellendus sint?</p>
                <h2>Jeram Perera</h2>
                <img src="img/rev1.jpg" alt="">
            </div>

            <div class="box">
                <div class="stars">
                    <i class='bx  bxs-star'  ></i>
                    <i class='bx  bxs-star'  ></i> 
                    <i class='bx  bxs-star'  ></i> 
                    <i class='bx  bxs-star'  ></i> 
                    <i class='bx  bxs-star-half'  ></i>  
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem libero eius nobis, 
                fugit reiciendis porro vitae quidem. A quas dolores, cumque iusto quis perspiciatis ab, 
                accusantium quos repudiandae, repellendus sint?</p>
                <h2>Sachintha Sanjaya</h2>
                <img src="img/rev2.jpg" alt="">
            </div>

            <div class="box">
                <div class="stars">
                    <i class='bx  bxs-star'  ></i>
                    <i class='bx  bxs-star'  ></i> 
                    <i class='bx  bxs-star'  ></i> 
                    <i class='bx  bxs-star'  ></i> 
                    <i class='bx  bxs-star-half'  ></i>  
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem libero eius nobis, 
                fugit reiciendis porro vitae quidem. A quas dolores, cumque iusto quis perspiciatis ab, 
                accusantium quos repudiandae, repellendus sint?</p>
                <h2>Darshani Ekanayake</h2>
                <img src="img/rev3.jpg" alt="">
            </div>

        </div>
    </section>
    <!--Footer Section-->
    <section class="footer">
        <div class="footer-box">
            <h3>coffee Shop</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sint animi sunt voluptas, 
            alias doloribus aperiam pariatur obcaecati voluptate ex voluptatem sit ducimus rerum hic. 
            Inventore ex quos exercitationem perspiciatis!</p>
            <div class="social">
                <a href="#"><i class='bx bx1-facebook-circle'></i></a>
                <a href="#"><i class='bx bx1-twitter'></i></a>
                <a href="#"><i class='bx bx1-instagram-alt'></i></a>
                <a href="#"><i class='bx bx1-tiktoks'></i></a>
            </div>
        </div>

        <div class="footer-box">
            <h3>Support</h3>
            <li><a href="#">Products</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Termas Of Use</a></li>
            <li><a href="#">Products</a></li>
        </div>

        <div class="footer-box">
            <h3>View Guides</h3>
            <li><a href="#">Features</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Blog Post</a></li>
            <li><a href="#">Our Branch</a></li>
        </div>

    <div class="footer-box">
        <h3>Contact</h3>
        <div class="contact">
            <span><i class='bx  bx-location'  ></i>450, Polgahawela, Kegalle</span>
            <span><i class='bx  bx-phone-ring'  ></i>+94 75 2266365</span>
            <span><i class='bx  bx-envelope'  ></i>coffee@shop.com</span>
        </div>
    </div>
    </section>
    <script src="script.js"></script>
</body>
</html>