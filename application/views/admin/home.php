<div class="row">
	<div class="col-xs-12">
		<h1>Etkinlikler</h1>
		<a href="<?php echo base_url(); ?>admin/add_event"><div class="pull-left btn btn-orange">Etkinlik Ekle</div></a>
		<div class="clearfix"></div>
		<ul class="events" style="margin-top:15px;">
			<?php foreach($events as $event){ ?>
	            <li class="event">
	                <img class="event-logo" src="<?php echo base_url(); ?>assets/img/logos/exit.png" alt="">
	                <h2><?php echo $event['name']; ?></h2>
					<a href="<?php echo base_url(); ?>admin/deleteEvent/<?php echo $event['id']; ?>">
						<i class="fa fa-trash-o fa-2x pull-right" style="color:orange;"></i>
					</a>
					<a href="<?php echo base_url(); ?>admin/editEvent/<?php echo $event['id']; ?>">
						<i class="fa fa-pencil-square-o fa-2x pull-right" style="color:orange;"></i>
					</a>
	                <div class="clearfix"></div>
	                <div class="details">
	                    <br>
	                    <p><?php echo $event['description']; ?></p>
	                    <hr>
	                    <div class="pull-left date">
	                        <i class="fa fa-clock-o"></i>
							<?php echo $event['start_date']; ?> ->
							<?php echo $event['end_date']; ?>
	                        <br>
	                        <i class="fa fa-globe"><a href="#"> compec.boun.edu.tr/exit15</a></i>
	                    </div>
	                    <div class="pull-right organizator">
	                        <?php echo $event['organizator']['name']; ?> Tarafından Oluşturuldu.
	                    </div>
	                    <div class="clearfix"></div>
	                </div>
	                <a href="<?php echo base_url(); ?>deleteEvent/<?php echo $event['id']; ?>"></a>
	            </li>
	        <?php } ?>
		</ul>
	</div>
</div>