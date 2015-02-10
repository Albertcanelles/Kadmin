<!DOCTYPE HTML>
<html lang="en-ES">
<meta charset="utf-8">
    <head>
          <title>Administració</title>
        <meta http-equiv="x-ua-compatible" content="IE=edge" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/snap.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/demo.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/label_better.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.datetimepicker.css');?>"/>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.datetimepicker.js');?>"></script>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.css');?>"/>
        <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
    </head>
    <body>
        <div class="snap-drawers">
            <div class="snap-drawer snap-drawer-left">
                <div>
                    <h4>Menú Principal</h4>
                    <ul>
                        <li><a href="<?php echo base_url('index.php/welcome/concert');?>">Concerts</a></li>
                        <li><a href="<?php echo base_url('index.php/welcome/assajs');?>">Assajos</a></li>
                        <li><a href="<?php echo base_url('index.php/welcome/video');?>">YouTube</a></li>
                        <li><a href="<?php echo base_url('index.php/welcome/partitura');?>">Partitures</a></li>    
			<li><a href="<?php echo base_url('index.php/welcome/membre');?>">Membres</a></li>           
                    </ul>
                </div>
            </div>
            <div class="snap-drawer snap-drawer-right"></div>
        </div>
       
        <div id="content" class="snap-content">
		
            <div id="toolbar">
                <a href="#" id="open-left"></a>
                <h1>Assajos</h1>
            </div>
            <div>
        <br>
        <br>
        <br>
        <br>
        <form class="bl_form" align="center" method="post" action="insertarassajs">
          <p><input type="text"  class="label_better" data-new-placeholder="Assajs" placeholder="Assajs" name="Assajs"></p>
          <p><input type="text"   class="label_better" data-new-placeholder="Lloc" placeholder="Lloc" name="Lloc"  ></p>
          <p><input type="text"   class="label_better" data-new-placeholder="Prox. Actuació" placeholder="Prox. Actuació" name="proxact" ></p>
         <p><input type="text"     class="label_better" id="datetimepicker" placeholder="Dia Hora" name="Diahora" ></p>
         
        <button type="submit" class="btn btn-success">Acceptar</button>
        
        </form>
            </div>
            <br>
            <br>
            <table cellpadding="0" cellspacing="0" border="0" id="botons" class="table table-striped" width="100%" align="center">
        <thead bgcolor=#819FF7>
            <tr>
                <th>ID</th>
                <th>Assajs</th>
                <th>DiaHora</th>
                <th>Lloc</th>
                <th>ProxActuacio</th>
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
                    <a href='/codeigniterusuaris/index.php/usuaris/modificar/<?php echo $llistarassajos['id_assajs']; ?>'>
                        <button type="button" class="btn btn-warning btn-sm">
                            <span class="glyphicon glyphicon-pencil"></span> 
                        </button>
                    </a>&nbsp;
                    <a href='/admin/index.php/welcome/eliminarAssajos/<?php echo $llistarassajos['id_assajs']; ?>'>
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
        <script type="text/javascript" src="<?php echo base_url('assets/js/snap.js');?>"></script>
        <script type="text/javascript">
            var snapper = new Snap({
                element: document.getElementById('content'),
                disable: 'right'
            });
            
        </script>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/demo.css');?>" />
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){
            js=d.createElement(s);
            js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}
            }
            (document,"script","twitter-wjs");</script>   
            <script type="text/javascript">
    $('#datetimepicker').datetimepicker()
    .datetimepicker({value:'Dia Hora',step:10});

    $('#datetimepicker_mask').datetimepicker({
    mask:'9999/19/39 29:59'
});
    </script>   
    </body>
</html>
