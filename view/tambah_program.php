<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Japfa Foundation">
        <meta name="author" content="japfa">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>SIA - Japfa Foundation</title>

        <!-- Base Css Files -->
        <link href="css/bootstrap.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/ion/css/ionicons.min.css" rel="stylesheet" />
       
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="css/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <script src="js/modernizr.min.js"></script>
        <!-- <style>
  .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
}

.hovereffect img {
  display: block;
  position: relative;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  font-size: 17px;
}

.hovereffect:hover h2 {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
  transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect h2,
.hovereffect p {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
  background-color: transparent;
  margin: 0px;
  padding: 0px;
}

.hovereffect .overlay:before {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 40%;
  height: 60%;
  border: 2px solid #fff;
  content: '';
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,0deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,0deg) scale3d(0,0,1);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
}

.hovereffect p {
  width: 20%;
  text-transform: none;
  font-size: 15px;
  line-height: 2;
}

.hovereffect p a {
  color: #fff;
}

.hovereffect p a:hover,
.hovereffect p a:focus {
  opacity: 0.6;
  filter: alpha(opacity=60);
}

.hovereffect  a i {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  padding: 0px 5px;
}

.hovereffect p a:first-child i {
  -webkit-transform: translate3d(-60px,-60px,0);
  transform: translate3d(-60px,-60px,0);
}

.hovereffect p a:nth-child(2) i {
  -webkit-transform: translate3d(60px,-60px,0);
  transform: translate3d(60px,-60px,0);
}

.hovereffect p a:nth-child(3) i {
  -webkit-transform: translate3d(-60px,60px,0);
  transform: translate3d(-60px,60px,0);
}

.hovereffect p a:nth-child(4) i {
  -webkit-transform: translate3d(60px,60px,0);
  transform: translate3d(60px,60px,0);
}

.hovereffect:hover .overlay:before {
  opacity: 1;
  filter: alpha(opacity=100);
  background-color: rgba(0,0,0,0.2);
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,0deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,0deg) scale3d(1,1,1);
}

.hovereffect:hover p i:empty {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  opacity: 1;
  filter: alpha(opacity=100);
}
    </style> -->
  <style type="text/css">
    .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: #42b078;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 50px 20px;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 20px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.hovereffect:hover img {
  opacity: 0.4;
  filter: alpha(opacity=40);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  overflow: hidden;
  padding: 0.5em 0;
  background-color: transparent;
}

.hovereffect h2:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  content: '';
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(-100%,0,0);
  transform: translate3d(-100%,0,0);
}

.hovereffect:hover h2:after {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(100%,0,0);
  transform: translate3d(100%,0,0);
}

.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

  </style>
   

   
   
   
 <style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 30px;
    right: 100%;
    margin-top: -1px;
}
</style>
 


 
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <?php require_once("header/header.php"); ?>
            
          


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
          <br>
                <div class="content-page" style="min-height: 620px">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
    
                        <!-- Start Widget -->
                       <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Tambah Data Program</h3></div>
                                    <div class="panel-body">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="get" action="#" novalidate>
                                                 <div class="form-group ">

                                                 
                                                    <label for="cemail" class="control-label col-lg-2">Kelompok Program *</label>
                                                   
                                                <div class="col-lg-4">
                                                    <select class="form-control">
                                                        <option>Data Kelompok Program</option>
                                                        <option>Lainnya</option>
                                                        
                                                    </select>
                                                    
                                                </div>


                                                <label for="cemail" class="control-label col-lg-2">Tanggal Mulai *</label>
                                                   
                                                <div class="col-lg-2">
                                                   <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker2">
                                                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div><!-- input-group -->
                                      
                                                    
                                                </div>

                                               
                                        
                                                 </div>

                                                <div class="form-group ">

                                                 
                                                    <label for="cemail" class="control-label col-lg-2">Jenis Program *</label>
                                                   
                                                <div class="col-lg-4">
                                                    <select class="form-control">
                                                        <option>Jenis Program</option>
                                                        <option>Lainnya</option>
                                                        
                                                    </select>
                                                    
                                                </div>


                                                <label for="cemail" class="control-label col-lg-2">Tanggal Akhir *</label>
                                                   
                                                <div class="col-lg-2">
                                                   <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker2">
                                                     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    </div><!-- input-group -->
                                      
                                                    
                                                </div>

                                               
                                        
                                                 </div>


                                                 <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Nama Program *</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control " id="cemail" type="text" name="email" required="" aria-required="true">
                                                    </div>

                                                    <label for="cemail" class="control-label col-lg-2">Pagu Program *</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control " id="cemail" type="text" name="email" required="" aria-required="true">
                                                    </div>
                                                </div>


                                                 <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Departamen *</label>
                                                   
                                                    <div class="col-lg-4">
                                                        <select class="form-control">
                                                            <option>Departemen A</option>
                                                            <option>Lainnya</option>
                                                            
                                                        </select>
                                                        
                                                    </div>

                                                    <label for="cemail" class="control-label col-lg-2">Status Program *</label>
                                                    <div class="col-lg-4">
                                                        <select class="form-control">
                                                            <option>Not Started</option>
                                                            <option>Started</option>
                                                            <option>Finish</option>
                                                        </select>
                                                        
                                                    </div>

                                                </div>

                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Nama Vendor *</label>
                                                    <div class="col-lg-10">
                                                        <select class="form-control">
                                                            <option>Vendor</option>
                                                            <option>Lainnya</option>
                                                            
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Kontak Person *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="cemail" type="email" name="email" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                                                     

                                                 <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">No Telelon/HP *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="cemail" type="email" name="email" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                 <div class="form-group ">
                                                    <label for="cemail" class="control-label col-lg-2">Email*</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control " id="cemail" type="email" name="email" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-success waves-effect waves-light" type="submit">Simpan</button>
                                                        <button class="btn btn-default waves-effect" type="button">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                        </div> <!-- End row -->



                        


                    </div> <!-- container -->
                               
                </div> <!-- content -->

               <?php require_once("header/footer.php"); ?>
</div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


    </div>
        
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>
        


        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="assets/chat/moment-2.2.1.js"></script>
        <script src="assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="assets/flot-chart/jquery.flot.js"></script>
        <script src="assets/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>

        <script src="assets/timepicker/bootstrap-timepicker.min.js"></script>
        <script src="assets/timepicker/bootstrap-datepicker.js"></script>

        <!-- Dashboard -->
        <script src="js/jquery.dashboard.js"></script>

        <!-- Chat -->
        <script src="js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="js/jquery.todo.js"></script>

        <!--form validation-->
        <script type="text/javascript" src="assets/jquery.validate/jquery.validate.min.js"></script>

        <!--form validation init-->
        <script src="assets/jquery.validate/form-validation-init.js"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    
      
      <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

<script>
            jQuery(document).ready(function() {
                    
                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});

                // Date Picker
                jQuery('#datepicker').datepicker({
                  showButtonPanel: true
                });
                jQuery('#datepicker2').datepicker({
                  showButtonPanel: true
                });
                     });
              
        </script>
    
    
    </body>
</html>