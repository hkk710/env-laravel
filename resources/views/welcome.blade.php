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
                <h4>COUNTRIES RANKED BY TOTAL ECOLOGICAL FOOTPRINT (in global hectares) </h4>
                <hr>
                <div class="panel panel-primary" style="color: #111!important; box-shadow: inset 0 0 5px 1px grey;">
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
                  <li>10France330,000,000</li>
                  <li>11United Kingdom310,000,000</li>
                  <li>12Canada280,000,000</li>
                  <li>13Italy280,000,000</li>
                  <li>14Korea, Republic of280,000,000</li>
                  <li>15Turkey250,000,000</li>
                  <li>16Australia210,000,000</li>
                  <li>17Iran, Islamic Republic of210,000,000</li>
                  <li>18Nigeria200,000,000</li>
                  <li>19Thailand180,000,000</li>
                  <li>20South Africa170,000,000</li>
                  <li>21Egypt170,000,000</li>
                  <li>22Spain170,000,000</li>
                  <li>23Poland170,000,000</li>
                  <li>24Viet Nam150,000,000</li>
                  <li>25Pakistan140,000,000</li>
                  <li>26Ukraine130,000,000</li>
                  <li>27Argentina130,000,000</li>
                  <li>28Bangladesh110,000,000</li>
                  <li>29Malaysia110,000,000</li>
                  <li>30Venezuela, Bolivarian Republic of110,000,000</li>
                  <li>31Philippines110,000,000</li>
                  <li>32Ethiopia93,000,000</li>
                  <li>33Colombia89,000,000</li>
                  <li>34Netherlands88,000,000</li>
                  <li>35Belgium82,000,000</li>
                  <li>36Algeria81,000,000</li>
                  <li>37Chile76,000,000</li>
                  <li>38Myanmar76,000,000</li>
                  <li>39Sweden69,000,000</li>
                  <li>40Peru68,000,000</li>
                  <li>41Uzbekistan66,000,000</li>
                  <li>41Tanzania, United Republic of63,000,000</li>
                  <li>42Iraq62,000,000</li>
                  <li>44Romania59,000,000</li>
                  <li>44Czech Republic55,000,000</li>
                  <li>46Morocco55,000,000</li>
                  <li>47Congo, Democratic Republic of54,000,000</li>
                  <li>48Austria51,000,000</li>
                  <li>49Ghana50,000,000</li>
                  <li>50Greece49,000,000</li>
                  <li>51Belarus48,000,000</li>
                  <li>52Israel48,000,000</li>
                  <li>53Switzerland46,000,000</li>
                  <li>54Uganda45,000,000</li>
                  <li>55Kenya45,000,000</li>
                  <li>56Singapore42,000,000</li>
                  <li>57Portugal41,000,000</li>
                  <li>58Ecuador34,000,000</li>
                  <li>59Syrian Arab Republic33,000,000</li>
                  <li>60Finland32,000,000</li>
                  <li>61Bolivia31,000,000</li>
                  <li>62Denmark31,000,000</li>
                  <li>63Hungary29,000,000</li>
                  <li>64Korea, Democratic People's Republic of29,000,000</li>
                  <li>65Guatemala28,000,000</li>
                  <li>66Turkmenistan28,000,000</li>
                  <li>67Sri Lanka28,000,000</li>
                  <li>68Paraguay28,000,000</li>
                  <li>69Nepal27,000,000</li>
                  <li>70Niger27,000,000</li>
                  <li>71Serbia26,000,000</li>
                  <li>72Ireland25,000,000</li>
                  <li>73Tunisia25,000,000</li>
                  <li>74Cameroon25,000,000</li>
                  <li>75Côte d'Ivoire25,000,000</li>
                  <li>76New Zealand25,000,000</li>
                  <li>77Oman25,000,000</li>
                  <li>78Norway25,000,000</li>
                  <li>79Yemen24,000,000</li>
                  <li>80Bulgaria24,000,000</li>
                  <li>81Afghanistan24,000,000</li>
                  <li>82Libyan Arab Jamahiriya23,000,000</li>
                  <li>83Mali23,000,000</li>
                  <li>84Slovakia22,000,000</li>
                  <li>85Madagascar22,000,000</li>
                  <li>86Cuba22,000,000</li>
                  <li>87Mozambique22,000,000</li>
                  <li>88Azerbaijan22,000,000</li>
                  <li>89Burkina Faso20,000,000</li>
                  <li>90Angola19,000,000</li>
                  <li>91Zimbabwe19,000,000</li>
                  <li>92Chad18,000,000</li>
                  <li>93Cambodia18,000,000</li>
                  <li>94Lebanon18,000,000</li>
                  <li>95Lithuania18,000,000</li>
                  <li>96Mongolia17,000,000</li>
                  <li>97Croatia17,000,000</li>
                  <li>98Senegal17,000,000</li>
                  <li>99Guinea16,000,000</li>
                  <li>100Dominican Republic16,000,000</li>
                  <li>101Jordan15,000,000</li>
                  <li>102Benin14,000,000</li>
                  <li>103Zambia14,000,000</li>
                  <li>104Papua New Guinea14,000,000</li>
                  <li>105Costa Rica14,000,000</li>
                  <li>106Honduras13,000,000</li>
                  <li>107El Salvador13,000,000</li>
                  <li>108Latvia13,000,000</li>
                  <li>109Malawi13,000,000</li>
                  <li>110Somalia13,000,000</li>
                  <li>111Slovenia12,000,000</li>
                  <li>112Bosnia and Herzegovina12,000,000</li>
                  <li>113Panama11,000,000</li>
                  <li>114Trinidad and Tobago11,000,000</li>
                  <li>115Kyrgyzstan10,000,000</li>
                  <li>116Rwanda9,900,000</li>
                  <li>117Uruguay9,900,000</li>
                  <li>118Mauritania9,700,000</li>
                  <li>119Estonia8,900,000</li>
                  <li>120Nicaragua8,300,000</li>
                  <li>121Luxembourg8,300,000</li>
                  <li>122Lao People's Democratic Republic8,100,000</li>
                  <li>123Botswana7,700,000</li>
                  <li>124Burundi7,600,000</li>
                  <li>125Togo7,500,000</li>
                  <li>126Sierra Leone7,400,000</li>
                  <li>127Tajikistan7,300,000</li>
                  <li>128Albania7,000,000</li>
                  <li>129Georgia6,900,000</li>
                  <li>130Macedonia TFYR6,900,000</li>
                  <li>131Armenia6,600,000</li>
                  <li>132Moldova6,200,000</li>
                  <li>133Haiti6,200,000</li>
                  <li>134Central African Republic5,600,000</li>
                  <li>135Congo5,600,000</li>
                  <li>136Jamaica5,200,000</li>
                  <li>137Liberia5,100,000</li>
                  <li>138Cyprus4,800,000</li>
                  <li>139Mauritius4,300,000</li>
                  <li>140Bhutan3,600,000</li>
                  <li>141Lesotho3,400,000</li>
                  <li>142Réunion3,200,000</li>
                  <li>143Eritrea2,600,000</li>
                  <li>144Guinea-Bissau2,600,000</li>
                  <li>145Fiji2,500,000</li>
                  <li>146Guyana2,400,000</li>
                  <li>147Montenegro2,300,000</li>
                  <li>148Gambia1,800,000</li>
                  <li>149Comoros700,000</li>
                  <li>150Timor-Leste500,000</li>
                </ul>
              </div>
            </div>
          </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="icon-3">
            <div class="col-md-12">
              <div class="w3-panel w3-yellow row">
                <h4>COUNTRIES RANKED BY ECOLOGICAL FOOTPRINT PER CAPITA (in global hectares)</h4>
                <hr>
                <div class="panel panel-primary" style="color: #111!important; box-shadow: inset 0 0 5px 1px grey;">
              <ul style="list-style: none; padding: 0; height: 400px; overflow-y: scroll;">
                        <li>1 Luxembourg 15.8</li>
                        <li>2 Australia 9.3 </li>
                        <li>3 United States of America 8.2 </li>
                        <li>4 Canada 8.2</li>
                        <li>5 Singapore 8</li>
                        6Trinidad and Tobago7.9
                        7Oman7.5
                        8Belgium7.4
                        9Sweden7.3
                        10Estonia6.9
                        11Latvia6.3
                        12Israel6.2
                        13Mongolia6.1
                        14Austria6.1
                        15Finland5.9
                        16Lithuania5.8
                        17Slovenia5.8
                        18Switzerland5.8
                        19Korea, Republic of5.7
                        20Russian Federation5.7
                        21New Zealand5.6
                        22Ireland5.6
                        23Denmark5.5
                        24Turkmenistan5.5
                        25Germany5.3
                        26Netherlands5.3
                        27Czech Republic5.2
                        28France5.1
                        29Belarus5.1
                        30Japan5
                        31Norway5
                        32United Kingdom4.9
                        33Bhutan4.8
                        34Italy4.6
                        35Poland4.4
                        36Greece4.4
                        37Chile4.4
                        38Cyprus4.2
                        39Paraguay4.2
                        40Slovakia4.1
                        41Croatia3.9
                        42Portugal3.9
                        43Lebanon3.8
                        44Botswana3.8
                        45Montenegro3.8
                        46Malaysia3.7
                        47Libyan Arab Jamahiriya3.7
                        48Spain3.7
                        49Réunion3.7
                        50Venezuela, Bolivarian Republic of3.6
                        51Mauritius3.5
                        52China3.4
                        53Turkey3.3
                        54Bulgaria3.3
                        55South Africa3.3
                        56Macedonia TFYR3.3
                        57Argentina3.1
                        58Bosnia and Herzegovina3.1
                        59Brazil3.1
                        60Guyana3.1
                        61Bolivia3
                        62Hungary2.9
                        63Uruguay2.9
                        64Fiji2.9
                        65Mexico2.9
                        66Costa Rica2.8
                        67Ukraine2.8
                        68Iran, Islamic Republic of2.8
                        69Panama2.8
                        70Romania2.7
                        71Serbia2.7
                        72Thailand2.7
                        73Mauritania2.5
                        74Tunisia2.3
                        75Uzbekistan2.3
                        76Azerbaijan2.3
                        77Peru2.3
                        78Armenia2.2
                        79Albania2.2
                        80Ecuador2.2
                        81Egypt2.2
                        82Algeria2.1
                        83Jordan2.1
                        84El Salvador2.1
                        85Ghana2
                        86Cuba2
                        87Kyrgyzstan1.9
                        88Papua New Guinea1.9
                        89Jamaica1.9
                        90Guatemala1.9
                        91Iraq1.9
                        92Colombia1.9
                        93Moldova1.8
                        94Morocco1.7
                        95Honduras1.7
                        96Lesotho1.7
                        97Viet Nam1.7
                        98Georgia1.6
                        99Indonesia1.6
                        <li>100Niger1.6</li>
                        <li>101Dominican Republic1.5</li>
                        <li>102Mali1.5</li>
                        <li>103Guinea-Bissau1.5</li>
                        <li>104Syrian Arab Republic1.5</li>
                        <li>105Chad1.5</li>
                        <li>106Myanmar1.4</li>
                        <li>107Benin1.4</li>
                        <li>108Guinea1.4</li>
                        <li>109Nicaragua1.4</li>
                        <li>110Zimbabwe1.4</li>
                        <li>111Sri Lanka1.3</li>
                        <li>112Tanzania, United Republic of1.3</li>
                        <li>113Congo1.3</li>
                        <li>114Côte d'Ivoire1.3</li>
                        <li>115Uganda1.2</li>
                        <li>116Sierra Leone1.2</li>
                        <li>117Somalia1.2</li>
                        <li>118Central African Republic1.2</li>
                        <li>119Lao People's Democratic Republic1.2</li>
                        <li>120Burkina Faso1.2</li>
                        <li>121Senegal1.2</li>
                        <li>122Cambodia1.2</li>
                        <li>123Liberia1.2</li>
                        <li>124Korea, Democratic People's Republic of1.2</li>
                        <li>125Cameroon1.2</li>
                        <li>126India1.2</li>
                        <li>127Nigeria1.2</li>
                        <li>128Togo1.1</li>
                        <li>129Philippines1.1</li>
                        <li>130Comoros1</li>
                        <li>131Yemen1</li>
                        <li>132Kenya1</li>
                        <li>133Gambia1</li>
                        <li>134Ethiopia1</li>
                        <li>135Zambia1</li>
                        <li>136Madagascar1</li>
                        <li>137Nepal1</li>
                        <li>138Angola0.9</li>
                        <li>139Tajikistan0.9</li>
                        <li>140Rwanda0.9</li>
                        <li>141Mozambique0.9</li>
                        <li>142Congo, Democratic Republic of0.8</li>
                        <li>143Malawi0.8</li>
                        <li>144Burundi0.8</li>
                        <li>145Pakistan0.8</li>
                        <li>146Afghanistan0.8</li>
                        <li>147Bangladesh0.7</li>
                        <li>148Haiti0.6</li>
                        <li>149Timor-Leste0.5</li>
                        <li>150Eritrea0.4</li>
                      </ul>
                      </div>
                    </div>
                  </div>
                  </div>
          <div role="tabpanel" class="tab-pane" id="icon-4">
            <div class="col-md-12">
              <div class="w3-panel w3-green row">
                <h4>COUNTRIES RANKED BY TOTAL BIOCAPACITY (in global hectares)</h4>
                <hr>
                <div class="panel panel-primary" style="color: #111!important; box-shadow: inset 0 0 5px 1px grey;">
              <ul style="list-style: none; padding: 0; height: 400px; overflow-y: scroll;">
              <li>1Brazil1,800,000,000</li>
              <li>2China1,300,000,000</li>
              <li>3United States of America1,200,000,000</li>
              4Russian Federation970,000,000
              5India560,000,000
              6Canada560,000,000
              7Australia380,000,000
              8Indonesia310,000,000
              9Argentina280,000,000
              10Congo, Democratic Republic of200,000,000
              11France200,000,000
              12Germany190,000,000
              13Bolivia180,000,000
              14Colombia170,000,000
              15Mexico150,000,000
              16Peru120,000,000
              17Nigeria120,000,000
              18Turkey110,000,000
              19Ukraine100,000,000
              20Sweden100,000,000
              21Myanmar97,000,000
              22Japan91,000,000
              23Viet Nam90,000,000
              24Venezuela, Bolivarian Republic of83,000,000
              25Thailand83,000,000
              26United Kingdom83,000,000
              27Poland79,000,000
              28Finland73,000,000
              29Malaysia70,000,000
              30Paraguay70,000,000
              31Iran, Islamic Republic of69,000,000
              32Italy66,000,000
              33Chile63,000,000
              34Pakistan62,000,000
              35South Africa60,000,000
              36Madagascar59,000,000
              37Spain58,000,000
              38Bangladesh58,000,000
              39Ethiopia53,000,000
              40Angola53,000,000
              41Guyana53,000,000
              42Philippines53,000,000
              43Mozambique52,000,000
              44Tanzania, United Republic of52,000,000
              45Romania51,000,000
              46Congo47,000,000
              47New Zealand45,000,000
              48Egypt45,000,000
              49Mongolia44,000,000
              50Norway40,000,000
              51Cameroon37,000,000
              52Central African Republic36,000,000
              53Côte d'Ivoire35,000,000
              54Uruguay35,000,000
              55Ghana34,000,000
              56Belarus34,000,000
              57Ecuador34,000,000
              58Korea, Republic of33,000,000
              59Zambia31,000,000
              60Papua New Guinea28,000,000
              61Denmark27,000,000
              62Uzbekistan26,000,000
              63Czech Republic26,000,000
              64Austria26,000,000
              65Chad25,000,000
              66Guinea24,000,000
              67Mali23,000,000
              68Morocco23,000,000
              69Algeria23,000,000
              70Kenya22,000,000
              71Hungary22,000,000
              72Uganda21,000,000
              73Niger21,000,000
              74Bulgaria21,000,000
              75Latvia20,000,000
              76Netherlands19,000,000
              77Greece18,000,000
              78Lithuania17,000,000
              79Ireland17,000,000
              80Mauritania17,000,000
              81Nepal16,000,000
              82Cambodia16,000,000
              83Burkina Faso16,000,000
              84Portugal16,000,000
              85Guatemala15,000,000
              86Korea, Democratic People's Republic of15,000,000
              87Afghanistan15,000,000
              88Slovakia15,000,000
              89Turkmenistan14,000,000
              90Senegal14,000,000
              91Honduras14,000,000
              92Estonia14,000,000
              93Nicaragua14,000,000
              94Syrian Arab Republic13,000,000
              95Belgium13,000,000
              96Somalia13,000,000
              97Croatia12,000,000
              98Serbia12,000,000
              99Yemen12,000,000
              100Panama11,000,000
              101Liberia11,000,000
              102Lao People's Democratic Republic11,000,000
              103Malawi11,000,000
              104Switzerland10,000,000
              105Tunisia10,000,000
              106Iraq9,400,000
              107Sri Lanka9,300,000
              108Benin8,800,000
              109Cuba8,600,000
              110Zimbabwe8,500,000
              111Eritrea8,000,000
              112Azerbaijan7,900,000
              113Sierra Leone7,400,000
              114Costa Rica7,400,000
              115Kyrgyzstan7,100,000
              116Botswana7,000,000
              117Oman6,300,000
              118Bosnia and Herzegovina6,300,000
              119Rwanda6,200,000
              120Dominican Republic5,700,000
              121Georgia5,100,000
              122Guinea-Bissau5,000,000
              123Slovenia4,800,000
              124Libyan Arab Jamahiriya4,300,000
              125Tajikistan4,200,000
              126Bhutan3,900,000
              127El Salvador3,900,000
              128Albania3,700,000
              129Togo3,500,000
              130Macedonia TFYR3,200,000
              131Burundi3,100,000
              132Moldova2,800,000
              133Haiti2,700,000
              134Israel2,700,000
              135Armenia2,600,000
              136Trinidad and Tobago2,100,000
              137Fiji2,100,000
              138Montenegro2,000,000
              139Timor-Leste2,000,000
              140Lesotho1,600,000
              141Lebanon1,500,000
              142Jordan1,500,000
              143Gambia1,500,000
              144Jamaica1,200,000
              145Luxembourg900,000
              146Mauritius900,000
              147Cyprus400,000
              148Singapore300,000
              149Comoros200,000
              <li>150Réunion200,000</li>
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
