<!-- INCLUDE JS,CSS -->
<!-- LIHAT AJA DULU file data.php biar ngerti -->
<script src="../assets/main/js/jquery-2.1.3.min.js"></script>
<script src="rapa.js"></script>
<script src="morris.js"></script>
<link href="morris.css" rel="stylesheet" type="text/css" />

<!-- BIKIN Javascript dulu -->


<div class="row">
<div class="box-header">
<h3 class="box-title"></h3>
</div>
<div class="box-body chart-responsive">
<div id="response"></div>
<div class="chart" id="contoh-chart" style="height: 300px;"></div>
</div>
</div>
<script>
function realisasi(){
            
    $("#response").hide(); //sebagai div response (gaya2 loading image aja :D)
    
    $.ajax({
    url: "data.php", //ambil data dari data.php
    cache: false, //data ga di simpan ke browser
    type: "GET", //tipe sinkron GET, bisa pake post, terserah aja
    dataType: "json", //data tipe nya sebagai json
    timeout:3000, //set 3 detik respon, jika lama berarti gagal
    beforeSend: function() {
                    
            $("#response").show(); //penggaya loading muncul ;D
            $('#response').html("<img src='ajax-loader.gif' />");                       
        },
    success : function (data) {
    
    $("#response").hide(); //penggaya loading dimatikan :(  
     var graph = Morris.Line({ //di sini inisialkan graph sebagai morris chart area
       element: 'contoh-chart', //masukin chart nya nanti di div id=contoh-chart
       data: data, //set data dari callback success function
        xkey: 'y', //ini yang tadi sebagai data x (bawah)
        ykeys: ['jumlah'], //datanya berupa jumlah penjualan tadi, json data
        labels: ['Pendaftar'], //Label data dibikin Penjualan        
        lineColors: ['#2b44d2'], //bikin warna line nya
    });
    }
    });
    }
$(document).ready(function()
{           
    realisasi(); //nah nanti dipanggil di sini
});                
</script>