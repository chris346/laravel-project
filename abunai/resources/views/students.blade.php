<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
    <link rel="stylesheet" type="text/css" href="students.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body>
        <div class="parent">
            <div class="hero">
                <section>
                    <div class="bg">
                        <header>
                            @if(Auth::user())
                                <div class="hello">Hello {{Auth::user()->studentName}}<a href="/auth/logout"><span class="logout">Logout</span></a></div>
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
                          
                        <div class="outerPanel">
                        
                        <div class="background">
                            
                                <a class="add" href="/auth/register">NEW STUDENT</a>
                           
                            @foreach($students as $s)
                        		<div class="innerPanel">
		                        	 	<div class="imgHolder">
		                        	 		<a href="/student/{{$s->studentID}}">
                                                <img src="/heroes/{{$s->img1}}">
                                            </a>
		                        	 	</div>
                                        
		                        	 	
		                        	 	<div class="infoHolder">
		                        	 		<h4>Name: {{$s->studentName}}</h4>
                                            <h4>Contact # {{$s->studentPhone}}</h4>
                                            <h4>Email: {{$s->email}}</h4>

		                        	 	</div>
		                        	 	
		                        	 	<div class="contentHolder">
		                        	 		 <h4>Rank: {{$s->studentRank}}</h4>
		                        	 	</div>

                                        <div class="buttonHolder">
                                            <button data="{{$s->studentID}}"><small>REMOVE</small></button>
                                            <a href="/editStudent/{{$s->studentID}}/edit">edit</a>
                                        </div>
                                        
		                        	</div>
		                        
			                 @endforeach

                            <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
                            <script src="/script.js"></script>
                              
		               </div>
                    
                    </div>
            
                </section>

            </div> {{-- closes .hero --}}
        
        </div>{{-- closes .parent --}}
    
    </div>
    <footer>
       &copy Abunai MMA & Jiu Jitsu 
    </footer>
        
      
</body>
</html>

                                
                        