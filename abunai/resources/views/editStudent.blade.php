<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="editStudent.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    

</head>
<body>
        <div class="parent">
            <div class="hero">

                                
                <section>
                    <div class="bg">
                                           
                       <form method="POST">
                            {!! csrf_field() !!} 
                            
                        <h1>Edit {{$student->studentName}}'s profile</h1>
                        <h4><a href="/students">Return Students Page</a>

                            <label>
                                <h2>Name: <input type="text" name="studentName" value="{{$student->studentName}}"></h2>
                                <h2>email: <input type="text" name="email" value="{{$student->email}}"></h2>
                                <h2>Contact Number: <input type="text" name="studentPhone" value="{{$student->studentPhone}}"h2>
                               <h1>BJJ Belt Rank</h1>
                                <div class="rank">
                                    <h4>White<input type="radio" name="studentRank" value="white"></h4>
                                    <h4>Blue<input type="radio" name="studentRank" value="blue"></h4>
                                    <h4>Purple<input type="radio" name="studentRank" value="purple"></h4>
                                    <h4>Brown<input type="radio" name="studentRank" value="brown"></h4>
                                    <h4>Black<input type="radio" name="studentRank" value="Black"></h4>
                                </div>
                                <h2>Image1: <input type="text" name="img1" value="{{$student->img1}}"><small>This will be your Profile Picture </small></h2>
                                <h2>Image2: <input type="text" name="img2" value="{{$student->img2}}"></h2>
                                <h2>Image3: <input type="text" name="img3" value="{{$student->img3}}"></h2>
                                <h2>Image4: <input type="text" name="img4" value="{{$student->img4}}"></h2>
                                <h2>Image5: <input type="text" name="img5" value="{{$student->img5}}"></h2>
                               

                                

                            </label>
                            


                            <h3><button>Save Changes</button></h3>
                            <a href="/students">Cancel</a>
                            

                        </form>

                    </div>

                </section>

                 
                        
                

                
            </div>
        
        </div>
    <footer>
        
    </footer>
        
    </div>


</body>
</html>