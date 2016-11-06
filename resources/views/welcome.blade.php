<!DOCTYPE html>
<html>
<title>EVS PROJECT</title>

<!--bootstrap-->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<script src="{{ asset('js/app.js') }}"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5 {
    opacity: 0.7;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('images/back.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url('images/710.png');
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url('images/contactus.jpg');
    min-height: 400px;
}
/* Fourth image (team)*/
.bgimg-4 {
    background-image: url('images/team.jpg');
    min-height: 400px;
}

/* Fifth image (footprint)*/
.bgimg-5 {
    background-image: url('images/footprint.jpg');
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5 {
        background-attachment: scroll;
    }
}



element {
}
.w3-white, .w3-hover-white:hover {
    color: #fff !important;
    background-color: green !important;
}
.w3-animate-top {
    position: relative;
    -webkit-animation: animatetop 0.4s;
    animation: animatetop 0.4s;
}
.w3-card-2, .w3-example {
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;
}
.w3-navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
}


.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top" data-spy="scroll" style="color:#fff !important">
  <ul class="w3-navbar w3-card-2 w3-animate-top w3-green" id="myNavbar">
    <li><a href="#">HOME</a></li>
    <li class="w3-hide-small w3-right">
    <nav class="collapse navbar-collapse navbar-right" role="navigation">
                        <li><a href="#typesofwastes">Types of Waste</a></li>
                        <li><a href="#wastemanagement">Waste Management </a></li>
                        <li><a href="#footprint">Foot Print</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                    @if (Route::has('login'))
                   <li> <a href="{{ url('/login') }}">Login</a></li>
                   <li> <a href="{{ url('/register') }}">Register</a></li>
                    @endif
                    </nav>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->

<div class="bgimg-1 w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">ENVIRONMENT <span class="w3-hide-small"></span> PROJECT</span>
  </div>
</div>

<!-- Container (About Section) -->
<div id="typesofwastes" class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">OUR PROJECT</h3>
  <p class="w3-center"><em>Waste Management</em></p>
  <p>There are many issues that surround reporting waste. It is most commonly measured by size or weight, and there is a stark difference between the two. For example, organic waste is much heavier when it is wet, and plastic or glass bottles can have different weights but be the same size. On a global scale it is difficult to report waste because countries have different definitions of waste and what falls into waste categories, as well as different ways of reporting. Based on incomplete reports from its parties, the Basel Convention estimated 338 million tonnes of waste was generated in 2001. For the same year, OECD estimated 4 billion tonnes from its member countries. Despite these inconsistencies, waste reporting is still useful on a small and large scale to determine key causes and locations, and to find ways of preventing, minimizing, recovering, treating, and disposing waste.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
    </div>

  </div>
  <p class="w3-large w3-center w3-padding-16">Types of Wastes:</p>
  <p class="w3-wide">Municipal waste</p>
  <div class="w3-progress-container">
    <div class="w3-progressbar" style="width:60%; background-color:green"></div>
  </div>
  <p class="w3-wide">Industrial waste</p>
  <div class="w3-progress-container">
    <div class="w3-progressbar" style="width:35%; background-color:green"></div>
  </div>
  <p class="w3-wide">Biomedical Waste</p>
  <div class="w3-progress-container">
    <div class="w3-progressbar" style="width:25%; background-color:green"></div>
  </div>
  <p class="w3-wide">Electronic waste (e-waste)</p>
  <div class="w3-progress-container">
    <div class="w3-progressbar" style="width:75%; background-color:green"></div>
  </div>
</div>

<div class="w3-row w3-center w3-padding-16" style="background-color:green;color:white !important">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">130,000 tons per day</span><br>
    Municipal waste includes household waste, commercial waste, and demolition waste
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">150 million tonne of waste in a day</span><br>
    Hazardous waste includes industrial waste
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">484 Tonnes of Biomedical Waste a Day</span><br>
    Biomedical waste includes clinical waste
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">1.47 lakh tonnes per day</span><br>
    Special hazardous waste includes radioactive waste, explosive waste, and electronic waste (e-waste)
  </div>
</div>
<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">WASTE MANAGEMENT</span>
  </div>
</div>


<!-- Container (Portfolio Section) -->
<div id="wastemanagement" class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center w3-container">Waste Management</h3>
  <p class="w3-container w3-center">Reduce, Reuse, Recycle: Alternatives for 
Waste Management</p>
 </div>
 <br>
