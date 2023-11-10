<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

            <!-- header section -->

    <header class="header">
        <div class="header-1">
            <a href="#" class="logo"><img src="images/Logo.png" alt=""></a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
            </div>
            
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">reviews</a>
                <a href="#blogs">blogs</a>
            </nav>
        </div>
    </header>

            <!-- Bottom navbar -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>

                <!-- login form -->

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

            <a href="register_form.php">click heare</a>
        
            

        <!-- <form action="">
            <span>Username</span>
            <input type="email" name="" class="box" placeholder="Enter your email" id="">
            <span>Password</span>
            <input type="password" name="" class="box" placeholder="Enter your password" id="">
            <div class="chechbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <p>forget password?<a href="#">Click here</a></p>
            <p>don't have an account ? <a href="#">Create one</a></p>
        </form> -->
    </div>

                 <!-- home section -->

    <section class="home" id="home">

        <div class="row">
            <div class="content">
                <h3>upto 75% off</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Optio provident porro, aliquam veritatis ea quas unde, ipsum 
                    quasi recusandae tempore reprehenderit libero dignissimos,
                     expedita autem fuga quia a ut quaerat?</p>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="swiper brands-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="images/Brand/brand-1.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/Brand/brand-2.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/Brand/brand-3.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/Brand/brand-4.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/Brand/brand-5.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/Brand/brand-6.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/Brand/brand-7.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/Brand/brand-8.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="images/Brand/brand-9.png" alt=""></a>
                </div>
                <img src="" class="stand" alt="">
            </div>
        </div>

    </section>

                <!-- icon section -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-paper-plane"></i>
            <div class="content">
                <h3>Free shipping</h3>
                <p>order over $100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>Secure payment</h3>
                <p>100% secure payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>Easy returns</h3>
                <p>10 days return</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div>
    </section>


        <!-- featured section -->

    <section class="featured" id="featured">

        <h1 class="heading"><span>featured items</span></h1>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/G1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured items</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/G2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured items</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/G3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured items</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/G4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured items</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/G5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured items</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/G6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>featured items</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

                <!-- newsletter section -->

    <section class="newsletter">

        <form action="">
            <h3>subscribe for lateset updates</h3>
            <input type="email" name="" placeholder="Enter your email" id="" class="box">
            <input type="submit" value="subscribe" class="btn">
        </form>

    </section>

                    <!-- arrivals -->
    
    <section class="arrivals" id="arrivals">

        <h1 class="heading"><span>new arrivals 2023</span></h1>

        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="images/s1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="images/s2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="images/s3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="images/s4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="images/s5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="images/s6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="images/s7.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="images/s8.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="images/s9.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="images/s10.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>
        </div>

    </section>

            <!-- deal section -->

    <section class="deal">

        <div class="content">
            <h3>deal of the day</h3>
            <h1>upto 50% off</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dignissimos similique est atque magnam culpa consequatur,
                 odit optio adipisci ratione vitae, inventore rem debitis
                  error commodi fugiat aliquid qui corrupti ea.</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="image">
            <img src="images/d1.jpg" alt="">
        </div>

    </section>

               <!-- reviews section -->

    <section class="reviews" id="reviews">

        <h1 class="heading"><span>client's reviews</span></h1>

        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="images/r1.jpeg" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ab repellat voluptatum provident laboriosam quasi rerum 
                        quas accusantium ex voluptate, eum quo perferendis nemo 
                        dicta, modi, sit quis possimus iusto sunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/r2.jpeg" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ab repellat voluptatum provident laboriosam quasi rerum 
                        quas accusantium ex voluptate, eum quo perferendis nemo 
                        dicta, modi, sit quis possimus iusto sunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/r3.jpeg" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ab repellat voluptatum provident laboriosam quasi rerum 
                        quas accusantium ex voluptate, eum quo perferendis nemo 
                        dicta, modi, sit quis possimus iusto sunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/r4.jpeg" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ab repellat voluptatum provident laboriosam quasi rerum 
                        quas accusantium ex voluptate, eum quo perferendis nemo 
                        dicta, modi, sit quis possimus iusto sunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/r5.jpeg" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ab repellat voluptatum provident laboriosam quasi rerum 
                        quas accusantium ex voluptate, eum quo perferendis nemo 
                        dicta, modi, sit quis possimus iusto sunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/r6.jpg" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ab repellat voluptatum provident laboriosam quasi rerum 
                        quas accusantium ex voluptate, eum quo perferendis nemo 
                        dicta, modi, sit quis possimus iusto sunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="images/r7.jpeg" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ab repellat voluptatum provident laboriosam quasi rerum 
                        quas accusantium ex voluptate, eum quo perferendis nemo 
                        dicta, modi, sit quis possimus iusto sunt?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

    </section>

            <!-- blogs section -->

    <section class="blogs" id="blogs">

        <h1 class="heading"><span>our blogs</span></h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="images/b1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Asia Cup 2023 Predictions – Who will win the tournament?</h3>
                        <p>Winner: Pakistan
                            India deservedly start the tournament as favourites. But, this will be the time Pakistan break their Asia Cup drought dating back to 2012.
                            Pakistan, the number one-ranked side in ODIs, look settled. Their middle order is one area of possible concern, but the length of their 
                            batting order is a big advantage. Also, their pace battery offers different points of attack, while their spinners are wily customers. 
                            Add to that the consistent Babar Azam and Imam-ul-Haq, and Pakistan should have decent starts more often than not.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="images/b2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>What does the future of cricket look like according to fans?</h3>
                        <p>A huge 91.3% of respondents said that Test cricket will still be alive in 2037. The game’s most traditional format, which has delivered 
                            endless memories over the years, is also at a crossroads given the rise of domestic leagues around the world. However, fans believe the 
                            format still has a place as it is the ultimate test of skill and can balance out the incredible pace at which white-ball cricket moves.
                            But, Tests are expensive to host for boards around the world. Whether they are financially feasible enough for nations other than England,
                             Australia and India remains to be seen. Perhaps there is a need for the ICC to step in and make Test cricket as accessible as possible 
                             for fans. In fact, one of the respondents put forward a Netflix style subscription for ICC.tv to host Tests. Other respondents called 
                             for more day/night Tests, more affordable tickets, a reduction in T20Is and better marketing.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="images/b2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Placeat debitis vel tenetur aut fugiat iusto expedita 
                            dolore at quidem! Veniam, voluptatum dignissimos ullam 
                            non laborum sapiente alias obcaecati libero quo!</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="images/b2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Placeat debitis vel tenetur aut fugiat iusto expedita 
                            dolore at quidem! Veniam, voluptatum dignissimos ullam 
                            non laborum sapiente alias obcaecati libero quo!</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="images/b1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Placeat debitis vel tenetur aut fugiat iusto expedita 
                            dolore at quidem! Veniam, voluptatum dignissimos ullam 
                            non laborum sapiente alias obcaecati libero quo!</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

                <!-- footer section -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>our location</h3>
                <a href="#"><i class="fas fa-map-marker-alt"></i>india</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>sri lanka</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>USA</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>russia</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>japan</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>france</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"><i class="fas fa-map-marker-alt"></i>home</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>featured</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>arrivals</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>reviews</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>blogs</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-map-marker-alt"></i>account info</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>ordered items</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>privacy policy</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>payment method</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i>our services</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+9476-444-7198</a>
                <a href="#"><i class="fas fa-phone"></i>+9476-444-7198</a>
                <a href="#"><i class="fas fa-phone"></i>+9476-444-7198</a>
                <a href="#"><i class="fas fa-phone"></i>+9476-444-7198</a>
                <a href="#"><i class="fas fa-envelope"></i>hwpeheliya@gmail.com</a>
                <a href="#"><i class="fas fa-envelope"></i>+9476-444-7198</a>
                <a href="#"><i class="fas fa-envelope"></i>+9476-444-7198</a>
                <a href="#"><i class="fas fa-envelope"></i>+9476-444-7198</a>
                <img src="" class="map" alt="">
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit">created by <span>peheliya danuka navod</span> | all rights reserved!</div>

    </section>


                <!-- loader -->

    <div class="loader-container">
        <img src="" alt="">
    </div>



















    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    
</body>
</html>