<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="newStudent.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
        


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
                        
                        <form method="POST">
                            {!! csrf_field() !!} 
                            
                        <h1>Add a new student</h1>

                            <label>
                                <h2>Name: <input type="text" name="studentName"></h2>
                                <h2>Email: <input type="text" name="email"></h2>

                                <h1>BJJ Belt Rank</h1>
                                <div class="rank">
	                                <h4>White<input type="radio" name="studentRank" value="white"></h4>
	                                <h4>Blue<input type="radio" name="studentRank" value="blue"></h4>
	                                <h4>Purple<input type="radio" name="studentRank" value="purple"></h4>
	                                <h4>Brown<input type="radio" name="studentRank" value="brown"></h4>
	                                <h4>Black<input type="radio" name="studentRank" value="Black"></h4>
	                            </div>

                                {{-- <h2>Image1: <input type="text" name="img"><small>This will be your Profile Picture </small></h2>
                                <h2>Image2: <input type="text" name="img"></h2>
                                <h2>Image3: <input type="text" name="img"></h2>
                                <h2>Image4: <input type="text" name="img"></h2>
                                <h2>Image5: <input type="text" name="img"></h2> --}}
                                
                            </label>
                            

                            <br>
                            <br>

                            <button>Add Student</button>
                            <a href="/students">Cancel</a>

                        </form>

                        
                    </div>

                </section>

                
                

                <footer>
                    FOOTER
                </footer>

            </div>
        
        </div>
    
        
    </div>

        
</body>
</html>