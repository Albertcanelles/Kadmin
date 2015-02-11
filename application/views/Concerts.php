<!DOCTYPE html>
<html lang="en">
<head>
    <title>Banda de Jesús Concerts</title>
    <?php include 'scripts.php'; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.datetimepicker.css');?>"/>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.datetimepicker.js');?>"></script>
</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->

        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <?php include 'header.php' ?>
            <!--BEGIN MODAL CONFIG PORTLET-->
            
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
              <?php include 'menu.php' ?>
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Forms</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Inici</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Forms</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Gestió de Concerts</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                <div class="col-md-12">
                                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4">  <div class="panel panel-grey">
                                            <div class="panel-heading">
                                                Concerts</div>
                                            <div class="panel-body pan">
												
                                                <?php echo validation_errors(); ?>
                                                <form action="insertarconcert" method="POST">
                                                <div class="form-body pal">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon">
                                                                    <i class="fa fa-user"></i>
                                                                    <input id="inputFirstName" type="text" placeholder="Concert" name="Concert" class="form-control" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon">
                                                                    <i class="fa fa-user"></i>
                                                                    <input  type="text" placeholder="Dia i Hora" id="datetimepicker" name="Diahora" class="form-control" /></div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon">
                                                                    <i class="fa fa-envelope"></i>
                                                                    <input id="inputEmail" type="text" placeholder="Lloc" name="Lloc" class="form-control" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon">
                                                                    <i class="fa fa-phone"></i>
                                                                    <input id="inputPhone" type="text" placeholder="Roba" name="Roba" class="form-control" /></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="radio">
														<label>PassaCarrers</label> </br>
														</br>
													  <label>
														<input type="radio" name="optionsRadios" id="optionsRadios1" value="Si" checked="">
														Si
													  </label>
													 <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="No">
                                                        No
                                                      </label>
													</div> </br>
													<div class="radio">	  
													</div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" name="insertConcert" class="btn btn-primary">Enviar</button>
                                                    <button type="reset" class="btn btn-primary">Netejar</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </div>  
                                                                         
                                </div>
                                 <div class="row">
                                                        <div class="col-md-7">
    <br>
<!--Aquesta es la taula on es mostren les dades -->
  <table class="display" id="taula" border="1" bordercolor="#000000" width="100%" cellpadding="3" cellspacing="3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Concert</th>
                <th>Dia i Hora</th>
                <th>Lloc</th>
                <th>Roba</th>
                <th>PassaCarrers </th>
                <th>Accions</th>
                
            </tr>
        </thead>
        <tbody>  
        <!--Llisto les dades amb un for each -->
            <?php foreach($this->_ci_cached_vars as $index => $llistarconcert){ ?>
            <tr>
                <td><?php echo $llistarconcert['id_concert']; ?></td>
                <td><?php echo $llistarconcert['Concert']; ?></td>
                <td><?php echo $llistarconcert['DiaHora']; ?></td>
                <td><?php echo $llistarconcert['Lloc']; ?></td>
                <td><?php echo $llistarconcert['Roba']; ?></td>
                <td><?php echo $llistarconcert['Passcalles']; ?></td>  
                <td>
                    <a href='<?php echo base_url()?>index.php/welcome/updateConcerts/<?php echo $llistarconcert['id_concert']; ?>'>
                        <button type="button" class="btn btn-warning btn-sm">
                            <span class="glyphicon glyphicon-pencil"></span> 
                        </button>
                    </a>
                    <a href='<?php echo base_url()?>index.php/welcome/eliminarConcerts/<?php echo $llistarconcert['id_concert']; ?>' onclick="return confirm('Estas segur que vols eliminar el concert?');">
                        <button type="button" class="btn btn-danger btn-sm eliminar">
                            <span class="glyphicon glyphicon-remove"></span> 
                        </button>
                    </a> 
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</div>                              
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <?php include 'footer.php' ?>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
  <script type="text/javascript">
// Script per a les dates i hores
    $('#datetimepicker').datetimepicker()
    .datetimepicker({value:'Dia Hora',step:10});
    $('#datetimepicker_mask').datetimepicker({
   // mask:'9999/19/39 29:59'
    mask:'39/19/9999 29:59'
});
    </script>  
</body>
</html>
