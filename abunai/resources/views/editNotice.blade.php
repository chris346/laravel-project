<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="editNotice.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
        
html {
    font-family: 'Open Sans';
}

body {
    background-image: url("abunai/grunge.jpg");
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
    height: 600px;
    width: 1156px;
    background-color: teal;
    margin: 0 auto;


}


.hero {
    
}

section {
    height: 550px;
    width: 1156px;
    background-color:pink;
    display: flex;
}

section > div {
    background: black       ;
    width: 100%;
    display: flex;
    
     background-size: 100% 120%;

}

.image {
    display:inline;
    flex:3;
    background-color:green;
    margin: 5px;
    border-radius:5px;
    background-color:rgba(0,0,0,0);
}

img {
    width:100%;
}

.box {
    margin: 132px auto;
    background: linear-gradient(rgba(93,93,93,1), black);
    padding: 10px;
    border: white solid 1px;
    border-radius: 10px;
    color: black;
}

.bg {
    display: flex;
    flex-direction: column;
    color: #00CCFF;
}
input {
     width:400px;
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
                            
                            <h1>Edit Announcement</h1>
                                
                                <label>
                                    <input type="text" name="noticeContent" value="{{$notice->noticeContent}}">
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
                    &copy Abunai MMa & Jiu Jitsu 
                </footer>

            </div>
        
        </div>
    
        
    </div>

        
</body>
</html>