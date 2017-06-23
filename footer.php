<div class="container-fluid footer-bg">
<div class="row">

<div class="col-md-7 footer">
<ul>
<li><a href="">Legal</a></li>
<span>| </span>
<li><a href="">Cookies </a></li>
<span> | </span>
<li><a href=""> Privacy </a></li>
</ul>

</div>

<div class="col-md-4 footer">
<p>2016 Brava Negocios</p>

</div>

</div>
</div>

</body>
</html>



<script type="text/javascript">
	
(function(){
  var animenuToggle = document.querySelector('.animenu__toggle'),
      animenuNav    = document.querySelector('.animenu__nav'),
      hasClass = function( elem, className ) {
        return new RegExp( ' ' + className + ' ' ).test( ' ' + elem.className + ' ' );
      },
      toggleClass = function( elem, className ) {
        var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ' ) + ' ';
        if( hasClass(elem, className ) ) {
          while( newClass.indexOf( ' ' + className + ' ' ) >= 0 ) {
            newClass = newClass.replace( ' ' + className + ' ' , ' ' );
          }
          elem.className = newClass.replace( /^\s+|\s+$/g, '' );
        } else {
          elem.className += ' ' + className;
        }
      },           
      animenuToggleNav =  function (){        
        toggleClass(animenuToggle, "animenu__toggle--active");
        toggleClass(animenuNav, "animenu__nav--open");        
      }

  if (!animenuToggle.addEventListener) {
      animenuToggle.attachEvent("onclick", animenuToggleNav);
  }
  else {
      animenuToggle.addEventListener('click', animenuToggleNav);
  }
})()      
	
</script>


<!--equipe-->
<script>
$( ".push" ).hover(function() {
if($( ".pop" ).is(":hidden")) {
  $( this ).css({
    cursor: "pointer"
  });
  $( ".pop" ).slideDown( 1000, function() {
    $( this )
      .css( "", "" )
      .filter( ".middle" )
        .css( "", "" )
        .focus();
    $( ".push" ).css( "visibility", "show" );
  });
}else{
  $( ".pop" ).slideUp( 10, function() {
    
  });
}
});
 
</script>

<script>
$( ".push2" ).hover(function() {
if($( ".pop2" ).is(":hidden")) {
  $( this ).css({
    cursor: "pointer"
  });
  $( ".pop2" ).slideDown( 1000, function() {
    $( this )
      .css( "", "" )
      .filter( ".middle" )
        .css( "", "" )
        .focus();
    $( ".push2" ).css( "visibility", "show" );
  });
}else{
  $( ".pop2" ).slideUp( 10, function() {
    
  });
}
});
 
</script>

<script>
$( ".push3" ).hover(function() {
if($( ".pop3" ).is(":hidden")) {
  $( this ).css({
    cursor: "pointer"
  });
  $( ".pop3" ).slideDown( 1000, function() {
    $( this )
      .css( "", "" )
      .filter( ".middle" )
        .css( "", "" )
        .focus();
    $( ".push3" ).css( "visibility", "show" );
  });
}else{
  $( ".pop3" ).slideUp( 10, function() {
    
  });
}
});
 
</script>

<script>
$( ".push4" ).hover(function() {
if($( ".pop4" ).is(":hidden")) {
  $( this ).css({
    cursor: "pointer"
  });
  $( ".pop4" ).slideDown( 1000, function() {
    $( this )
      .css( "", "" )
      .filter( ".middle" )
        .css( "", "" )
        .focus();
    $( ".push4" ).css( "visibility", "show" );
  });
}else{
  $( ".pop4" ).slideUp( 10, function() {
    
  });
}
});
 
</script>

<script>
$( ".push5" ).hover(function() {
if($( ".pop5" ).is(":hidden")) {
  $( this ).css({
    cursor: "pointer"
  });
  $( ".pop5" ).slideDown( 1000, function() {
    $( this )
      .css( "", "" )
      .filter( ".middle" )
        .css( "", "" )
        .focus();
    $( ".push5" ).css( "visibility", "show" );
  });
}else{
  $( ".pop5" ).slideUp( 10, function() {
    
  });
}
});
 
</script>

<script>
$( ".push6" ).hover(function() {
if($( ".pop6" ).is(":hidden")) {
  $( this ).css({
    cursor: "pointer"
  });
  $( ".pop6" ).slideDown( 1000, function() {
    $( this )
      .css( "", "" )
      .filter( ".middle" )
        .css( "", "" )
        .focus();
    $( ".push6" ).css( "visibility", "show" );
  });
}else{
  $( ".pop6" ).slideUp( 10, function() {
    
  });
}
});
 
</script>

<script>
$( ".push7" ).hover(function() {
if($( ".pop7" ).is(":hidden")) {
  $( this ).css({
    cursor: "pointer"
  });
  $( ".pop7" ).slideDown( 1000, function() {
    $( this )
      .css( "", "" )
      .filter( ".middle" )
        .css( "", "" )
        .focus();
    $( ".push7" ).css( "visibility", "show" );
  });
}else{
  $( ".pop7" ).slideUp( 10, function() {
    
  });
}
});
 
</script>
<!--equipe-->


<script>
$( ".fadeleft" ).hover(function () {
  if ( $( ".faderight:first" ).is( ":hidden" ) ) {
    $( ".faderight" ).slideDown( "slow" );
  } else {
    $( ".faderight" ).hide();
  }
});
</script>


<script>
$( ".fadeleft2" ).hover(function () {
  if ( $( ".faderight2:first" ).is( ":hidden" ) ) {
    $( ".faderight2" ).slideDown( "slow" );
  } else {
    $( ".faderight2" ).hide();
  }
});
</script>


<script>
$( ".fadeleft3" ).hover(function () {
  if ( $( ".faderight3:first" ).is( ":hidden" ) ) {
    $( ".faderight3" ).slideDown( "slow" );
  } else {
    $( ".faderight3" ).hide();
  }
});
</script>

// <script type="text/javascript">
//   var App = (function (window, document, undefined) {
  
//   'use strict';
  
//   // Only request the API if this element exists
//   if ($('#map').length) {
  
//     // Get latitude and longitude from data attributes
//     var map = $('#map'),
//       lat = map.data('lat'),
//       lng = map.data('lng'),
    
//       // Map init, configuration
//       mapInit = function () {
//         var mapCenter = new google.maps.LatLng(lat, lng),
//             mapOptions = {
//             center: mapCenter,
//             zoom: 8,
//             mapTypeId: google.maps.MapTypeId.ROADMAP,
//             scrollwheel: false
//           },
//           map = new google.maps.Map(document.getElementById("map"), mapOptions),
//           marker = new google.maps.Marker({
//           position: mapCenter,
//           title: "Title",
//           map: map
//         });
//       },

//       // Include Google Maps API
//       includeAPI = function () {
//         var js,
//           fjs = document.getElementsByTagName('script')[0];

//         if (!document.getElementById('gmap-api')) {
//           js = document.createElement('script');
//           js.id = 'gmap-api';
//           js.setAttribute('async', '');
//           js.src = "//maps.google.com/maps/api/js?sensor=false&callback=App.mapInit";
//           fjs.parentNode.insertBefore(js, fjs);
//         }
//       };

//     includeAPI();
//   }
  
//   // Make mapInit() public so we can pass it to
//   // the Google Maps API callback param
//   return {
//     mapInit: mapInit
//   };
  
// })(window, document);
// </script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>