<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forms | Forms</title>
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
            
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
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
                        <li class="active">Gestió de Assajos</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                <?php echo validation_errors(); ?>
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
                                    <div class="col-lg-4">
                                        <div class="panel panel-grey">
                                            <div class="panel-heading">
                                               Assajos</div>
                                            <div class="panel-body pan">
												
                                                <form action="insertarassajs" method="POST">
                                                <div class="form-body pal">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon">
                                                                    <i class="fa fa-bell fa-fw"></i>
                                                                    <input id="inputFirstName" type="text" placeholder="Assajs" name="Assajs" class="form-control" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon">
                                                                    <i class="fa fa-calendar"></i>
                                                                    <input  type="text" id="datetimepicker" placeholder="Dia i Hora" name="Diahora" class="form-control" /></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <hr />
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon">
                                                                    <i class="fa fa-globe"></i>
                                                                    <input id="inputEmail" type="text" placeholder="Lloc" name="Lloc" class="form-control" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-icon">
                                                                    <i class="fa fa-tasks fa-fw"></i>
                                                                    <input id="inputPhone" type="text" placeholder="Proxima Actuacio" name="proxact" class="form-control" /></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                   
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">Acceptar</button>
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
                <th>Assaigs</th>
                <th>Dia i Hora</th>
                <th>Lloc</th>
                <th>Pròxima Actuació</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>  
             <?php foreach($this->_ci_cached_vars as $index => $llistarassajos){ ?>
            <tr>
                <td><?php echo $llistarassajos['id_assajs']; ?></td>
                <td><?php echo $llistarassajos['Assajs']; ?></td>
                <td><?php echo $llistarassajos['DiaHora']; ?></td>
                <td><?php echo $llistarassajos['Lloc']; ?></td>
                <td><?php echo $llistarassajos['ProxActuacio']; ?></td>  
                <td>
                    <a href='<?php echo base_url()?>index.php/welcome/updateAssaigs/<?php echo $llistarassajos['id_assajs']; ?>'>
                        <button type="button" class="btn btn-warning btn-sm">
                            <span class="glyphicon glyphicon-pencil"></span> 
                        </button>
                    </a>
                    <a href='<?php echo base_url()?>index.php/welcome/eliminarAssajos/<?php echo $llistarassajos['id_assajs']; ?>'  onclick="return confirm('Confirmació. Estas segur que vols eliminar aquest assaigs?');">
                        <button type="button" class="btn btn-danger btn-sm">
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
