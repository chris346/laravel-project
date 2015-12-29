<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Abunai Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    

</head>

<body>
{{Auth::user()}}
        <div id="fb-root"></div>
      
        <div class="parent">
            <div class="hero">
                    
             {{--   @if(!Auth::user())
                            <video width="100%" height="100%" autoplay>
                                <source src="abunai/Project.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2'>
                            </video>
                @endif --}}

                 <div class="gradient">             
                   
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
                            
                            
                            <div class="panel">

                            <div class="title">Announcements</div>
                        
                            <div class="articleNoticeTop">
                            
                            <a class="make" href="/newNotice">Make a New Announcement!</a>   

                                @foreach($notices as $n)
                                    
                                    <div class="popUp">
                                        <div id="triangle"></div>
                                            <div class="description">
                                           
                                            <span class="noticeContent">"{{$n->noticeContent}}"</span><br>


                                            @if(Auth::user())
                                                <small class="date"><i>{{Auth::user()->created_at}}</i></small>
                                            @endif
                                            
                                            @if(Auth::user())
                                            <button class="button" data="{{$n->noticeID}}"><small>REMOVE</small></button>
                                            <a href="/editNotice/{{$n->noticeID}}/edit"><small>Edit</small> </a>
                                            @endif
                                        
                                        </div>
                                    </div>
                                    
                                @endforeach   
                                
                                <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>{{-- SRCRIPT TAG FOR DELETING NOTICES --}}
                                <script>
                                $(function(){
                                    $.ajaxSetup({
                                        headers: {
                                        'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                                        }
                                    });

                                     $("button").on("click", function(){
                                        console.log("clicking");

                                        var id = $(this).attr("data");
                                        var div = $(this).parents("div.popUp");
                                        $.post("/api/notice/delete/"+id, {id: id}, function(res){
                                            div.remove();
                                        });
                                    });
                                });
                               
                                </script>
                                <script src="/home.js"></script> 


                            
                        </div> {{-- ends articleTopNotice --}}
                            
                    </section>

                    <div class="selectionBar">
                        <a href="/students">
                            
                            <div class="selectionBox">
                                    <div class="selectionImage">
                                        <img src="abunai/students.jpg" alt="">  
                                    </div>
                                <div class="selectionContent">
                                    <h2>STUDENTS</h2>
                                    <span>MEET THE TEAM</span>
                                </div>
                            </div>
                        </a>
                                        
                        <div class="selectionBox">
                            <div class="selectionImage">
                                <img src="abunai/class.jpg" alt="">
                            </div>
                            <div class="selectionContent">
                            @if(Auth::user())
                                <a onclick="alert('THANK YOU! You have been checked in')" href="/student/checkIn">
                                    <h2>CHECK-IN</h2>
                                </a>
                            @else
                                {{-- <a onclick="alert('CHECK IN NOT ALLOWED. YOU MUST BE A REGISTERED MEMBER TO CHECK IN FOR CLASS')"href="/auth/register"> --}}
                                <a onclick="alert('YOU MUST BE LOGGED IN TO CHECK IN FOR CLASS')"href="/auth/login">
                                    <h2>CHECK-IN</h2>
                                </a>

                            @endif
                             <span>CHECK-OUT</span>
                            </div>
                        </div>

                        <a href="/comp">
                            <div class="selectionBox">
                                <div class="selectionImage">
                                    <img src="abunai/armbar.jpg" alt="">  
                                </div>
                                <div class="selectionContent">
                                    <h2>TOURNAMENTS</h2>
                                    <span>UPCOMING COMPETITIONS</span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
            
            <div class="primary">
                
                <div class="panel">
                    <div class="title">Follow Us On Facebook</div>

                    <div class="articleFacebook">
                        
                        <div class="content">
                             <div class="fb-page" data-href="https://www.facebook.com/Abunai-MMA-Jiu-jitsuNava-Brazilian-Jiu-jitsu-298814180276100/" 
                                data-width="1000" data-height="640" data-hide-cover="false" data-show-facepile="false"
                                data-show-posts="true">
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
               
                <div class="panel">
                    <div class="title">Schedule</div>

                    <div class="articleSchedule">
                        <div class="attending time">
                            <div class="content">
                                <h2>Monday<h2>
                                <h4>5:15pm. Kids- Brazilian Jiu-jitsu.</h4>
                                <h4>6pm. Womens- MMA/Jiu-jitsu Combatives.<h4>
                                <h4>7pm. All Levels- Brazilian Jiu-jitsu Fundamentals.<h4>
                                <h4>8pm. Adults- Advanced Brazilian Jiu-jitsu.<h4>
                                
                                <h2>Tuesday</h2>
                                <h4>6pm. All Levels- MMA/Muay Thai/No-Gi Grappling.</h4>
                                <h4>7pm. All Levels- Judo/Competition Brazilian Jiu-jitsu.</h4>
                                <h4>8pm. Adults- Advanced Brazilian Jiu-jitsu.</h4>
                                
                                <h2>Wednesday<h2>
                                <h4>5:15pm. Kids- Brazilian Jiu-jitsu.<h4>
                                <h4>6pm. Womens- MMA/Jiu-jitsu Combatives.<h4>
                                <h4>7pm. All Levels- Brazilian Jiu-jitsu Fundamentals.</h4>
                                <h4>8pm. Adults- Advanced Brazilian Jiu-jitsu.<h4>
                                
                                <h2>Thursday</h2>
                                <h4>6pm. All Levels- MMA/Muay Thai/No-Gi Grappling.</h4>
                                <h4>7pm. All Levels- Judo/Competition Brazilian Jiu-jitsu.</h4>
                                <h4>8pm. Adults- Advanced Brazilian Jiu-jitsu.</h4>
                                
                                <h2>Friday</h2>
                                <h4>5:15pm. Kids- Brazilian Jiu-jitsu.</h4>
                                <h4>6pm. Womens- MMA/Jiu-jitsu Combatives.</h4>
                                <h4>7pm. All Levels- Brazilian Jiu-jitsu Fundamentals. (Gi)</h4>
                                <h4>8pm. Adults- Advanced Brazilian Jiu-jitsu. (Gi)</h4>
                                
                                <h2>Saturday<h2>
                                <h4>6am-8am. Open for Privates. (By Appointment Only)</h4>
                                <h4>9am. Strength & Conditioning.</h4>
                                <h4>10am. All Levels- MMA/Muay Thai/No-Grappling.</h4>
                                <h4>11am. All Levels- Brazilian Jiu-jitsu.</h4>
                                <h4>12pm-2pm. Open Mat.</h4>
                                <h4>6pm-8pm. All Levels- Open Mat. (TBA)</h4>
                                
                                <h2>Sunday</h2>
                                <h4>6am-8am. Open for Privates. (By Appointment Only)</h4>
                                <h4>9am. Strenght & Conditioning Workout. (TBA)</h4>
                                <h4>6pm-8pm. Open Mat. (TBA)</h4>
                            </div>

                        </div>

                    </div>
                </div>
                
                <div class="panel">
                    <div class="title">Attending Today</div>

                    <div class="articleAttend">
                        
                        <div class="attending">
                            <div class="content">
                                 
                                
                                @foreach($students as $s)
                                    
                                        <a href="/student/{{$s->studentID}}">   
                                            <div class="popUp">
                                                <div class="aside">

                                                    <img src="/heroes/{{$s->img1}}">
                                                </div>
                                                <div class="content">
                                                    <strong>{{$s->studentName}}</strong><br>
                                                    Belt Rank: {{$s->studentRank}}<br>
                                                    Contact#{{$s->studentPhone}}<br>    
                                                </div>
                                            </div>
                                        </a>
                                    
                                @endforeach


                            </div>

                        </div>{{-- closes .attending --}}

                    </div>{{-- closes .articleAttend --}}
                </div>

                <footer>
                        &copy Abunai MMA & Jiu Jitsu 
           
                </footer>
            </div>
        </div>

<script src="/script.js"></script>
</body>
                
</html>

                        
                        
                               
                                        


                            

                            
                                
                                

                

        
    
        
    
        
            
            







        
       
  






