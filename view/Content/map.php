<!--Map-->
<div class="container-fluid">
    <div class="row mt-3 mb-3">
        <div class="col-md-5 offset-md-3 col-sm-8 offset-sm-2 col-10 offset-1 box-principal map" id="map"> 
        </div>
        <div class="col-md-2 offset-md-1 box-principal">
        <h2>Data</h2>
        <?php
        $default1="1";
        $default2="1";
        $mv = new controller();
        $show= $mv -> Map();
        echo "$show[0]  <br>";
        echo "$show[1]  <br>";
        echo "$show[2]  <br>";
        echo "$show[3]  <br>";
        if ($_GET) {
            $default1=$show[1];
            $default2=$show[2];
       }
        
        ?>
        </div>
    </div>
</div>


<script>
  /*For API*/
  API()

function API()
{
  var def1 = '<?php echo $default1;?>';
  var def2 = '<?php echo $default2;?>';
  if(def1!="1")
  {
 var map = new ol.Map({
   target: 'map',
   layers: [
     new ol.layer.Tile({
       source: new ol.source.OSM()
     })
   ],
   view: new ol.View({
     center: ol.proj.fromLonLat([Number(def2),Number(def1), ]),
     zoom: 4
   })
 });
  }
  else{
    var map = new ol.Map({
   target: 'map',
   layers: [
     new ol.layer.Tile({
       source: new ol.source.OSM()
     })
   ],
   view: new ol.View({
     center: ol.proj.fromLonLat([-2.3522,45.8566 ]),
     zoom: 4
   })
 });

  }

}

</script>