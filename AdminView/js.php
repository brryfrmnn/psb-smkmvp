

  <!-- jQuery -->
   <script type="text/javascript" src="../assets/admin/dropzone/dropzone.min.js"></script>
  <script type="text/javascript" src="../assets/admin/jquery/jquery.min.js"></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type="text/javascript" src="../assets/admin/jqueryRAF/jquery.requestAnimationFrame.min.js"></script>

  <!-- nanoScroller -->
  <script type="text/javascript" src="../assets/admin/nanoScroller/jquery.nanoscroller.min.js"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="../assets/admin/materialize/js/materialize.min.js"></script>

  <!-- Sortable -->
  <script type="text/javascript" src="../assets/admin/sortable/Sortable.min.js"></script>

  <!--masked telpon -->

  <script type="text/javascript" src="../assets/jquery-input-mask/jquery.inputmask.bundle.min.js"></script>

  <!-- Main -->
  <script type="text/javascript" src="../assets/admin/js/admin.min.js"></script>

  <!--parsley validation -->
  <script type="text/javascript" src="../assets/parsley/parsley.min.js"></script>
  <!--data tables-->
  <script type="text/javascript" src="../assets/dataTables/js/jquery.dataTables.min.js"></script>
  <!--morris chart-->
   <script type="text/javascript" src="../assets/morris/morris.js"></script>
      <script type="text/javascript" src="../assets/morris/rapa.js"></script>

  

  <script type="text/javascript">
      function hapus() {
        return confirm('Yakin akan menghapus data ini????');
      }
  </script>
