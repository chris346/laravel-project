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
    background-color:gray;
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

#logo {
    position: absolute;
    height: 100px;
}

.parent {
    height: 600px;
    width: 1156px;
    background-color: teal;
    margin: 0 auto;


}

video {
    /*min-width: 100%;
    min-height: 100%;*/
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
    background: purple;
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

.bg {
    display: flex;
    flex-direction: column;
    color: #00CCFF;
}

.selectionBar {
    background-color:yellow;
    text-align: center;
    height:100px;
    
}

.selectionBox {
    width:300px;
    background-color: white;
    display: inline-block;
    margin:5px;
    transform: translate(0px, -165px);
    box-shadow: 5px 5px 10px #000;
}

.selectionImage {
    background-color:lightblue;
    height:160px;
}

.selectionImage img {
    height:100%;
    width:100%;
}

.selectionContent {
    height: 80px;
    text-align: left;
    padding: 10px;
    box-sizing: border-box;
    background: linear-gradient(#4D4D4D, black); /* Standard syntax */
}

.selectionContent span {
color: gray;
}

.selectionContent h2 {
    margin: 0px;
    color: white;
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

article {
    display: inline-block;
    width: 300px;
    height: 500px;
    margin: 5px;
    background-color: lime;
    text-align: left;
    overflow: scroll;
}

.title {
    color: white;
    margin-left: 5px;
}

article .description {
    color: red;
}

article .content {
    color: white;
    height:3000px;
}

.day {
    color:red;
    font-size: white;
    font-size:20px;
}

.time {
    color: white;
}

.attending {
    width:100%;

}

.attending h3 {
    color: white;
    text-align: center;
}

.attendee {
    width: 80%;
    display: flex;
    padding:5px;
    background-color:pink;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5px;


}

.attendee .img{
    flex:1;
    height:95px;
    background-color: white;
}

.attendee .info{
    flex:2;
    height:50px;
    background-color: teal;

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
                            <a href="">Already a member? <span>Login Here</span></a>
                        </header>
                        <nav>
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

                        </nav>
                        <h1>Admin</h1>
                        <div class="panelRow">
	                        
	                        <div class="panel">
		                        	<form action="/newGame" method="POST">
								<!-- {!! csrf_field() !!} --> 
								
									<label>New Announcement:<br>
										<textarea name="announcement"></textarea>
									</label><br>
									<button>Announce</button>
								</form>
							</div>
							
							<div class="panel">
								<h1>Add a new student</h1>	
								<form>
									<label>
										New student name:<br>
										<input type="text" name="name"><br><br>
										Image:<br>
										<input type="text" name="imgfile">
									</label> <br>
									<button>add student</button>
								</form>
							</div>

							<div class="panel">
								<h1>Add a new Tournament</h1>	
								<form>
									<label>
										New Tournament Name:<br>
										<input type="text" name="name"><br><br>
										Image:<br>
										<input type="text" name="imgfile">
									</label> <br>
									<button>add student</button>
								</form>
							</div>
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