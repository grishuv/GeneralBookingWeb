<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desichicken Farm</title>

  <!-- 
    - favicon
  -->
  <link rel="icon" href="/favicon_io/favicon.ico" />

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/logo.png">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-3.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">

  <div class="alert">
      <div class="container">
        <p class="alert-text">Unlock Exclusive Special Deals, Only Available on Occasions!</p>
      </div>
    </div>

    <div class="header-top" data-header>
      <div class="container">

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </button>

        <div class="input-wrapper">
          <input type="search" name="search" placeholder="Search product" class="search-field">

          <button class="search-submit" aria-label="search">
            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <a href="#" class="logo">
          <p class="logo-text">DESI CHICKEN FARM</p>
        </a>

        <nav class="navbar">
          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link has-after">Home</a>
            </li>

            <li>
              <a href="#collection" class="navbar-link has-after">Collection</a>
            </li>

            <li>
              <a href="#shop1" class="navbar-link has-after">Book</a>
            </li>

            <li>
              <a href="#offer" class="navbar-link has-after">Offer</a>
            </li>

            <li>
              <a href="#reviews" class="navbar-link has-after">Reviews</a>
            </li>

          </ul>
        </nav>

      </div>
    </div>

  </header>





  <!-- 
    - #MOBILE NAVBAR
  -->

  <div class="sidebar">
    <div class="mobile-navbar" data-navbar>

      <div class="wrapper">
        <a href="#" class="logo">
          <img src="./assets/images/logo.png" width="179" height="26" alt="Glowing">
        </a>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>

      <ul class="navbar-list">

        <li>
          <a href="#home" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li>
          <a href="#collection" class="navbar-link" data-nav-link>Collection</a>
        </li>

        <li>
          <a href="#shop1" class="navbar-link" data-nav-link>Book</a>
        </li>

        <li>
          <a href="#offer" class="navbar-link" data-nav-link>Offer</a>
        </li>

        <li>
          <a href="#reviews" class="navbar-link" data-nav-link>Reviews</a>
        </li>

      </ul>

    </div>

    <div class="overlay" data-nav-toggler data-overlay></div>
  </div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="hero" data-section>
        <div class="container">

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4)),url('./assets/images/hero-banner-1.jpg');">

                <div class="card-content">

                  <h1 class="h1 hero-title">
                    POULTRY <br>
                    FARM
                  </h1>

                  <p class="hero-text">
                    Pure organic desi chicken farm maintain with hygiene environment and chemical free feeding.
            Each and every Bird is healthy and in free range area.
                  </p>

                  <p class="price"></p>

                  <a href="sign in-up.php" class="btn btn-primary">Book Now</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4)),url('./assets/images/hero-banner-2.jpg');">

                <div class="card-content">

                  <h1 class="h1 hero-title">
                    BONSAI PLANTS<br>
                   
                  </h1>

                  <p class="hero-text">
                    A PERFECT BONSAI PLANTS WITH FLOWERS THROUGH OUT THE YEARS. THIS PLANTS CAN SURVIVE IN ANY SEASON AND IN ANY CONDITIONS WITH LITTLE CARE.
                  </p>

                  <p class="price"></p>

                  <a href="sign in-up.php" class="btn btn-primary">Book Now</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="hero-card has-bg-image" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4)),url('./assets/images/hero-banner-3.jpg');">

                <div class="card-content">

                  <h1 class="h1 hero-title">
                    BIO ORGANIC <br>
                    FERTILIZER 
                  </h1>

                  <p class="hero-text">
                    A HIGH GRADE FERTILIZER FOR YOUR PLANTS WHICH BOOST GROWTH AND NUTRITION WITH ALL NATURAL SOURCE PRESENT IN IT.
                  </p>

                  <p class="price"></p>

                  <a href="sign in-up.php" class="btn btn-primary">Book Now</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #COLLECTION
      -->

      <section class="section collection" id="collection" aria-label="collection" data-section>
        <div class="container">

          <ul class="collection-list">

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">POULTRY FARM</h2>

                <p class="card-text">We Are Qualified & Professional</p>

                <a href="collection.html" class="btn-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-2.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">BIO ORGANIC FERTILIZER</h2>

                <p class="card-text">High Grade Fertilizer</p>

                <a href="bio organic.html" class="btn-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-3.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">BONSAI PLANTS </h2>

                <p class="card-text">Collection</p>

                <a href="bonsai.html" class="btn-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-1.jpg')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #SHOP
      -->

      <section class="section shop" id="shop1" aria-label="shop" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Our Poultry Farm Products </h2>

            <a href="#" class="btn-link">
              <span class="span">Book All Products</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                <a href="kadaknath.html">
                  <img src="./assets/images/product-01.jpg" width="540" height="720" loading="lazy"
                    alt="Kadaknath chicken" class="img-cover">
                </a>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="kadaknath.html" class="card-title">Kadaknath chicken</a>
                  </h3>
                  <div class="card-rating">

