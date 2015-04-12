<a href="<?php echo base_url(); ?>admin">&lt; Geri Git</a>
<div class="row">
	<div class="col-xs-12 col-md-6">
		<h1>Etkinlik Ekle</h1>
		<form action="" method="post">
			<div class="form-group">
				İsim: <input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				Açıklama: <input type="text" name="description" class="form-control">
			</div>
			<div class="form-group">
				Organizasyon: 
				<select name="organization_id" class="form-control">
					<?php foreach($organizations as $organization){ ?>
						<option value="<?php echo $organization['id']; ?>"><?php echo $organization['name']; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				Yer: 
				<select name="place_id" class="form-control">
					<?php foreach($places as $place){ ?>
						<option value="<?php echo $place['id']; ?>"><?php echo $place['name']; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				Logo Linki: <input type="text" name="logo_name" class="form-control">
			</div>
			<div class="form-group">
				Başlangıç-Bitiş tarihleri<br>
				<input type="text" class="datepicker" name="start_date" placeholder="Başlangıç">
				<input type="text" class="datepicker" name="end_date" placeholder="Bitiş" style="margin-top:5px;">
			</div>
			<div class="form-group">
				Site Adresi: <input type="text" name="url" class="form-control">
			</div>
			<input type="submit" name="submit_event" class="form-control">
		</form>
	</div>
</div>