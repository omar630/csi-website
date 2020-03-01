@extends('layouts.app')
@section('content')
<section>
<div class="example1" >
<a href="####">
<h3><b>WelCome To Cmrec-Csi...without change there is no innovation.</b></h3>
</a>
</div>
</section>
<section style="padding-top:0px;">  
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('/assets/inc/images/background1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="bounceInRight animated" style="animation-delay:1s">First slide label</h2>
          <h3 class="rotateIn animated" style="animation-delay:2s">hello world this is kishore.this is first slide.</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('/assets/inc/images/background1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="fadeInRight animated" style="animation-delay:1s">Second slide label</h2>
          <h3 class="bounceInDown animated" style="animation-delay:2s">hello world,this is omer,this is second slide.</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('/assets/inc/images/background1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="rotateIn animated" style="animation-delay:1s">Third slide label</h2>
          <h3 class="rotateInUpLeft animated" style="animation-delay:2s">hello world.this is the last slide.</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</section>
<br>
<br>
<section>
  
<div class="container2" style="font-size:100%;">
  
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home" ><font size="5px" >MISSION</font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1"><font size="5px" >VISSION</font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2"><font size="5px" >ABOUT<font></a>
    </li>
  </ul>

  <!-- Tab panes -->
  
  <div class="tab-content" style="weight=bold;" >
    <div id="home" class="container2 tab-pane active"   data-aos-duration="1500"><br>
      <ul  class="text1 " data-animate-effect="fadeInLeft" >
                                           <li><font size="5px" >To Be Recognized As A Premier Institution In Offering Value Based and
                                              Futuristic Quality Education To Meet The Technological Need Of The Socity.</font></li>
                                       <li><font size="5px" > To Impart Technical Education Of The Highest Standards, Producing Technically
                                            Competent Confident and Socially Responsible Engineers.</font></li>
                                        </ul>
    </div>
    <div id="menu1" class="container2 tab-pane fade" ><br>    
      <ul style="color:black" class="text1 " >  
                                        <li><font size="5px" > To Impact The Values Based Quality Technical Education Through Innovative Ideas. </font></li>
                                         <li><font size="5px" >To Continuously Produce Employable Technical Graduates With Advanced Technical
                                          Skills To Meet The Current and Future Technological Needs Of The Society.</font></li>
                                          <li><font size="5px" >To Prepare The Graduates For Higher Learning With Emphasis On Academic and
                                          Industrial Research.</font></li>
                                          
                                       </ul>
      
  </div>
    <div id="menu2" class="container2 tab-pane fade" ><br>
      
      <ul style="color:black" class="text1 " data-animate-effect="fadeInLeft">  
        <li><font size="5px" > To Impact The Values Based Quality Technical Education Through Innovative Ideas. </font></li>
        <li><font size="5px" >To Continuously Produce Employable Technical Graduates With Advanced Technical
                            Skills To Meet The Current and Future Technological Needs Of The Society.</font></li>
        <li><font size="5px" >To Prepare The Graduates For Higher Learning With Emphasis On Academic and
                                          Industrial Research.</font></li>  
      </ul>
  
    </div>
  </div>
</div>
</section>

<section>
<div class="csi">



</div>
</section>
<br>
@endsection
