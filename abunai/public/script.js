

// -------------------------------------------------------------------------------STUDENTS
$(function(){

    console.log("ready"); 

    // $.ajaxSetup({
    //     headers: {
    //     'X-CSRF-TOKEN': '{!! csrf_token() !!}'
    //     }
    // });

    $("button").on("click", function(){
        var id = $(this).attr("data");
        var div = $(this).parents("div.innerPanel");

        $.get("/api/student/delete/"+id, function(res){
            div.remove();
        });

    });
});

//HOVER ZOOM .INNERPANEL
// $(document).ready( function() {
//     $('.innerPanel').hover(
//     function() {
//         $(this).animate({ 'zoom': 1.4 }, 50);
//     },
//     function() {
//         $(this).animate({ 'zoom': 1 }, 50);
//     });

// });


// ------------------------------------------------------------------------------------HOME

// $(function(){
//     console.log("ready");
//     $.ajaxSetup({
//         headers: {
//         'X-CSRF-TOKEN': '{!! csrf_token() !!}'
//         }
//     });

//     $("button").on("click", function(){
//         var id = $(this).attr("data");
//         var div = $(this).parents("div.popUp");
//         $.post("/api/notice/delete/"+id, {id: id}, function(res){
//             div.remove();
//         });
//     });
// });

                                

// HOVER 
$(document).ready( function() {
    $('.attending .popUp').hover(
        function() {
            $(this).animate({ 'zoom': 1.2 }, 100);
        },
        function() {
            $(this).animate({ 'zoom': 1 }, 100);
        });
});

// {{-- FACEBOOK --}}
 $(document).ready( function() {
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"; 
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
});

// {{-- INTRO VIDEO --}}
$(document).ready( function() {
    setTimeout(function() {
        $("video").remove();
    }, 16000);
});

//-------------------------------------------------------------------------COMP    
// {{-- CAROUSEL --}}

$(document).ready( function(){  
    $('.list').slick({
        infinite: true,
        slidesToShow:1,
        slidesToScroll: 1
    });
 });




// HOVER
$(document).ready( function() {
    $('aside').hover(
      function() {
          $(this).animate({ 'zoom': 1.2  }, 100);
      },
      function() {
          $(this).animate({ 'zoom': 1 }, 100);
    });
});


//-------------------------------------------------------------------------- STUDENTDETAILS

$(document).ready( function(){  
  $('#carousel').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1
  });
});



// $(document).ready( function() {
// $('.imageHolder').hover(
//   function() {
//     $(this).animate({ 'zoom': 1.2 }, 100);
//   },
//   function() {
//     $(this).animate({ 'zoom': 1 }, 100);
//   });

// });



// {{-- DELETE NOTICE --}}
// <script>
// $(function(){
//     console.log("ready");
//     $.ajaxSetup({
//         headers: {
//         'X-CSRF-TOKEN': '{!! csrf_token() !!}'
//         }
//     });

//     $("button").on("click", function(){
//         var id = $(this).attr("data");
//         var div = $(this).parents("div.popUp");
//         $.post("/api/notice/delete/"+id, {id: id}, function(res){
//             div.remove();
//         });
//     });
// });

// </script>

// {{-- HOVER --}}
// <script type="text/javascript">
//     $(document).ready( function() {
//         $('.attending .popUp').hover(
//             function() {
//                 $(this).animate({ 'zoom': 1.2 }, 100);
//             },
//             function() {
//                 $(this).animate({ 'zoom': 1 }, 100);
//             });
//     });
// </script>

// {{-- FACEBOOK --}}
// <script>
//         (function(d, s, id) {
//           var js, fjs = d.getElementsByTagName(s)[0];
//           if (d.getElementById(id)) return;
//           js = d.createElement(s); js.id = id;
//           js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"; 
//           fjs.parentNode.insertBefore(js, fjs);
//         }(document, 'script', 'facebook-jssdk'));
// </script>

// {{-- INTRO VIDEO --}}
// <script type="text/javascript">
//     setTimeout(function() {
//         $("video").remove();
//     }, 16000);
// </script>                      