<div class="row">
  <div class="col-sm-3 col-xs-12">
  <div class="panel panel-default text-center thumbnail" style="background-color:green">
      <img src="{{asset('images/ii.jpg')}}" alt="...">
      <div class="caption" style="color:#fff !important">
        <h3>Municipal waste</h3>
        <p>Municipal Solid Waste (MSW) -- more commonly known as trash or garbage — consists of everyday items we use and then throw away, such as product packaging, grass clippings, furniture, clothing, bottles, food scraps, newspapers, appliances, paint, and batteries.</p>
        <a href="{{url('/municipal')}}"  class="w3-btn w3-section w3-right button" style="vertical-align:middle" type="submit" value="SEND MESSAGE" ><span>KNOW MORE </span></a>
        <br>
        <br>
      </div>
    </div>
</div>
  <div class="col-sm-3 col-xs-12">
    <div class="panel panel-default text-center thumbnail" style="background-color:green">
      <img src="{{asset('images/iii.jpg')}}" alt="...">
      <div class="caption" style="color:#fff !important">
        <h3>Industrial waste</h3>
        <p>Industrial waste is the waste produced by industrial activity which includes any material that is rendered useless during a manufacturing process such as that of factories, industries, mills, and mining operations. It has existed since the start of the Industrial <Revolution class=""></Revolution></p>
         <a href="{{url('/industrial')}}"  class="w3-btn w3-section w3-right button" style="vertical-align:middle" type="submit" value="SEND MESSAGE" ><span>KNOW MORE </span></a>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xs-12">
    <div class="panel panel-default text-center thumbnail" style="background-color:green" >
      <img src="{{asset('images/iiii.jpg')}}" alt="...">
      <div class="caption" style="color:#fff !important">
        <h3>Biomedical Waste</h3>
        <p>Definition. According to Biomedical Waste (Management and Handling) Rules, 1998 of India “Any waste which is generated during the diagnosis, treatment or immunization of human beings or animals or in research activities pertaining thereto or in the production or testing of biologicals.</p>
        <a href="{{url('/biomedical')}}"  class="w3-btn w3-section w3-right button" style="vertical-align:middle" type="submit" value="SEND MESSAGE" ><span>KNOW MORE </span></a>
       <br>
       <br>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xs-12">
    <div class="panel panel-default text-center thumbnail" style="background-color:green">
      <img src="{{asset('images/i.JPG')}}" alt="...">
      <div class="caption" style="color:#fff !important">
        <h3>Electronic waste</h3>
        <p>Electronic waste is a term for electronic products that have become unwanted, non-working or obsolete, and have essentially reached the end of their useful life. Because technology advances at such a high rate, many electronic devices become “trash” after a few short years of use.</p>
           <a href="{{url('/ewaste')}}"  class="w3-btn w3-section w3-right button" style="vertical-align:middle" type="submit" value="SEND MESSAGE" ><span>KNOW MORE </span></a>
          <br>
          <br>
      </div>
    </div>
  </div>
</div>


<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-5 w3-display-container">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-light-grey w3-wide" style="color:#000 !important">FOOT PRINT</span>
  </div>
</div>

<!-- Container (Team Section) -->

<div class="w3-container w3-padding-64 w3-center" id="footprint">
<h2>FOOT PRINT</h2>
<br>
<p> Ecological Footprint and biocapacity</p>
<br>
<div class="w3-row"><br>

<div class="w3-quarter ad-img-hover">
  <a href="#icon-1" aria-controls="icon-1" data-toggle="tab"><img src="{{asset('images/icon-1-fade.png')}}" alt="" draggable="false" style="width:45%" class="ad-img-on">
    <img src="{{asset('images/icon-1.png')}}" alt="" draggable="false" style="width:45%; display: none;" class="ad-img-off"></a>
    <h3>HARIKRISHNA AJ</h3>
    <p>Member</p>
</div>

<div class="w3-quarter ad-img-hover">
<a href="#icon-2" aria-controls="icon-2" data-toggle="tab"> <img src="{{asset('images/icon-2-fade.png')}}" alt="" draggable="false" style="width:45%" class="ad-img-on">
  <img src="{{asset('images/icon-2.png')}}" alt="" draggable="false" style="width:45%; display: none;" class="ad-img-off"></a>
  <h3>ARJUN NM</h3>
  <p>Member</p>
</div>

<div class="w3-quarter ad-img-hover">
  <a href="#icon-3" aria-controls="icon-3" data-toggle="tab"><img src="{{asset('images/icon-3-fade.png')}}" alt="" draggable="false" style="width:53%" class="ad-img-on">
    <img src="{{asset('images/icon-3.png')}}" alt="" draggable="false" style="width:53%; display: none;" class="ad-img-off"></a>
    <h3>HARIGOVINDAN MG</h3>
    <p>Member</p>