<div class="rating-wrapper" aria-label="5 start rating">
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
</div>

<p class="rating-text"></p>

</div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                <a href="assel.html">
                  <img src="./assets/images/product-02.jpg" width="540" height="720" loading="lazy"
                    alt="Assel fighter chicken" class="img-cover">
                </a>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="assel.html" class="card-title">Assel fighter chicken</a>
                  </h3>
                  <div class="card-rating">

<div class="rating-wrapper" aria-label="5 start rating">
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
</div>

<p class="rating-text"></p>

</div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                <a href="egg.html">
                  <img src="./assets/images/product-03.jpg" width="540" height="720" loading="lazy"
                    alt="Desi eggs" class="img-cover">
                </a>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="egg.html" class="card-title">Desi eggs</a>
                  </h3>

                  <div class="card-rating">

<div class="rating-wrapper" aria-label="5 start rating">
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
</div>

<p class="rating-text"></p>

</div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                <a href="desi-chicken.html">
                  <img src="./assets/images/product-04.jpg" width="540" height="720" loading="lazy"
                    alt="Desi Chicken" class="img-cover">
                </a>
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="desi-chicken.html" class="card-title">Desi Chicken</a>
                  </h3>

                  <div class="card-rating">

<div class="rating-wrapper" aria-label="5 start rating">
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
</div>

<p class="rating-text"></p>

</div>

                </div>

              </div>
            </li>
          </ul>

        </div>
      </section>

      <section class="section shop" id="shop2" aria-label="shop" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Bio Organic Fertilizer</h2>

            <a href="#" class="btn-link">
              <span class="span">Book All Products</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card-bio">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                <a href="bio organic.html">
                  <img src="./assets/images/product-05.jpg" width="540" height="720" loading="lazy"
                    alt="Bio organic fertilizer" class="img-cover">
                </div>

                <div class="card-content">

                  <div class="price">

                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="bio organic.html" class="card-title">Bio Organic Fertilizer</a>
                  </h3>

                  <div class="card-rating">

<div class="rating-wrapper" aria-label="5 start rating">
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
</div>

<p class="rating-text"></p>

</div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card-bio">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                <a href="bio organic.html">
                  <img src="./assets/images/bio-1.jpg" width="540" height="720" loading="lazy"
                    alt="Bio organic fertilizer" class="img-cover">
                </div>

                <div class="card-content">

                  <div class="price">

                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="bio organic.html" class="card-title">Bio Organic Fertilizer</a>
                  </h3>

                  <div class="card-rating">

<div class="rating-wrapper" aria-label="5 start rating">
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
</div>

<p class="rating-text"></p>

</div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card-bio">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                <a href="bio organic.html">
                  <img src="./assets/images/bio-2.jpg" width="540" height="720" loading="lazy"
                    alt="Bio organic fertilizer" class="img-cover">
                </div>

                <div class="card-content">

                  <div class="price">

                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="bio organic.html" class="card-title">Bio Organic Fertilizer</a>
                  </h3>

                  <div class="card-rating">

<div class="rating-wrapper" aria-label="5 start rating">
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
</div>

<p class="rating-text"></p>

