<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

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

</style>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>


<div class="w3-container w3-padding-64 w3-center" id="footprint">
<h2 class="slideanim">FOOT PRINT</h2>
<br>
<p class="slideanim"> Ecological Footprint and biocapacity</p>
<br>
<div class="w3-row"><br>

<div class="w3-quarter ad-img-hover slideanim">
  <a href="#icon-1" aria-controls="icon-1" data-toggle="tab">
    <img id="icon1-change" src="{{asset('images/icon-1-fade.png')}}" alt="" draggable="false" style="width:45%" onmouseover="icon1(this)" onmouseout="icon1out(this)" id="icon1-change" onclick="icon1in(this)"></a>
    <h3>Ecological Deficit/Reserve</h3>
</div>

<div class="w3-quarter ad-img-hover slideanim">
<a href="#icon-2" aria-controls="icon-2" data-toggle="tab"> 
<img onmouseover="icon2(this)" src="{{asset('images/icon-2-fade.png')}}" alt="" draggable="false" style="width:45%" onmouseout="icon2out(this)" id="icon2-change" onclick="icon2in(this)">
  </a>
  <h3>Total Ecological Footprint</h3>
</div>

<div class="w3-quarter ad-img-hover slideanim">
  <a href="#icon-3" aria-controls="icon-3" data-toggle="tab">
    <img src="{{asset('images/icon-3-fade.png')}}" alt="" draggable="false" style="width:53%;" onmouseover="icon3(this)" onmouseout="icon3out(this)" id="icon3-change" onclick="icon3in(this)"></a>
    <h3>Ecological Footprint Per Capita</h3>
</div>

<div class="w3-quarter ad-img-hover slideanim">
  <a href="#icon-4" aria-controls="icon-4" data-toggle="tab">
  <img src="{{asset('images/icon-4-fade.png')}}" alt="" draggable="false" style="width:45%" onmouseover="icon4(this)" onmouseout="icon4out(this)" id="icon4-change" onclick="icon4in(this)">
    </a>
  <h3>Total Biocapacity </h3>
</div>
</div>

<div class="container slideanim">
  <div class="panel panel-success">
    <div class="panel-body">
      <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="icon-1">
            <div class="col-md-6">
              <div class="w3-panel w3-green row">
                <h4>COUNTRIES WITH BIOCAPACITY RESERVE</h4>
                <p>PERCENTAGE THAT BIOCAPACITY EXCEEDS ECOLOGICAL FOOTPRINT</p>
                <hr>
                <div class="panel panel-primary" style="color: #111!important;background-color: lightgreen; box-shadow: inset 0 0 5px 1px grey;">
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
                <div class="panel panel-default" style="color: #111!important;background-color: #f44242; box-shadow: inset 0 0 5px 1px grey;">
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
                <div class="panel panel-primary" style="color: #111!important; box-shadow: inset 0 0 5px 1px grey;
                ">
                <ul style="list-style: none; background-color:orange; padding: 0; height: 400px; overflow-y: scroll;">
                @include('footprint.footprint1')
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
                <div class="panel panel-primary" style="color: #111!important;background-color:#f9e25e; box-shadow: inset 0 0 5px 1px grey;">
              <ul style="list-style: none; padding: 0; height: 400px; overflow-y: scroll;">
                      @include('footprint.footprint2')
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
                <div class="panel panel-primary" style="color: #111!important;background-color: lightgreen; box-shadow: inset 0 0 5px 1px grey;">
              <ul style="list-style: none; padding: 0; height: 400px; overflow-y: scroll;">
              @include('footprint.footprint3')
              </ul>
            </div>
          </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>