<?php if (isset($_GET['key'])) {
  
  if ($_GET['key']=="pendaftar.php")
  {?>
    <script>
          $('#pendaftar').DataTable({
            "iDisplayLength": 7,
            "aLengthMenu": [
              [7, 14, 49, 70, -1],
              [7, 14, 49, 70, "all"]
            ],
            "ajax": "ajax/pendaftar.php",
            
            "order": [[ 0, 'asc' ]],
                      "columns": [
                          { 
                              "data": "No",     
                          },
                         
                          { "data": "nama_depan" },
                          
                           { "data": "username" },
                          { "data": "email" },
                          { "data": "status" },
                          { "data": "konf" },
                          { "data": "detail", "width": "240px" },

                      ]
          });
      </script> 
<?php 
  }
  elseif ($_GET['key']=="datacalonsiswa.php")
  {?>
    <script>
          $('#datacalonsiswa').DataTable({
            "iDisplayLength": 7,
            "aLengthMenu": [
              [7, 14, 49, 70, -1],
              [7, 14, 49, 70, "all"]
            ],
            "ajax": "ajax/datacalonsiswa.php",
            
            "order": [[ 0, 'asc' ]],
                      "columns": [
                          { "data": "No"},
                          { "data": "noform" },
                          { "data": "nama_depan" },
                          { "data": "nama_belakang" },
                      
                          { "data": "email" },
                          
                          { "data": "telepon" },
                          { "data": "nilai_un" },
                          { "data": "detail", "width": "180px" },

                      ]
          });
      </script> 

<?php 
  }
  elseif ($_GET['key']=="seleksi.php") 
  {?>
    <script>
          $('#seleksi').DataTable({
            "iDisplayLength": 7,
            "aLengthMenu": [
              [7, 14, 49, 70, -1],
              [7, 14, 49, 70, "all"]
            ],
            "ajax": "ajax/seleksi.php",
            
            "order": [[ 0, 'asc' ]],
                      "columns": [
                          { "data": "No"},
                          { "data": "noform" },
                          { "data": "nama_depan" },
                          { "data": "nama_belakang" },
                          { "data": "nilai_un" },

                      ]
          });
      </script> 
<?php 
  }
  elseif ($_GET['key']=="mailbox.php")
  {?>
    <script>
          $('#kontak').DataTable({
            "iDisplayLength": 7,
            "aLengthMenu": [
              [7, 14, 49, 70, -1],
              [7, 14, 49, 70, "all"]
            ],
            "ajax": "ajax/mailbox.php",
            
            "order": [[ 0, 'asc' ]],
                      "columns": [
                          { 
                              "data": "No",     
                          },
                         
                          { "data": "nama" },
                          { "data": "email" },
                          { "data": "telp" },
                          { "data": "pesan" },
                          { "data": "detail", "width": "240px" },

                      ]
          });
      </script> 
<?php 
  }
  elseif ($_GET['key']=="datakonfirmasi.php")
  {?>
    <script>
          $('#konfirmasi').DataTable({
            "iDisplayLength": 7,
            "aLengthMenu": [
              [7, 14, 49, 70, -1],
              [7, 14, 49, 70, "all"]
            ],
            "ajax": "ajax/datakonfirmasi.php",
            
            "order": [[ 0, 'asc' ]],
                      "columns": [
                          { 
                              "data": "No",     
                          },
                         
                          { "data": "nama" },
                           { "data": "username" },
                          { "data": "bank" },
                          { "data": "rek" },
                          { "data": "atasnama" },
                          { "data": "tglkonfirmasi" },

                          { "data": "detail", "width": "100px" },

                      ]
          });
      </script> 
<?php 
  }
  elseif ($_GET['key']=="dokumencalonsiswa.php")
  {?>
    <script>
          $('#dokumen').DataTable({
            "iDisplayLength": 7,
            "aLengthMenu": [
              [7, 14, 49, 70, -1],
              [7, 14, 49, 70, "all"]
            ],
            "ajax": "ajax/dokumencalonsiswa.php",
            
            "order": [[ 0, 'asc' ]],
                      "columns": [
                          { 
                              "data": "No",     
                          },
                         
                          { "data": "nama" },
                           { "data": "skhundepan" },
                          { "data": "skhunbelakang" },
                          { "data": "akte" },
                          { "data": "foto" },
                  

                          { "data": "aksi", "width": "100px" },

                      ]
          });
      </script> 
<?php 
  }
  elseif ($_GET['key']=="pembelianformulir.php") 
  {?>
      <script>
      function realisasi(){
            
        $("#response").hide(); //sebagai div response (gaya2 loading image aja :D)
        
        $.ajax({
          url: "ajax/datapembelianformulir.php", //ambil data dari data.php
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
             element: 'pembelianformulir', //masukin chart nya nanti di div id=contoh-chart
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
    <?php 
  }
  elseif ($_GET['key']=="laporanditerima.php") { ?>
    <script>
      function realisasi(){
            
        $("#response").hide(); //sebagai div response (gaya2 loading image aja :D)
        
        $.ajax({
          url: "ajax/laporanditerima.php", //ambil data dari data.php
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
             element: 'laporanditerima', //masukin chart nya nanti di div id=contoh-chart
             data: data, //set data dari callback success function
              xkey: 'y', //ini yang tadi sebagai data x (bawah)
              ykeys: ['jumlah'], //datanya berupa jumlah penjualan tadi, json data
              labels: ['Calon Siswa Diterima'], //Label data dibikin Penjualan        
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

  <?php
  }
  elseif ($_GET['key']=="laporantidakditerima.php") { ?>
    <script>
      function realisasi(){
            
        $("#response").hide(); //sebagai div response (gaya2 loading image aja :D)
        
        $.ajax({
          url: "ajax/laporantidakditerima.php", //ambil data dari data.php
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
             element: 'laporantidakditerima', //masukin chart nya nanti di div id=contoh-chart
             data: data, //set data dari callback success function
              xkey: 'y', //ini yang tadi sebagai data x (bawah)
              ykeys: ['jumlah'], //datanya berupa jumlah penjualan tadi, json data
              labels: ['Calon Siswa Tidak Diterima'], //Label data dibikin Penjualan        
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

  <?php
  }

} ?>
      

   
