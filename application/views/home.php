<section id="main">
    <div class="hidden-xs">
    	<!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="col-xs-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">
                            <img src="http://placehold.it/150x50&text=Logo" alt="">
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">
        
            <!-- Heading Row -->
            <div class="row">
                <div class="col-xs-6 map-wrapper">
                    <img class="img-responsive" src="http://placehold.it/900x700" style="height:100%;" alt="">
                </div>
                <!-- /.col-md-8 -->
                <div class="col-xs-6">
                    <div class=".b-events"></div>
                    <ul class="events">
                        <?php for($i = 0; $i<15; $i++): ?>
                            <li class="event">
                                <img class="event-logo" src="assets/img/logos/exit.png" alt="">
                                <h2> EXIT Bilişim Etkinliği</h2>
                                <div class="clearfix"></div>
                                <div class="details">
                                    <br>
                                    <p>Açılımı Expo IT olan EXIT, Boğaziçi Üniversitesi’nde son 5 yıldır
                                    CompeC tarafından yapılan bir bilişim etkinliği ve tek bilişim fuarıdır.
                                    Amacı, Türkiye’nin dört bir yanından gelen üniversite öğrencilerini bilişim
                                    ve teknolojiyle tanıştırmak, yakınlaştırmak, onları yeniliklerden haberdar
                                    ederek bir ağ oluşmasını sağlamaktır.</p>
                                    <hr>
                                    <div class="pull-left date">
                                        <i class="fa fa-clock-o"></i> 9-10 Nisan 2015<br>
                                        <i class="fa fa-globe"><a href="#"> compec.boun.edu.tr/exit15</a></i>
                                    </div>
                                    <div class="pull-right organizator">
                                        compec Tarafından Oluşturuldu.
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        <?php endfor; ?>
                    </ul>
                    <div class="a.events"></div>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->

            <hr>

            <!-- Call to Action Well -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="well text-center">
                        This is a well that is a great spot for a business tagline or phone number for easy access!
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- Content Row -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <h2>Heading 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <h2>Heading 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    <a class="btn btn-default" href="#">More Info</a>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->
    </div>
</section>
<div class="visible-xs">
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>
</div>