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
    background-image: url("abunai/grunge.jpg");
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
    background-image: url("abunai/dojo.jpg");
    width: 100%;
    display: flex;
    background-size: 100% 120%;
}

img {
    width:100%;
}

.bg {
    height: 810px;
    display: flex;
    flex-direction: column;
    color: white;
}

h1 {
    color: red;
}

.pageTitle {
    text-align: center;
    font-size: 46px;
}

.content {
    padding-left: 100px;
    padding-right: 100px;
    display: flex;
    color: white;

}

aside{
    border: black solid 2px;
}

main {
    flex: 1;
    padding: 20px;
    color: red;
    background-color: rgba(0,0,0,0.4);
    border: black solid 2px;
}

iframe {

}

.primary {
    width: 1156px;
    background-color: green;
    text-align: center;
   
}
.panel {
    display:inline-block;
    text-align: left;
}

footer {
    height: 50px;
    background-color: black;
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
                        <h1 class="pageTitle">Contact</h1>
                        <div class="content">
                            <aside>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.396359990892!2d-112.39594534948682!3d33.59501898063823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b45a7ddce6b3b%3A0x8c3f375980699520!2sW+Cactus+Rd+%26+N+Reems+Rd%2C+Surprise%2C+AZ+85379!5e0!3m2!1sen!2sus!4v1446160252069" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </aside>
                            <main>
                                <h2>Phone: 555-555-5555<h2>
                                <h2>Email: abunaimma@gmail.com</h2>
                                <h2>Surprise, AZ, United States 85379</h2>

                            </main>
                        </div>
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