</div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card-bio">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                <a href="bio organic.html">
                  <img src="./assets/images/bio-3.jpg" width="540" height="720" loading="lazy"
                    alt="Bio organic fertilizer" class="img-cover">
                </div>

                <div class="card-content">

                  <div class="price">

                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="bio organic.html" class="card-title">Bio Organic Fertilizer</a>
                  </h3>

                  <div class="card-rating">

<div class="rating-wrapper" aria-label="5 start rating">
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
  <ion-icon name="star" aria-hidden="true"></ion-icon>
</div>

<p class="rating-text"></p>

</div>

                </div>

              </div>
            </li>


          </ul>

        </div>
      </section>



      <section class="section shop" id="shop3" aria-label="shop" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Nursery Plants</h2>

            <a href="#" class="btn-link">
              <span class="span">Book All Products</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-06.jpg" width="540" height="720" loading="lazy"
                    alt="Bonsai Plants" class="img-cover">
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="#shop3" class="card-title">Dessert Rose Plants</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text"></p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-07.jpg" width="540" height="720" loading="lazy"
                    alt="Bonsai Plants" class="img-cover">
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="#shop3" class="card-title">Fiscus Bonsai (trunk)</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text"></p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-08.jpg" width="540" height="720" loading="lazy"
                    alt="Bonsai Plants" class="img-cover">
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="#shop3" class="card-title">Avacado Bonsai</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text"></p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-09.jpg" width="540" height="720" loading="lazy"
                    alt="Bonsai Plants" class="img-cover">
                </div>

                <div class="card-content">

                  <div class="price">
                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="#shop3" class="card-title">Jade Plant Bonsai</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text"></p>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                  <img src="./assets/images/product-10.jpg" width="540" height="720" loading="lazy"
                    alt="Bonsai Plants" class="img-cover">

                </div>

                <div class="card-content">

                  <div class="price">

                    <span class="span"></span>
                  </div>

                  <h3>
                    <a href="#shop3" class="card-title">Banayan Tree Bonsai</a>
                  </h3>

                  <div class="card-rating">

                    <div class="rating-wrapper" aria-label="5 start rating">
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                      <ion-icon name="star" aria-hidden="true"></ion-icon>
                    </div>

                    <p class="rating-text"></p>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>


<!-- 
  - #REVIEWS
-->

<section class="section reviews" id="reviews" aria-label="reviews" data-section>
  <div class="container">

    <div class="review-content">
      <div class="text-reviews">
        <h2 class="section-title">Customer Reviews</h2>
        <?php
        // Include your database connection file
        include 'db_connection.php';

        // Function to fetch reviews from the database
        function getReviews($conn) {
          $sql = "SELECT * FROM reviews ORDER BY created_at DESC"; // Assuming 'reviews' is your table name
          $result = mysqli_query($conn, $sql);

          $reviews = array();
          while ($row = mysqli_fetch_assoc($result)) {
            $reviews[] = $row;
          }
          return $reviews;
        }

        // Fetch reviews
        $reviews = getReviews($conn);

        foreach ($reviews as $review): ?>
          <div class="review">
            <p class="review-text">"<?php echo $review['review_text']; ?>"</p>
            <p class="review-author"><?php echo '- ' . $review['author']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="video-reviews">
        <h2 class="section-title">Video Reviews</h2>
        <div class="video-review">
          <!-- You can embed video reviews dynamically here -->
          <!-- Example: -->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- Add more video reviews as needed -->
      </div>
    </div>

  </div>