</div>

<div class="w3-quarter ad-img-hover">
  <a href="#icon-4" aria-controls="icon-4" data-toggle="tab"><img src="{{asset('images/icon-4-fade.png')}}" alt="" draggable="false" style="width:45%" class="ad-img-on">
    <img src="{{asset('images/icon-4.png')}}" alt="" draggable="false" style="width:45%; display: none;" class="ad-img-off"></a>
  <h3>JOEL JOHN</h3>
  <p>Member</p>
</div>
</div>

<div class="container">
  <div class="panel panel-success">
    <div class="panel-body">
      <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="icon-1">..df.</div>
          <div role="tabpanel" class="tab-pane" id="icon-2">Hoiiiiiiiiiii</div>
          <div role="tabpanel" class="tab-pane" id="icon-3">hhhhhhhhhhhhhhhhhhiiiiiiiii</div>
          <div role="tabpanel" class="tab-pane" id="icon-4">fihakhfjshdfiiiiiii</div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-4 w3-display-container">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-light-grey w3-wide" style="color:#000 !important">TEAM</span>
  </div>
</div>

<!-- Container (Team Section) -->

<div class="w3-container w3-padding-64 w3-center" id="team" style="background-color:green;color:#fff !important">
<h2>OUR TEAM</h2>
<br>
<p>Meet the team - our office rats:</p>
<br>
<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="{{asset('images/HARIKRISHNA.jpg')}}" alt="" draggable="false" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>HARIKRISHNA AJ</h3>
  <p>Member</p>
</div>

<div class="w3-quarter">
  <img src="{{asset('images/arjun.jpg')}}" alt="" draggable="false" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>ARJUN NM</h3>
  <p>Member</p>
</div>

<div class="w3-quarter">
  <img src="{{asset('images/govindan1.jpg')}}" alt="" draggable="false" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>HARIGOVINDAN MG</h3>
  <p>Member</p>
</div>

<div class="w3-quarter">
  <img src="{{asset('images/j.jpg')}}" alt="" draggable="false" style="width:57%" class="w3-circle w3-hover-opacity">
  <h3>JOEL JOHN</h3>
  <p>Member</p>
</div>

</div>
</div>

 </div>




<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-light-grey w3-wide">CONTACT US</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div style="background-color:">
<div id="contact" class="w3-content w3-container w3-padding-64">
  @if (Session::has('success'))
    <div class="w3-panel w3-green">
      <h3>Success!</h3>
      <p>{{ Session::get('success') }}</p>
    </div>
  @endif
  <h3 class="w3-center">WHERE WE WORK</h3>
  <p class="w3-center"><em>We'd love your feedback!</em></p>

  <div  class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-container w3-section">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> AMRITAPURI, KERALA<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +91 9447103444<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: crossfire@gmail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>



      <form class="w3-row-padding" style="margin:0 -16px 8px -16px" method="POST" action="/send" data-parsley-validate>
        {{ csrf_field() }}
        <div class="w3-half">
          <input class="w3-input w3-border w3-hover-light-grey" type="text" placeholder="Name" name="name" required="required" maxlength="255">
        </div>
        <div class="w3-half">
          <input class="w3-input w3-border w3-hover-light-grey" type="email" placeholder="Email" name="email" required="required" maxlength="255">
        </div>
        <div class="w3-col">
          <textarea class="w3-input w3-border w3-hover-light-grey" required="required" type="text" placeholder="Comment" name="comment" rows="5" cols="40" minlength="5"></textarea>
        </div>
        <button class="w3-btn w3-section w3-right button" style="vertical-align:middle" type="submit" value="SEND MESSAGE" ><span>SEND MESSAGE </span></button>
        </form>
        @if (count($errors) > 0)
          <div class="w3-container w3-red" style="margin-top: 10px">
            <h3>Sorry!</h3>
            <p>
              @foreach ($errors->all() as $error)
                {{ $error }}
              @endforeach
            </p>
          </div>
        @endif
</div>
</div>
</div>
</div>




<!-- Footer -->
<footer class="w3-center  w3-padding-16 w3-opacity w3-hover-opacity-off" style="background-color:green;color:white !important">
  <div class="w3-xlarge ">
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
     <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
  </div>
  <p>Copyright © 2016 | All rights reserved |Developed by <a href="#" title="AM.AR.U315BCA015,26,27&33" target="_blank" class="w3-hover-text-green">Group3</a></p>
</footer>
 
<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
<!-- Google Map Location -->
var myCenter = new google.maps.LatLng(9.093855, 76.491880);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 12,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
</script>
</body>
</html>
