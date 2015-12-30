
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="studentDetails.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
  
  
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.css"/>
  /*// Add the slick-theme.css if you want default styling*/
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick-theme.css"/>


<style>
        
  html {
  font-family: 'Open Sans';
  }

  body {
    background-image: url("http://geekongadgets.com/wp-content/uploads/2014/05/concrete-texture-abstract-mobile-wallpaper-1080x1920-4590-4143710250.jpg");
  }

    header{
       height: 20px;
       background-color: black;
       color:white;
       text-align: left;
    }

    header a {
        color: white;
        font-weight: 300;
        text-decoration:none;
    }
    header span {
        color:red;
        margin-right: 163px;
        margin-left: 20px;
    }

    .login {
        margin-left: 520px;
    }
    
    .hello {
        margin-left: 939px;
        position: absolute;
    }
    
    .logout {
        position: absolute;
    }

    .message {
        position: relative;
        width: 98px ;
        top: -50;
        left: 1030;
    }

    a:link {
    color: red;
    text-decoration: none;
    }

    a:active {
        color: #F5D04C;
    }

   a:visited{
        text-decoration: none; 
        color: red;
    }
    
    nav a:visited {
        text-decoration: none; 
        color: white; 
    }
    /*PAGE TITLE*/
    .name {
        flex:1;
        margin-left:94px;
        font-family: Open Sans;
    }
    .abunai {
        font-size: 28px;
        color: white;
    }

    .abunai2{
        color:red;
        font-size:22px;
        font-weight:300;
    }
    
    .name a {
        font-weight: 700;
    }

    .links{
        flex:2;
        margin-left:94px;
        font-size:14px;
    }

    /*NAV BAR*/

    nav{
      padding: 4px;
      box-sizing: border-box;
      height: 50px;
      display: flex;
      background: linear-gradient(rgba(93,93,93,1), black); /* Standard syntax */
    }

    nav a {
        padding-left:22px;
        padding-right:22px;
        padding-top:0px;
        padding-bottom:0px;
        height:0px;
        color: white;
        text-decoration:none;
        position: relative;
        margin-top: 10px;
    }
  .parent {
      
      width: 1156px;
      background-color: teal;
      margin: 0 auto;
  }
  .hero {
      
  }
  section {
      width: 1156px;
      background-color:pink;
      display: flex;
  }
  section > div {
      background: #232323;
      width: 100%;
      display: flex;
      background-size: 100% 120%;
  }

  .bg {
      display: flex;
      flex-direction: column;
      color: #00CCFF;
  }

  .titleHolder {
    height:100px;
      background: #232323;
  }

  .abunai {
      font-family: Open Sans;
  }

  .pageTitle  {
    text-align: center;
      color:white;
      font-family: Special Elite;
      font-size: 58px;
      text-transform: uppercase;
  }

  .imagePanel {
    width: 100%;
    background-color: red;
    /*display: flex;*/
  }

  .imagePanel div {
    width: 100%;
  }

  .imageHolder {
    height: 300px;
    width: 300px;
    overflow:hidden;
    display: inline-block;
    position: absolute;
    transform: translate(420px,-100px);

  }

  .imageHolder img {
    height:270px;
    width:270px;
    border-radius: 50%;
    border: #232323 solid 15px;
  }

  .studentTitle {
    display: inline-block;
    background-color: yellow;
    height:70px;
    width: 100%;
    display: inline-block;
  }

    .caro {
    height: 340px;
    background-color: black;
      

      }
  .imageGroup {
       
  }

  .caro .imgHolder {
      width:270px;
      height:270px;
      display: inline-block;
      flex:1;
  }

  .caro .imgHolder img {
      height: 100%;
      width: auto;
  }


  .studentContent {
    display: inline-block;
    font-family: Special Elite;
    /*background: #232323; */  
    background: #232323;
    height:380px;
    width: 100%;
    display: flex;
  }

  .studentContent div {
      flex:1;
      background: #232323;
  }

  .studentContent h1 {
    margin-left: 60px;
    color: white;
  }

  .primary {
      width: 1156px;
      background-color: green;
      text-align: center;
     
  }

  footer {
        height: 50px;
        color:red;
        background: linear-gradient(rgba(93,93,93,1), black);
        text-align: left;
        font-size: 20px;
        font-weight: 300;
    }

  </style>  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script>

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
                          <a target="_blank" href="https://www.facebook.com/Abunai-MMA-Jiu-jitsuNava-Brazilian-Jiu-jitsu-298814180276100/photos_stream?tab=photos_albums">PICTURES</a>
                          <a href="/contact">CONTACT</a>
                         
                      </div>
                   </nav>
                <div>
                
                 
      					
      						<div class="caro">
      							
                    <div id="carousel">
                          
                      <div class="imgHolder"><img src="/heroes/{{$student->img1}}"></div>
                      <div class="imgHolder"><img src="/heroes/{{$student->img2}}"></div>
                      <div class="imgHolder"><img src="/heroes/{{$student->img3}}"></div>
                      <div class="imgHolder"><img src="/heroes/{{$student->img4}}"></div>
                      <div class="imgHolder"><img src="/heroes/{{$student->img5}}"></div>
                          
                    </div>  
                  
      	           <div class="imageHolder">
      		            <img src="/heroes/{{$student->img1}}">
      						</div>

                  <div class="studentContent">
                      <div>
                         <h1>Name: {{$student->studentName}}</h1>
                      </div>
                      <div>
                          <h1>Belt Rank: {{$student->studentRank}}</h1>
                      </div>
                      <div>
                          <h1>Contact Number: {{$student->studentPhone}}</h1>
                      </div>
      						</div>
                                
                  <footer>
                    &copy Abunai MMa & Jiu Jitsu 
                  </footer>
                    
				       </div>
            
			    </div>
          
				</section>               
        
		  </div> {{-- closes .hero --}}
        
	</div> {{-- closes parent --}}
                  
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="/script.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.8/slick.min.js"></script>
</body>


                      
                    
          

              
        

    
       
  

							