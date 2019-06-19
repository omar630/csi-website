@include('layouts.app')

<body>
    <section id="logo">
        <h1 style="color:white;text-align:center;padding-top:10px;">CMREC-CSI</h1>
    </section>
    @include('navbar')
    <div class="container" style="margin-top:-15px;margin-bottom:-15px;">
        <marquee class="navbar">
            <h2>welcome to cmrec-csi website...without change there is no innovation.<h2>
        </marquee>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="column">&nbsp;</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"> </div>
            <div class="col-md-7">
                <div id="csi_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="http://www.csi-india.org/images/homepage/img3.png">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://www.csi-india.org/images/homepage/img3.png">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#csi_slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#csi_slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="list-group">
                    <a href="****" class="list-group-item list-group-item-action active"
                        style="background:#14c0dc !important;border:#dc143c !important">
                        <h4 style="font-size:22px;"> LATEST NEWS</h4>
                    </a>
                    <dl id="ticker">
                        <dt>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6"><img src="" style="width:100px;height:100px;"></div>
                                    <div class="col-md-6"><span></span></div>
                                </div>
                            </div>
                        </dt>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="col-md-1"> </div>
        </div>
        <div class="row">
            <div class="col-md-1"> </div>
            <div class="col-md-10">
                <!--div class="pimg1">
                          <div class="ptext"><span class="border">
                              Image Text
                            </span></div>
                            </div-->
                <section>
                    <h1 style="text-decoration: underline;text-align:justify;padding: 0px 15px 0px 0px;color:#164D74;">
                        Vision<h1>
                            <small>
                                <ul style="color:black">
                                    <li> To be recognized as a premier institution in offering value based and
                                        futuristic quality education to meet the technological need of the socity.</li>
                                    <li> To Impart technical education of the highest standards, producing technically
                                        competent confident and socially responsible engineers.</li>
                                </ul>
                            </small>
                            <h1
                                style="text-decoration: underline;text-align:justify;padding: 0px 15px 0px 0px;color:#164D74;">
                                Mission</h1>
                            <small>
                                <ul style="color:black">
                                    <li> To impact the values based quality technical education through innovative
                                        ideas. </li>
                                    <li>To continuously produce employable technical graduates with advanced technical
                                        skills to meet the current and future technological needs of the society.</li>
                                    <li>To prepare the graduates for higher learning with emphasis on academic and
                                        industrial research.</li>
                                </ul>
                            </small>
                </section>
                <br>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
