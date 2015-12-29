<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="newNotice.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

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
                    <div class="box">
                        <form method="POST">
                            {!! csrf_field() !!} 
                            <h1>Make a New Announcement</h1>
                            <label>
                                <input type="text" name="noticeContent">
                            </label>
                            <br>
                            <br>
                            <button>Announce</button>
                            <a href="/home">Cancel</a>
                        </form>
                    </div>
                </div>
            </section>

            <footer>
                &copy Abunai MMA & Jiu Jitsu 
            </footer>

        </div>
            
    </div>}
</body>
</html>
                    
                    
    
    
                            
                                
    
    
                                    
    
    
                                    
    
    
    

                            