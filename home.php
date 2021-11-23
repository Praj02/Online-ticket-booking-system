<?php
    session_start();
    if(!$_SESSION['auth'])
    {
        header('location:login.html');
    }
?>
<html>
    <head>
    <title>Online Ticket booking system</title>
    <link rel="stylesheet" href="style (1).css">

    </head>

    <body>
        <!--<button onclick="togglePopup()" class="first-button">Login</button>

        <div class="popup" id="popup-1">
            <div class="content">
             <div class="close-btn" onclick="togglePopup()">
              ×</div>
              
         <h1>Login</h1> 
           <div class="input-field"><input placeholder="Email" ="text" class="validate"></div>
           <div class="input-field"><input placeholder="Password" ="text" class="validate"></div>
             <button class="second-button">Sign in</button>
             <p>Don't have an account? <a href="index (1).html">Sign Up</a></p>
               
              
            </div>
           </div>-->

        <div class="icon"><img src="icon.jpg"></div>
        <div class="header" style="background-image: linear-gradient(yellow,gold);">
            <a href="#homem"><div class="home">HOME</div></a>
            <!--<a href="index.html"><div class="register" >REGISTER</div></a>-->
            <a href="#bookingm"><div class="booking">BOOK YOUR TICKET</div></a>
            <!--<a href=""><div class="history">HISTORY</div></a>-->
            <a href="#supportm"><div class="support">SUPPORT</div></a>
            <a href="#aboutm"><div class="about">ABOUT US</div></a>
            <a href="logout.php"><div class="login">LOGOUT</div></a>
            <!--<div class="photo"><img  class="ig" src="profileImage.png" alt="My image"></div>-->
            <!--<div class="username">ASHWINKUMAR</div> -->
            
        </div>
        <div class="tbanner-title"></div>
        <a name="homem"></a>
        <div class="tbanner" id="demo">
            <script src="data.js"></script>
        </div>

        
        <a name="bookingm"></a>
        <div class="title" style="background-color: #e67400 "><h1>UPCOMING MATCHES</h1></div>
        <div class="showlist">
            <a class="card" href="Info.html">
                <img class="cardig" src="rcb v mi.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>MI v RCB</b><br><p>09/APR/2021</p></h4>
                </div>
            </a>

            <a class="card" href="info_cskdc.html">
                <img  class="cardig" src="csk v dc.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>CSK v DC</b><br><p>10/APR/2021</p></h4>
                </div>
            </a>

            <a class="card" href="info_srhkkr.html">
                <img class="cardig" src="srh v kkr.webp" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>SRH v KKR</b><br><p>11/APR/2021</p></h4>
                </div>
            </a>

            <div class="card">
                <img class="cardig"  src="real mad v liverpool.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                   <h4><b>REAL MADRID v LIVERPOOL</b><br><p>07/APR/2021</p></h4>
                </div>
            </div>
            <div class="card">
                <img class="cardig" src="man city v dortmund.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>MAN CITY v DORTMUND</b><br><p>07/APR/2021</p></h4>
                </div>
            </div>
            <!--
            <div class="card">
                <img  class="cardig" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/68952586_2470660159665532_3904352866675982336_o.jpg?_nc_cat=102&ccb=1-3&_nc_sid=e3f864&_nc_ohc=u2slpzKt5hYAX-G69M3&_nc_ht=scontent.fdel8-1.fna&oh=dd9e154fcd98d713b6e50d1ad0059f78&oe=607C114B" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>POWER SOCCER</b><br><p>28/MAR/2020</p></h4>
                </div>
            </div>
            <div class="card">
                <img class="cardig" src="banner.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>CRICKET TOURNAMENT</b><br><p>30/MAR/2020</p></h4>
                </div>
            </div>
            <div class="card">
                <img class="cardig"  src="https://media.istockphoto.com/vectors/hockey-banner-for-hockey-tournament-vector-illustration-vector-id961253958" alt="Avatar" style="width:100%">
                <div class="container">
                   <h4><b>HOCKEY TOURNAMENT</b><br><p>1/APR/2020</p></h4>
                </div>
            </div>
            <div class="card">
                <img class="cardig" src="banner.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>CRICKET TOURNAMENT</b><br><p>30/MAR/2020</p></h4>
                </div>
            </div>
            <div class="card">
                <img  class="cardig" src="https://scontent.fdel8-1.fna.fbcdn.net/v/t1.0-9/68952586_2470660159665532_3904352866675982336_o.jpg?_nc_cat=102&ccb=1-3&_nc_sid=e3f864&_nc_ohc=u2slpzKt5hYAX-G69M3&_nc_ht=scontent.fdel8-1.fna&oh=dd9e154fcd98d713b6e50d1ad0059f78&oe=607C114B" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>POWER SOCCER</b><br><p>28/MAR/2020</p></h4>
                </div>
            </div>
        -->

        </div>
        <a name="supportm"></a>
        <div class="title" style="background-color: #388d80"><h1>SUPPORT</h1></div>
        <div class="supportb">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeJ2ItTp2v88X2OxzycVYK8N9-tEBTo27HZPGUl9jKdJDb-jg/viewform?embedded=true" width="100%" height="1050"  marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
        
        
        <div class="footerout">
        <div class="footer">
            <img class="ig"  src="ilogo.jpg" alt="My image">
            <img class="ig"  src="tlogo.png" alt="My image">
            <img class="ig"  src="facebook.png" alt="My image">
            <p style="padding: 30px;" > © Bigtree Entertainment Pvt. Ltd. All Rights Reserved.<br>The content and images used on this site are copyright protected and copyrights vests with the respective owners. The usage of the content and images on this website is intended to promote the works and no endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.</p>
        </div>
        </div>

        <a name="aboutm"></a>
        <div class="about-section">
            <h1>About Us</h1>
            <!--<p>Some text about who we are and what we do.</p>
            <p>Resize the browser window to see that this page is responsive by the way.</p>-->
          </div>
          
          <h2 style="text-align:center">Our Team</h2>
          <div class="row">
            <div class="column">
              <div class="card1">
                <img src="https://images.unsplash.com/photo-1568417854236-4a8c5043d34e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8am9rZXJ8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Mike" style="width:100%">
                <div class="container">
                  <h2>Prajwal Arage</h2>
                  <!--<p class="title">Lorem ipsum</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
                  <p>pa4594@srmist.edu.in</p>
                  <!--<p><button class="button">Contact</button></p>-->
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card1">
                <img src="https://images.unsplash.com/photo-1568417854236-4a8c5043d34e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8am9rZXJ8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Mike" style="width:100%">
                <div class="container">
                  <h2>Ashwinkumar V</h2>
                  <!--<p class="title">Art Director</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
                  <p>av6913@srmist.edu.in</p>
                  <!--<p><button class="button">Contact</button></p>-->
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card1">
                <img src="https://images.unsplash.com/photo-1568417854236-4a8c5043d34e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8am9rZXJ8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="John" style="width:100%">
                <div class="container">
                  <h2>Sanskar Sarawgi</h2>
                  <!--<p class="title">Designer</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>-->
                  <p>ss9814@srmist.edu.in</p>
                  <!--<p><button class="button">Contact</button></p>-->
                </div>
              </div>
            </div>
          </div>
    </body>
</html>