<?php
                    session_start();
                    if(isset($_SESSION['counter']))
                    {
                        $_SESSION['counter']+=1;
                        
                    }
                    else {
                        $_SESSION['counter']=1;
                    }
                    

?>
<!DOCTYPE html>
<html lang="en" manifest="ApplicationCache/indexManifest.appcache">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/main.css">
    
    <title>Projekti ne Lenden programim ne WEB </title>
</head>
<body>
    
    <time id="time">Time </time>
    <div class="first-part" id="header">
         
        <div class="content1">
            <header>
                <div class="left-header">
                     <p id="logo"><a href="" style="all: unset;">Real Estate Website</a></p> 
                     <p class="logo-description">Buy and sell easy</p>
                </div>
                <?php
                    $str = 'Visit Facebook!';
                    $pattern = '/Facebook/i';
                    echo "<h4>".preg_replace($pattern, 'Our LinkedIn', $str)."</h4>";
                ?>
                <div class="right-header">
                        <form method="get" action="http://google.com/search" autocomplete="off" id="search-form">
                           <div class="search-div">
                            <input type="search" name="q" id="main-search" placeholder="Search">
                            <button class="submit" id="search-submit">
                                <i class="fas fa-search" style="color: black !important;" ></i>
                            </button>
                           </div>
                        </form>

                        <nav>
                            <p class="header-links">
                                   <a href="forms/contact.html" target="_blank">Contact Us</a>  &nbsp; |
                                   <a href="forms/login.html" target="_blank">Sign In</a>  &nbsp; |
                                   <a href="forms/singup.html" target="_blank">Register</a>
                            </p>

                        </nav>
                </div>
        </header>
    </div> 


        
                <div class="slider">
                     <div class="slides">
    
                        <!--Radio Buttons Start-->

                         <input type="radio" name="radio-btn" id="radio1">
                         <input type="radio" name="radio-btn" id="radio2">
                         <input type="radio" name="radio-btn" id="radio3">
                         <input type="radio" name="radio-btn" id="radio4">

                         <!--Radio Buttons the end -->
    

                         <!--The first part of the slides-->
    
                            <div class="slide first">
                                <img src="images/slider_img_!.jpg" width="950px" height="340px" id="slider-image1" alt="">
                            </div>
    
                            
                            <div class="slide">
                                <img src="images/slider_img_2.jpg" width="950px" height="340px" alt="">
                            </div>
    
                            
                            <div class="slide">
                                <img src="images/slider_img_3.jpg" width="950px" height="340px" alt="">
                            </div>
    
                            
                            <div class="slide">
                                <img src="images/slider_img_4.jpg" width="950px" height="340px" alt="">
                            </div>
                     </div>
                </div>
    
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>

                
                <div class="navigation-links">
                    <ul>
                        <a href="why_us.html" target="_blank"><li>Why Us&nbsp;?</li></a>
                        <a href="allproducts.html"  target="_blank"><li>All Products</li></a>
                        <a href="features_application.html"  ><li>Features of the App</li></a>
                        <a href="blog.html"  target="_blank"><li>Blog</li></a>
                        <a href="forms/register_property.html" target="_blank"><li>Register a Property</li></a>
                       

                        <div class="dropdown">
                            <button class="dropbtn">All other Pages</button>
                            <div class="dropdown-content">
                              <a href="otherPages/drag_drop.html" target="_blank">Drag and Drop</a>                             
                              <a href="otherPages/canvas.html" target="_blank">Canvas</a>
                              <a href="otherPages/svg.html" target="_blank">SVG</a>
                              <a href="tables.html" >Data Tables</a>
                              <a href="js/webworker/mathematical.html" target="_blank">Mathematical and Web Worker</a>
                              <a href="otherPages/locaL_session_storage/localstorage.html" target="_blank">Local Storage</a>
                              <a href="./otherPages/locaL_session_storage/sessionstorage.html" target="_blank">Session Storage</a>
                              <a href="#footer22">footer</a>
                              
                            </div>
                          </div>

                          <a href="otherPages/game/game.html" target="_blank">  <li>GAME</li></a>
                </div>
                <div style="padding: 20px 0px 0px 0px">
                    <h1 style="text-align: center;">
                    
                    <?php
                        $hours = date("H");
                        $message = "";
                        if($hours > 5 and $hours <= 12)
                        {
                            $message = "Good morning!";
                        }
                        elseif($hours > 12 and $hours <= 18)
                        {
                            $message = "Good afternoon!";
                        }
                        else
                        {
                            $message = "Good evening!";
                        }
                        echo $message;
                        #Session counter
                        $visitMessage = "<br/>You have visited our site number times";
                        echo str_replace("number",$_SESSION['counter'],$visitMessage);
                        //Definimi i variablave globale
                        define("propertyType",["Apartment","House"]);
                        echo "<br/>We have " . propertyType[0] . " and " . propertyType[1] . " available for rent";
                    ?>
                    </h1>
                </div>

