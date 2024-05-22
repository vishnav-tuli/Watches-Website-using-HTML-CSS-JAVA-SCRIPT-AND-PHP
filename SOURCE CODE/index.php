<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css" />

    
</head>

<body>
    <div class="banner">
        <div class="Navbar">
            <section class="web-logo">
                <img src="./assets/logo1.png" id="logo1" alt="loading" />
            </section>
            <section class="Navigation">
                <li><a href="#"><i class="fas fa-home-alt"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-book-alt"></i> About</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i> Contact</a></li>
                <li><a href="#"><i class="fas fa-store-alt"></i> Shop</a></li>
                <div class="Nav-btn">
                    <a href="./Login/login.html"><button class="btn">SignIn</button></a>
                    <a href="./Register/Register.html"><button class="btn">Register </button></a>
                </div>
            </section>
        </div>
        <div class="Banner-txt">
            <section class="header">
                <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12">

                </script>
                <h1>A NEW OUTLOOK ON THE WORLD</h1>
                <p>Explore the collection of prestigious, high-precision timepieces.</p>
                <p>Discover the broad selection of Rolex watches to find a perfect <br>combination of style and
                    functionality.</p>
                <button class="btn b-btn">DISCOVER</button>
            </section>
        </div>
        <div class="downwards"
            style="font-size: 45px; color: white; cursor: pointer; width:50px; position: relative; left: 700px; top: -100px; width: 50px; display: flex; justify-content: center; border-radius: 50%;"
            onclick="scrollDown()">
            <p>⌄</p>
        </div>
    </div>

    <div class="middle-section">
        <div class="m-upper">
            <h1 class="header1"><span class="head1">Watches are crafted with</span><br> <span class="head2">scrupulous
                    attention to detail.</span></h1>
            <p class="h-para">Explore the Rolex collection of prestigious, high-precision timepieces. Rolex offers a
                wide assortment of Classic <br> Professional watch models to suit any wrist. Discover the broad
                selection of Rolex watches to find a perfect combination of style and functionality.</p>
            <div class="button-grp">
                <!-- Add this button to your index.html -->
                <button class="btn wf-btn" onclick="redirectToWatchFinder()">Watch Finder</button>
                <button class="btn c-btn">Configure Your Watch</button>
            </div>
        </div>
        <hr style="width:100%">
        <div class="carousel">
            <div class="card">
                <img class="items" src="./assets/watche1.webp" />
                <div class="card-title">
                    <p class="head">DAY-DATE <span class="star">&#9733;&#9733;&#9733;</span></p>
                    <div class="para">The Realization Of An Ideal</div>
                </div>
            </div>
            <div class="card">
                <img class="items" src="./assets/watches2.webp" />
                <div class="card-title">
                    <p class="head">AIR-KING <span class="star">&#9733;&#9733;&#9733;</span></p>
                    <div class="para">A Homepage To Aviation</div>
                </div>
            </div>
            <div class="card">
                <img class="items" src="./assets/watches3.webp" />
                <div class="card-title">
                    <p class="head">GMT ||<span class="star">&#9733;&#9733;&#9733;</span></p>
                    <div class="para">The Cosmopoliton Watch</div>
                </div>
            </div>
            <div class="card">
                <img class="items" src="./assets/watches4.webp" />
                <div class="card-title">
                    <p class="head">DATEJUST <span class="star">&#9733;&#9733;&#9733;</span></p>
                    <div class="para">The Watches Of The Open Seas</div>
                </div>
            </div>
        </div>
    </div>
    <div class="intermediate-bottom">

        <div class="contact-info">
            <h1>Contact Us</h1>
            <p>Need to get in Touch with us? Either fill the form<br> with your Inquiry or find the
                <span style="color: green; text-decoration: underline; cursor: pointer;">department email</span> you'd
                <br>like to contact below.
            </p>
        </div>
        <div class="contact-form">
            <form method="post">
                <div class="m-inputs">
                    <label for="Fname">First Name</label>
                    <label for="Lname">Last Name</label><br>
                    <input type="text" class="in-pl" placeholder="First Name" name="F-name" id="Fname" />
                    <input type="text" class="in-pl" placeholder="Last Name" name="L-name" id="Lname" />
                </div>
                <div class="m-inputs">
                    <label for="Email">Email</label><br>
                    <input type="email" class="in-pl s-pl" placeholder="Enter Your Email" name="Email" id="Email" />
                </div>
                <div>
                    <label style="display:inline-block;letter-spacing: 1px;line-height: 2;
                        font-weight: bolder;text-decoration: double;margin-right: 210px;" for="desc">What can we help
                        you with?</label><br>
                    <textarea class="txt-area" rows="10" cols="84"></textarea>
                </div>
                <input class="btn" type="submit" value="Submit" disabled />
            </form>
        </div>
    </div>
    <div class="components">
        <div class="about">
            <ul>
                <li id="about1">ABOUT</li>
                <div id="comp">
                    <li>Contact Us</li>
                    <li>About Us</li>
                    <li>Careers</li>
                    <li>Flipkart Stories</li>
                    <li>Press</li>
                </div>
            </ul>
        </div>
        <div class="help">
            <ul>
                <li id="about1">HELP</li>
                <div id="comp">
                    <li>Payments</li>
                    <li>Shipping</li>
                    <li>Cancellation & Returns</li>
                    <li>FAQ</li>
                    <li>Reports Infrigments</li>
                </div>
            </ul>
        </div>
        <div class="Policy">
            <ul>
                <li id="about1">POLICY</li>
                <div id="comp">
                    <li>Return Policy</li>
                    <li>Terms Of Use</li>
                    <li>Security</li>
                    <li>Privacy</li>
                    <li>Sitemap</li>
                    <li>EPR Compliance</li>
                </div>
            </ul>
        </div>
        <div class="Social">
            <ul>
                <li id="about1">SOCIAL</li>
                <div id="comp">
                    <li><a href="https://www.facebook.com" target="_blank">Facebook</li></a>
                    <li><a href="https://www.Twitter.com" target="_blank">Twitter</li></a>
                    <li><a href="https://www.Youtube.com" target="_blank">Youtube</li></a>

                </div>
            </ul>
        </div>

        <hr id="line">
        <div class="MailUs">
            <ul>
                <li id="about1">Mail Us:</li>
                <div id="comp1">
                    313 Bhaskaracharya,
                    KJ Somaiya College Of Engineering,
                    Vidyanagar, VidyaVihar East,
                    Mumbai, 400077<br>
                    Maharashtra, India
                </div>
            </ul>
        </div>
        <div class="Officeaddress">
            <ul>
                <li id="about1">Register Office Address:</li>
                <div id="comp1">
                    313 Bhaskaracharya,
                    KJ Somaiya College Of Engineering,
                    Vidyanagar, VidyaVihar East,
                    Mumbai, 400077<br>
                    Maharashtra, India<br>
                    CIN : U51109KA2012PTC066107<br>
                    Telephone: <p6>1800 202 9898</p6>

                </div>
            </ul>
        </div>
    </div>
    <div class="logos">
        <div class="line">
            <hr>
        </div>
        <div class="hosters">
            <p><a href="#"><i class="fas fa-shopping-bag" id=logo></i>&nbsp;
                    SELL ON WATCHES</a></p>
            <p><a href="#"><i class="fad fa-star" id="logo"></i>&nbsp;Advertise</a></p>
            <p><a href="#"><i class="fas fa-gift" id="logo"></i>&nbsp;Gift Cards</a></p>
            <p><a href="#"><i class="fas fa-question-circle" id="logo"></i>&nbsp;Help Center</a></p>
            <p>@ 2007-2023 WATCHES.com</p>
            <p><img src="./assets//svg.svg"></p>
        </div>

    </div>
    </div>

    
</body>

</html>
<script>
    function redirectToWatchFinder() {
        window.location.href = 'watch_finder.php';
    }
    function scrollDown() {
        window.scrollBy({
            top: window.innerHeight,
            left: 0,
            behavior: 'smooth'
        });
    }
</script>

