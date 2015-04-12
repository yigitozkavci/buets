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

<div class="row">
    <div class="col-xs-12">
        <div class="well">
            <form action="" method="post">
                <div class="col-xs-3">
                    <div class="well">
                        <b>Etiketler</b><br>
                        <?php foreach($tags as $tag){ ?>
                            <input type="checkbox" name="tags[]"> <?php echo $tag['name']; ?><br>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xs-3">
                    <b>Tarih</b><br>
                    <input type="text" class="datepicker" name="start_date" placeholder="Başlangıç">
                    <input type="text" class="datepicker" name="end_date" placeholder="Bitiş" style="margin-top:5px;">
                </div>
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-orange">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

            