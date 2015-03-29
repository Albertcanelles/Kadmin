<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forms | Forms</title>
    <?php include 'scripts.php'; ?>
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
                            Gestió de Videos</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Inici</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Forms</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Gestió de Videos</li>
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
                                       <div class="panel panel-blue" style="background:#fff;">
                                            <div class="panel-heading">
                                                Videos</div>
                                            <div class="panel-body pan">
                                            
                                                <form action="insertvideos" method="POST">
                                                <div class="form-body pal">
                                                    <div class="row">
                                                       <div class="col-lg-10">
                                                    
                                                    <div class="form-group mbn">
                                                       
                                                        <div class="input-icon right">
                                                            <i class="fa fa-font"></i>
                                                            <input id="inputSubject" type="text" placeholder="Nom" name="Nom" class="form-control" /></div>
                                                    </div>
                                                 
                                                    <hr />
                                                    <div class="input-icon right">
                                                            <i class="fa fa-globe"></i>
                                                            <input id="inputSubject" type="text" placeholder="Direccio del YouTube" name="Link" class="form-control" /></div>
                                                    <hr />
                                                    <div class="form-group mbn">
                                                        <textarea rows="5" placeholder="Algun detall a destacar del video?" name="descripcio" class="form-control"></textarea></div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">
                                                        Acceptar</button>
                                                </div>
                                                <?php echo form_close();?>
                                                 <?php if($this->session->flashdata('success_upload'));?>
                                                    <div> 
                                                    <?php echo $this->session->flashdata('success_upload');?>
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
                <th>Nom</th>
                <th>Link</th>
                <th>Accions</th>
                
            </tr>
        </thead>
        <tbody>  
            <?php foreach($this->_ci_cached_vars as $index => $llistarvideos){ ?>
            <tr>
                <td><?php echo $llistarvideos['id_video']; ?></td>
                <td><?php echo $llistarvideos['Nomvideo']; ?></td>
                <td><?php echo $llistarvideos['link']; ?></td>
                <td>
                    <a href='<?php echo base_url()?>index.php/welcome/updateVideos/<?php echo $llistarvideos['id_video']; ?>'>
                        <button type="button" class="btn btn-warning btn-sm">
                            <span class="glyphicon glyphicon-pencil"></span> 
                        </button>
                    </a>&nbsp;
                    <a href='<?php echo base_url()?>index.php/welcome/eliminarVideos/<?php echo $llistarvideos['id_video']; ?>'  onclick="return confirm('Estas segur que vols eliminar aquest vídeo?);">
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
</body>
</html>
