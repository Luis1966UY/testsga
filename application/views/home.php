<?php $this->load->view('partials/header'); ?>
</head>
<body>
<?php $this->load->view('partials/menu'); ?>
<!-- Right Panel -->
        <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"><img src="assets/images/logo-sga-soft.jpg"></div>
                            <div class="card-body card-block" style="text-align: center; padding-top: 200px; padding-bottom: 200px;">
                                <h1 style="font-size: 5em; color: #6BAA35;">Sistema de gerenciamento <br>de Pedidos by <span style="font-weight: bolder;">SGA</span>Soft</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
<?php $this->load->view('partials/rodape'); ?>
    </div>
    <!-- /#right-panel -->
<?php $this->load->view('partials/footer'); ?>    
</body>
</html>