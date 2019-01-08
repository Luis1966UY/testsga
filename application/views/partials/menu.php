<!-- Left Panel -->
    <?php $uri =  $this->uri->segment(1); ?>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li <?php if($uri == '') {echo " class='active'";}?>>
                        <a href="<?php echo base_url(); ?>"><i class="menu-icon fa fa-laptop"></i>Home</a>
                    </li>

                    <li <?php if($uri == 'cliente') {echo " class='active'";}?>>
                        <a href="<?php echo base_url(); ?>cliente"> <i class="menu-icon ti-user"></i>Clientes </a>
                    </li>
                    <li <?php if($uri == 'produto') {echo " class='active'";}?>>
                        <a href="<?php echo base_url(); ?>produto"> <i class="menu-icon ti-package"></i>Produtos </a>
                    </li>
                    <li <?php if($uri == 'xpedido') {echo " class='active'";}?>>
                        <a href="<?php echo base_url(); ?>xpedido"> <i class="menu-icon ti-notepad"></i>Pedidos </a>
                    </li>

                    <li class="menu-title">RELATÓRIOS</li><!-- /.menu-title -->

                    <li <?php if($uri == 'relpedidos') {echo " class='active'";}?>>
                        <a href="<?php echo base_url(); ?>relpedidos"><i class="menu-icon ti-list"></i>Pedidos</a>
                    </li>

                    <li <?php if($uri == 'relclientes') {echo " class='active'";}?>>
                        <a href="<?php echo base_url(); ?>relclientes"> <i class="menu-icon ti-list-ol"></i>Total por cliente</a>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->