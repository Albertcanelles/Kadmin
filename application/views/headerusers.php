<div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text"></span><span class="glyphicons glyphicons-music">BMMS Jesús</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
               
                <ul class="nav navbar navbar-top-links navbar-right mbn">

                    <li class="dropdown topbar-user"><a data-hover="dropdown" class="dropdown-toggle"><span class="hidden-xs">
                    <?$sesio = $this->session->userdata('logged_in');
                    $noom = $sesio['username'];
                    echo $noom; ?>
                    </span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="<?php echo base_url('index.php/welcome/vistaperfil');?>"><i class="fa fa-user"></i>Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url('index.php/home/logout');?>"><i class="fa fa-key"></i>Sortir</a></li>
                        </ul>
                    </li>
     
                </ul>
            </div>
        </nav>
