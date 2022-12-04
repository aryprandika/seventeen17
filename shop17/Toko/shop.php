<?php
    require "..//admin/session.php";
    require "../koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./logo 2.png" type="image/gif" sizes="64x64">
    <title>SEVENTEEN 17 | Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <nav>
        <div class="logo">
            <h4>Seventeen 17</h4>
        </div>
        <ul class="nav-links">
            <li><a href="http://localhost/shop17/toko/index.php">Home</a>
            </li>
            <li><a href="http://localhost/shop17/toko/shop.php">Shop</a>
            </li>
            <li><a href="about.html">About</a>
            </li>
            <li><a href="Contact.html">Contact</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="Seventeen 17 (1)/1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="Seventeen 17 (1)/2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="Seventeen 17 (1)/3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="Seventeen 17 (1)/4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="Seventeen 17 (1)/5.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="Seventeen 17 (1)/6.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    
        <div class="container text-center">
            <h3>Product</h3>
            <div class="row mt-5">
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes man/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Air Jordan 1 Low G</h5>
                                <p class="card-text text-truncate">Feel unbeatable, from the tee box to the final putt <br>. Inspired by one of the most iconic sneakers of all time <br>, the Air Jordan 1 G is an instant classic on the course <br>. With Air cushioning underfoot, a Wings logo on the <br> heel and an integrated traction pattern to help you po <br>wer through your swing, it delivers all the clubhouse <br> cool of the original AJ1—plus everything you need to <br> play 18 holes in comfort.</p>
                                <p class="card-text text-harga">Rp. 2.000.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes man/2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Air Jordan 7 Retro SE</h5>
                                <p class="card-text">Kick it back to '92 with this latest iteration of the AJ7, reviving the championship legacy for a new generation of sneakerheads. Come for the throwback style, stay all day for the premium construction and signature Air cushioning.</p>
                                <p class="card-text text-harga">Rp. 2.800.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes man/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike Air Force 1 Mid '07 LX</h5>
                                <p class="card-text">The original high-flier. From era-echoing, '80s construction to bold details and nothin'-but-net style, the AF-1 elevates your game with premium materials, plush ankle padding and an adjustable strap.</p>
                                <p class="card-text text-harga">Rp. 1.700.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes man/9.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Air Jordan 1 Retro High OG</h5>
                                <p class="card-text">Familiar but always fresh, the iconic Air Jordan 1 is remastered for today's sneakerhead culture. This Retro High OG version goes all in with premium leather, comfortable cushioning and classic design details.</p>
                                <p class="card-text text-harga">Rp. 1.900.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes man/4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike Air More Uptempo '96</h5>
                                <p class="card-text">Move over pumpkin spice—the Air More Uptempo is the new seasonal flavour. Ready for autumn, its earthy hues deliver a fresh, harvest-time aesthetic to the '90s icon. Elastic straps over the tongue keep your look sharp whether you rock them laced or unlaced. P.S. visible Nike Air cushioning keeps you cosier than a cappuccino or cardigan ... though both pair well with these go-to kicks.</p>
                                <p class="card-text text-harga">Rp. 2.000.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes man/5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike Air Force 1'07</h5>
                                <p class="card-text">The radiance lives on in the Nike Air Force 1 '07, the basketball original that puts a fresh spin on what you know best: durably stitched overlays, clean finishes and the perfect amount of flash to make you shine.</p>
                                <p class="card-text text-harga">Rp. 1.000.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes man/6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike Blazer Mid '77 By You</h5>
                                <p class="card-text">Styled for the '70s. Loved in the '80s. Classic in the '90s. Ready for your special touch. The Nike Blazer Mid By You lets you customise the timeless design. Choose between a variety of colours on the pebbled leather upper, tailor it with suede accents and personalise it with a message. Go ahead, perfect your outfit..</p>
                                <p class="card-text text-harga">Rp. 1.500.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes man/7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike Air Max Impact 4</h5>
                                <p class="card-text">Elevate your game and your hops. Charged with Max Air cushioning in the heel, this lightweight, secure shoe helps you get off the ground confidently and land comfortably. Plus, rubber wraps up the sides for added durability and stability..</p>
                                <p class="card-text text-harga">Rp. 1.000.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes women/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Air Jordan 1 Mid</h5>
                                <p class="card-text">It's easy being green. This summery AJ1 is decked out in refreshing shades of teal and mint, served in a classic mid-top silhouette. Premium leather and lightweight Air cushioning complete the package with street-ready comfort that lasts all day.</p>
                                <p class="card-text text-harga">Rp. 1.500.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mt-10">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes women/2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike Blazer Mid '77 Vintage</h5>
                                <p class="card-text">Styled for the '70s. Loved in the '80s. Classic in the '90s. Ready for the future. The Nike Blazer Mid '77 Vintage delivers a timeless design that's easy to wear. Its unbelievably crisp leather upper gets broken in beautifully, and is paired with bold retro branding and luscious suede accents for a premium feel. Exposed foam on the tongue and a special midsole finish make it look like you've just pulled them from the history books. Go ahead, perfect your outfit.</p>
                                <p class="card-text text-harga">Rp. 1.200.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes women/3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Air Jordan 1 Retro High OG</h5>
                                <p class="card-text">Relive the moment you made the team with these varsity-jacket-inspired kicks. Chenille fabric on the Swoosh and classic varsity colours celebrate your journey to greatness—and help you look good along the way.</p>
                                <p class="card-text text-harga">Rp. 2.200.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes women/22.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike Dunk Low LL</h5>
                                <p class="card-text">"The dunk" gets Dunked. Celebrating the 20th anniversary of Lisa Leslie's magical on-court moment, a hoops original brings the heat to honour the first woman to dunk in a pro game. Team colours and an embroidered 9 on the heel pay tribute to the championship-winning athleticism that propelled Lisa to be a 3x MVP. An Emerald Green Swoosh logo sends a bolt of energy up the side of the shoe, while colour-matched laces and stitching finish the look.</p>
                                <p class="card-text text-harga">Rp. 1.200.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes women/5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike Air Force 1 High</h5>
                                <p class="card-text">This shoe has everything you love best: crisp overlays, bold hoops style and the perfect amount of flash to let your shoe game shine. The padded, high-cut collar and hook-and-loop closure adds classic comfort, while perforations help keep you cool.</p>
                                <p class="card-text text-harga">Rp. 1.300.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes women/99.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike Air Force 1 High SE</h5>
                                <p class="card-text">What's old is new again—and even better this time around. Celebrate 50 years of Nike innovation and turn back the clock with the original high flier. Baller style with double Swoosh designs keeps the classic look you love. It's nothing-but-net style and then some.</p>
                                <p class="card-text text-harga">Rp. 1.400.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Nike shoes/Nike shoes women/00.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nike Air Force 1 High Unlocked By You</h5>
                                <p class="card-text">Bring yourself to the table with the original high-flyer. Fully customisable, it lets you be as expressive as you want. Choose between an original Swoosh or a crytal-inspired one. Add metallic finishes. Speckle the midsole</p>
                                <p class="card-text text-harga">Rp. 2.000.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php"  class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="converse/pria/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star - Hi Unisex Sneakers Shoes - Black Mono</h5>
                                <p class="card-text">A reliable piece made of super-soft leather so you can wear it as neat or messy. You make up the story</p>
                                <p class="card-text text-harga">Rp. 700.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="converse/pria/2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Converse CHUCK 70 HI Unisex Sneakers Shoes - Black</h5>
                                <p class="card-text">Find the perfect style for you.</p>
                                <p class="card-text text-harga">Rp. 800.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="converse/pria/3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Hi Unisex Sneakers Shoes - Optical White</h5>
                                <p class="card-text">We can safely say that this is an OG basketball shoe, made over 100 years ago. Or that most of the designs are still the same, because an already good design doesn't need to be changed. Or that this shoe became the unofficial sneaker of all your favorite artists and musicians, and they all made it their own thing. There are many other stories, but the most important is not ours but yours. The story of how and where you took your Chuck. This is a long story that has made history, but its future story is up to you. We only make shoes. You make up the story.</p>
                                <p class="card-text text-harga">Rp. 600.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="converse/pria/4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Hi Unisex Sneakers Shoes - Black</h5>
                                <p class="card-text">We can safely say that this is an OG basketball shoe, made over 100 years ago. Or that most of the designs are still the same, because an already good design doesn't need to be changed. Or that this shoe became the unofficial sneaker of all your favorite artists and musicians, and they all made it their own thing. There are many other stories, but the most important is not ours but yours. The story of how and where you took your Chuck. This is a long story that has made history, but its future story is up to you. We only make shoes. You make up the story.</p>
                                <p class="card-text text-harga">Rp. 600.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="converse/pria/5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Hi Unisex Sneakers Shoes - Red</h5>
                                <p class="card-text"> We can safely say that this is an OG basketball shoe, made over 100 years ago. Or that most of the designs are still the same, because an already good design doesn't need to be changed. Or that this shoe became the unofficial sneaker of all your favorite artists and musicians, and they all made it their own thing. There are many other stories, but the most important is not ours but yours. The story of how and where you took your Chuck. This is a long story that has made history, but its future story is up to you. We only make shoes. You make up the story.</p>
                                <p class="card-text text-harga">Rp. 600.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="converse/woman/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck 70 Hi Unisex Sneakers Shoes - Sunflower/Black/Egret</h5>
                                <p class="card-text">The cushion is softer, the canvas is stronger, and it is as versatile as it is used. The Chuck 70 is based on the original 1970's design, with premium materials and exceptional attention to detail. We added an extra-cushioned insole for arch support and stability, and used winged tongue seams on the 12-ounce canvas for durability. Can be used all day, every day.</p>
                                <p class="card-text text-harga">Rp. 600.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="converse/woman/2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck 70 Ox Unisex Sneakers Shoes - Parchment/Garnet/Egret</h5>
                                <p class="card-text">The cushion is softer, the canvas is stronger, and it is as versatile as it is used. The Chuck 70 is based on the original 1970's design, with premium materials and exceptional attention to detail. We added an extra-cushioned insole for arch support and stability, and used winged tongue seams on the 12-ounce canvas for durability. Can be used all day, every day.</p>
                                <p class="card-text text-harga">Rp. 800.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="converse/woman/3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Dainty GS Ox Women's Sneakers Shoes</h5>
                                <p class="card-text">It's a thinner, lighter, and more beachy version of the authentic Chuck—re-engineered to perfection. The Dainty sneaker underwent a complete revamp of proportions with eyelets, laces and tongue tags getting prettier to match the ultra low style we love. A smaller toe guard and altered foxing height give this shoe a cleaner, feminine silhouette. Rainbow accents and homemade details add a subtle spectrum of flavors. Even better.</p>
                                <p class="card-text text-harga">Rp. 600.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="converse/woman/4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">CONVERSE CHUCK TAYLOR ALL STAR MOVE CANVAS PLATFORM WOMEN'S SNEAKERS - WHITE/WHITE/WHITE</h5>
                                <p class="card-text">
                                    YOUR STEP. You already know our top of the canvas upper, diamond pattern outsole and signature logo. We streamlined this iconic silhouette, added fluid, sports-inspired design lines, and dropped it into an ultra-lightweight EVA cup, giving you the Chuck Taylor All Star movement. With extra comfort and height. Doesn't stop you.</p>
                                    <p class="card-text text-harga">Rp. 700.000</p>
                                    <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="converse/woman/5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Ox Unisex Sneakers Shoes - Optical White</h5>
                                <p class="card-text">It started when we cut the material for the original High Top Chucks, turning them into a low top basketball shoe. Then the sneaker moved from the court to the street, cementing its status as an everyday icon. What happened next with Low Top Chucks? Up to you. These shoes are versatile, classic and totally yours wherever you go, whatever you want, and whenever. We only make shoes. You make up the story.</p>
                                <p class="card-text text-harga">Rp. 600.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/pria/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adidas Breaknet</h5>
                                <p class="card-text">No more wrong footwork on and off the court in this tennis-inspired shoe. These adidas shoes have a classic 3-Stripes upper for a timeless look. Designed for comfort with a soft sockliner and textile lining.</p>
                                <p class="card-text text-harga">Rp. 600.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/pria/2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adidas Centennial 85 Low</h5>
                                <p class="card-text">When the adidas Centennial pulled up to the hardwood decades ago, it quickly set itself apart from the rest. This redesigned version of the shoes honours those roots with a suede upper that nods to their smart beginnings. Perforated details on the toe and the flex on the heel add a pop of retro texture, just like the grooved tread. And you can't miss the 3-Stripes style along the sides.Made in part with recycled content generated from production waste, e.g. cutting scraps, and post-consumer household waste to avoid the larger environmental impact of producing virgin content.</p>
                                <p class="card-text text-harga">Rp. 1.500.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/pria/3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adidas Duramo SL 2.0</h5>
                                <p class="card-text">From morning sessions at the yoga studio to daily errands to afternoons with friends, your feet will stay comfortable and stylish in these adidas shoes. Pair with your favorite tights for the ultimate athletic-casual look. A mesh upper helps you stay cool, while super-light cushioning pampers every step of the way. Made with a range of recycled materials, this shoe's upper contains at least 50% recycled content. This product represents just one of our solutions to help end plastic waste pollution.</p>
                                <p class="card-text text-harga">Rp. 700.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/pria/4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adidas NMD_V3</h5>
                                <p class="card-text">You're not living in the past, so why should your trainers? A day spent in these adidas NMD_V3 Shoes is a day spent boldly pushing forward. A rubber outsole is the perfect foundation for this innovative design while a responsive BOOST midsole offers high-level comfort and a considerable return of energy. Lace these on when you want to be inspired, energised and motivated. This shoe's upper is made with a high-performance yarn which contains at least 50% Parley Ocean Plastic — reimagined plastic waste, intercepted on remote islands, beaches, coastal communities and shorelines, preventing it from polluting our ocean. The other 50% of the yarn is recycled polyester.</p>
                                <p class="card-text text-harga">Rp. 2.200.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/pria/5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">STRUTTER</h5>
                                <p class="card-text">Delivering the dadliest of dad vibes, these shoes have a chunky design that keeps you comfortable throughout your day. The smooth leather upper is detailed with cutouts, overlays and signature 3-Stripes. It's anchored on a high-profile sculpted midsole and a grippy outsole.</p>
                                <p class="card-text text-harga">Rp. 600.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/pria/6.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adidas VL Court 2.0</h5>
                                <p class="card-text">These adidas sneakers take their cues from centre court, but they'll gain just as many admiring glances strolling along city streets. With their clean, smooth lines and hints of subtle colour, they team effortlessly with everything from workout shorts to chinos, track pants to jeans.Made with a series of recycled materials, this upper features at least 50% recycled content. This product represents just one of our solutions to help end plastic waste.</p>
                                <p class="card-text text-harga">Rp. 700.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/wanitaa/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adidas Adi2000</h5>
                                <p class="card-text">Didn't you have time to wear thick shoes and play pixelated video games back in the 2000's? Now, here's your chance. To celebrate an era when gamer was cool, these adidas shoes feature a glitter heart graphic on the sockliner and a bold look. Is it velor? Yes, the 3-Stripes bring it back to the track suits that everyone was wearing back then. Some are made from recycled content generated from production waste, such as scrap, and post-consumer household waste to avoid a greater impact on the environment when producing virgin content.</p>
                                <p class="card-text text-harga">Rp. 1.700.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/wanitaa/2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adidas Astir</h5>
                                <p class="card-text">Winter, meet your match. The adidas Astir Shoes aren't messing around when it comes to comfort in the colder months. With the triple threat of a durable corduroy upper, high-traction grip outsole and synthetic leather mud guard, they have you covered for whatever weather the day throws your way.</p>
                                <p class="card-text text-harga">Rp. 1.300.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/wanitaa/3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adidas Galaxy 6</h5>
                                <p class="card-text">It was true then and now. adidas designs shoes specifically for athletes. These running shoes can be worn anytime, but are still packed with some innovative technology. A lightweight mesh upper is breathable, and a Cloudfoam midsole provides a flexible, cushioned feel. The soft sockliner keeps your foot feeling supported, no matter how much you wear it on long walks or workouts. Crafted from a range of recycled materials, the upper contains at least 50% recycled content. This product represents just one of our solutions to help end plastic waste pollution.</p>
                                <p class="card-text text-harga">Rp. 500.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/wanitaa/4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adidas Stan Smith</h5>
                                <p class="card-text">These adidas shoes first graced the hard court more than five decades ago, and now they're all grown up. Still simple. Still effortless. This pair has a few new details to get excited about. Check out the layered colours on the heel tab and tongue. Enjoy the retro nod of a gum rubber outsole. The final touch? Wooden lace tips. You can pair these shoes with every outfit you own and every outing you're planning. They're always fresh.</p>
                                <p class="card-text text-harga">Rp. 1.500.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="adidas/adidas/wanitaa/5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Superstar Bonega</h5>
                                <p class="card-text">These aren't just any shoes. These are arguably the most iconic shoes adidas has ever made — an instantly recognisable design shaped over 50 years and by millions of people. This version happens to be shaped in collaboration with the band KING GNU and famed Japanese streetwear brand atmos. The rubber-shell-toe trainers get a colour update, standing out in Altered Blue that makes the signature serrated 3-Stripes really pop. A translucent outsole gives a peek at the colourful graphic that makes an impression from beneath as you move.</p>
                                <p class="card-text text-harga">Rp. 1.800.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Uniqlo/Uniqlo/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ankle Pants</h5>
                                <p class="card-text">Slim and stretchy Men's Pants. Made of comfortable cotton.</p>
                                <p class="card-text text-harga">Rp. 400.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Uniqlo/Uniqlo/2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Chinos Pants</h5>
                                <p class="card-text">Men's chino pants are slim, slim and stretchy so they feel comfortable to wear.</p>
                                <p class="card-text text-harga">Rp. 400.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Uniqlo/Uniqlo/3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jeans High Rise Skinny Ultra Stretch</h5>
                                <p class="card-text">Women's jeans, the design is updated to a high rise for a more beautiful fit.</p>
                                <p class="card-text text-harga">Rp. 400.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Uniqlo/Uniqlo/4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">3D Cut Pocket Parka Jacket UV Protection</h5>
                                <p class="card-text">Men's Parka jackets with updated materials making them suitable for sports, outdoor and casual.</p>
                                <p class="card-text text-harga">Rp. 300.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Uniqlo/Uniqlo/5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">T-Shirt Oversize Line</h5>
                                <p class="card-text">Men's T-shirt that feels soft and fresh when worn. Versatile basic items. For health reasons, this product cannot be returned</p>
                                <p class="card-text text-harga">Rp. 100.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="zara/zara/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blazer Tuxedo Suit</h5>
                                <p class="card-text">
                                    Straight-fit blazers. V-shaped lapel collar with long sleeves and buttoned cuffs. Assorted zip pocket on hip and pocket details on the inside. The bottom with a center slit at the back. Closing the front of the row button.</p>
                                    <p class="card-text text-harga">Rp. 2.300.000</p>
                                    <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="zara/zara/2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Straight fit cargo pants</h5>
                                <p class="card-text">Straight fit trousers. Various pockets on the front and detailed lapel pockets on the back. Applications in the form of various patch pockets with lapels on the thighs. Front closure with zipper and buttons.</p>
                                <p class="card-text text-harga">Rp. 800.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="zara/zara/3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">limited edition trousers</h5>
                                <p class="card-text">Trousers with low detail that are easy to adjust with a variety of buttons. Waist with pleats in the front. Various pockets on the side and details of various paspoil pockets on the back. Zipper and button front closure.</p>
                                <p class="card-text text-harga">Rp. 1.400.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="zara/zara/4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Flanel Jacket</h5>
                                <p class="card-text">
                                    The jacket is made of a stitched design with flannel seams. Lapel collar and long sleeves at elasticated cuffs. The bottom is easily adjustable on the front. Closing the front of the row button.</p>
                                    <p class="card-text text-harga">Rp. 600.000</p>
                                    <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="zara/zara/5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pocket Leather Jacket</h5>
                                <p class="card-text">The jacket is made of leather. Lapel collar and long sleeves. Various patch pockets with flaps on the hips. Details in the form of an inside pocket. Worn effect on seams. Various rib hems. Zipper front closure is hidden behind a press button lapel.</p>
                                <p class="card-text text-harga">Rp. 1.500.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Levis/Levis/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LEVI'S WOMEN'S SILVERTAB™ HIGH WAISTED MOM JEANS</h5>
                                <p class="card-text">Levi's SilverTab™ brings back the classic oversized 1990's style. Here are the timeless Mom Jeans! Experience a cool look that makes whatever your style goes with it looks so much cooler. Look vintage and confident with the combination of high waist, taper leg, and signature SilverTab</p>
                                <p class="card-text text-harga">Rp. 700.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Levis/Levis/2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LEVI'S MEN'S 501 ORIGINAL JEANS</h5>
                                <p class="card-text">501s® with the iconic straight leg classic style is the blue print of every type of jeans that is currently developing. In 1873, Levi Strauss himself introduced the 501s®. A style that will never go out of style.</p>
                                <p class="card-text text-harga">Rp. 1.000.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Levis/Levis/3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LEVI'S MEN'S SILVERTAB LOOSE SHORTS</h5>
                                <p class="card-text">These ultra-comfortable baggy shorts are a 90s-inspired suit. Made from 100% cotton with extra space that provides unlimited comfort by showing a neat hem. Material: 100% Cotton</p>
                                <p class="card-text text-harga">Rp. 400.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Levis/Levis/4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LEVI'S WOMEN'S EX-BOYFRIEND TRUCKER JACKET</h5>
                                <p class="card-text">The Levi's Ex-Boyfriend Trucker Jacket is a modification of the original Trucker Jacket with the addition of an extra-large silhouette that fits perfectly over sweaters and hoodies. Equipped with a more elongated cut to create an oversized-fit look.</p>
                                <p class="card-text text-harga">Rp. 700.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <img src="Levis/Levis/5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LEVI'S MEN'S VINTAGE FIT TRUCKER JACKET</h5>
                                <p class="card-text">With a worn out look inspired by the 90's Trucker Jacket. The iconic Levi's® jean jacket that's been a symbol for decades. With a boxy silhouette, this Vintage Fit Trucker Jacket is made with more room in the shoulders and sleeves. Designed with a boxy and vintage silhouette for a stylish throwback feel that's perfect for Levi's® branded metal buttons and tapered "V" stitching.</p>
                                <p class="card-text text-harga">Rp. 1.600.000</p>
                                <a href="http://localhost/shop17/pesanan/haha.php" class="btn btn-primary">Buy Now</a>
                            </div>
                    </div>
                </div>

            </div>
    </div>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>