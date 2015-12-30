<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="aboutUs.css">
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
                                    <a href="/https://www.facebook.com/Abunai-MMA-Jiu-jitsuNava-Brazilian-Jiu-jitsu-298814180276100/photos_stream?tab=photos_albums">PICTURES</a>
                                    <a href="/contact">CONTACT</a>
                                </div>

                            </nav>
                        
                        <div class="content">
                            <h1 class="pageTitle">About Us</h1>
                            Abunai MMA & Jiu jitsu is dedicated to improving the lives of its 
                            students through the practice of martial arts. Students learn not 
                            only one of the most effective systems of self-defense and martial 
                            arts, but also one of the most complete forms of health improvement 
                            that give the values of positive attitude, discipline, respect, help 
                            students becoming well-rounded, responsible and successful individuals 
                            in life. Our kids class is fun and great for confidence, stranger safety 
                            skills, character development as well as bully proofing.

                            Our cardio program is an awesome workout involving many different tools 
                            & exercise movements to get you in the shape you want. Our workouts are 
                            all technique based, so that the student develops skills through repetition 
                            which develops muscle memory. We focus on four categories of fitness: 
                            cardiovascular, flexibility, strength training, as well as self defense. 
                            We believe that the mind and body need to be healthy and strong. One of the 
                            keys to our program is the balance between traditional techniques and modern 
                            training methods that are safe and effective.
                            
                            <h1>Abunai MMA & Jiu jitsu Creed</h1>
                            
                            UPHOLD THE PRINCIPLES OF PROPRIETY & COURTESY.<br>

                            CULTIVATE THE SPIRIT OF EFFORT.<br>

                            PERFECT THE MIND OF PATIENCE.<br>

                            LEAD THE WAY OF TRUTH.<br>

                            I WILL NOT LOSE SELF CONTROL OR ACT IN A VIOLENT MANNER.<br>

                            THIS IS A BLACK BELT SCHOOL. WE ARE DEDICATED, WE ARE MOTIVATED WE ARE ON A QUEST TO BE THE BEST. Osss!!!<br>

                            <h1>Abunai MMA Code of Ethics</h1>

                            I will look for the good in all people and make them feel worth while.

                            I will always be in a positive frame of mind convey this feeling to every person that I meet.

                            I will give so much time to the improvement of myself that I have no time to criticize others.

                            If I have nothing good to say about a person, I will say nothing.

                            I shall continually work at developing love, happiness and loyalty in my family and acknowledge that no other success can compensate failure in the home.

                            I shall develop myself to the maximum of my potential in all ways.

                            I will always remain loyal to my country and obey the laws of the land.

                            I will be as enthusiastic about the success of others as I am about my own.

                            I will forget about the mistakes of the past and press on to greater achievements in the future.

                            I will maintain an attitude of open-mindedness towards another’s viewpoints while still holding fast to that I know to be true and honest.

                            I will maintain respect for those in authority and demonstrate this respect at all times.

                            I will become and remain highly goal oriented throughout my life.

                      
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