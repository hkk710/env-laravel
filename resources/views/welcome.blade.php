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
  <a href="#icon-1" aria-controls="icon-1" data-toggle="tab">
    <img id="icon1-change" src="{{asset('images/icon-1-fade.png')}}" alt="" draggable="false" style="width:45%" onmouseover="icon1(this)" onmouseout="icon1out(this)" id="icon1-change" onclick="icon1in(this)"></a>
    <h3>Ecological Deficit/Reserve</h3>
</div>

<div class="w3-quarter ad-img-hover">
<a href="#icon-2" aria-controls="icon-2" data-toggle="tab"> 
<img onmouseover="icon2(this)" src="{{asset('images/icon-2-fade.png')}}" alt="" draggable="false" style="width:45%" onmouseout="icon2out(this)" id="icon2-change" onclick="icon2in(this)">
  </a>
  <h3>Total Ecological Footprint</h3>
</div>

<div class="w3-quarter ad-img-hover">
  <a href="#icon-3" aria-controls="icon-3" data-toggle="tab">
    <img src="{{asset('images/icon-3-fade.png')}}" alt="" draggable="false" style="width:53%;" onmouseover="icon3(this)" onmouseout="icon3out(this)" id="icon3-change" onclick="icon3in(this)"></a>
    <h3>Ecological Footprint Per Capita</h3>
</div>

<div class="w3-quarter ad-img-hover">
  <a href="#icon-4" aria-controls="icon-4" data-toggle="tab">
  <img src="{{asset('images/icon-4-fade.png')}}" alt="" draggable="false" style="width:45%" onmouseover="icon4(this)" onmouseout="icon4out(this)" id="icon4-change" onclick="icon4in(this)">
    </a>
  <h3>Total Biocapacity </h3>
</div>

<div class="w3-quarter ad-img-hover">
  <a href="#icon-5" aria-controls="icon-5" data-toggle="tab">
    <img src="{{asset('images/icon-5-fade.png')}}" alt="" draggable="false" style="width:53%;" onmouseover="icon5(this)" onmouseout="icon5out(this)" id="icon5-change" onclick="icon5in(this)"></a>
    <h3>
Biocapacity Per Capita</h3>
</div>
</div>

