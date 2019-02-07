<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BPPD KOTA BANDUNG</title>
        <link type="text/css" href="<?php echo base_url()?>assets/template/code/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url()?>assets/template/code/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url()?>assets/template/code/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url()?>assets/template/code/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <link type="text/css" href="<?php echo base_url()?>assets/template/code/css/my-app.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo base_url()?>assets/plugin/tinymce/tiny_mce.js"></script>
        <script src="<?php echo base_url()?>assets/template/code/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
          tinyMCE.init({
                   // General options
                   mode : "textareas",
                   theme : "advanced"
          });
        </script>
        <style>
          /* Center the loader */
          #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            /* border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db; */
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid blue;
            border-right: 16px solid green;
            border-bottom: 16px solid red;
            border-left: 16px solid #f3f3f3;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
          }

          @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
          }

          @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
          }

          /* Add animation to "page content" */
          .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
          }

          @-webkit-keyframes animatebottom {
            from { bottom:-100px; opacity:0 }
            to { bottom:0px; opacity:1 }
          }

          @keyframes animatebottom {
            from{ bottom:-100px; opacity:0 }
            to{ bottom:0; opacity:1 }
          }

          #myDiv {
            display: none;
            text-align: center;
          }
        </style>
        <script type="text/javascript">
            var url    = 'http://45.118.112.234:10119/';
            var server = url+'ws/index.php/dashboard/';
            var token  = '<?php echo $this->session->userdata("token"); ?>';
            $(document).ready(function(){
                $("#t_penerimaan").hide();
                $("#t_ketetapan").hide();
             		$("#t_piutang").hide();
                // get jenis pajak
                $.ajax({
                    url: server+"get_jenispajak"+"/"+token,
                    type: "post",
                    success: function (response) {
                        var res = JSON.parse(response);
                        if(res.code==1){
                          $("#pe_jns_pajak").empty();
                          $("#pe_jns_pajak").append('<option value="0" selected disabled>- Pilih -</option>');
                          $.each(res.data, function(key,val){
                            var markup = "<option value="+val.id+">"+val.nama+"</option>";
                            $("#pe_jns_pajak").append(markup);
                          });
                          $("#ke_jns-pajak").empty();
                                      $("#ke_jns-pajak").append('<option value="0" selected disabled>- Pilih -</option>');
                                      $.each(res.data, function(key,val){
                                  var markup = "<option value="+val.id+">"+val.nama+"</option>";
                                      $("#ke_jns-pajak").append(markup);
                              });
                          $("#pi_jns-pajak").empty();
                                      $("#pi_jns-pajak").append('<option value="0" selected disabled>- Pilih -</option>');
                                      $.each(res.data, function(key,val){
                                  var markup = "<option value="+val.id+">"+val.nama+"</option>";
                                      $("#pi_jns-pajak").append(markup);
                              });
                          }
                          else {
                              alert(res.message,'');
                          }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                        alert('Koneksi ke Server Bermasalah','');
                    }
                });
                // get periode
        				$.ajax({
        				    url: server+"get_periode"+"/"+token,
        				    type: "post",
        				    success: function (response) {
        				        var res = JSON.parse(response);
        				        if(res.code==1){
        			               $("#pe_periode").empty();
        			               $("#pe_periode").append('<option value="0" selected disabled>- Pilih -</option>');
        			               $.each(res.data, function(key,val){
        							       var markup = "<option value="+val.id+">"+val.periode+"</option>";
        		            		     $("#pe_periode").append(markup);
        							       });
        			            }
        			            else {
        			                alert(res.message,'');
        			            }
        				    },
        				    error: function(jqXHR, textStatus, errorThrown) {
        				        console.log(textStatus, errorThrown);
        				        myApp.hidePreloader();
        	                 	alert('Koneksi ke Server Bermasalah','');
        				    }
        				});
                // get ketetapan jenis
                $.ajax({
          				    url: server+"get_jenisketetapan"+"/"+token,
          				    type: "post",
          				    success: function (response) {
          				        var res = JSON.parse(response);
          				        if(res.code==1){
          			               $("#ke_jenis").empty();
          			               $("#ke_jenis").append('<option value="0" selected disabled>- Pilih -</option>');
          			               $.each(res.data, function(key,val){
              							   var markup = "<option value="+val.id+">"+val.nama+"</option>";
              		            			$("#ke_jenis").append(markup);
              							   });
          			            }
          			            else {
          			                alert(res.message,'');
          			            }
          				    },
          				    error: function(jqXHR, textStatus, errorThrown) {
          				        console.log(textStatus, errorThrown);
          	              alert('Koneksi ke Server Bermasalah','');
          				    }
        			 });
            });
            function convertToRupiah(angka){
       		    var rupiah = '';
       		    var angkarev = angka.toString().split('').reverse().join('');
       		    for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
       		    return rupiah.split('',rupiah.length-1).reverse().join('');
            	 }
            function proses_penerimaan(){
       	   	  var jns_pajak = $('#pe_jns_pajak').val();
       	   		var periode   = $('#pe_periode').val();
       	   		var ketetapan = $('#pe_tgl_ketetapan').val();
       	   		var bayar 	  = $('#pe_tgl_bayar').val();
              document.getElementById("loader").style.display = "block";
       	      $.ajax({
       				     url: server+"penerimaan"+"/"+token,
       					   type: "post",
       					   data: {jenis_pajak_id:jns_pajak, periode_id:periode, tgl_bayar:bayar, tgl_ketetapan:ketetapan},
       					   success: function (response) {
       					        var res = JSON.parse(response);
       					        if(res.code==1){
                             document.getElementById("loader").style.display = "none";
       				               $("#t_penerimaan").show();
       			                 $("#buat_penerimaan").empty();
       			                 var no = 1;
       					             $.each(res.data, function(key,val){
             										var markup = "<tr><td style='text-align: center;'>"+no+"</td><td style='text-align: center;'>"+val.npwd+"</td><td>"+val.nama_wp+"</td><td style='text-align: center;'>"+val.denda+"</td><td style='text-align: right;'>"+convertToRupiah(Math.round(val.jml_bayar))+"</td></tr>";
             					          $("#buat_penerimaan").append(markup);
             					          no++;
             								});
                            // pagination
                            $('#paging').remove();
                            $('table.paginated').each(function() {
                                  var currentPage = 0;
                                  var numPerPage = 25;
                                  var $table = $(this);
                                  $table.bind('repaginate', function() {
                                      $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
                                  });
                                  $table.trigger('repaginate');
                                  var numRows = $table.find('tbody tr').length;
                                  var numPages = Math.ceil(numRows / numPerPage);
                                  var $pager = $('<div class="pager" id="paging"></div>');
                                  for (var page = 0; page < numPages; page++) {
                                      $('<span class="page-number"></span>').text(page + 1).bind('click', {
                                          newPage: page
                                      }, function(event) {
                                          currentPage = event.data['newPage'];
                                          $table.trigger('repaginate');
                                          $(this).addClass('active').siblings().removeClass('active');
                                      }).appendTo($pager).addClass('clickable');
                                  }
                                  $pager.insertAfter($table).find('span.page-number:first').addClass('active');
                            });
       				          }
       				          else {
                             document.getElementById("loader").style.display = "none";
       				               alert(res.message,'');
       				         }
       					   },
       					   error: function(jqXHR, textStatus, errorThrown) {
       					        console.log(textStatus, errorThrown);
       		              //alert('Koneksi ke Server Bermasalah','');
                        document.getElementById("loader").style.display = "none";
                        alert('Lengkapi form!','');
       					   }
       				});
       	    }
            function proses_ketetapan(){
              var awal 	      = $('#ke_tgl_awal').val();
              var akhir 	    = $('#ke_tgl_akhir').val();
              var j_ketetapan = $('#ke_jenis').val();
              var jns_pajak   = $('#ke_jns-pajak').val();
              var status 	    = $('#ke_status_bayar').val();
              document.getElementById("loader").style.display = "block";
              $.ajax({
                  url: server+"ketetapan"+"/"+token,
                  type: "post",
                  data: {jenis_pajak_id:jns_pajak, jenis_ketetapan_id:j_ketetapan, status_bayar:status, tgl_awal:awal, tgl_akhir:akhir},
                  success: function (response) {
                      var res = JSON.parse(response);
                      if(res.code==1){
                            document.getElementById("loader").style.display = "none";
                            $("#t_ketetapan").show();
                            $("#buat_ketetapan").empty();
                            var no = 1;
                            $.each(res.data, function(key,val){
                            var markup = "<tr><td style='text-align: center;'>"+no+"</td><td style='text-align: center;'>"+val.npwd+"</td><td>"+val.nama_wp+"</td><td>"+val.periode+"</td><td style='text-align: right;'>"+convertToRupiah(Math.round(val.jml_ketetapan))+"</td></tr>";
                              $("#buat_ketetapan").append(markup);
                              no++;
                            });
                            // pagination
                            $('#paging').remove();
                            $('table.paginated').each(function() {
                                  var currentPage = 0;
                                  var numPerPage = 25;
                                  var $table = $(this);
                                  $table.bind('repaginate', function() {
                                      $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
                                  });
                                  $table.trigger('repaginate');
                                  var numRows = $table.find('tbody tr').length;
                                  var numPages = Math.ceil(numRows / numPerPage);
                                  var $pager = $('<div class="pager" id="paging"></div>');
                                  for (var page = 0; page < numPages; page++) {
                                      $('<span class="page-number"></span>').text(page + 1).bind('click', {
                                          newPage: page
                                      }, function(event) {
                                          currentPage = event.data['newPage'];
                                          $table.trigger('repaginate');
                                          $(this).addClass('active').siblings().removeClass('active');
                                      }).appendTo($pager).addClass('clickable');
                                  }
                                  $pager.insertAfter($table).find('span.page-number:first').addClass('active');
                            });
                        }
                        else {
                          document.getElementById("loader").style.display = "none";
                          alert(res.message,'');
                        }
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      console.log(textStatus, errorThrown);
                      // alert('Koneksi ke Server Bermasalah','');
                       document.getElementById("loader").style.display = "none";
                      alert('Lengkapi form!','');
                  }
              });
            }
            function proses_piutang(){
    	   		    var awal 	    = $('#pi_tgl_awal').val();
    	   		    var akhir 	  = $('#pi_tgl_akhir').val();
    	   			  var jns_pajak = $('#pi_jns-pajak').val();
                document.getElementById("loader").style.display = "block";
      	        $.ajax({
      					    url: server+"piutang"+"/"+token,
      					    type: "post",
      					    data: {jenis_pajak_id:jns_pajak, tgl_awal:awal, tgl_akhir:akhir},
      					    success: function (response) {
      					        var res = JSON.parse(response);
      					        if(res.code==1){
                            document.getElementById("loader").style.display = "none";
      				            	$("#t_piutang").show();
      			                $("#buat_piutang").empty();
      			                var no = 1;
      					            $.each(res.data, function(key,val){
          									var markup = "<tr><td style='text-align: center;'>"+no+"</td><td style='text-align: center;'>"+val.npwd+"</td><td>"+val.nama_wp+"</td><td style='text-align: center;'>"+val.periode+"</td><td style='text-align: right;'>"+convertToRupiah(Math.round(val.jml_tagihan))+"</td></tr>";
          					             $("#buat_piutang").append(markup);
          					           	 no++;
          								  });
                            // pagination
                            $('#paging').remove();
                            $('table.paginated').each(function() {
                                  var currentPage = 0;
                                  var numPerPage = 25;
                                  var $table = $(this);
                                  $table.bind('repaginate', function() {
                                      $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
                                  });
                                  $table.trigger('repaginate');
                                  var numRows = $table.find('tbody tr').length;
                                  var numPages = Math.ceil(numRows / numPerPage);
                                  var $pager = $('<div class="pager" id="paging"></div>');
                                  for (var page = 0; page < numPages; page++) {
                                      $('<span class="page-number"></span>').text(page + 1).bind('click', {
                                          newPage: page
                                      }, function(event) {
                                          currentPage = event.data['newPage'];
                                          $table.trigger('repaginate');
                                          $(this).addClass('active').siblings().removeClass('active');
                                      }).appendTo($pager).addClass('clickable');
                                  }
                                  $pager.insertAfter($table).find('span.page-number:first').addClass('active');
                            });
      				            }
      				            else {
                            document.getElementById("loader").style.display = "none";
      				              alert(res.message,'');
      				            }
      					    },
      					    error: function(jqXHR, textStatus, errorThrown) {
      					        console.log(textStatus, errorThrown);
      		              // alert('Koneksi ke Server Bermasalah','');
                        document.getElementById("loader").style.display = "none";
      		              alert('Lengkapi form!','');
      					    }
      					});
    	   	   }
        </script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <?php
                        $q = "SELECT * FROM ref_web";
                        $b = $this->db->query($q)->result();
                        foreach ($b as $hasil) {}
                    ?>
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="dashboard"><?php echo $hasil->nama_web; ?> </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url()?>assets/template/code/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url()?>index.php/login/aksi_logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