</div>

<!--
        The start of the seond part in the first page
    -->

    <div class="second-part">
        <div class="second-part-content">

               <div class="second-part-grid">
                        <div class="item1">
                            <h1 style="padding-bottom: 1rem; word-wrap: break-word;">House for Sale</h1>
                            <div class="house1" id="card-image"></div>

                            <p class="price-label"> <span class="price-tag"> &dollar; 330,587 </span></p>
                            <p class="address-label">Address: <span class="address-tag"> 305 Royal Oak Dr, Bel Air, MD 21015 </span></p>
                            <p class="mailto-label"><a class="emailto" href="mailto:someone@yoursite.com" style="all: unset !important;">Contact the Agent</a></p>
                            <p style="text-align: right;"><a href="allproducts.html" class="link-continue-reading">Continue Reading > </a></p>
                        </div>

                        <div class="item1">
                            <h1 style="padding-bottom: 1rem; word-wrap: break-word;">House for Sale</h1>
                            <div class="house2" id="card-image"></div>

                            <p class="price-label"> <span class="price-tag"> &dollar; 330,587 </span></p>
                            <p class="address-label">Address: <span class="address-tag"> 305 Royal Oak Dr, Bel Air, MD 21015 </span></p>
                   <!--        
                            <p class="room-label">Rooms: <span class="room-tag"> 4 </span></p>
                            <p class="bathroom-label">Bath Rooms: <span class="bathroom-tag"> 2 </span></p>
                            <p class="sqft-label">Sqft: <span class="sqft-tag"> 1752 </span></p> --> 
                            <p class="mailto-label"><a class="emailto" href="mailto:someone@yoursite.com" style="all: unset !important;">Contact the Agent</a></p>
                            <p style="text-align: right;"><a href="allproducts.html" class="link-continue-reading">Continue Reading > </a></p>
                        </div>
 
                        
 
                        <div class="item1">
                            <h1  class="card-title"  >House for Sale</h1>
                            <div class="house3" id="card-image"></div>

                            <p class="price-label"> <span class="price-tag"> &dollar; 330,587 </span></p>
                            <p class="address-label">Address: <span class="address-tag"> 305 Royal Oak Dr, Bel Air, MD 21015 </span></p>

                            <p class="mailto-label"><a class="emailto" href="mailto:someone@yoursite.com" style="all: unset !important;">Contact the Agent</a></p>
                            <p style="text-align: right;"><a href="allproducts.html" class="link-continue-reading">Continue Reading > </a></p>  
                        </div>

                        <div class="item1">
                            <h1  class="card-title"  >House for Sale</h1>
                            <div class="house3" id="card-image"></div>

                            <p class="price-label"> <span class="price-tag"> &dollar; 330,587 </span></p>
                            <p class="address-label">Address: <span class="address-tag"> 305 Royal Oak Dr, Bel Air, MD 21015 </span></p>

                            <p class="mailto-label"><a class="emailto" href="mailto:someone@yoursite.com" style="all: unset !important;">Contact the Agent</a></p>
                            <p style="text-align: right;"><a href="allproducts.html" class="link-continue-reading">Continue Reading > </a></p>  
                        </div>

                        <div class="item1">
                            <h1  class="card-title"  >House for Sale</h1>
                            <div class="house1" id="card-image"></div>

                            <p class="price-label"> <span class="price-tag"> &dollar; 330,587 </span></p>
                            <p class="address-label">Address: <span class="address-tag"> 305 Royal Oak Dr, Bel Air, MD 21015 </span></p>

                            <p class="mailto-label"><a class="emailto" href="mailto:someone@yoursite.com" style="all: unset !important;">Contact the Agent</a></p>
                            <p style="text-align: right;"><a href="allproducts.html" class="link-continue-reading">Continue Reading > </a></p>  
                        </div>

               </div>
       
                     <div class="button-1">
                         <a href="" style="all: unset;">
                           Click here to find more products ->
                        </a>
                     </div>
            </div>
    </div>

    <hr>



    <section class="third-part" id="testimonials">
        <div class="third-part-content">

               <div class="third-part-item1">
                   <h1> <i>What people say about us</i> </h1>
                   
                   <p class="author" > <img src="images/quote.png" width="40" alt=""> <b>Tomy Tanker </b> CEO </p>
                      <p class="author-message">
                          <b>Html Entities albanian </b> &Euml; &euml; &Ccedil; &ccedil; Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum velit doloremque consectetur officiis deserunt a incidunt, voluptas, recusandae vel quos sed modi obcaecati, eaque consequuntur dolorum magnam error porro ratione?
                      </p>
                    <p style="text-align: right;"><a href="#" style="color: blue !important;">Continue Reading > </a></p>
                    
                </div>
                
                
                <div class="third-part-item2" >
                    <h1 style="padding-bottom: 4rem; ">Examples from our porfolio</h1>
                    <div class="third-part-photos" >
                        <img src="images/aboutus.jpg" class="ex-from-portfolio-image" alt="The first image that is part of the portfolio">
                        <img src="images/aboutus2.jpg" class="ex-from-portfolio-image" alt="Complex of buildings sold in a big country">
                        <img src="images/aboutus3.jpg" class="ex-from-portfolio-image"  alt="Selling of houses succes stories">
                    </div>
                  
                 <p style="text-align: right;"><a href="#" style="color: blue !important;">Continue Reading > </a></p>
         </div>
        </div>
    </section>


    <!--Designing the Footer of the Page -->
    <!--Bold tag, italic, underline-->
       <footer class="footer" id="footer22">
             <div class="footer-content" >

                 <div class="about-us" id="links">
                         <h1 style="padding-bottom: 2rem;">About Us</h1>

                         <div class="about-us-1" >                                                      
                              <h2> <img src="images/apartment1.jpg" class="about-us-1-img" alt=""> Some Title Description</h2>
                              <p class="justify"> Lorem ipsum dolor sit amet Lorem ipittium doliti laborum  quasi temporibus nam. Et fugiat illum facere provident perspiciatis rem at, minima corrupti aliquam cumque quas iste voluptatum!</p>                 
                         </div>

                         <div class="about-us-1" >                                                      
                             <h2 style="margin-left: 1rem;"> <img src="images/apartment1.jpg" style="float: right;" class="about-us-1-img" alt=""> Some Title Description</h2>
                             <p class="justify">  <i> <abbr title="" >Lorem ipsum dolor sit amet Lore</abbr> </i> ipittium doliti laborum  quasi temporibus nam. Et fugiat illum facere provident perspiciatis rem at, minima corrupti aliquam cumque quas iste voluptatum!</p>                 
                         </div>

                         
                 </div>

                 <div class="our-skillset">
                      <h1 style="padding-bottom: 1rem;"> Our Skillset</h1>

                      <p class="skillset1"><a href="https://www.google.com/" id="google-link"><b>Google</b></a></p>
                      <p class="skillset1"><a href="https://www.facebook.com/" id="facebook-link"><b>Google</b></a></p>
                      <p class="skillset1"><a href="https://twitter.com/?lang=en"><b>Google</b></a></p>
                      <p class="skillset1"><a href="https://www.tutorialspoint.com/html/html_tutorial.pdf"><b>Learn Html</b></a></p>
                      <p class="skillset1"><a href="#header">Get back to header</a></p>
                      <p class="skillset1"><a href="">Linkf svbshf</a></p>
                      <p class="skillset1"><a href="">Linkf svbshf</a></p>
                      <p class="skillset1"><a href="">Linkf svbshf</a></p>
                      <p class="skillset1"><a href="">Linkf svbshf</a></p>
                      

                 </div>

                 <div class="blog-links">
                       <h1 style="padding-bottom: 1rem;">Blog Links</h1>
                      
                      <p class="skillset1">Link hsbfsf</p>
                      <p class="skillset1">Link hsbfsf</p>
                      <p class="skillset1">Link hsbfsf</p>
                      <p class="skillset1">Link hsbfsf</p>
                      <p class="skillset1">Link hsbfsf</p>
                      <p class="skillset1">Link hsbfsf</p>
                      <p class="skillset1">Link hsbfsf</p>
                      <p class="skillset1">Link hsbfsf</p>
                      <p class="skillset1">Link hsbfsf</p>
                 </div>
                        
             </div>
       </footer>
    <div class="copyright">
            <p>copyright &copy; 2013 Domain Name - All Rights Reserved</p>
            <p>Template by OS Templates</p>
    </div>
    <?php
        echo "Average rent price worldwide <br/>";
        $unsorted = array("United States"=>2500, "France"=>1700, "Germany"=>2100, "China"=>700, "Kosovo"=>350);
        arsort($unsorted);
        foreach($unsorted as $x=>$x_value)
        {
        echo $x . ", rent=" . $x_value;
        echo "\t\t";
        }
        $country = "Republika e Kosoves";
        echo substr($country, 12, 5) . "a<br/>";
        echo "Length of country name '" . $country . " is " . strlen($country);

    ?>    
    <script src="js/time.js"></script>
</body>
</html>
