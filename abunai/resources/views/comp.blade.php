<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="comp.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.css"/>
	/*// Add the slick-theme.css if you want default styling*/
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick-theme.css"/>
    <style>
        .slick-initialized .slick-slide {
        display: flex;
    }

    element.style {
        width: 1000px;
    }
    </style>
</head>

<body>
    <div class="parent">
        <div class="hero">

            <section>
                <div class="bg">
                    <header>
                        @if(Auth::user())
                            <div class="hello">Hello {{Auth::user()->studentName}},<a href="/auth/logout"><span class="logout">Logout</span></a></div>
                        @else
                            <a href="/auth/register">New user? <span class="register">Register for Free</span></a>
                            <a href="/auth/login"><span class="login">Login Here</span></a>
                        @endif
                    </header>
             
                    <nav>
                        <div class="name">
                            <a href="/home"> <span class="abunai">ABUNAI </span><span class="abunai2">MMA & JIU JITSU</span></a>
                        </div>
                        <div class="links">
                            <a href="/home">HOME</a>
                            <a href="/aboutUs">ABOUT US</a>
                            <a href="https://www.facebook.com/Abunai-MMA-Jiu-jitsuNava-Brazilian-Jiu-jitsu-298814180276100/photos_stream?tab=photos_albums">PICTURES</a>
                            <a href="/contact">CONTACT</a>
                        </div>
                    </nav>
                    
                    <p class="pageTitle">UPCOMING COMPETITIONS</p>
	                    
                    <div class="list">
	                        
                        <div class="content">
                            <aside>
                            	<a href="http://nagafighter.com/index.php?module=homepage"><img src="competitions/poster1.jpg"></a>
							</aside>
                            
                            <main>
                                <h2>Tournament: 1-800-555-NAGA</h2>
                                <h2>Date: Feb28 , 2015</h2>
                                <h2>Location: Phoenix College, 1202 W Thomas Rd, Phoenix, AZ 85013 </h2>
                                <h2>Time: Kids-10AM Adults-2PM</h2>
                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>
                            </main>
                    	</div>
	                   
                       <div class="content">
                            <aside>
                                <a href="http://www.americangrapplingfederation.com/"><img src="competitions/poster2.jpg"></a>
                            </aside>
                            <main>
                                <h2>Tournament: 555-555-5555</h2>
                                <h2>Date: December 4th, 2015</h2>
                                <h2>Location: Phoenix, AZ </h2>
                                <h2>Time: Kids-10AM Adults-2PM</h2>
                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>
                            </main>
                    	</div>
	                    
                        <div class="content">
                            <aside>
                                <a href="http://ibjjf.org/championship/pan-jiu-jitsu-championship/"><img src="competitions/poster3.jpg"></a>
                            </aside>
                            <main>
                                <h2>Tournament: 555-555-5555</h2>
                                <h2>Date: December 4th, 2015</h2>
                                <h2>Location: Phoenix, AZ </h2>
                                <h2>Time: Kids-10AM Adults-2PM</h2>
                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>
                            </main>
                    	</div>
	                        
                        <div class="content">
                            <aside>
                                <img src="competitions/poster4.jpg">
                            </aside>
                            <main>
                                <h2>Tournament: 555-555-5555</h2>
                                <h2>Date: December 4th, 2015</h2>
                                <h2>Location: Phoenix, AZ </h2>
                                <h2>Time: Kids-10AM Adults-2PM</h2>
                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>
                            </main>
                    	</div>
	                        
                        <div class="content">
                            <aside>
                                <img src="competitions/poster5.jpg">
                            </aside>
                            <main>
                                <h2>Tournament: 555-555-5555</h2>
                                <h2>Date: December 4th, 2015</h2>
                                <h2>Location: Phoenix, AZ </h2>
                                <h2>Time: Kids-10AM Adults-2PM</h2>
                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

                            </main>
                    	</div>
	                        
	                   <div class="content">
                            <aside>
                                <img src="competitions/poster6.jpg">
                            </aside>
                            <main>
                                <h2>Tournament: 555-555-5555</h2>
                                <h2>Date: December 4th, 2015</h2>
                                <h2>Location: Phoenix, AZ </h2>
                                <h2>Time: Kids-10AM Adults-2PM</h2>
                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

                            </main>
                    	</div>
	                       
                       <div class="content">
                            <aside>
                                <img src="competitions/poster7.jpg">
                            </aside>
                            <main>
                                <h2>Tournament: 555-555-5555</h2>
                                <h2>Date: December 4th, 2015</h2>
                                <h2>Location: Phoenix, AZ </h2>
                                <h2>Time: Kids-10AM Adults-2PM</h2>
                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

                            </main>
                    	</div>
                    
                       <div class="content">
                            <aside>
                                <img src="competitions/poster8.jpg">
                            </aside>
                            <main>
                                <h2>Tournament: 555-555-5555</h2>
                                <h2>Date: December 4th, 2015</h2>
                                <h2>Location: Phoenix, AZ </h2>
                                <h2>Time: Kids-10AM Adults-2PM</h2>
                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>
                            </main>
                    	</div>

                    	<div class="content">
                            <aside>
                                <img src="competitions/poster9.jpg">
                            </aside>
                            <main>
                                <h2>Tournament: 555-555-5555</h2>
                                <h2>Date: December 4th, 2015</h2>
                                <h2>Location: Phoenix, AZ </h2>
                                <h2>Time: Kids-10AM Adults-2PM</h2>
                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>

                            </main>
                    	</div>
                    
                       <div class="content">
                            <aside>
                                <img src="competitions/poster10.jpg">
                            </aside>
                            <main>
                                <h2>Tournament: 555-555-5555</h2>
                                <h2>Date: December 4th, 2015</h2>
                                <h2>Location: Phoenix, AZ </h2>
                                <h2>Time: Kids-10AM Adults-2PM</h2>
                                <h2>Details: There will be 5 weight classes in both gi and nogi catagories</h2>
                            </main>
                        </div>

                    </div>
			    
                </div>
            
            </section>
        
        </div>
         <footer>
            &copy Abunai MMa & Jiu Jitsu 
         </footer>
    </div>
                            
    
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="/script.js"></script>

	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>
</body>
</html>
                       

        

                            

                            
                            

                            
                             
                            
            


   




