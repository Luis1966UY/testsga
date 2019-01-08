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
                                <h1>Pedidos por cliente</h1>
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
                            <div class="card-header"><strong>Dados do Pedido</strong></div>
                            <div class="card-body card-block">
                                <form action="#" method="post">
                                    <input type="hidden" name="pedido_id" id="pedido_id" value="" />
                                    <div class="row form-group">

                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="col col-md-3"><label for="cliente_id" class=" form-control-label">Cliente</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select name="cliente_id" id="cliente_id" class="form-control">
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-12">
                                            <div class="form-actions form-group float-right">
                                                <button type="button" id="btn_form" class="btn btn-primary btn-sm">Enviar</button>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"><strong>Lista de Pedidos</strong></div>
                            <div class="card-body card-block"> 
                                <table class="table table-striped" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Código</th>
                                            <th width="25%">Data</th>
                                            <th width="25%">Forma Pagamento</th>
                                            <th width="10%" style="text-align: right;">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show_data">
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="text-align: right;">
                            <div class="card-header"><strong>Total</strong></div>
                            <div class="card-body card-block">
                                <div class="col-3 offset-9">
                                    <h2><span id="total_pedidos"></span></h2>
                                </div>
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

    $(document).ready(function(){
         
        $('#mydata').dataTable();

        load_clientes();
          
        //mostra a lista de pedidos
        $("#btn_form").click(function(){
            var cliente_id = $("#cliente_id").val();

            $.ajax({
                type  : 'POST',
                url   : '<?php echo site_url('xpedidos/pedido_cliente_rel')?>',
                data  : {cliente_id:cliente_id},
                //async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var total = 0;
                    for(i=0; i<data.length; i++){
                        date_pedido = data[i].data_pedido;
                        date_pedido = date_pedido.substring(8,10)+"/"+date_pedido.substring(5,7)+"/"+date_pedido.substring(0,4);
                        html += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data[i].codigo_pedido+'</td>'+
                                '<td width="25%">'+date_pedido+'</td>'+
                                '<td width="25%">'+data[i].forma_pagamento_pedido+'</td>';
                                
                                
                        pedido_id = data[i].pedido_id;
                        $.ajax({
                            type  : 'post',
                            url   : '<?php echo site_url('xpedidos/totaliza_pedido')?>',
                            data  : {pedido_id:pedido_id},
                            dataType : 'json',
                            async : false,
                            success : function(data_pedido){
                                total += data_pedido;
                                html += '<td style="text-align: right;">'+data_pedido.toLocaleString("pt-BR", { style: "currency" , currency:"BRL"})+'</td>'+
                                '</tr>';
                            }
                        });
                    }

                    $('#show_data').html(html);
                    $("#total_pedidos").html(total.toLocaleString("pt-BR", { style: "currency" , currency:"BRL"}));
                }
 
            });
        });


        function load_clientes() {
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('xpedidos/client_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].cliente_id+'">'+
                                data[i].nome_cliente+
                                '</option>';
                    }

                    $('#cliente_id').html(html);
                }

            });
        }
 
    });

 
</script>

</body>
</html>