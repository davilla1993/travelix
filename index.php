<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travelix</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="index.html" class="logo">
                    <img src="./images/logo.png" alt="">
                </a>
                <div class="hamburger-menu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <ul class="nav-list">
                    
                    <li class="nav-item">
                        <a href="#hero" class="nav-link">Home</a>  
                    </li>
                     <li class="nav-item">
                        <a href="#hotels" class="nav-link">About</a>  
                    </li>
                     <li class="nav-item">
                        <a href="#offers" class="nav-link">Offers</a>  
                    </li>
                     <li class="nav-item">
                        <a href="#rooms" class="nav-link">News</a>  
                    </li>
                     <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>  
                    </li>
                   
                </ul>
               
            </nav>
        </div>
    </header>
    
    <main>
        <div class="hero">
            <div class="container">
                <div class="main-heading">
                    <h1 class="title">Discover</h1>
                    <h2 class="subtitle">Luxury hotels</h2>
                </div>
                <a href="#" class="btn btn-gradient">Explore now
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a>
            </div>
        </div>
        
        <section class="booking">
            <div class="container">
                <form action="" class="form book-form">
                    <div class="input-group">
                        <label for="destination" class="input-label">Destination</label>
                        <input type="text" class="input" id="destination">
                    </div>
                     <div class="input-group">
                        <label for="check-in" class="input-label">Check in</label>
                        <input type="date" class="input" id="check-in">
                    </div>
                     <div class="input-group">
                        <label for="check-out" class="input-label">Check-out</label>
                        <input type="date" class="input" id="check-out">
                    </div>
                      <div class="input-group">
                        <label for="adults" class="input-label">Adults</label>
                        <select class="options" id="adults">
                            <option value="0">0</option>
                            <option value="0">1</option>
                            <option value="0">2</option>
                            <option value="0">3</option>
                            <option value="0">4</option>
                            <option value="0">5</option>
                        </select>
                    </div>
                    <div class="input-group">
                      <label for="children" class="input-label">Children</label>
                        <select class="options" id="children">
                            <option value="0">0</option>
                            <option value="0">1</option>
                            <option value="0">2</option>
                            <option value="0">3</option>
                            <option value="0">4</option>
                            <option value="0">5</option>
                        </select>
                    </div>
                
                    <button type="submit" class="btn form-btn btn-purple">Search
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </button> 
                </form>
            </div>
        </section>
    
        <section class="hotels" id="hotels">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">Explore</span>
                    <span class="sub-heading">Our beautiful hotels</span>
                </h5>
                <div class="grid">
                    <div class="grid-item featured-hotels">
                        <img src="./images/hotel_astro_resort.jpg" alt="" class="hotel-image">
                        <h5 class="hotel-name">Astro Hotel</h5>
                        <span class="hotel-price">From $200/Night</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating"></i>
                        </div>
                        <a href="#" class="btn btn-gradient">Book now
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div>
                    
                     <div class="grid-item featured-hotels">
                        <img src="./images/hotel_the_enchanted_garden.jpg" alt="" class="hotel-image">
                        <h5 class="hotel-name">Enchanted Garden</h5>
                        <span class="hotel-price">From $300/Night</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star-half rating"></i>
                        </div>
                        <a href="#" class="btn btn-gradient">Book now
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div>
                         
                     <div class="grid-item featured-hotels">
                        <img src="./images/hotel_the_paradise.jpg" alt="" class="hotel-image">
                        <h5 class="hotel-name">The paradise</h5>
                        <span class="hotel-price">From $350/Night</span>
                        <div class="hotel-rating">
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                            <i class="fas fa-star rating"></i>
                        </div>
                        <a href="#" class="btn btn-gradient">Book now
                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <section class="offer" id="offers">
        <div class="container">
            <div class="offer-content">
                <div class="discount">
                    40% off
                </div>
                <h5 class="hotel-name">The Paradise</h5>
                 <div class="hotel-rating">
                     <i class="fas fa-star rating"></i>
                     <i class="fas fa-star rating"></i>
                     <i class="fas fa-star rating"></i>
                     <i class="fas fa-star rating"></i>
                     <i class="fas fa-star rating"></i>
                </div>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                    
                 <a href="#" class="btn btn-gradient">Redeem offer
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a>
            </div>
        </div>
    </section>
    
    <section class="rooms" id="rooms">
        <div class="container">
            <h5 class="section-head">
                <span class="heading">Luxurious</span>
                <span class="sub-heading">Affordable rooms</span>
            </h5>
            <div class="grid rooms-grid">
                <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="./images/room_1.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200<span class="per-night">Per night</span></span>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        </p>
                        <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                 <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="./images/room_2.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200<span class="per-night">Per night</span></span>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        </p>
                        <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                 <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="./images/room_3.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200<span class="per-night">Per night</span></span>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        </p>
                        <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                 <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="./images/room_4.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200<span class="per-night">Per night</span></span>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        </p>
                        <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                 <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="./images/room_5.jpg" alt="">
                        <h5 class="room-name">Enchanted Garden</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$300<span class="per-night">Per night</span></span>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        </p>
                        <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                 <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="./images/room_6.jpg" alt="">
                        <h5 class="room-name">Enchanted Garden</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$300<span class="per-night">Per night</span></span>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        </p>
                        <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                 <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="./images/room_7.jpg" alt="">
                        <h5 class="room-name">Enchanted Garden</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$300<span class="per-night">Per night</span></span>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        </p>
                        <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                 <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="./images/room_8.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200<span class="per-night">Per night</span></span>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        </p>
                        <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                 <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="./images/room_9.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200<span class="per-night">Per night</span></span>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        </p>
                        <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
                 <div class="grid-item featured-rooms">
                    <div class="image-wrap">
                        <img class="room-image" src="./images/room_10.jpg" alt="">
                        <h5 class="room-name">Astro Hotel</h5>
                    </div>
                    <div class="room-info-wrap">
                        <span class="room-price">$200<span class="per-night">Per night</span></span>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        </p>
                        <a href="#" class="btn rooms-btn">Book now &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact" id="contact">
        <div class="container">
            <h5 class="section-head">
                <span class="heading">Contact</span>
                <span class="sub-heading">Get in touch with us</span>
            </h5>
            <div class="contact-content">
                <div class="traveler-wrap">
                    <img src="./images/traveler.png" alt="">
                </div>
                <form action="" class="form contact-form">
                    <div class="input-group-wrap">
                        <div class="input-group">
                            <input type="text" class="input" placeholder="Name" required>
                            <span class="bar"></span>
                        </div>
                         <div class="input-group">
                            <input type="email" class="input" placeholder="E-mail" required>
                            <span class="bar"></span>
                        </div>
                    </div>
                     <div class="input-group">
                        <input type="text" class="input" placeholder="Subject" required>
                        <span class="bar"></span>
                     </div>
                     <div class="input-group">
                        <textarea class="input" ccols="30" rows="8" placeholder="E-mail" required></textarea>
                        <span class="bar"></span>
                     </div>
                    <button type="submit" class="btn form-btn btn-purple">Send Message
                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                    </button>
                </form>
            </div>
        </div>
     </section>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-content-wrap">
                <a href="index.html" class="logo">
                    <img class="logo-image" src="./images/logo.png" alt="">
                </a>
                <div class="paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                </div>
            </div>
            <div class="social-media-wrap">
                <h4 class="footer-heading">Follow us</h4>
                <div class="social-media">
                    <a href="#" class="sm-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="sm-link"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" class="sm-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="sm-link"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="sm-link"><i class="fab fa-tripadvisor"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
    
    <script src="main.js"></script>
</body>
</html>