</section>



      <!-- 
        - #BANNER
      -->

      <section class="section banner" id="google-map" aria-label="banner" data-section >
        <div class="container">

          <ul class="banner-list">

            <li>
              <div class="banner-card banner-card-1 has-before hover:shine">

                <p class="card-subtitle">DESICHICKEN FARM</p>

                <h2 class="h2 card-title">Find us in Nagpur. Click Here!</h2>

                <a href="https://maps.app.goo.gl/fLfSZgtU5WbxVV8V7" class="btn btn-secondary">Google-map Location</a>

                <div class="has-bg-image" style="background-image:  linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4)),url('./assets/images/banner-1.jpg');"></div>

              </div>
            </li>

            <li>
              <div class="banner-card banner-card-2 has-before hover:shine">

                <h2 class="h2 card-title">NURSERY AND BIO ORGANIC FERTILIZER</h2>

                <p class="card-text">
                  Bonsai plant supplier
                </p>

                <a href="https://maps.app.goo.gl/Drx4tKqzeaMSSqyTA" class="btn btn-secondary">Google-map Location</a>

                <div class="has-bg-image" style="background-image: url('./assets/images/banner-2.jpg')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURE
      -->

      <section class="section feature" aria-label="feature" data-section>
        <div class="container">

          <h2 class="h2-large section-title">Why Shop with DESI CHICKEN FARM?</h2>

          <ul class="flex-list">

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-1.jpg" width="204" height="236" loading="lazy" alt="Guaranteed PURE"
                  class="card-icon">

                <h3 class="h3 card-title">Guaranteed PURE</h3>

                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain harsh or toxic  and  chemical ingredients
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-2.jpg" width="204" height="236" loading="lazy"
                  alt="Completely Cruelty-Free" class="card-icon">

                <h3 class="h3 card-title">Completely Cruelty-Free</h3>

                <p class="card-text">
                eco friendly atmosphere and free range for better survival and all our birds healthy and fit 
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-3.jpg" width="204" height="236" loading="lazy"
                  alt="Ingredient Sourcing" class="card-icon">

                <h3 class="h3 card-title">Ingredient Sourcing</h3>

                <p class="card-text">
                we feed our chicken fresh vegetables fruits grains and millets with full hygiene and chemical free products with naturally avabilabe sorcees like moringa tree guvava tree wheat grass maze grass.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>

      

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" data-section>
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <p class="footer-list-text">
              Find a location nearest you. See <a href="https://maps.app.goo.gl/fLfSZgtU5WbxVV8V7" class="link">Our Stores</a>
            </p>
          </li>

          <li>
            <p class="footer-list-text bold">+91 9039862529</p>
          </li>

          <li>
            <p class="footer-list-text"><b>Address:</b><br>108, Kamgar Nagar, Dixit Nagar Road, besides Taj Enterprises, Budhwari Bazar Road, near Kids Zone School, Nagpur, Maharashtra. Pin 440026</p>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Useful links</p>
          </li>

          <li>
            <a href="#shop1" class="footer-link">Poultry Farm Products</a>
          </li>

          <li>
            <a href="#shop2" class="footer-link">Bio Organic Fertilizer</a>
          </li>

          <li>
            <a href="#shop3" class="footer-link">Nursery Plants</a>
          </li>

          <li>
            <a href="#google-map" class="footer-link">Google-map location</a>
          </li>

          <li>
            <a href="#reviews" class="footer-link">Reviews</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Infomation</p>
          </li>

          <li>
            <a href="about-us.php" class="footer-link">About us</a>
          </li>

          <li>
            <a href="shipping and delivery.php" class="footer-link">Shipping and Delivery</a>
          </li>

          <li>
            <a href="cancellation and refund policy.php" class="footer-link">Cancellation and refund policy</a>
          </li>

          <li>
            <a href="terms and condition.php" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="privacy-policy.html" class="footer-link">Privacy Policy</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="newsletter-title">Interact with us for inquiries</p>

          <p class="newsletter-text">
            Submit your queries below to inform us about any issues you're encountering.
          </p>

          <form action="inquiries.php" method="post" class="newsletter-form">

            <input type="text" name="queries" placeholder="Enter your queries here" required
              class="email-field">
              <input type="email" name="email_address" placeholder="Enter your email address" required
              class="email-field">

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>

      </div>

      <footer>
    <div class="footer-bottom">
        <div class="wrapper">
            <p class="copyright">
                &copy; 2024 Desi chicken farm
            </p>

            <ul class="social-list">
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>

        <a href="#" class="logo">
        <p class="logo-text">DESI CHICKEN FARM</p>
        </a>

        <img src="./assets/images/pay.png" width="313" height="28" alt="available all payment method" class="w-100">
    </div>
</footer>




  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>