{{print_r($errors)}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<style type="text/css">
    
html {
    font-family: 'Open Sans';
}

body {
     background-color: black;
}

header{
   height: 20px;
   background-color: black;
   color:white;
   text-align: right;
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

nav{
    padding: 4px;
    box-sizing: border-box;
    height: 50px;
    display: flex;
    background: linear-gradient(rgba(93,93,93,1), black); /* Standard syntax */
}

.name {
    flex:1;
    font-size:30px;
    margin-left:94px;
}

.name a {
    font-weight: 700;
}

.name a span {
    color: red;
}

.links{
    flex:2;
    margin-left:94px;
    font-size:14px;
}


nav a {
    padding:22px;
    height:0px;
    color: white;
    text-decoration:none;
    position: relative;
    margin-top: 10px;
    

}

h1 {
    margin: 0 auto;
}

.parent {
    height: 530px;
    width: 1156px;
    margin: 0 auto;
    background-color: black;
}

.hero {
    
}

section {
    
    width: 1156px;
    background-color:pink;
    display: flex;
}

section > div {
    background: black;
    width: 100%;
    display: flex;
    background-size: 100% 120%;
}



.bg {
    display: flex;
    flex-direction: column;
    color: white;
}
footer {
    height: 50px;
    background-color: black;
}

.loginBox {
    background-color: white;
    width: 600px;
    height: 230px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 148px;
    padding-top: 43px;
    border: red solid 3px;
    border-radius: 10px;
    text-align: center;
}

.error-message{
    color:red;
}


form {
    background-color: white;
    text-align: right;
    width: 406px;
}
form div {
    margin-left: auto;
    margin-right: auto;
}

.email {
    margin-top:30px;
}

    </style>
</head>
<body>
        <div class="parent">
            <div class="hero">

                                
                <section>
                    <div class="bg">
                        <header>
                            {{-- <a href="">Already a member? <span>Login Here</span></a> --}}
                        </header>
                       {{--  <nav>
                            <div class="name">
                                <a href="/home">ABUNAI <span>MMA</span></a>
                            </div>
                            <div class="links">
                                 <a href="/home">HOME</a>
                                <a href="/aboutUs">ABOUT US</a>
                                <a href="/gallery">GALLERY</a>
                                <a href="/admin">ADMIN</a>
                                <a href="/contact">CONTACT</a>
                            </div>

                        </nav> --}}
                        {{-- <h1>Login Page</h1> --}}
                    </div>

                </section>

                <div class="parent">

                    <div class="loginBox">
                        LOGIN
                        <form method="POST" action="/auth/login">
                        {!! csrf_field() !!}

                            <div class="formInputs">
                                
                                <div class="email">
                                    Email
                                    <input type="email" name="email" value="{{ old('email') }}">
                                </div>

                                <div class="password">
                                    Password
                                    <input type="password" name="password" id="password">
                                </div>

                                <div>
                                    <input type="checkbox" name="remember"> Remember Me
                                </div>

                                <div>
                                    <button type="submit">Login</button><a href="/auth/register"><small>Register</small></a>
                                </div>
                                
                            </div>
                        
                        </form>
                        @if(count($errors) > 0)
                        @if(count($errors->getBags()['default']->get('email'))>0)
                            <div class="error-message">{{$errors->getBags()['default']->get('email')[0]}}</div>
                        @endif
                        @if(count($errors->getBags()['default']->get('password'))>0)
                            <div class="error-message">{{$errors->getBags()['default']->get('password')[0]}}</div>
                        @endif 
                @endif
                    </div>
                </div>
                

                <footer>
                    FOOTER
                </footer>

            </div>
        
        </div>
    
    </div>

        
</body>
</html>