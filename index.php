<html>
    <head >
        <meta charset = " UTF - 8 " >
        <meta name = " viewport " content = " width = device - width , initial - scale = 1.0 " >
        <title > Gaming Website </title >
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel = " stylesheet " href = " style.css " >
        <!--favicon icon-->
        <link rel="Shortcut Icon" type="image/png" href="favicon2.png">
        

    </head >
    <body >
        <header >
            <a href="#" class="logo">Helheim Gaming</a>
            <ul class="nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#games">Games</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="AdminLogin.php">Admin</a></li>
            </ul>

            <div class="action">
                <div class="searchBx">
                    <a href="#"><i class='bx bx-search'></i></a>
                    <input type="text" placeholder="Search...">
                </div>
            </div>

            <!--<div class="login">
            <a href="new.html"><button>Log In</button></a>
            </div>-->
            

        </header >

        <!--HomeBanner-->
        <div class="banner" id="home">
            <div class="bg">
                <div class="content">
                    <h2>A New Home for<br>
                    Gamers</h2>
                    <p> Download your favorite game. </p>
                    <!--<a href="" class="btn">Join Now</a>-->

                    <form action="new.php" method="post">
                     <input type="submit" style="   cursor: pointer;
                                                border: 1px solid #fff;
                                                background-color: transparent;
                                                height: 50px;
                                                width: 200px;
                                                color: #fff;
                                                font-size: 1.5em;
                                                box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);" name="join" value="Join">
                    </form>
                </div>
                <!--<img src="K.png">--><!-- 
             -->      <video autoplay loop muted plays-inline class="back-video">
                    <source src="Miles3.mp4" type="video/mp4">
                </video>
            </div>
        </div> -->

        <!--About-->
        <div class="about" id="about">
            <div class="contentBx">
                <h2>About us</h2>
                <p>Thank you for visiting our gaming website, where you can discover a wide variety of PC and mobile games. From action-packed shooters to entertaining and casual puzzle games, we have a large collection of games for players of all ages and interests.
                    We are avid gamers at our website, and we think that everyone should have access to the finest games available. We put a lot of effort into bringing you the best titles from reputable publishers and developers because of this.
                    Additionally, we are dedicated to giving our clients the very best support. We are always working to make our website better to make your shopping experience as simple as possible, and our helpful and knowledgeable staff is here to help you find the ideal game for your requirements.
                </p>
                <a href="#">Read more</a>
            </div>
            <img src="K.png">
        </div>

        <!--About end-->

        <!--carousel-->

          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="miles1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>valorant</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="GodofWar.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>God of War Ragnrok</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="valorant.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Spider man miles morales</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!--carousel end-->


        <!--games-->
        <div class="games" id="games">
            <h1>Popular Games</h1>
            <ul>
                <li class="list active"data-filter="all">ALL</li>
                <li class="list"data-filter="pc">Pc games</li>
                <li class="list"data-filter="mobile">mobile games</li>
                <!--<li class="list"data-filter="products">Products</li>-->
            </ul>


            <div class="cardBx">
                <div class="card" data-item="pc">
                    <img src="Grand.jpg">
                    <div class="content">
                        <h4>Grand theft auto</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p >Action-adventure.<br>
                                size: 105 GB<br><span></span></p>
                            <a href="price.php?Game=Grand theft auto"><button>Download</button></a>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="pc">
                    <img src="origin.jpg">
                    <div class="content">
                        <h4>Assassin's Creed Origins</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Action-adventure.<br>
                                Size: 66.7 GB<br><span></span></p>
                            <a href="price.php?Game=Assassin Creed Origins"><button>Download</button></a>
                        </div>
                    </div>
                </div>


                <div class="card" data-item="pc">
                    <img src="call of duty.jpg">
                    <div class="content">
                        <h4>Call of Duty: Infinite Warfare</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>First-person shooter,action.<br>
                                Size: 94.8 GB<br><span></span></p>
                            <a href="price.php?Game=Call of Duty: Infinite Warfare"><button>Download</button></a>
                        </div>
                    </div>
                </div>


                <div class="card" data-item="pc">
                    <img src="God_of_War_4.jpg">
                    <div class="content">
                        <h4>God of war 4 </h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Action-adventure.<br>
                                Size: 64.4 GB<br><span></span></p>
                            <a href="price.php?Game=God of war 4"><button>Download</button></a>
                        </div>
                    </div>
                </div>


                <div class="card" data-item="pc">
                    <img src="Dota .jpg">
                    <div class="content">
                        <h4>Dota 2</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Multiplayer online battle arena.<br>
                                Size: 15 GB<br><span></span></p>
                            <a href="price.php?Game=Dota 2"><button>Download</button></a>
                        </div>
                    </div>
                </div>


                <div class="card" data-item="pc">
                    <img src="tekken.jpg">
                    <div class="content">
                        <h4>Takken 7</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Fighting.<br>
                                Size: 60 GB<br><span></span></p>
                            <a href="price.php?Game=Takken 7"><button>Download</button></a>
                        </div>
                    </div>
                </div>


                <div class="card" data-item="mobile">
                    <img src="pubg.jpg">
                    <div class="content">
                        <h4>BATTLEGROUNDS Mobile</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Multiplayer online battle arena.<br>
                                Size: 534.7 MB <br><span></span></p>
                            <a href="price.php?Game=BATTLEGROUNDS Mobile"><button>Download</button></a>
                        </div>
                    </div>
                </div>


                <div class="card" data-item="mobile">
                    <img src="ClashRoyal.jpg">
                    <div class="content">
                        <h4>Clash Royal</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Real-time strategy.<br>
                                Size: 149 MB<br><span></span></p>
                            <a href="price.php?Game=Clash Royal"><button>Download</button></a>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="mobile">
                    <img src="Clash of clans.jpg">
                    <div class="content">
                        <h4>Clash of clans</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Real-time strategy.<br>
                                Size: 257 MB<br><span></span></p>
                            <a href="price.php?Game=Clash of clans"><button>Download</button></a>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="mobile">
                    <img src="pokemon.jpg">
                    <div class="content">
                        <h4>Pokemon unite</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Multiplayer online battle arena.<br>
                                Size:381 MB<br><span></span></p>
                            <a href="price.php?Game=Pokemon unite"><button>Download</button></a>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="mobile">
                    <img src="Go.jpg">
                    <div class="content">
                        <h4>Pokemon Go</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Augmented reality.<br>
                                Size: 108 MB<br><span></span></p>
                            <a href="price.php?Game=Pokemon Go"><button>Download</button></a>
                        </div>
                    </div>
                </div>

                <div class="card" data-item="mobile">
                    <img src="asphalt.jpg">
                    <div class="content">
                        <h4 >Asphalt 9: legends</h4>
                        <div class="progress-line"><span></span></div>
                        <div class="info">
                            <p>Racing.<br>
                                Size: 2.7 GB<br><span></span></p>
                            <a href="price.php?Game=Asphalt 9: legends"><button>Download</button></a>
                        </div>
                    </div>
                </div>


        <div class="view" id="view">
            <a href="more.php">View More</a>
        </div>
        

        <!--Contact-->
        <form action="index.php" method="post">
        <div class="contact" id="contact">
            <img src="Contact.jpg">
            <div class="form">
                <h1>Contact</h1>
                <div class="inputBx">
                    <p>Enter Name</p>
                    <input type="text" required name="fullname" placeholder="Full Name">
                </div>
                <div class="inputBx">
                    <p>Enter Email</p>
                    <input type="email" required name="mail"placeholder="Enter Your Email">
                </div>
                <div class="inputBx">
                    <p>Message</p>
                    <textarea name="message" required placeholder="Type here..."></textarea>
                </div>
                <button type="submit" style="    cursor: pointer;
                                                border: 1px solid #fff;
                                                background-color: transparent;
                                                height: 50px;
                                                width: 200px;
                                                color: #fff;
                                                font-size: 1.5em;
                                                box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);"> Submit</button>
                                                        
            </div>
            </form>
        </div>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    $Fullname = $_POST['fullname'];
    $mail = $_POST['mail'];
    $message=$_POST['message'];

    $con= mysqli_connect('localhost','root','','game');
        $sql="INSERT INTO `contact`(`fullname`, `mail`, `message`) VALUES ('$Fullname','$mail','$message')";
        
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Submitted";
        }
        else
        {
            echo "Not Submitted";
        }
    
}
?>
        




        <!--footer-->
        <footer>
            <div class="info">
                <a href="#"class="logo">Helheim Gaming</a>
                <p><i class='bx bxs-copyright'></i>2022 All Rights Reserved</p>
                <ul>
                    <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
                </ul>
            </div>
        </footer>

        <script>
            /* sticky NavBar*/
            window.addEventListener('scroll',function(){
                var header = document.querySelector('header');
                header.classList.toggle('sticky',window.scrollY > 0);
            });

            /* cards sorting */
            let list = document.querySelectorAll('.list');
            let card = document.querySelectorAll('.card');

            for(let i = 0; i<list.length; i++)
            {
                list[i].addEventListener('click',function(){
                    for(let j=0; j<list.length; j++)
                    {
                        list[j].classList.remove('active');
                    }
                    this.classList.add('active');
                    
                    let dataFilter = this.getAttribute('data-filter');

                    for(let k=0; k<card.length; k++)
                    {
                        card[k].classList.remove('active');
                        card[k].classList.add('hide');

                        if(card[k].getAttribute('data-item') == dataFilter || dataFilter == 'all')
                        {
                            card[k].classList.remove('hide');
                            card[k].classList.add('active');
                        }
                    }
                })
            }

        </script>


        
    </body >
</html>
                       

