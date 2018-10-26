<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          
        <title>IGLOOS</title>
        <!--<link href = "{{asset('bootstrap/bootstrap.css')}}" rel="stylesheet">-->
        <link href = "{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href = "{{asset('css/homePage.css')}}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src = "<?php echo asset('js/jquery-3.1.1.js'); ?>"></script>
        <!-- Styles -->
        <style>

        </style>

    </head>

 <body>
        {{--  <div style="background:#FFF ;margin-top:150px">{{$users}}</div>  --}}
        @include('navbar')
        <section id="intro-section">
            <div class="intro-content">
            <p class="introHeader">Booking now at your fingertips</p>
            <p class="header2">Find the perfect co-working space for you</p>

	        <select name="searchbar" class="search-bar" id="srchbar">
               <option value="abbasseya" xlass="ay7aga" id="opt">Abbasseya</option>
               <option value="dokki" id="opt">Dokki</option>
               <option value="maadi" id="opt">Maadi</option>
               <option value="manyal" id="opt">Manyal</option>
               <option value="masrelgedida" id="opt">Masr Elgedida</option>
		       <option value="nasrcity" id="opt">Nasr City</option>
               <option value="newcairo" id="opt">New Cairo</option>
               <option value="tahrir" id="opt">Tahrir</option>
               <option value="zamalek" id="opt">Zamalek</option>
            </select>
            
            <button type="button" class="search-btn">Find</button>
            <br>
           <a href="#"> <img src="/images/mouse_.png" class="scroller"></a>
            </div>
        </section>

        <section id="about-section">
            <div class="about-us">
                <p class="headline">Our Story</p>
                <div class="our-story">
                  <p class="details">
                    Lorem ipsum dolor sit amet, velit postea menandri cu usu, no eam equidem dolorem. 
                    Cum enim rationibus definitiones id, ad dico inimicus per. 
                    Illum quaestio eos et. An nam interesset scriptorem. 
                    Te dicam tincidunt pri. Sit no putent meliore dissentiet, ut nobis intellegam cum.
                  </p>
                </div> 

                <div class="teamSection">

                    <p class="headline">The Team</p>

                    <div class="memberOne" id="memDiv"> 
                        <img class="team-member-img" src="/images/alaa.png" alt="profile-avatar">
                        <p class="memName">ALAA</p>
                        <p class="memDesc"> 
                            Lorem ipsum dolor sit amet, velit postea menandri cu usu, 
                            no eam equidem dolorem. 
                            <br>
                            Cum enim rationibus definitiones id, ad dico inimicus per.
                            <br>
                            Illum quaestio eos et. An nam interesset scriptorem.
                        </p>
                    </div>
                    
                    <div class="memberTwo" id="memDiv">
                            <img class="team-member-img" src="/images/alaa.png" alt="profile-avatar">
                            <p class="memName">ESLAM</p>
                            <p class="memDesc"> 
                                    Lorem ipsum dolor sit amet, velit postea menandri cu usu, 
                                    no eam equidem dolorem. 
                                    <br>
                                    Cum enim rationibus definitiones id, ad dico inimicus per.
                                    <br>
                                    Illum quaestio eos et. An nam interesset scriptorem.
                                </p>
                    </div>
                    
                    <div class="memberThree" id="memDiv">
                            <img class="team-member-img" src="/images/alaa.png" alt="profile-avatar">
                            <p class="memName3">MOHGA</p>
                            <p class="memDesc3"> 
                                    Lorem ipsum dolor sit amet, velit postea menandri cu usu, 
                                    no eam equidem dolorem. 
                                    <br>
                                    Cum enim rationibus definitiones id, ad dico inimicus per.
                                    <br>
                                    Illum quaestio eos et. An nam interesset scriptorem.
                                </p>
                    </div>
                    
                    <div class="memberFour" id="memDiv">
                            <img class="team-member-img" src="/images/alaa.png" alt="profile-avatar">
                            <p class="memName4">RADWA</p>
                            <p class="memDesc4"> 
                                    Lorem ipsum dolor sit amet, velit postea menandri cu usu, 
                                    no eam equidem dolorem. 
                                    <br>
                                    Cum enim rationibus definitiones id, ad dico inimicus per.
                                    <br>
                                    Illum quaestio eos et. An nam interesset scriptorem.
                                </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients-section">
            <div class="client-logos">
                <p class="client-header">Poeple Who Chose Igloos</p>
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
                <img src="/images/almaqarr.jpg" class="cws" href="#">
            </div>
                
        </section>

        <div class="bottomNavbar">
            <div class="content">

            <div class="pages">
                    <p class="hdln">Site Links</p>
                    <button class="bottomButtons" >About</button>
                    <br>
                    <button class="bottomButtons" >Clients</button>
                    <br>
                    <button class="bottomButtons" >Login</button>
                    <br>
                    <button class="bottomButtons" >Sign Up</button>
            </div>

            <div class="Contact-Us">
                    <p class="headline1">Get in touch with us</p>  
                    <p class="headline2">We'd Love It</p>
                    <ul class="links">
                    <a class="contact-link-1" id="contact-links" href="#email">igloosRental@gmail.com</a>

                    <br>

                    <a class="contact-link-2" id="contact-links" href="#phNum">XXXXXXXXXXX</a>
                    </ul>

                    <p class="headline3">Find us at:</p>  
                            
            </div>

            <div class="feedback-section">
                <form class="feedback-form">
                    <p>Your Feedback Matters</p>
                    <input class="textArea" placeholder="YOUR EMAIL ADDRESS" type="email" required> <br>
                    <input class="textArea" placeholder="YOUR NAME" type="text" required> <br>
                    <input class="textArea" placeholder="YOUR FEEDBACK" required>
                    <button class="submit-btn">SUBMIT</button>
                </form>
            </div>
        </div>
        </div>

     @include('footer')

    </body>

</html>
