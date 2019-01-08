<?php $this->load->view('partials/header'); ?>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/lib/datatable/dataTables.bootstrap.min.css">

</head>
<body>
<?php $this->load->view('partials/menu'); ?>
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

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Clientes</h1>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Dados do Cliente</strong></div>
                            <div class="card-body card-block">
                                <form action="#" id="frm_cliente" method="post">
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="codigo_cliente" class=" form-control-label">Código</label>
                                                <input type="text" id="codigo_cliente" name="codigo_cliente" placeholder="Escreva o código do cliente" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cpf_cliente" class=" form-control-label">CPF</label>
                                                <input type="text" id="cpf_cliente" name="cpf_cliente" placeholder="CPF" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col-6">
                                           <label for="nome_cliente" class=" form-control-label">Nome</label>
                                            <input type="text" id="nome_cliente" name="nome_cliente" placeholder="Nome completo do cliente" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="email_cliente" class=" form-control-label">E-mail</label>
                                                <input type="text" id="email_cliente" name="email_cliente" placeholder="e-mail" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-6">
                                            <div class="col col-md-3"><label class=" form-control-label">Sexo</label></div>
                                            <div class="col col-md-9">
                                                <div class="form-check-inline form-check">
                                                    <label for="sexo1" class="form-check-label ">
                                                        <input type="radio" id="sexo1" name="sexo_cliente" value="F" class="form-check-input">F
                                                    </label>&nbsp;&nbsp;
                                                    <label for="sexo2" class="form-check-label ">
                                                        <input type="radio" id="sexo2" name="sexo_cliente" value="M" class="form-check-input">M
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-actions form-group float-right">
                                                <button type="button" id="btn_envio" class="btn btn-primary btn-sm">Enviar</button>
                                                <button type="reset" class="btn btn-success btn-sm">Limpar</button>
                                            </div>
                                            
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>                    

                </div>
                <!-- row -->

                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Lista de clientes</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td align="center"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></td>
                                            <td align="center"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                        </tr>

                                    </tbody>
                                </table>
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

    <script src="<?php echo base_url(); ?>assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table').DataTable();
      } );
    </script>  

    <script>
        $(document).ready(function(){
            $("#btn_envio").click(function(){
                    $.ajax({
                        type: "post",
                        data: $("#frm_cliente").serialize(),
                        url: <?php echo base_url(); ?>'/cliente/update_variac',
                        success: function(data_var)
                        {
                            if(data_var){
                              ok = 1;
                              for (var i = 1; i <= num_opcoes; i++) {
                                id_var_opc = $("#id_var_opc"+i).val();
                                nome_opc = $("#nome_opcao"+i).val();
                                
                                ordem_opc = i;
                                
                                $.ajax({
                                  type: "post",
                                  data: {id_var_opc:id_var_opc, variacoes_id:id_var, nome_opcao:nome_opc, ordem_opcao:ordem_opc},
                                  url: baseurl+'core_loja/home/update_variac_opc',
                                  success: function(data_opc)
                                  {
                                    if(data_opc == 0){
                                      ok = 0;  
                                    }
                                    
                                  }
                                });
                              }
                            }
                            location.href = baseurl+"core_loja/home/admin_variacoes"
                          }
                        });
                    });
        });

    </script> 
</body>
</html>