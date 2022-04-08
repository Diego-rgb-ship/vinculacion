<link rel="stylesheet" href="{{asset('plugins/bootstrapmain/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('plugins/bootstrapmain/css/style.css')}}">
<link rel="stylesheet" href="{{asset('plugins/bootstrapmain/css/font-awesome.css')}}">


<script type="text/javascript" src="{{asset('plugins/bootstrapmain/js/jquery-2.1.4.min.js')}}"></script>
  <script>
    $('ul.dropdown-menu li').hover(function () {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function () {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
  </script>
  <script type="text/javascript" src="{{asset('plugins/bootstrapmain/js/bootstrap.js')}}"></script>
  <!-- Flexisel-js for-testimonials -->
<script type="text/javascript">
              $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                  visibleItems:1,
                  animationSpeed: 1000,
                  autoPlay: false,
                  autoPlaySpeed: 3000,        
                  pauseOnHover: true,
                  enableResponsiveBreakpoints: true,
                  responsiveBreakpoints: { 
                    portrait: { 
                      changePoint:480,
                      visibleItems: 1
                    }, 
                    landscape: { 
                      changePoint:640,
                      visibleItems:1
                    },
                    tablet: { 
                      changePoint:768,
                      visibleItems: 1
                    }
                  }
                });
                
              });
          </script>
          <script type="text/javascript" src="{{asset('plugins/bootstrapmain/js/jquery.flexisel.js')}}"></script>
<!-- Flexisel-js for-testimonials -->
<!-- stats -->
  <script src="{{asset('plugins/bootstrapmain/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('plugins/bootstrapmain/js/jquery.countup.js')}}"></script>
    <script>
      $('.counter').countUp();
    </script>