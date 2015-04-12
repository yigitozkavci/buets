<!-- Heading Row -->
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
<div class="row">
    <div class="col-xs-8 map-wrapper">
        <div id="map-canvas" style="width:100%; height:600px;"></div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var map = new google.maps.Map();
        }
    </script>
    <script>
    var base_url = document.getElementById("base_url").value;
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(41.083923, 29.052905),
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        var events = <?php echo json_encode($events); ?>;
        for(var i = 0; i<events.length; i++){

            var icon = {
            url: base_url+"assets/img/logos/"+events[i].logo_name+".png", // url
            scaledSize: new google.maps.Size(70, 70), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
            };

            var coordinates = events[i].place.coordinates;
            var Lat = parseFloat(coordinates.split(", ")[0]);
            var Lng = parseFloat(coordinates.split(", ")[1]);
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(Lat, Lng),
                icon:icon,
                map: map,
                clickable: true,
                size: new google.maps.Size(20, 20)
            });
            marker.info = new google.maps.InfoWindow({
              content: "<img style='width:50px;' src='"+base_url+"assets/img/logos/"+events[i].logo_name+".png"+"'><h1>"+events[i].name+"</h1><p>"+events[i].description+"</p><hr><i class='fa fa-clock-o'> "+events[i].start_date
            });
            setTimeout(function () { marker.info.close(); }, 5000);
            google.maps.event.addListener(marker, 'click', function() {
              this.info.open(map, this);
            }); 
        }
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- /.col-md-8 -->
    <div class="col-xs-4">
        <div class=".b-events"></div>
        <ul class="events">
            <?php foreach($events as $event){ ?>
                <li class="event">
                    <img class="event-logo" src="assets/img/logos/<?php echo $event['logo_name']; ?>.png" alt="">
                    <h2> <?php echo $event['name']; ?></h2>
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
                            <i class="fa fa-globe"><a href="#"> <?php echo $event['url']; ?></a></i>
                        </div>
                        <div class="pull-right organizator">
                            <?php echo $event['organizator']['name']; ?> Tarafından Oluşturuldu.
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
            <?php } ?>
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
                    <input type="submit" class="btn btn-orange" name="submit">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

            