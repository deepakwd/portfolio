<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet"href="style.css">
</head>
<body>
    <?php include'header.php';?>
    <!--body part start-->
    <div style="clear:both;"></div>
    <div class="container">
        <!--banner container start-->
        <section class="section1">
            <div class="indexbanner">
                <div class="bannerintro">
                    <h3>Hi THERE, I'M <span class="bannertypedanimation"></span></h3>
                    <P>Hi, i'm Deepak Sharma and this is my personal portfolio website.</P>
                    <div class="portyouContainer">
                        <button><a href="portfolioIndex.php">Portfolio</a></button>
                    <button><a href="href=https://www.youtube.com/channel/UCIjbFKRZF_M9x5u0DDBJOaA">YouTube</a></button>
                    </div>
                </div>
            </div>
        </section>
        <!--service container start-->
        <section class="section2">
            <h3>OUR SERVICE</h3>
            <p class="sp">We have some kind of service provided</p>
            <div class="serviceContainer">
                <div class="serviceCard">
                    <div class="cardweb">
                        <img src="logo/webdesign.png" style="width:80px;">
                        <h4>web design</h4>
                        <p>Website layout is designed attractive and complete mobile responsive.</p>
                    </div>    
                </div>
                <div class="serviceCard">
                    <div class="cardweb">
                        <img src="logo/webdesign.png" style="width:80px;">
                        <h4>Web Develop</h4>
                        <p>Here we do web development with an excellent way.</p>
                    </div>    
                </div>
                <div class="serviceCard">
                    <div class="cardweb">
                        <img src="logo/digitalm.png" style="width:80px;">
                        <h4>Digital Marketing</h4>
                        <p>Digital marketing is done on various platforms of social media</p>
                    </div>    
                </div>
                <div class="serviceCard">
                    <div class="cardweb">
                        <img src="logo/dataentry.png" style="width:80px;">
                        <h4>Data Entry</h4>
                        <p>Any type of data is entered here</p>
                    </div>       
                </div>
            </div>
        </section>
        <!--about me container start-->
        <section class="section3">
            <?php include'profileview.php';?>
        </section>
        <section class="section4">
            <h3>YOUTUBE (TECHWITHSIR)</h3>
            <p class="sp">You also watch my youtube channel for education and updates.</p>
            <div class="youtubeContainer">
                <div class="youtubeLeft">
                   <iframe class="ytcframe" src="https://www.youtube.com/embed/nFj5W7QIpMQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="youtubeRight">
                    
                    <div class="yrone">
                        <h4>fundamental</h4>
                        <p>Under this, you will be told about the basic of computer.</p>
                    </div>
                    <div class="yrone">
                        <h4>Web Dev & Designing</h4>
                        <p>Web dev and design is taught with Project works.</p>
                    </div>
                    <div class="yrone">
                        <h4>Digital Marketing</h4>
                        <p>In this, learn to do digital marketing on various platform.</p>
                    </div>
                    <div class="yrone">
                        <h4>Other</h4>
                        <p>In this, update problems and other types of courses also do.</p>
                    </div>

                </div>
            </div>
        </section>
        <section class="section5">
            <h3>STATEMENTS</h3>
            <p class="sp">You must read some of my important quotes.</p>
            <div class="subSection5">
                <div class="indexComment">
                    <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis veniam ex, ab, maxime nam sunt deserunt consequuntur unde, inventore corporis doloribus! Vitae deserunt doloribus officiis."</p>
                    <span>Lorem ipsum dolor sit amet.</span>
                </div>
            </div>
        </section>
        <!--section 6 form container div-->
        <section class="section6">
           <?php include'contactForm.php';?>
        </section>

    </div>
    <!--footer start-->
    <?php include'footer.php';?>
    <script src="jsfile/typed.js"></script>
    <script src="jquerycolor.js"></script>
    <script>
        var typed = new Typed('.bannertypedanimation', {
  strings: [
      'DEVELOPER',
      'DESIGNER',
      'YOUTUBER',
      'BLOGGER'
    ],
    typeSpeed: 60,
    backSpeed: 60,
    loop: true
});
    </script>
</body>
</html>