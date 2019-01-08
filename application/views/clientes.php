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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"><strong>Dados do Cliente</strong></div>
                            <div class="card-body card-block">
                                <form action="#" id="frm_cliente" method="post">
                                    <input type="hidden" name="cliente_id" id="cliente_id" value="" />
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
                                                <button type="button" id="btn_save" class="btn btn-primary btn-sm">Enviar</button>
                                                <button type="button" id="btn_update" class="btn btn-primary btn-sm" style="display:none">Atualizar</button>
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
                            <div class="card-header"><strong>Lista de Cliente</strong></div>
                            <div class="card-body card-block"> 
                                <table class="table table-striped" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th style="text-align: right;">Acões</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show_data">
                                         
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
    $(document).ready(function(){
        show_client(); //lista todos os clientes
         
        $('#mydata').dataTable();
          
        //mostra a lista de clientes
        function show_client(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('clientes/client_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].codigo_cliente+'</td>'+
                                '<td>'+data[i].nome_cliente+'</td>'+
                                '<td>'+data[i].cpf_cliente+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-codigo_cliente="'+data[i].codigo_cliente+'" data-nome_cliente="'+data[i].nome_cliente+'" data-cpf_cliente="'+data[i].cpf_cliente+'" data-sexo_cliente="'+data[i].sexo_cliente+'" data-email_cliente="'+data[i].email_cliente+'" data-cliente_id="'+data[i].cliente_id+'">Editar</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-cliente_id="'+data[i].cliente_id+'">Eliminar</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //Save product
        $('#btn_save').on('click',function(){
            var codigo_cliente  = $('#codigo_cliente').val();
            var nome_cliente    = $('#nome_cliente').val();
            var cpf_cliente     = $('#cpf_cliente').val();
            var sexo_cliente    = $("input[name='sexo_cliente']:checked").val();
            var email_cliente   = $('#email_cliente').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('clientes/save')?>",
                dataType : "JSON",
                data : {codigo_cliente:codigo_cliente , nome_cliente:nome_cliente, cpf_cliente:cpf_cliente, sexo_cliente:sexo_cliente, email_cliente:email_cliente},
                success: function(data){
                    $('[name="codigo_cliente"]').val("");
                    $('[name="nome_cliente"]').val("");
                    $('[name="cpf_cliente"]').val("");
                    $('#sexo1').prop("checked", false);
                    $('#sexo2').prop("checked", false);
                    $('[name="email_cliente"]').val("");
                    
                    show_client();
                }
            });
            return false;
        });
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            $("#btn_update").show();
            $("#btn_save").hide();
            var codigo_cliente  = $(this).data('codigo_cliente');
            var nome_cliente    = $(this).data('nome_cliente');
            var cpf_cliente     = $(this).data('cpf_cliente');
            var sexo_cliente    = $(this).data('sexo_cliente');
            var email_cliente   = $(this).data('email_cliente');
            var cliente_id      = $(this).data('cliente_id');


            $('[name="codigo_cliente"]').val(codigo_cliente);
            $('[name="nome_cliente"]').val(nome_cliente);
            $('[name="cpf_cliente"]').val(cpf_cliente);
            $('[name="email_cliente"]').val(email_cliente);
            $('[name="cliente_id"]').val(cliente_id);
            if($("input[name='sexo_cliente']:checked").val() == 'F'){
                $("#sexo1").prop("checked", true);
            }
            else{
                $("#sexo2").prop("checked", true);
            }
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var codigo_cliente  = $('#codigo_cliente').val();
            var nome_cliente    = $('#nome_cliente').val();
            var cpf_cliente     = $('#cpf_cliente').val();
            var sexo_cliente    = $("input[name='sexo_cliente']:checked").val();
            var email_cliente   = $('#email_cliente').val();
            var cliente_id      = $('#cliente_id').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('clientes/update')?>",
                dataType : "JSON",
                data : {codigo_cliente:codigo_cliente , nome_cliente:nome_cliente, cpf_cliente:cpf_cliente, sexo_cliente:sexo_cliente, email_cliente:email_cliente, cliente_id:cliente_id},
                success: function(data){
                    $('[name="codigo_cliente"]').val("");
                    $('[name="nome_cliente"]').val("");
                    $('[name="cpf_cliente"]').val("");
                    $('#sexo1').prop("checked", false);
                    $('#sexo2').prop("checked", false);
                    $('[name="email_cliente"]').val("");
                    $('[name="cliente_id_edit"]').val("");
                    $("#btn_update").hide();
                    $("#btn_save").show();
                    show_client();
                }
            });
            return false;
        });
 
        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var cliente_id = $(this).data('cliente_id');
             
            if(confirm("Deseja eliminar esse cliente?")){
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('clientes/delete')?>",
                    dataType : "JSON",
                    data : {cliente_id:cliente_id},
                    success: function(data){
                        show_client();
                    }
                });
                return false;
            }

        });
 
    });
 
</script>
    
</body>
</html>