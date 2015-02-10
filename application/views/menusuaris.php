 <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                   <li  <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/welcomemembers") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/welcome/welcomemembers') ?>"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Inici</span></a></li>
                    <li  <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/vistaconcert") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/welcome/vistaconcert') ?>"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Concerts</span></a></li>
                    <li  <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/vistaassaj") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/welcome/vistaassaj') ?>"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Assajos</span></a></li>
                    <li  <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/vistapartitures") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/welcome/vistapartitures') ?>"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Partitures</span></a></li>
                    <li  <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/vistavideos") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/welcome/vistavideos') ?>"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Videos</span></a></li>
                </ul>
            </div>
        </nav>
