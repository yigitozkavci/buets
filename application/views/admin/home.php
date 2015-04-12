<div class="row">
	<div class="col-xs-12">
		<h1>Etkinlik Ekle</h1>
		<a href="<?php echo base_url(); ?>admin/add_event"><div class="pull-left btn btn-orange">Etkinlik Ekle</div></a>
		<ul class="events">
			<?php foreach($events as $event){ ?>
	            <li class="event">
	                <img class="event-logo" src="<?php echo base_url(); ?>assets/img/logos/exit.png" alt="">
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
	                <a href="<?php echo base_url(); ?>deleteEvent/<?php echo $event['id']; ?>"></a>
	            </li>
	        <?php } ?>
		</ul>
	</div>
</div>