<div class="container">
  <div class="panel panel-success">
    <div class="panel-body">
      <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="icon-1">
            <div class="col-md-6">
              <div class="w3-panel w3-green row">
                <h4>COUNTRIES WITH BIOCAPACITY RESERVE</h4>
                <p>PERCENTAGE THAT BIOCAPACITY EXCEEDS ECOLOGICAL FOOTPRINT</p>
                <hr>
                <div class="panel panel-primary" style="color: #111!important; box-shadow: inset 0 0 5px 1px grey;">
                  <ul data-spy="scroll" data-offset="50" style="list-style: none; padding: 0; height: 400px; overflow-y: scroll;">
                  <li>Guyana 2,100%</li>
                  <li>Congo 750%</li>
                  <li>Central African Republic 530%</li>
                  <li>Bolivia 470%</li>
                  <li>Congo, Democratic Republic of 280%</li>
                  <li>Timor-Leste 270%</li>
                  <li>Uruguay 260%</li>
                  <li>Eritrea 210%</li>
                  <li>Brazil 190%</li>
                  <li>Angola 170%</li>
                  <li>Madagascar 170%</li>
                  <li>Mongolia 160%</li>
                  <li>Paraguay 150%</li>
                  <li>Mozambique 140%</li>
                  <li>Finland 130%</li>
                  <li>Zambia 130%</li>
                  <li>Argentina 120%</li>
                  <li>Liberia 110%</li>
                  <li>Papua New Guinea 110%</li>
                  <li>Guinea-Bissau 97%</li>
                  <li>Canada 96%</li>
                  <li>Colombia 92%</li>
                  <li>New Zealand 81%</li>
                  <li>Australia 78%</li>
                  <li>Mauritania 76%</li>
                  <li>Peru 74%</li>
                  <li>Norway 64%</li>
                  <li>Nicaragua 62%</li>
                  <li>Estonia 54%</li>
                  <li>Latvia 52%</li>
                  <li>Guinea 49%</li>
                  <li>Sweden 47%</li>
                  <li>Cameroon 45%</li>
                  <li>Côte d'Ivoire 40%</li>
                  <li>Chad 39%</li>
                  <li>Lao People's Democratic Republic 33%</li>
                  <li>Myanmar 29%</li>
                  <li>Russian Federation19% </li>
                  <li>Bhutan9% </li>
                  <li>Honduras5% </li>
                  <li>Panama5% </li>
                  <li>Mali3% </li>
                  <li>Somalia 2%</li>
                  <li>Ecuador 2%</li>
                  <li>Sierra Leone 0%</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="w3-panel w3-red row">
                <h4>COUNTRIES WITH BIOCAPACITY DEFICIT</h4>
                <p>PERCENTAGE THAT ECOLOGICAL FOOTPRINT EXCEEDS BIOCAPACITY</p>
                <hr>
                <div class="panel panel-default" style="color: #111!important; box-shadow: inset 0 0 5px 1px grey;">
                  <ul style="list-style: none; padding: 0; height: 400px; overflow-y: scroll;">
                    <li><span class="contry-name-full">Singapore</span><span class="contry-value-full">16,000%</span></li>
                    <li><span class="contry-name-full">Réunion</span><span class="contry-value-full">1,900%</span></li>
                    <li><span class="contry-name-full">Israel</span><span class="contry-value-full">1,700%</span></li>
                    <li><span class="contry-name-full">Cyprus</span><span class="contry-value-full">1,100%</span></li>
                    <li><span class="contry-name-full">Lebanon</span><span class="contry-value-full">1,100%</span></li>
                    <li><span class="contry-name-full">Jordan</span><span class="contry-value-full">890%</span></li>
                    <li><span class="contry-name-full">Luxembourg</span><span class="contry-value-full">840%</span></li>
                    <li><span class="contry-name-full">Korea, Republic of</span><span class="contry-value-full">740%</span></li>
                    <li><span class="contry-name-full">Japan</span><span class="contry-value-full">600%</span></li>
                    <li><span class="contry-name-full">Iraq</span><span class="contry-value-full">560%</span></li>
                    <li><span class="contry-name-full">Belgium</span><span class="contry-value-full">530%</span></li>
                    <li><span class="contry-name-full">Libyan Arab Jamahiriya</span><span class="contry-value-full">430%</span></li>
                    <li><span class="contry-name-full">Trinidad and Tobago</span><span class="contry-value-full">410%</span></li>
                    <li><span class="contry-name-full">Mauritius</span><span class="contry-value-full">390%</span></li>
                    <li><span class="contry-name-full">Netherlands</span><span class="contry-value-full">350%</span></li>
                    <li><span class="contry-name-full">Switzerland</span><span class="contry-value-full">340%</span></li>
                    <li><span class="contry-name-full">Jamaica</span><span class="contry-value-full">340%</span></li>
                    <li><span class="contry-name-full">Italy</span><span class="contry-value-full">330%</span></li>
                    <li><span class="contry-name-full">Oman</span><span class="contry-value-full">290%</span></li>
                    <li><span class="contry-name-full">Egypt</span><span class="contry-value-full">290%</span></li>
                    <li><span class="contry-name-full">United Kingdom</span><span class="contry-value-full">280%</span></li>
                    <li><span class="contry-name-full">Algeria</span><span class="contry-value-full">260%</span></li>
                    <li><span class="contry-name-full">China</span><span class="contry-value-full">260%</span></li>
                    <li><span class="contry-name-full">El Salvador</span><span class="contry-value-full">240%</span></li>
                    <li><span class="contry-name-full">Comoros</span><span class="contry-value-full">220%</span></li>
                    <li><span class="contry-name-full">Iran, Islamic Republic of</span><span class="contry-value-full">210%</span></li>
                    <li><span class="contry-name-full">Sri Lanka</span><span class="contry-value-full">200%</span></li>
                    <li><span class="contry-name-full">Spain</span><span class="contry-value-full">190%</span></li>
                    <li><span class="contry-name-full">South Africa</span><span class="contry-value-full">190%</span></li>
                    <li><span class="contry-name-full">Dominican Republic</span><span class="contry-value-full">170%</span></li>
                    <li><span class="contry-name-full">Greece</span><span class="contry-value-full">170%</span></li>
                    <li><span class="contry-name-full">Azerbaijan</span><span class="contry-value-full">170%</span></li>
                    <li><span class="contry-name-full">Portugal</span><span class="contry-value-full">160%</span></li>
                    <li><span class="contry-name-full">Cuba</span><span class="contry-value-full">160%</span></li>
                    <li><span class="contry-name-full">India</span><span class="contry-value-full">160%</span></li>
                    <li><span class="contry-name-full">Uzbekistan</span><span class="contry-value-full">150%</span></li>
                    <li><span class="contry-name-full">Armenia</span><span class="contry-value-full">150%</span></li>
                    <li><span class="contry-name-full">Tunisia</span><span class="contry-value-full">150%</span></li>
                    <li><span class="contry-name-full">Syrian Arab Republic</span><span class="contry-value-full">150%</span></li>
                    <li><span class="contry-name-full">Burundi</span><span class="contry-value-full">150%</span></li>
                    <li><span class="contry-name-full">Slovenia</span><span class="contry-value-full">150%</span></li>
                    <li><span class="contry-name-full">Germany</span><span class="contry-value-full">130%</span></li>
                    <li><span class="contry-name-full">Pakistan</span><span class="contry-value-full">130%</span></li>
                    <li><span class="contry-name-full">Haiti</span><span class="contry-value-full">130%</span></li>
                    <li><span class="contry-name-full">Mexico</span><span class="contry-value-full">130%</span></li>
                    <li><span class="contry-name-full">Moldova</span><span class="contry-value-full">120%</span></li>
                    <li><span class="contry-name-full">Zimbabwe</span><span class="contry-value-full">120%</span></li>
                    <li><span class="contry-name-full">Turkey</span><span class="contry-value-full">120%</span></li>
                    <li><span class="contry-name-full">United States of America</span><span class="contry-value-full">120%</span></li>
                    <li><span class="contry-name-full">Macedonia TFYR</span><span class="contry-value-full">120%</span></li>
                    <li><span class="contry-name-full">Serbia</span><span class="contry-value-full">120%</span></li>
                    <li><span class="contry-name-full">Thailand</span><span class="contry-value-full">110%</span></li>
                    <li><span class="contry-name-full">Poland</span><span class="contry-value-full">110%</span></li>
                    <li><span class="contry-name-full">Togo</span><span class="contry-value-full">110%</span></li>
                    <li><span class="contry-name-full">Uganda</span><span class="contry-value-full">110%</span></li>
                    <li><span class="contry-name-full">Czech Republic</span><span class="contry-value-full">110%</span></li>
                    <li><span class="contry-name-full">Lesotho</span><span class="contry-value-full">110%</span></li>
                    <li><span class="contry-name-full">Yemen</span><span class="contry-value-full">110%</span></li>
                    <li><span class="contry-name-full">Philippines</span><span class="contry-value-full">100%</span></li>
                    <li><span class="contry-name-full">Kenya</span><span class="contry-value-full">100%</span></li>
                    <li><span class="contry-name-full">Austria</span><span class="contry-value-full">98%</span></li>
                    <li><span class="contry-name-full">Turkmenistan</span><span class="contry-value-full">96%</span></li>
                    <li><span class="contry-name-full">Korea, Democratic People's Republic of</span><span class="contry-value-full">94%</span></li>
                    <li><span class="contry-name-full">Bangladesh</span><span class="contry-value-full">92%</span></li>
                    <li><span class="contry-name-full">Guatemala</span><span class="contry-value-full">91%</span></li>
                    <li><span class="contry-name-full">Bosnia and Herzegovina</span><span class="contry-value-full">91%</span></li>
                    <li><span class="contry-name-full">Albania</span><span class="contry-value-full">87%</span></li>
                    <li><span class="contry-name-full">Costa Rica</span><span class="contry-value-full">86%</span></li>
                    <li><span class="contry-name-full">Ethiopia</span><span class="contry-value-full">75%</span></li>
                    <li><span class="contry-name-full">Tajikistan</span><span class="contry-value-full">71%</span></li>
                    <li><span class="contry-name-full">Nigeria</span><span class="contry-value-full">67%</span></li>
                    <li><span class="contry-name-full">Viet Nam</span><span class="contry-value-full">66%</span></li>
                    <li><span class="contry-name-full">France</span><span class="contry-value-full">66%</span></li>
                    <li><span class="contry-name-full">Nepal</span><span class="contry-value-full">65%</span></li>
                    <li><span class="contry-name-full">Benin</span><span class="contry-value-full">61%</span></li>
                    <li><span class="contry-name-full">Rwanda</span><span class="contry-value-full">60%</span></li>
                    <li><span class="contry-name-full">Afghanistan</span><span class="contry-value-full">60%</span></li>
                    <li><span class="contry-name-full">Malaysia</span><span class="contry-value-full">54%</span></li><li><span class="contry-name-full">Slovakia</span><span class="contry-value-full">50%</span></li>
                    <li>Ireland 49%</li>
                    <li>Kyrgyzstan 47%</li>
                    <li>Ghana 46%</li><li>Croatia 40%</li>
                    <li>Belarus 40%</li>
                    <li>Georgia 35%</li>
                    <li>Hungary 34%</li>
                    <li>Venezuela, Bolivarian Republic of 28%</li>
                    <li>Niger 26%</li>
                    <li>Ukraine 25%</li>
                    <li>Indonesia 25%</li>
                    <li>Gambia 25%</li>
                    <li>Tanzania, United Republic of 23%</li>
                    <li>Burkina Faso 23%</li>
                    <li>Malawi 22%</li>
                    <li>Fiji 22%</li>
                    <li>Chile 20%</li>
                    <li>Romania 17%</li>
                    <li>Montenegro 17%</li>
                    <li>Bulgaria 16%</li>
                    <li>Senegal 16%</li>
                    <li>Denmark 15%</li>
                    <li>Cambodia 11%</li>
                    <li>Botswana 10%</li>
                    <li>Lithuania 3%</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="icon-2">
            <div class="col-md-12">
              <div class="w3-panel w3-orange row">
                <ul style="list-style: none; padding: 0; height: 400px; overflow-y: scroll;">
                  <li>1 China 4,800,000,000</li>
                  <li>2 United States of America 2,600,000,000</li>
                  <li>3 India 1,400,000,000</li>
                  <li>4 Russian Federation 810,000,000</li>
                  <li>5 Japan 640,000,000</li>
                  <li>6 Brazil 620,000,000</li>
                  <li>7 Germany 440,000,000</li>
                  <li>8 Indonesia 390,000,000</li>
                  <li>9 Mexico 350,000,000</li>
                  <li><span class="order-class">10</span><span class="contry-name long">France</span><span class="value-data">330,000,000</span></li>
                  <li><span class="order-class">11</span><span class="contry-name long">United Kingdom</span><span class="value-data">310,000,000</span></li>
                  <li><span class="order-class">12</span><span class="contry-name long">Canada</span><span class="value-data">280,000,000</span></li>
                  <li><span class="order-class">13</span><span class="contry-name long">Italy</span><span class="value-data">280,000,000</span></li>
                  <li><span class="order-class">14</span><span class="contry-name long">Korea, Republic of</span><span class="value-data">280,000,000</span></li>
                  <li><span class="order-class">15</span><span class="contry-name long">Turkey</span><span class="value-data">250,000,000</span></li>
                  <li><span class="order-class">16</span><span class="contry-name long">Australia</span><span class="value-data">210,000,000</span></li>
                  <li><span class="order-class">17</span><span class="contry-name long">Iran, Islamic Republic of</span><span class="value-data">210,000,000</span></li>
                  <li><span class="order-class">18</span><span class="contry-name long">Nigeria</span><span class="value-data">200,000,000</span></li>
                  <li><span class="order-class">19</span><span class="contry-name long">Thailand</span><span class="value-data">180,000,000</span></li>
                  <li><span class="order-class">20</span><span class="contry-name long">South Africa</span><span class="value-data">170,000,000</span></li>
                  <li><span class="order-class">21</span><span class="contry-name long">Egypt</span><span class="value-data">170,000,000</span></li>
                  <li><span class="order-class">22</span><span class="contry-name long">Spain</span><span class="value-data">170,000,000</span></li>
                  <li><span class="order-class">23</span><span class="contry-name long">Poland</span><span class="value-data">170,000,000</span></li>
                  <li><span class="order-class">24</span><span class="contry-name long">Viet Nam</span><span class="value-data">150,000,000</span></li>
                  <li><span class="order-class">25</span><span class="contry-name long">Pakistan</span><span class="value-data">140,000,000</span></li>
                  <li><span class="order-class">26</span><span class="contry-name long">Ukraine</span><span class="value-data">130,000,000</span></li>
                  <li><span class="order-class">27</span><span class="contry-name long">Argentina</span><span class="value-data">130,000,000</span></li>
                  <li><span class="order-class">28</span><span class="contry-name long">Bangladesh</span><span class="value-data">110,000,000</span></li>
                  <li><span class="order-class">29</span><span class="contry-name long">Malaysia</span><span class="value-data">110,000,000</span></li>
                  <li><span class="order-class">30</span><span class="contry-name long">Venezuela, Bolivarian Republic of</span><span class="value-data">110,000,000</span></li>
                  <li><span class="order-class">31</span><span class="contry-name long">Philippines</span><span class="value-data">110,000,000</span></li>
                  <li><span class="order-class">32</span><span class="contry-name long">Ethiopia</span><span class="value-data">93,000,000</span></li>
                  <li><span class="order-class">33</span><span class="contry-name long">Colombia</span><span class="value-data">89,000,000</span></li>
                  <li><span class="order-class">34</span><span class="contry-name long">Netherlands</span><span class="value-data">88,000,000</span></li>
                  <li><span class="order-class">35</span><span class="contry-name long">Belgium</span><span class="value-data">82,000,000</span></li><li><span class="order-class">36</span><span class="contry-name long">Algeria</span><span class="value-data">81,000,000</span></li><li><span class="order-class">37</span><span class="contry-name long">Chile</span><span class="value-data">76,000,000</span></li><li><span class="order-class">38</span><span class="contry-name long">Myanmar</span><span class="value-data">76,000,000</span></li><li><span class="order-class">39</span><span class="contry-name long">Sweden</span><span class="value-data">69,000,000</span></li><li><span class="order-class">40</span><span class="contry-name long">Peru</span><span class="value-data">68,000,000</span></li><li><span class="order-class">41</span><span class="contry-name long">Uzbekistan</span><span class="value-data">66,000,000</span></li><li><span class="order-class">42</span><span class="contry-name long">Tanzania, United Republic of</span><span class="value-data">63,000,000</span></li><li><span class="order-class">43</span><span class="contry-name long">Iraq</span><span class="value-data">62,000,000</span></li><li><span class="order-class">44</span><span class="contry-name long">Romania</span><span class="value-data">59,000,000</span></li><li><span class="order-class">45</span><span class="contry-name long">Czech Republic</span><span class="value-data">55,000,000</span></li><li><span class="order-class">46</span><span class="contry-name long">Morocco</span><span class="value-data">55,000,000</span></li><li><span class="order-class">47</span><span class="contry-name long">Congo, Democratic Republic of</span><span class="value-data">54,000,000</span></li><li><span class="order-class">48</span><span class="contry-name long">Austria</span><span class="value-data">51,000,000</span></li><li><span class="order-class">49</span><span class="contry-name long">Ghana</span><span class="value-data">50,000,000</span></li><li><span class="order-class">50</span><span class="contry-name long">Greece</span><span class="value-data">49,000,000</span></li><li><span class="order-class">51</span><span class="contry-name long">Belarus</span><span class="value-data">48,000,000</span></li><li><span class="order-class">52</span><span class="contry-name long">Israel</span><span class="value-data">48,000,000</span></li><li><span class="order-class">53</span><span class="contry-name long">Switzerland</span><span class="value-data">46,000,000</span></li><li><span class="order-class">54</span><span class="contry-name long">Uganda</span><span class="value-data">45,000,000</span></li><li><span class="order-class">55</span><span class="contry-name long">Kenya</span><span class="value-data">45,000,000</span></li><li><span class="order-class">56</span><span class="contry-name long">Singapore</span><span class="value-data">42,000,000</span></li><li><span class="order-class">57</span><span class="contry-name long">Portugal</span><span class="value-data">41,000,000</span></li><li><span class="order-class">58</span><span class="contry-name long">Ecuador</span><span class="value-data">34,000,000</span></li><li><span class="order-class">59</span><span class="contry-name long">Syrian Arab Republic</span><span class="value-data">33,000,000</span></li><li><span class="order-class">60</span><span class="contry-name long">Finland</span><span class="value-data">32,000,000</span></li><li><span class="order-class">61</span><span class="contry-name long">Bolivia</span><span class="value-data">31,000,000</span></li><li><span class="order-class">62</span><span class="contry-name long">Denmark</span><span class="value-data">31,000,000</span></li><li><span class="order-class">63</span><span class="contry-name long">Hungary</span><span class="value-data">29,000,000</span></li><li><span class="order-class">64</span><span class="contry-name long">Korea, Democratic People's Republic of</span><span class="value-data">29,000,000</span></li><li><span class="order-class">65</span><span class="contry-name long">Guatemala</span><span class="value-data">28,000,000</span></li><li><span class="order-class">66</span><span class="contry-name long">Turkmenistan</span><span class="value-data">28,000,000</span></li><li><span class="order-class">67</span><span class="contry-name long">Sri Lanka</span><span class="value-data">28,000,000</span></li><li><span class="order-class">68</span><span class="contry-name long">Paraguay</span><span class="value-data">28,000,000</span></li><li><span class="order-class">69</span><span class="contry-name long">Nepal</span><span class="value-data">27,000,000</span></li><li><span class="order-class">70</span><span class="contry-name long">Niger</span><span class="value-data">27,000,000</span></li><li><span class="order-class">71</span><span class="contry-name long">Serbia</span><span class="value-data">26,000,000</span></li>
                  <li>72 Ireland 25,000,000</li>
                  <li>73 Tunisia 25,000,000</li>
                  <li>74 Cameroon 25,000,000</li>
                  <li><span class="order-class">75</span><span class="contry-name long">Côte d'Ivoire</span><span class="value-data">25,000,000</span></li><li><span class="order-class">76</span><span class="contry-name long">New Zealand</span><span class="value-data">25,000,000</span></li><li><span class="order-class">77</span><span class="contry-name long">Oman</span><span class="value-data">25,000,000</span></li><li><span class="order-class">78</span><span class="contry-name long">Norway</span><span class="value-data">25,000,000</span></li><li><span class="order-class">79</span><span class="contry-name long">Yemen</span><span class="value-data">24,000,000</span></li><li><span class="order-class">80</span><span class="contry-name long">Bulgaria</span><span class="value-data">24,000,000</span></li><li><span class="order-class">81</span><span class="contry-name long">Afghanistan</span><span class="value-data">24,000,000</span></li><li><span class="order-class">82</span><span class="contry-name long">Libyan Arab Jamahiriya</span><span class="value-data">23,000,000</span></li><li><span class="order-class">83</span><span class="contry-name long">Mali</span><span class="value-data">23,000,000</span></li><li><span class="order-class">84</span><span class="contry-name long">Slovakia</span><span class="value-data">22,000,000</span></li><li><span class="order-class">85</span><span class="contry-name long">Madagascar</span><span class="value-data">22,000,000</span></li><li><span class="order-class">86</span><span class="contry-name long">Cuba</span><span class="value-data">22,000,000</span></li><li><span class="order-class">87</span><span class="contry-name long">Mozambique</span><span class="value-data">22,000,000</span></li><li><span class="order-class">88</span><span class="contry-name long">Azerbaijan</span><span class="value-data">22,000,000</span></li><li><span class="order-class">89</span><span class="contry-name long">Burkina Faso</span><span class="value-data">20,000,000</span></li><li><span class="order-class">90</span><span class="contry-name long">Angola</span><span class="value-data">19,000,000</span></li><li><span class="order-class">91</span><span class="contry-name long">Zimbabwe</span><span class="value-data">19,000,000</span></li><li><span class="order-class">92</span><span class="contry-name long">Chad</span><span class="value-data">18,000,000</span></li><li><span class="order-class">93</span><span class="contry-name long">Cambodia</span><span class="value-data">18,000,000</span></li><li><span class="order-class">94</span><span class="contry-name long">Lebanon</span><span class="value-data">18,000,000</span></li><li><span class="order-class">95</span><span class="contry-name long">Lithuania</span><span class="value-data">18,000,000</span></li><li><span class="order-class">96</span><span class="contry-name long">Mongolia</span><span class="value-data">17,000,000</span></li><li><span class="order-class">97</span><span class="contry-name long">Croatia</span><span class="value-data">17,000,000</span></li><li><span class="order-class">98</span><span class="contry-name long">Senegal</span><span class="value-data">17,000,000</span></li><li><span class="order-class">99</span><span class="contry-name long">Guinea</span><span class="value-data">16,000,000</span></li><li><span class="order-class">100</span><span class="contry-name long">Dominican Republic</span><span class="value-data">16,000,000</span></li><li><span class="order-class">101</span><span class="contry-name long">Jordan</span><span class="value-data">15,000,000</span></li><li><span class="order-class">102</span><span class="contry-name long">Benin</span><span class="value-data">14,000,000</span></li><li><span class="order-class">103</span><span class="contry-name long">Zambia</span><span class="value-data">14,000,000</span></li><li><span class="order-class">104</span><span class="contry-name long">Papua New Guinea</span><span class="value-data">14,000,000</span></li><li><span class="order-class">105</span><span class="contry-name long">Costa Rica</span><span class="value-data">14,000,000</span></li><li><span class="order-class">106</span><span class="contry-name long">Honduras</span><span class="value-data">13,000,000</span></li><li><span class="order-class">107</span><span class="contry-name long">El Salvador</span><span class="value-data">13,000,000</span></li><li><span class="order-class">108</span><span class="contry-name long">Latvia</span><span class="value-data">13,000,000</span></li><li><span class="order-class">109</span><span class="contry-name long">Malawi</span><span class="value-data">13,000,000</span></li><li><span class="order-class">110</span><span class="contry-name long">Somalia</span><span class="value-data">13,000,000</span></li><li><span class="order-class">111</span><span class="contry-name long">Slovenia</span><span class="value-data">12,000,000</span></li><li><span class="order-class">112</span><span class="contry-name long">Bosnia and Herzegovina</span><span class="value-data">12,000,000</span></li><li><span class="order-class">113</span><span class="contry-name long">Panama</span><span class="value-data">11,000,000</span></li><li><span class="order-class">114</span><span class="contry-name long">Trinidad and Tobago</span><span class="value-data">11,000,000</span></li><li><span class="order-class">115</span><span class="contry-name long">Kyrgyzstan</span><span class="value-data">10,000,000</span></li><li><span class="order-class">116</span><span class="contry-name long">Rwanda</span><span class="value-data">9,900,000</span></li><li><span class="order-class">117</span><span class="contry-name long">Uruguay</span><span class="value-data">9,900,000</span></li><li><span class="order-class">118</span><span class="contry-name long">Mauritania</span><span class="value-data">9,700,000</span></li><li><span class="order-class">119</span><span class="contry-name long">Estonia</span><span class="value-data">8,900,000</span></li><li><span class="order-class">120</span><span class="contry-name long">Nicaragua</span><span class="value-data">8,300,000</span></li><li><span class="order-class">121</span><span class="contry-name long">Luxembourg</span><span class="value-data">8,300,000</span></li><li><span class="order-class">122</span><span class="contry-name long">Lao People's Democratic Republic</span><span class="value-data">8,100,000</span></li><li><span class="order-class">123</span><span class="contry-name long">Botswana</span><span class="value-data">7,700,000</span></li><li><span class="order-class">124</span><span class="contry-name long">Burundi</span><span class="value-data">7,600,000</span></li><li><span class="order-class">125</span><span class="contry-name long">Togo</span><span class="value-data">7,500,000</span></li><li><span class="order-class">126</span><span class="contry-name long">Sierra Leone</span><span class="value-data">7,400,000</span></li><li><span class="order-class">127</span><span class="contry-name long">Tajikistan</span><span class="value-data">7,300,000</span></li><li><span class="order-class">128</span><span class="contry-name long">Albania</span><span class="value-data">7,000,000</span></li><li><span class="order-class">129</span><span class="contry-name long">Georgia</span><span class="value-data">6,900,000</span></li><li><span class="order-class">130</span><span class="contry-name long">Macedonia TFYR</span><span class="value-data">6,900,000</span></li><li><span class="order-class">131</span><span class="contry-name long">Armenia</span><span class="value-data">6,600,000</span></li><li><span class="order-class">132</span><span class="contry-name long">Moldova</span><span class="value-data">6,200,000</span></li><li><span class="order-class">133</span><span class="contry-name long">Haiti</span><span class="value-data">6,200,000</span></li><li><span class="order-class">134</span><span class="contry-name long">Central African Republic</span><span class="value-data">5,600,000</span></li><li><span class="order-class">135</span><span class="contry-name long">Congo</span><span class="value-data">5,600,000</span></li><li><span class="order-class">136</span><span class="contry-name long">Jamaica</span><span class="value-data">5,200,000</span></li><li><span class="order-class">137</span><span class="contry-name long">Liberia</span><span class="value-data">5,100,000</span></li><li><span class="order-class">138</span><span class="contry-name long">Cyprus</span><span class="value-data">4,800,000</span></li><li><span class="order-class">139</span><span class="contry-name long">Mauritius</span><span class="value-data">4,300,000</span></li><li><span class="order-class">140</span><span class="contry-name long">Bhutan</span><span class="value-data">3,600,000</span></li><li><span class="order-class">141</span><span class="contry-name long">Lesotho</span><span class="value-data">3,400,000</span></li><li><span class="order-class">142</span><span class="contry-name long">Réunion</span><span class="value-data">3,200,000</span></li><li><span class="order-class">143</span><span class="contry-name long">Eritrea</span><span class="value-data">2,600,000</span></li><li><span class="order-class">144</span><span class="contry-name long">Guinea-Bissau</span><span class="value-data">2,600,000</span></li><li><span class="order-class">145</span><span class="contry-name long">Fiji</span><span class="value-data">2,500,000</span></li><li><span class="order-class">146</span><span class="contry-name long">Guyana</span><span class="value-data">2,400,000</span></li><li><span class="order-class">147</span><span class="contry-name long">Montenegro</span><span class="value-data">2,300,000</span></li><li><span class="order-class">148</span><span class="contry-name long">Gambia</span><span class="value-data">1,800,000</span></li><li><span class="order-class">149</span><span class="contry-name long">Comoros</span><span class="value-data">700,000</span></li><li><span class="order-class">150</span><span class="contry-name long">Timor-Leste</span><span class="value-data">500,000</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="icon-3">
            <div class="col-md-12">
              <div class="w3-panel w3-yellow row">
              <ul style="list-style: none; padding: 0; height: 400px; overflow-y: scroll;">
                        <li>1 Luxembourg 15.8</li>
                        <li>2 Australia 9.3 </li>
                        <li>3 United States of America 8.2 </li>
                        <li><span class="order-class">4</span><span class="contry-name">Canada</span><span class="value-data">8.2</span></li>
                        <li><span class="order-class">5</span><span class="contry-name">Singapore</span><span class="value-data">8</span></li>
                        <li><span class="order-class">6</span><span class="contry-name">Trinidad and Tobago</span><span class="value-data">7.9</span></li>
                        <li><span class="order-class">7</span><span class="contry-name">Oman</span><span class="value-data">7.5</span></li>
                        <li><span class="order-class">8</span><span class="contry-name">Belgium</span><span class="value-data">7.4</span></li>
                        <li><span class="order-class">9</span><span class="contry-name">Sweden</span><span class="value-data">7.3</span></li>
                        <li><span class="order-class">10</span><span class="contry-name">Estonia</span><span class="value-data">6.9</span></li>
                        <li><span class="order-class">11</span><span class="contry-name">Latvia</span><span class="value-data">6.3</span></li>
                        <li><span class="order-class">12</span><span class="contry-name">Israel</span><span class="value-data">6.2</span></li>
                        <li><span class="order-class">13</span><span class="contry-name">Mongolia</span><span class="value-data">6.1</span></li>
                        <li><span class="order-class">14</span><span class="contry-name">Austria</span><span class="value-data">6.1</span></li>
                        <li><span class="order-class">15</span><span class="contry-name">Finland</span><span class="value-data">5.9</span></li>
                        <li><span class="order-class">16</span><span class="contry-name">Lithuania</span><span class="value-data">5.8</span></li>
                        <li><span class="order-class">17</span><span class="contry-name">Slovenia</span><span class="value-data">5.8</span></li>
                        <li><span class="order-class">18</span><span class="contry-name">Switzerland</span><span class="value-data">5.8</span></li>
                        <li><span class="order-class">19</span><span class="contry-name">Korea, Republic of</span><span class="value-data">5.7</span></li>
                        <li><span class="order-class">20</span><span class="contry-name">Russian Federation</span><span class="value-data">5.7</span></li>
                        <li><span class="order-class">21</span><span class="contry-name">New Zealand</span><span class="value-data">5.6</span></li>
                        <li><span class="order-class">22</span><span class="contry-name">Ireland</span><span class="value-data">5.6</span></li>
                        <li><span class="order-class">23</span><span class="contry-name">Denmark</span><span class="value-data">5.5</span></li>
                        <li><span class="order-class">24</span><span class="contry-name">Turkmenistan</span><span class="value-data">5.5</span></li>
                        <li><span class="order-class">25</span><span class="contry-name">Germany</span><span class="value-data">5.3</span></li>
                        <li><span class="order-class">26</span><span class="contry-name">Netherlands</span><span class="value-data">5.3</span></li>
                        <li><span class="order-class">27</span><span class="contry-name">Czech Republic</span><span class="value-data">5.2</span></li>
                        <li><span class="order-class">28</span><span class="contry-name">France</span><span class="value-data">5.1</span></li>
                        <li><span class="order-class">29</span><span class="contry-name">Belarus</span><span class="value-data">5.1</span></li>
                        <li><span class="order-class">30</span><span class="contry-name">Japan</span><span class="value-data">5</span></li>
                        <li><span class="order-class">31</span><span class="contry-name">Norway</span><span class="value-data">5</span></li>
                        <li><span class="order-class">32</span><span class="contry-name">United Kingdom</span><span class="value-data">4.9</span></li>
                        <li><span class="order-class">33</span><span class="contry-name">Bhutan</span><span class="value-data">4.8</span></li>
                        <li><span class="order-class">34</span><span class="contry-name">Italy</span><span class="value-data">4.6</span></li>
                        <li><span class="order-class">35</span><span class="contry-name">Poland</span><span class="value-data">4.4</span></li>
                        <li><span class="order-class">36</span><span class="contry-name">Greece</span><span class="value-data">4.4</span></li>
                        <li><span class="order-class">37</span><span class="contry-name">Chile</span><span class="value-data">4.4</span></li>
                        <li><span class="order-class">38</span><span class="contry-name">Cyprus</span><span class="value-data">4.2</span></li>
                        <li><span class="order-class">39</span><span class="contry-name">Paraguay</span><span class="value-data">4.2</span></li>
                        <li><span class="order-class">40</span><span class="contry-name">Slovakia</span><span class="value-data">4.1</span></li>
                        <li><span class="order-class">41</span><span class="contry-name">Croatia</span><span class="value-data">3.9</span></li>
                        <li><span class="order-class">42</span><span class="contry-name">Portugal</span><span class="value-data">3.9</span></li>
                        <li><span class="order-class">43</span><span class="contry-name">Lebanon</span><span class="value-data">3.8</span></li>
                        <li><span class="order-class">44</span><span class="contry-name">Botswana</span><span class="value-data">3.8</span></li>
                        <li><span class="order-class">45</span><span class="contry-name">Montenegro</span><span class="value-data">3.8</span></li>
                        <li><span class="order-class">46</span><span class="contry-name">Malaysia</span><span class="value-data">3.7</span></li>
                        <li><span class="order-class">47</span><span class="contry-name">Libyan Arab Jamahiriya</span><span class="value-data">3.7</span></li>
                        <li><span class="order-class">48</span><span class="contry-name">Spain</span><span class="value-data">3.7</span></li>
                        <li><span class="order-class">49</span><span class="contry-name">Réunion</span><span class="value-data">3.7</span></li>
                        <li><span class="order-class">50</span><span class="contry-name">Venezuela, Bolivarian Republic of</span><span class="value-data">3.6</span></li>
                        <li><span class="order-class">51</span><span class="contry-name">Mauritius</span><span class="value-data">3.5</span></li>
                        <li><span class="order-class">52</span><span class="contry-name">China</span><span class="value-data">3.4</span></li>
                        <li><span class="order-class">53</span><span class="contry-name">Turkey</span><span class="value-data">3.3</span></li>
                        <li><span class="order-class">54</span><span class="contry-name">Bulgaria</span><span class="value-data">3.3</span></li>
                        <li><span class="order-class">55</span><span class="contry-name">South Africa</span><span class="value-data">3.3</span></li>
                        <li><span class="order-class">56</span><span class="contry-name">Macedonia TFYR</span><span class="value-data">3.3</span></li>
                        <li><span class="order-class">57</span><span class="contry-name">Argentina</span><span class="value-data">3.1</span></li>
                        <li><span class="order-class">58</span><span class="contry-name">Bosnia and Herzegovina</span><span class="value-data">3.1</span></li>
                        <li><span class="order-class">59</span><span class="contry-name">Brazil</span><span class="value-data">3.1</span></li>
                        <li><span class="order-class">60</span><span class="contry-name">Guyana</span><span class="value-data">3.1</span></li>
                        <li><span class="order-class">61</span><span class="contry-name">Bolivia</span><span class="value-data">3</span></li>
                        <li><span class="order-class">62</span><span class="contry-name">Hungary</span><span class="value-data">2.9</span></li>
                        <li><span class="order-class">63</span><span class="contry-name">Uruguay</span><span class="value-data">2.9</span></li>
                        <li><span class="order-class">64</span><span class="contry-name">Fiji</span><span class="value-data">2.9</span></li>
                        <li><span class="order-class">65</span><span class="contry-name">Mexico</span><span class="value-data">2.9</span></li>
                        <li><span class="order-class">66</span><span class="contry-name">Costa Rica</span><span class="value-data">2.8</span></li>
                        <li><span class="order-class">67</span><span class="contry-name">Ukraine</span><span class="value-data">2.8</span></li>
                        <li><span class="order-class">68</span><span class="contry-name">Iran, Islamic Republic of</span><span class="value-data">2.8</span></li>
                        <li><span class="order-class">69</span><span class="contry-name">Panama</span><span class="value-data">2.8</span></li>
                        <li><span class="order-class">70</span><span class="contry-name">Romania</span><span class="value-data">2.7</span></li>
                        <li><span class="order-class">71</span><span class="contry-name">Serbia</span><span class="value-data">2.7</span></li>
                        <li><span class="order-class">72</span><span class="contry-name">Thailand</span><span class="value-data">2.7</span></li>
                        <li><span class="order-class">73</span><span class="contry-name">Mauritania</span><span class="value-data">2.5</span></li>
                        <li><span class="order-class">74</span><span class="contry-name">Tunisia</span><span class="value-data">2.3</span></li>
                        <li><span class="order-class">75</span><span class="contry-name">Uzbekistan</span><span class="value-data">2.3</span></li>
                        <li><span class="order-class">76</span><span class="contry-name">Azerbaijan</span><span class="value-data">2.3</span></li>
                        <li><span class="order-class">77</span><span class="contry-name">Peru</span><span class="value-data">2.3</span></li>
                        <li><span class="order-class">78</span><span class="contry-name">Armenia</span><span class="value-data">2.2</span></li>
                        <li><span class="order-class">79</span><span class="contry-name">Albania</span><span class="value-data">2.2</span></li>
                        <li><span class="order-class">80</span><span class="contry-name">Ecuador</span><span class="value-data">2.2</span></li>
                        <li><span class="order-class">81</span><span class="contry-name">Egypt</span><span class="value-data">2.2</span></li>
                        <li><span class="order-class">82</span><span class="contry-name">Algeria</span><span class="value-data">2.1</span></li>
                        <li><span class="order-class">83</span><span class="contry-name">Jordan</span><span class="value-data">2.1</span></li>
                        <li><span class="order-class">84</span><span class="contry-name">El Salvador</span><span class="value-data">2.1</span></li>
                        <li><span class="order-class">85</span><span class="contry-name">Ghana</span><span class="value-data">2</span></li>
                        <li><span class="order-class">86</span><span class="contry-name">Cuba</span><span class="value-data">2</span></li>
                        <li><span class="order-class">87</span><span class="contry-name">Kyrgyzstan</span><span class="value-data">1.9</span></li>
                        <li><span class="order-class">88</span><span class="contry-name">Papua New Guinea</span><span class="value-data">1.9</span></li>
                        <li><span class="order-class">89</span><span class="contry-name">Jamaica</span><span class="value-data">1.9</span></li>
                        <li><span class="order-class">90</span><span class="contry-name">Guatemala</span><span class="value-data">1.9</span></li>
                        <li><span class="order-class">91</span><span class="contry-name">Iraq</span><span class="value-data">1.9</span></li>
                        <li><span class="order-class">92</span><span class="contry-name">Colombia</span><span class="value-data">1.9</span></li>
                        <li><span class="order-class">93</span><span class="contry-name">Moldova</span><span class="value-data">1.8</span></li>
                        <li><span class="order-class">94</span><span class="contry-name">Morocco</span><span class="value-data">1.7</span></li>
                        <li><span class="order-class">95</span><span class="contry-name">Honduras</span><span class="value-data">1.7</span></li>
                        <li><span class="order-class">96</span><span class="contry-name">Lesotho</span><span class="value-data">1.7</span></li>
                        <li><span class="order-class">97</span><span class="contry-name">Viet Nam</span><span class="value-data">1.7</span></li>
                        <li><span class="order-class">98</span><span class="contry-name">Georgia</span><span class="value-data">1.6</span></li>
                        <li><span class="order-class">99</span><span class="contry-name">Indonesia</span><span class="value-data">1.6</span></li>
                        <li><span class="order-class">100</span><span class="contry-name">Niger</span><span class="value-data">1.6</span></li>
                        <li><span class="order-class">101</span><span class="contry-name">Dominican Republic</span><span class="value-data">1.5</span></li>
                        <li><span class="order-class">102</span><span class="contry-name">Mali</span><span class="value-data">1.5</span></li>
                        <li><span class="order-class">103</span><span class="contry-name">Guinea-Bissau</span><span class="value-data">1.5</span></li>
                        <li><span class="order-class">104</span><span class="contry-name">Syrian Arab Republic</span><span class="value-data">1.5</span></li>
                        <li><span class="order-class">105</span><span class="contry-name">Chad</span><span class="value-data">1.5</span></li>
                        <li><span class="order-class">106</span><span class="contry-name">Myanmar</span><span class="value-data">1.4</span></li>
                        <li><span class="order-class">107</span><span class="contry-name">Benin</span><span class="value-data">1.4</span></li>
                        <li><span class="order-class">108</span><span class="contry-name">Guinea</span><span class="value-data">1.4</span></li>
                        <li><span class="order-class">109</span><span class="contry-name">Nicaragua</span><span class="value-data">1.4</span></li>
                        <li><span class="order-class">110</span><span class="contry-name">Zimbabwe</span><span class="value-data">1.4</span></li>
                        <li><span class="order-class">111</span><span class="contry-name">Sri Lanka</span><span class="value-data">1.3</span></li>
                        <li><span class="order-class">112</span><span class="contry-name">Tanzania, United Republic of</span><span class="value-data">1.3</span></li>
                        <li><span class="order-class">113</span><span class="contry-name">Congo</span><span class="value-data">1.3</span></li>
                        <li><span class="order-class">114</span><span class="contry-name">Côte d'Ivoire</span><span class="value-data">1.3</span></li>
                        <li><span class="order-class">115</span><span class="contry-name">Uganda</span><span class="value-data">1.2</span></li>
                        <li><span class="order-class">116</span><span class="contry-name">Sierra Leone</span><span class="value-data">1.2</span></li><li><span class="order-class">117</span><span class="contry-name">Somalia</span><span class="value-data">1.2</span></li><li><span class="order-class">118</span><span class="contry-name">Central African Republic</span><span class="value-data">1.2</span></li><li><span class="order-class">119</span><span class="contry-name">Lao People's Democratic Republic</span><span class="value-data">1.2</span></li><li><span class="order-class">120</span><span class="contry-name">Burkina Faso</span><span class="value-data">1.2</span></li><li><span class="order-class">121</span><span class="contry-name">Senegal</span><span class="value-data">1.2</span></li><li><span class="order-class">122</span><span class="contry-name">Cambodia</span><span class="value-data">1.2</span></li><li><span class="order-class">123</span><span class="contry-name">Liberia</span><span class="value-data">1.2</span></li><li><span class="order-class">124</span><span class="contry-name">Korea, Democratic People's Republic of</span><span class="value-data">1.2</span></li><li><span class="order-class">125</span><span class="contry-name">Cameroon</span><span class="value-data">1.2</span></li><li><span class="order-class">126</span><span class="contry-name">India</span><span class="value-data">1.2</span></li><li><span class="order-class">127</span><span class="contry-name">Nigeria</span><span class="value-data">1.2</span></li><li><span class="order-class">128</span><span class="contry-name">Togo</span><span class="value-data">1.1</span></li><li><span class="order-class">129</span><span class="contry-name">Philippines</span><span class="value-data">1.1</span></li><li><span class="order-class">130</span><span class="contry-name">Comoros</span><span class="value-data">1</span></li><li><span class="order-class">131</span><span class="contry-name">Yemen</span><span class="value-data">1</span></li><li><span class="order-class">132</span><span class="contry-name">Kenya</span><span class="value-data">1</span></li><li><span class="order-class">133</span><span class="contry-name">Gambia</span><span class="value-data">1</span></li><li><span class="order-class">134</span><span class="contry-name">Ethiopia</span><span class="value-data">1</span></li><li><span class="order-class">135</span><span class="contry-name">Zambia</span><span class="value-data">1</span></li><li><span class="order-class">136</span><span class="contry-name">Madagascar</span><span class="value-data">1</span></li><li><span class="order-class">137</span><span class="contry-name">Nepal</span><span class="value-data">1</span></li><li><span class="order-class">138</span><span class="contry-name">Angola</span><span class="value-data">0.9</span></li><li><span class="order-class">139</span><span class="contry-name">Tajikistan</span><span class="value-data">0.9</span></li><li><span class="order-class">140</span><span class="contry-name">Rwanda</span><span class="value-data">0.9</span></li><li><span class="order-class">141</span><span class="contry-name">Mozambique</span><span class="value-data">0.9</span></li><li><span class="order-class">142</span><span class="contry-name">Congo, Democratic Republic of</span><span class="value-data">0.8</span></li><li><span class="order-class">143</span><span class="contry-name">Malawi</span><span class="value-data">0.8</span></li><li><span class="order-class">144</span><span class="contry-name">Burundi</span><span class="value-data">0.8</span></li><li><span class="order-class">145</span><span class="contry-name">Pakistan</span><span class="value-data">0.8</span></li><li><span class="order-class">146</span><span class="contry-name">Afghanistan</span><span class="value-data">0.8</span></li><li><span class="order-class">147</span><span class="contry-name">Bangladesh</span><span class="value-data">0.7</span></li><li><span class="order-class">148</span><span class="contry-name">Haiti</span><span class="value-data">0.6</span></li><li><span class="order-class">149</span><span class="contry-name">Timor-Leste</span><span class="value-data">0.5</span></li><li><span class="order-class">150</span><span class="contry-name">Eritrea</span><span class="value-data">0.4</span></li>
              </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="icon-4">
            <div class="col-md-12">
              <div class="w3-panel w3-green row">
              <ul style="list-style: none; padding: 0; height: 400px; overflow-y: scroll;">
              <li><span class="order-class">1</span><span class="contry-name long">Brazil</span><span class="value-data">1,800,000,000</span></li>
              <li><span class="order-class">2</span><span class="contry-name long">China</span><span class="value-data">1,300,000,000</span></li>
              <li><span class="order-class">3</span><span class="contry-name long">United States of America</span><span class="value-data">1,200,000,000</span></li>
              <li><span class="order-class">4</span><span class="contry-name long">Russian Federation</span><span class="value-data">970,000,000</span></li>
              <li><span class="order-class">5</span><span class="contry-name long">India</span><span class="value-data">560,000,000</span></li>
              <li><span class="order-class">6</span><span class="contry-name long">Canada</span><span class="value-data">560,000,000</span></li>
              <li><span class="order-class">7</span><span class="contry-name long">Australia</span><span class="value-data">380,000,000</span></li>
              <li><span class="order-class">8</span><span class="contry-name long">Indonesia</span><span class="value-data">310,000,000</span></li>
              <li><span class="order-class">9</span><span class="contry-name long">Argentina</span><span class="value-data">280,000,000</span></li>
              <li><span class="order-class">10</span><span class="contry-name long">Congo, Democratic Republic of</span><span class="value-data">200,000,000</span></li>
              <li><span class="order-class">11</span><span class="contry-name long">France</span><span class="value-data">200,000,000</span></li>
              <li><span class="order-class">12</span><span class="contry-name long">Germany</span><span class="value-data">190,000,000</span></li>
              <li><span class="order-class">13</span><span class="contry-name long">Bolivia</span><span class="value-data">180,000,000</span></li>
              <li><span class="order-class">14</span><span class="contry-name long">Colombia</span><span class="value-data">170,000,000</span></li>
              <li><span class="order-class">15</span><span class="contry-name long">Mexico</span><span class="value-data">150,000,000</span></li>
              <li><span class="order-class">16</span><span class="contry-name long">Peru</span><span class="value-data">120,000,000</span></li>
              <li><span class="order-class">17</span><span class="contry-name long">Nigeria</span><span class="value-data">120,000,000</span></li>
              <li><span class="order-class">18</span><span class="contry-name long">Turkey</span><span class="value-data">110,000,000</span></li>
              <li><span class="order-class">19</span><span class="contry-name long">Ukraine</span><span class="value-data">100,000,000</span></li>
              <li><span class="order-class">20</span><span class="contry-name long">Sweden</span><span class="value-data">100,000,000</span></li>
              <li><span class="order-class">21</span><span class="contry-name long">Myanmar</span><span class="value-data">97,000,000</span></li>
              <li><span class="order-class">22</span><span class="contry-name long">Japan</span><span class="value-data">91,000,000</span></li>
              <li><span class="order-class">23</span><span class="contry-name long">Viet Nam</span><span class="value-data">90,000,000</span></li>
              <li><span class="order-class">24</span><span class="contry-name long">Venezuela, Bolivarian Republic of</span><span class="value-data">83,000,000</span></li>
              <li><span class="order-class">25</span><span class="contry-name long">Thailand</span><span class="value-data">83,000,000</span></li>
              <li><span class="order-class">26</span><span class="contry-name long">United Kingdom</span><span class="value-data">83,000,000</span></li>
              <li><span class="order-class">27</span><span class="contry-name long">Poland</span><span class="value-data">79,000,000</span></li>
              <li><span class="order-class">28</span><span class="contry-name long">Finland</span><span class="value-data">73,000,000</span></li>
              <li><span class="order-class">29</span><span class="contry-name long">Malaysia</span><span class="value-data">70,000,000</span></li><li><span class="order-class">30</span><span class="contry-name long">Paraguay</span><span class="value-data">70,000,000</span></li><li><span class="order-class">31</span><span class="contry-name long">Iran, Islamic Republic of</span><span class="value-data">69,000,000</span></li><li><span class="order-class">32</span><span class="contry-name long">Italy</span><span class="value-data">66,000,000</span></li><li><span class="order-class">33</span><span class="contry-name long">Chile</span><span class="value-data">63,000,000</span></li><li><span class="order-class">34</span><span class="contry-name long">Pakistan</span><span class="value-data">62,000,000</span></li><li><span class="order-class">35</span><span class="contry-name long">South Africa</span><span class="value-data">60,000,000</span></li><li><span class="order-class">36</span><span class="contry-name long">Madagascar</span><span class="value-data">59,000,000</span></li><li><span class="order-class">37</span><span class="contry-name long">Spain</span><span class="value-data">58,000,000</span></li><li><span class="order-class">38</span><span class="contry-name long">Bangladesh</span><span class="value-data">58,000,000</span></li><li><span class="order-class">39</span><span class="contry-name long">Ethiopia</span><span class="value-data">53,000,000</span></li><li><span class="order-class">40</span><span class="contry-name long">Angola</span><span class="value-data">53,000,000</span></li><li><span class="order-class">41</span><span class="contry-name long">Guyana</span><span class="value-data">53,000,000</span></li><li><span class="order-class">42</span><span class="contry-name long">Philippines</span><span class="value-data">53,000,000</span></li><li><span class="order-class">43</span><span class="contry-name long">Mozambique</span><span class="value-data">52,000,000</span></li><li><span class="order-class">44</span><span class="contry-name long">Tanzania, United Republic of</span><span class="value-data">52,000,000</span></li><li><span class="order-class">45</span><span class="contry-name long">Romania</span><span class="value-data">51,000,000</span></li><li><span class="order-class">46</span><span class="contry-name long">Congo</span><span class="value-data">47,000,000</span></li><li><span class="order-class">47</span><span class="contry-name long">New Zealand</span><span class="value-data">45,000,000</span></li><li><span class="order-class">48</span><span class="contry-name long">Egypt</span><span class="value-data">45,000,000</span></li><li><span class="order-class">49</span><span class="contry-name long">Mongolia</span><span class="value-data">44,000,000</span></li><li><span class="order-class">50</span><span class="contry-name long">Norway</span><span class="value-data">40,000,000</span></li><li><span class="order-class">51</span><span class="contry-name long">Cameroon</span><span class="value-data">37,000,000</span></li><li><span class="order-class">52</span><span class="contry-name long">Central African Republic</span><span class="value-data">36,000,000</span></li><li><span class="order-class">53</span><span class="contry-name long">Côte d'Ivoire</span><span class="value-data">35,000,000</span></li><li><span class="order-class">54</span><span class="contry-name long">Uruguay</span><span class="value-data">35,000,000</span></li><li><span class="order-class">55</span><span class="contry-name long">Ghana</span><span class="value-data">34,000,000</span></li><li><span class="order-class">56</span><span class="contry-name long">Belarus</span><span class="value-data">34,000,000</span></li><li><span class="order-class">57</span><span class="contry-name long">Ecuador</span><span class="value-data">34,000,000</span></li><li><span class="order-class">58</span><span class="contry-name long">Korea, Republic of</span><span class="value-data">33,000,000</span></li><li><span class="order-class">59</span><span class="contry-name long">Zambia</span><span class="value-data">31,000,000</span></li><li><span class="order-class">60</span><span class="contry-name long">Papua New Guinea</span><span class="value-data">28,000,000</span></li><li><span class="order-class">61</span><span class="contry-name long">Denmark</span><span class="value-data">27,000,000</span></li><li><span class="order-class">62</span><span class="contry-name long">Uzbekistan</span><span class="value-data">26,000,000</span></li><li><span class="order-class">63</span><span class="contry-name long">Czech Republic</span><span class="value-data">26,000,000</span></li><li><span class="order-class">64</span><span class="contry-name long">Austria</span><span class="value-data">26,000,000</span></li><li><span class="order-class">65</span><span class="contry-name long">Chad</span><span class="value-data">25,000,000</span></li><li><span class="order-class">66</span><span class="contry-name long">Guinea</span><span class="value-data">24,000,000</span></li><li><span class="order-class">67</span><span class="contry-name long">Mali</span><span class="value-data">23,000,000</span></li><li><span class="order-class">68</span><span class="contry-name long">Morocco</span><span class="value-data">23,000,000</span></li><li><span class="order-class">69</span><span class="contry-name long">Algeria</span><span class="value-data">23,000,000</span></li><li><span class="order-class">70</span><span class="contry-name long">Kenya</span><span class="value-data">22,000,000</span></li><li><span class="order-class">71</span><span class="contry-name long">Hungary</span><span class="value-data">22,000,000</span></li><li><span class="order-class">72</span><span class="contry-name long">Uganda</span><span class="value-data">21,000,000</span></li><li><span class="order-class">73</span><span class="contry-name long">Niger</span><span class="value-data">21,000,000</span></li><li><span class="order-class">74</span><span class="contry-name long">Bulgaria</span><span class="value-data">21,000,000</span></li><li><span class="order-class">75</span><span class="contry-name long">Latvia</span><span class="value-data">20,000,000</span></li><li><span class="order-class">76</span><span class="contry-name long">Netherlands</span><span class="value-data">19,000,000</span></li><li><span class="order-class">77</span><span class="contry-name long">Greece</span><span class="value-data">18,000,000</span></li><li><span class="order-class">78</span><span class="contry-name long">Lithuania</span><span class="value-data">17,000,000</span></li><li><span class="order-class">79</span><span class="contry-name long">Ireland</span><span class="value-data">17,000,000</span></li><li><span class="order-class">80</span><span class="contry-name long">Mauritania</span><span class="value-data">17,000,000</span></li><li><span class="order-class">81</span><span class="contry-name long">Nepal</span><span class="value-data">16,000,000</span></li><li><span class="order-class">82</span><span class="contry-name long">Cambodia</span><span class="value-data">16,000,000</span></li><li><span class="order-class">83</span><span class="contry-name long">Burkina Faso</span><span class="value-data">16,000,000</span></li><li><span class="order-class">84</span><span class="contry-name long">Portugal</span><span class="value-data">16,000,000</span></li><li><span class="order-class">85</span><span class="contry-name long">Guatemala</span><span class="value-data">15,000,000</span></li><li><span class="order-class">86</span><span class="contry-name long">Korea, Democratic People's Republic of</span><span class="value-data">15,000,000</span></li><li><span class="order-class">87</span><span class="contry-name long">Afghanistan</span><span class="value-data">15,000,000</span></li><li><span class="order-class">88</span><span class="contry-name long">Slovakia</span><span class="value-data">15,000,000</span></li><li><span class="order-class">89</span><span class="contry-name long">Turkmenistan</span><span class="value-data">14,000,000</span></li><li><span class="order-class">90</span><span class="contry-name long">Senegal</span><span class="value-data">14,000,000</span></li><li><span class="order-class">91</span><span class="contry-name long">Honduras</span><span class="value-data">14,000,000</span></li><li><span class="order-class">92</span><span class="contry-name long">Estonia</span><span class="value-data">14,000,000</span></li><li><span class="order-class">93</span><span class="contry-name long">Nicaragua</span><span class="value-data">14,000,000</span></li><li><span class="order-class">94</span><span class="contry-name long">Syrian Arab Republic</span><span class="value-data">13,000,000</span></li><li><span class="order-class">95</span><span class="contry-name long">Belgium</span><span class="value-data">13,000,000</span></li><li><span class="order-class">96</span><span class="contry-name long">Somalia</span><span class="value-data">13,000,000</span></li><li><span class="order-class">97</span><span class="contry-name long">Croatia</span><span class="value-data">12,000,000</span></li><li><span class="order-class">98</span><span class="contry-name long">Serbia</span><span class="value-data">12,000,000</span></li><li><span class="order-class">99</span><span class="contry-name long">Yemen</span><span class="value-data">12,000,000</span></li><li><span class="order-class">100</span><span class="contry-name long">Panama</span><span class="value-data">11,000,000</span></li><li><span class="order-class">101</span><span class="contry-name long">Liberia</span><span class="value-data">11,000,000</span></li><li><span class="order-class">102</span><span class="contry-name long">Lao People's Democratic Republic</span><span class="value-data">11,000,000</span></li><li><span class="order-class">103</span><span class="contry-name long">Malawi</span><span class="value-data">11,000,000</span></li><li><span class="order-class">104</span><span class="contry-name long">Switzerland</span><span class="value-data">10,000,000</span></li><li><span class="order-class">105</span><span class="contry-name long">Tunisia</span><span class="value-data">10,000,000</span></li><li><span class="order-class">106</span><span class="contry-name long">Iraq</span><span class="value-data">9,400,000</span></li><li><span class="order-class">107</span><span class="contry-name long">Sri Lanka</span><span class="value-data">9,300,000</span></li><li><span class="order-class">108</span><span class="contry-name long">Benin</span><span class="value-data">8,800,000</span></li><li><span class="order-class">109</span><span class="contry-name long">Cuba</span><span class="value-data">8,600,000</span></li><li><span class="order-class">110</span><span class="contry-name long">Zimbabwe</span><span class="value-data">8,500,000</span></li><li><span class="order-class">111</span><span class="contry-name long">Eritrea</span><span class="value-data">8,000,000</span></li><li><span class="order-class">112</span><span class="contry-name long">Azerbaijan</span><span class="value-data">7,900,000</span></li><li><span class="order-class">113</span><span class="contry-name long">Sierra Leone</span><span class="value-data">7,400,000</span></li><li><span class="order-class">114</span><span class="contry-name long">Costa Rica</span><span class="value-data">7,400,000</span></li><li><span class="order-class">115</span><span class="contry-name long">Kyrgyzstan</span><span class="value-data">7,100,000</span></li><li><span class="order-class">116</span><span class="contry-name long">Botswana</span><span class="value-data">7,000,000</span></li><li><span class="order-class">117</span><span class="contry-name long">Oman</span><span class="value-data">6,300,000</span></li><li><span class="order-class">118</span><span class="contry-name long">Bosnia and Herzegovina</span><span class="value-data">6,300,000</span></li><li><span class="order-class">119</span><span class="contry-name long">Rwanda</span><span class="value-data">6,200,000</span></li><li><span class="order-class">120</span><span class="contry-name long">Dominican Republic</span><span class="value-data">5,700,000</span></li><li><span class="order-class">121</span><span class="contry-name long">Georgia</span><span class="value-data">5,100,000</span></li><li><span class="order-class">122</span><span class="contry-name long">Guinea-Bissau</span><span class="value-data">5,000,000</span></li><li><span class="order-class">123</span><span class="contry-name long">Slovenia</span><span class="value-data">4,800,000</span></li><li><span class="order-class">124</span><span class="contry-name long">Libyan Arab Jamahiriya</span><span class="value-data">4,300,000</span></li><li><span class="order-class">125</span><span class="contry-name long">Tajikistan</span><span class="value-data">4,200,000</span></li><li><span class="order-class">126</span><span class="contry-name long">Bhutan</span><span class="value-data">3,900,000</span></li><li><span class="order-class">127</span><span class="contry-name long">El Salvador</span><span class="value-data">3,900,000</span></li><li><span class="order-class">128</span><span class="contry-name long">Albania</span><span class="value-data">3,700,000</span></li><li><span class="order-class">129</span><span class="contry-name long">Togo</span><span class="value-data">3,500,000</span></li><li><span class="order-class">130</span><span class="contry-name long">Macedonia TFYR</span><span class="value-data">3,200,000</span></li><li><span class="order-class">131</span><span class="contry-name long">Burundi</span><span class="value-data">3,100,000</span></li><li><span class="order-class">132</span><span class="contry-name long">Moldova</span><span class="value-data">2,800,000</span></li><li><span class="order-class">133</span><span class="contry-name long">Haiti</span><span class="value-data">2,700,000</span></li><li><span class="order-class">134</span><span class="contry-name long">Israel</span><span class="value-data">2,700,000</span></li><li><span class="order-class">135</span><span class="contry-name long">Armenia</span><span class="value-data">2,600,000</span></li><li><span class="order-class">136</span><span class="contry-name long">Trinidad and Tobago</span><span class="value-data">2,100,000</span></li><li><span class="order-class">137</span><span class="contry-name long">Fiji</span><span class="value-data">2,100,000</span></li><li><span class="order-class">138</span><span class="contry-name long">Montenegro</span><span class="value-data">2,000,000</span></li><li><span class="order-class">139</span><span class="contry-name long">Timor-Leste</span><span class="value-data">2,000,000</span></li><li><span class="order-class">140</span><span class="contry-name long">Lesotho</span><span class="value-data">1,600,000</span></li><li><span class="order-class">141</span><span class="contry-name long">Lebanon</span><span class="value-data">1,500,000</span></li><li><span class="order-class">142</span><span class="contry-name long">Jordan</span><span class="value-data">1,500,000</span></li><li><span class="order-class">143</span><span class="contry-name long">Gambia</span><span class="value-data">1,500,000</span></li><li><span class="order-class">144</span><span class="contry-name long">Jamaica</span><span class="value-data">1,200,000</span></li><li><span class="order-class">145</span><span class="contry-name long">Luxembourg</span><span class="value-data">900,000</span></li><li><span class="order-class">146</span><span class="contry-name long">Mauritius</span><span class="value-data">900,000</span></li><li><span class="order-class">147</span><span class="contry-name long">Cyprus</span><span class="value-data">400,000</span></li><li><span class="order-class">148</span><span class="contry-name long">Singapore</span><span class="value-data">300,000</span></li><li><span class="order-class">149</span><span class="contry-name long">Comoros</span><span class="value-data">200,000</span></li><li><span class="order-class">150</span><span class="contry-name long">Réunion</span><span class="value-data">200,000</span></li>
              </ul>
              </div>
            </div>
          </div>

           <div role="tabpanel" class="tab-pane" id="icon-5">
            <div class="col-md-12">
              <div class="w3-panel w3-green row">
              <ul style="list-style: none; padding: 0; height: 400px; overflow-y: scroll;">
                <li><span class="order-class">1</span><span class="contry-name">Guyana</span><span class="value-data">66.6</span></li>
                <li><span class="order-class">2</span><span class="contry-name">Bolivia</span><span class="value-data">16.7</span></li>
                <li><span class="order-class">3</span><span class="contry-name">Australia</span><span class="value-data">16.6</span></li>
                <li><span class="order-class">4</span><span class="contry-name">Canada</span><span class="value-data">16</span></li>
                <li><span class="order-class">5</span><span class="contry-name">Mongolia</span><span class="value-data">15.7</span></li>
                <li><span class="order-class">6</span><span class="contry-name">Finland</span><span class="value-data">13.4</span></li>
                <li><span class="order-class">7</span><span class="contry-name">Congo</span><span class="value-data">10.9</span></li>
                <li><span class="order-class">8</span><span class="contry-name">Sweden</span><span class="value-data">10.6</span></li>
                <li><span class="order-class">9</span><span class="contry-name">Estonia</span><span class="value-data">10.5</span></li>
                <li><span class="order-class">10</span><span class="contry-name">Paraguay</span><span class="value-data">10.5</span></li>
                <li><span class="order-class">11</span><span class="contry-name">Uruguay</span><span class="value-data">10.3</span></li>
                <li><span class="order-class">12</span><span class="contry-name">New Zealand</span><span class="value-data">10.1</span></li>
                <li><span class="order-class">13</span><span class="contry-name">Latvia</span><span class="value-data">9.6</span></li>
                <li><span class="order-class">14</span><span class="contry-name">Brazil</span><span class="value-data">9.1</span></li>
                <li><span class="order-class">15</span><span class="contry-name">Norway</span><span class="value-data">8.2</span></li>
                <li><span class="order-class">16</span><span class="contry-name">Central African Republic</span><span class="value-data">7.9</span></li>
                <li><span class="order-class">17</span><span class="contry-name">Argentina</span><span class="value-data">6.9</span></li><li><span class="order-class">18</span><span class="contry-name">Russian Federation</span><span class="value-data">6.8</span></li><li><span class="order-class">19</span><span class="contry-name">Lithuania</span><span class="value-data">5.7</span></li><li><span class="order-class">20</span><span class="contry-name">Bhutan</span><span class="value-data">5.3</span></li><li><span class="order-class">21</span><span class="contry-name">Denmark</span><span class="value-data">4.8</span></li><li><span class="order-class">22</span><span class="contry-name">Mauritania</span><span class="value-data">4.5</span></li><li><span class="order-class">23</span><span class="contry-name">Peru</span><span class="value-data">4</span></li><li><span class="order-class">24</span><span class="contry-name">Papua New Guinea</span><span class="value-data">3.9</span></li><li><span class="order-class">25</span><span class="contry-name">United States of America</span><span class="value-data">3.8</span></li><li><span class="order-class">26</span><span class="contry-name">Ireland</span><span class="value-data">3.7</span></li><li><span class="order-class">27</span><span class="contry-name">Belarus</span><span class="value-data">3.6</span></li><li><span class="order-class">28</span><span class="contry-name">Chile</span><span class="value-data">3.6</span></li><li><span class="order-class">29</span><span class="contry-name">Colombia</span><span class="value-data">3.6</span></li><li><span class="order-class">30</span><span class="contry-name">Botswana</span><span class="value-data">3.5</span></li><li><span class="order-class">31</span><span class="contry-name">Montenegro</span><span class="value-data">3.2</span></li><li><span class="order-class">32</span><span class="contry-name">France</span><span class="value-data">3.1</span></li><li><span class="order-class">33</span><span class="contry-name">Austria</span><span class="value-data">3.1</span></li><li><span class="order-class">34</span><span class="contry-name">Congo, Democratic Republic of</span><span class="value-data">3.1</span></li><li><span class="order-class">35</span><span class="contry-name">Guinea-Bissau</span><span class="value-data">3</span></li><li><span class="order-class">36</span><span class="contry-name">Panama</span><span class="value-data">2.9</span></li><li><span class="order-class">37</span><span class="contry-name">Bulgaria</span><span class="value-data">2.9</span></li><li><span class="order-class">38</span><span class="contry-name">Croatia</span><span class="value-data">2.8</span></li><li><span class="order-class">39</span><span class="contry-name">Turkmenistan</span><span class="value-data">2.8</span></li><li><span class="order-class">40</span><span class="contry-name">Venezuela, Bolivarian Republic of</span><span class="value-data">2.8</span></li><li><span class="order-class">41</span><span class="contry-name">Slovakia</span><span class="value-data">2.7</span></li><li><span class="order-class">42</span><span class="contry-name">Madagascar</span><span class="value-data">2.6</span></li><li><span class="order-class">43</span><span class="contry-name">Liberia</span><span class="value-data">2.6</span></li><li><span class="order-class">44</span><span class="contry-name">Angola</span><span class="value-data">2.6</span></li><li><span class="order-class">45</span><span class="contry-name">Czech Republic</span><span class="value-data">2.5</span></li><li><span class="order-class">46</span><span class="contry-name">Malaysia</span><span class="value-data">2.4</span></li><li><span class="order-class">47</span><span class="contry-name">Fiji</span><span class="value-data">2.4</span></li><li><span class="order-class">48</span><span class="contry-name">Slovenia</span><span class="value-data">2.4</span></li><li><span class="order-class">49</span><span class="contry-name">Romania</span><span class="value-data">2.3</span></li><li><span class="order-class">50</span><span class="contry-name">Germany</span><span class="value-data">2.3</span></li><li><span class="order-class">51</span><span class="contry-name">Ukraine</span><span class="value-data">2.3</span></li><li><span class="order-class">52</span><span class="contry-name">Nicaragua</span><span class="value-data">2.3</span></li><li><span class="order-class">53</span><span class="contry-name">Zambia</span><span class="value-data">2.2</span></li><li><span class="order-class">54</span><span class="contry-name">Ecuador</span><span class="value-data">2.2</span></li><li><span class="order-class">55</span><span class="contry-name">Hungary</span><span class="value-data">2.2</span></li><li><span class="order-class">56</span><span class="contry-name">Guinea</span><span class="value-data">2.1</span></li><li><span class="order-class">57</span><span class="contry-name">Poland</span><span class="value-data">2.1</span></li><li><span class="order-class">58</span><span class="contry-name">Mozambique</span><span class="value-data">2.1</span></li><li><span class="order-class">59</span><span class="contry-name">Chad</span><span class="value-data">2</span></li><li><span class="order-class">60</span><span class="contry-name">Oman</span><span class="value-data">1.9</span></li><li><span class="order-class">61</span><span class="contry-name">Myanmar</span><span class="value-data">1.8</span></li><li><span class="order-class">62</span><span class="contry-name">Côte d'Ivoire</span><span class="value-data">1.8</span></li><li><span class="order-class">63</span><span class="contry-name">Timor-Leste</span><span class="value-data">1.8</span></li><li><span class="order-class">64</span><span class="contry-name">Honduras</span><span class="value-data">1.8</span></li><li><span class="order-class">65</span><span class="contry-name">Cameroon</span><span class="value-data">1.7</span></li><li><span class="order-class">66</span><span class="contry-name">Luxembourg</span><span class="value-data">1.7</span></li><li><span class="order-class">67</span><span class="contry-name">Bosnia and Herzegovina</span><span class="value-data">1.6</span></li><li><span class="order-class">68</span><span class="contry-name">Lao People's Democratic Republic</span><span class="value-data">1.6</span></li><li><span class="order-class">69</span><span class="contry-name">Greece</span><span class="value-data">1.6</span></li><li><span class="order-class">70</span><span class="contry-name">Mali</span><span class="value-data">1.6</span></li><li><span class="order-class">71</span><span class="contry-name">Trinidad and Tobago</span><span class="value-data">1.6</span></li><li><span class="order-class">72</span><span class="contry-name">Costa Rica</span><span class="value-data">1.5</span></li><li><span class="order-class">73</span><span class="contry-name">Turkey</span><span class="value-data">1.5</span></li><li><span class="order-class">74</span><span class="contry-name">Portugal</span><span class="value-data">1.5</span></li><li><span class="order-class">75</span><span class="contry-name">Macedonia TFYR</span><span class="value-data">1.5</span></li><li><span class="order-class">76</span><span class="contry-name">Ghana</span><span class="value-data">1.4</span></li><li><span class="order-class">77</span><span class="contry-name">United Kingdom</span><span class="value-data">1.3</span></li><li><span class="order-class">78</span><span class="contry-name">Switzerland</span><span class="value-data">1.3</span></li><li><span class="order-class">79</span><span class="contry-name">Kyrgyzstan</span><span class="value-data">1.3</span></li><li><span class="order-class">80</span><span class="contry-name">Eritrea</span><span class="value-data">1.3</span></li><li><span class="order-class">81</span><span class="contry-name">Mexico</span><span class="value-data">1.3</span></li><li><span class="order-class">82</span><span class="contry-name">Somalia</span><span class="value-data">1.3</span></li><li><span class="order-class">83</span><span class="contry-name">Indonesia</span><span class="value-data">1.3</span></li><li><span class="order-class">84</span><span class="contry-name">Spain</span><span class="value-data">1.3</span></li><li><span class="order-class">85</span><span class="contry-name">Serbia</span><span class="value-data">1.3</span></li><li><span class="order-class">86</span><span class="contry-name">Thailand</span><span class="value-data">1.2</span></li><li><span class="order-class">87</span><span class="contry-name">Niger</span><span class="value-data">1.2</span></li><li><span class="order-class">88</span><span class="contry-name">Sierra Leone</span><span class="value-data">1.2</span></li><li><span class="order-class">89</span><span class="contry-name">Belgium</span><span class="value-data">1.2</span></li><li><span class="order-class">90</span><span class="contry-name">Albania</span><span class="value-data">1.2</span></li><li><span class="order-class">91</span><span class="contry-name">Netherlands</span><span class="value-data">1.2</span></li><li><span class="order-class">92</span><span class="contry-name">Georgia</span><span class="value-data">1.2</span></li><li><span class="order-class">93</span><span class="contry-name">South Africa</span><span class="value-data">1.2</span></li><li><span class="order-class">94</span><span class="contry-name">Cambodia</span><span class="value-data">1.1</span></li><li><span class="order-class">95</span><span class="contry-name">Italy</span><span class="value-data">1.1</span></li><li><span class="order-class">96</span><span class="contry-name">Tanzania, United Republic of</span><span class="value-data">1.1</span></li><li><span class="order-class">97</span><span class="contry-name">Senegal</span><span class="value-data">1.1</span></li><li><span class="order-class">98</span><span class="contry-name">Viet Nam</span><span class="value-data">1</span></li><li><span class="order-class">99</span><span class="contry-name">Guatemala</span><span class="value-data">1</span></li><li><span class="order-class">100</span><span class="contry-name">Burkina Faso</span><span class="value-data">1</span></li><li><span class="order-class">101</span><span class="contry-name">China</span><span class="value-data">0.9</span></li><li><span class="order-class">102</span><span class="contry-name">Tunisia</span><span class="value-data">0.9</span></li><li><span class="order-class">103</span><span class="contry-name">Uzbekistan</span><span class="value-data">0.9</span></li><li><span class="order-class">104</span><span class="contry-name">Iran, Islamic Republic of</span><span class="value-data">0.9</span></li><li><span class="order-class">105</span><span class="contry-name">Armenia</span><span class="value-data">0.9</span></li><li><span class="order-class">106</span><span class="contry-name">Benin</span><span class="value-data">0.9</span></li><li><span class="order-class">107</span><span class="contry-name">Azerbaijan</span><span class="value-data">0.9</span></li><li><span class="order-class">108</span><span class="contry-name">Gambia</span><span class="value-data">0.8</span></li><li><span class="order-class">109</span><span class="contry-name">Moldova</span><span class="value-data">0.8</span></li><li><span class="order-class">110</span><span class="contry-name">Lesotho</span><span class="value-data">0.8</span></li><li><span class="order-class">111</span><span class="contry-name">Cuba</span><span class="value-data">0.8</span></li><li><span class="order-class">112</span><span class="contry-name">Japan</span><span class="value-data">0.7</span></li><li><span class="order-class">113</span><span class="contry-name">Mauritius</span><span class="value-data">0.7</span></li><li><span class="order-class">114</span><span class="contry-name">Morocco</span><span class="value-data">0.7</span></li><li><span class="order-class">115</span><span class="contry-name">Libyan Arab Jamahiriya</span><span class="value-data">0.7</span></li><li><span class="order-class">116</span><span class="contry-name">Nigeria</span><span class="value-data">0.7</span></li><li><span class="order-class">117</span><span class="contry-name">Korea, Republic of</span><span class="value-data">0.7</span></li><li><span class="order-class">118</span><span class="contry-name">Malawi</span><span class="value-data">0.7</span></li><li><span class="order-class">119</span><span class="contry-name">Zimbabwe</span><span class="value-data">0.6</span></li><li><span class="order-class">120</span><span class="contry-name">El Salvador</span><span class="value-data">0.6</span></li><li><span class="order-class">121</span><span class="contry-name">Syrian Arab Republic</span><span class="value-data">0.6</span></li><li><span class="order-class">122</span><span class="contry-name">Korea, Democratic People's Republic of</span><span class="value-data">0.6</span></li><li><span class="order-class">123</span><span class="contry-name">Algeria</span><span class="value-data">0.6</span></li><li><span class="order-class">124</span><span class="contry-name">Uganda</span><span class="value-data">0.6</span></li><li><span class="order-class">125</span><span class="contry-name">Nepal</span><span class="value-data">0.6</span></li><li><span class="order-class">126</span><span class="contry-name">Ethiopia</span><span class="value-data">0.6</span></li><li><span class="order-class">127</span><span class="contry-name">Egypt</span><span class="value-data">0.6</span></li><li><span class="order-class">128</span><span class="contry-name">Dominican Republic</span><span class="value-data">0.6</span></li><li><span class="order-class">129</span><span class="contry-name">Philippines</span><span class="value-data">0.5</span></li><li><span class="order-class">130</span><span class="contry-name">Rwanda</span><span class="value-data">0.5</span></li><li><span class="order-class">131</span><span class="contry-name">Togo</span><span class="value-data">0.5</span></li><li><span class="order-class">132</span><span class="contry-name">Tajikistan</span><span class="value-data">0.5</span></li><li><span class="order-class">133</span><span class="contry-name">Kenya</span><span class="value-data">0.5</span></li><li><span class="order-class">134</span><span class="contry-name">Yemen</span><span class="value-data">0.5</span></li><li><span class="order-class">135</span><span class="contry-name">Afghanistan</span><span class="value-data">0.5</span></li><li><span class="order-class">136</span><span class="contry-name">India</span><span class="value-data">0.5</span></li><li><span class="order-class">137</span><span class="contry-name">Sri Lanka</span><span class="value-data">0.4</span></li><li><span class="order-class">138</span><span class="contry-name">Jamaica</span><span class="value-data">0.4</span></li><li><span class="order-class">139</span><span class="contry-name">Bangladesh</span><span class="value-data">0.4</span></li><li><span class="order-class">140</span><span class="contry-name">Israel</span><span class="value-data">0.4</span></li><li><span class="order-class">141</span><span class="contry-name">Pakistan</span><span class="value-data">0.4</span></li><li><span class="order-class">142</span><span class="contry-name">Cyprus</span><span class="value-data">0.3</span></li><li><span class="order-class">143</span><span class="contry-name">Lebanon</span><span class="value-data">0.3</span></li><li><span class="order-class">144</span><span class="contry-name">Comoros</span><span class="value-data">0.3</span></li><li><span class="order-class">145</span><span class="contry-name">Burundi</span><span class="value-data">0.3</span></li><li><span class="order-class">146</span><span class="contry-name">Iraq</span><span class="value-data">0.3</span></li><li><span class="order-class">147</span><span class="contry-name">Haiti</span><span class="value-data">0.3</span></li><li><span class="order-class">148</span><span class="contry-name">Jordan</span><span class="value-data">0.2</span></li><li><span class="order-class">149</span><span class="contry-name">Réunion</span><span class="value-data">0.2</span></li><li><span class="order-class">150</span><span class="contry-name">Singapore</span><span class="value-data">0.1</span></li>
              </ul>
              </div>
              </div>
              </div>
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
  <img src="{{asset('images/j.jpg')}}" alt="" draggable="false" style="width:45%" class="w3-circle w3-hover-opacity">
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
