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
                                <h1>Produtos</h1>
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
                            <div class="card-header"><strong>Dados do Produto</strong></div>
                            <div class="card-body card-block">
                                <form action="#" method="post">
                                    <input type="hidden" name="produto_id" id="produto_id" value="" />
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="codigo_produto" class=" form-control-label">Código</label>
                                                <input type="text" id="codigo_produto" name="codigo_produto" placeholder="Escreva o código do produto" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nome_produto" class=" form-control-label">Nome</label>
                                                <input type="text" id="nome_produto" name="nome_produto" placeholder="Escreva o nome do produto" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col-4">
                                           <label for="cor_produto" class=" form-control-label">Cor</label>
                                            <input type="text" id="cor_produto" name="cor_produto" placeholder="Cor do produto" class="form-control">
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <div class="col col-md-3"><label for="tamanho_produto" class=" form-control-label">Tamanho</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select name="tamanho_produto" id="tamanho_produto" class="form-control">
                                                        <option value="P">P</option>
                                                        <option value="M">M</option>
                                                        <option value="G">G</option>
                                                        <option value="GG">GG</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="valor_produto" class=" form-control-label">Valor R$</label>
                                                <input type="text" id="valor_produto" name="valor_produto" placeholder="0,00" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-12">
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
                            <div class="card-header"><strong>Lista de Produtos</strong></div>
                            <div class="card-body card-block"> 
                                <table class="table table-striped" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome</th>
                                            <th>Valor</th>
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
                <!-- row -->

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
        show_product(); //lista todos os produtos
         
        $('#mydata').dataTable();
          
        //mostra a lista de produtos
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('produtos/product_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].codigo_produto+'</td>'+
                                '<td>'+data[i].nome_produto+'</td>'+
                                '<td>'+data[i].valor_produto+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-codigo_produto="'+data[i].codigo_produto+'" data-nome_produto="'+data[i].nome_produto+'" data-cor_produto="'+data[i].cor_produto+'" data-tamanho_produto="'+data[i].tamanho_produto+'" data-valor_produto="'+data[i].valor_produto+'" data-produto_id="'+data[i].produto_id+'">Editar</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-produto_id="'+data[i].produto_id+'">Eliminar</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //Save product
        $('#btn_save').on('click',function(){
            var codigo_produto  = $('#codigo_produto').val();
            var nome_produto    = $('#nome_produto').val();
            var cor_produto     = $('#cor_produto').val();
            var tamanho_produto = $('#tamanho_produto option:selected').val();
            var valor_produto   = $('#valor_produto').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('produtos/save')?>",
                dataType : "JSON",
                data : {codigo_produto:codigo_produto , nome_produto:nome_produto, cor_produto:cor_produto, tamanho_produto:tamanho_produto, valor_produto:valor_produto},
                success: function(data){
                    $('[name="codigo_produto"]').val("");
                    $('[name="nome_produto"]').val("");
                    $('[name="cor_produto"]').val("");
                    $("#tamanho_produto").val("P");
                    $('[name="valor_produto"]').val("");
                    
                    show_product();
                }
            });
            return false;
        });
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            $("#btn_update").show();
            $("#btn_save").hide();
            var codigo_produto  = $(this).data('codigo_produto');
            var nome_produto    = $(this).data('nome_produto');
            var cor_produto     = $(this).data('cor_produto');
            var tamanho_produto = $(this).data('tamanho_produto');
            var valor_produto   = $(this).data('valor_produto');
            var produto_id      = $(this).data('produto_id');


            $('[name="codigo_produto"]').val(codigo_produto);
            $('[name="nome_produto"]').val(nome_produto);
            $('[name="cor_produto"]').val(cor_produto);
            $('[name="valor_produto"]').val(valor_produto);
            $('[name="produto_id"]').val(produto_id);
            $('#tamanho_produto option[value='+tamanho_produto+']').prop("selected", true);

        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var codigo_produto  = $('#codigo_produto').val();
            var nome_produto    = $('#nome_produto').val();
            var cor_produto     = $('#cor_produto').val();
            var tamanho_produto = $('#tamanho_produto option:selected').val();
            var valor_produto   = $('#valor_produto').val();
            var produto_id      = $('#produto_id').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('produtos/update')?>",
                dataType : "JSON",
                data : {codigo_produto:codigo_produto , nome_produto:nome_produto, cor_produto:cor_produto, tamanho_produto:tamanho_produto, valor_produto:valor_produto, produto_id:produto_id},
                success: function(data){
                    $('[name="codigo_produto"]').val("");
                    $('[name="nome_produto"]').val("");
                    $('[name="cor_produto"]').val("");
                    $("#tamanho_produto").val("P");
                    $('[name="valor_produto"]').val("");
                    $('[name="produto_id"]').val("");
                    $("#btn_update").hide();
                    $("#btn_save").show();
                    show_product();
                }
            });
            return false;
        });
 
        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var produto_id = $(this).data('produto_id');
             
            if(confirm("Deseja eliminar esse produto?")){
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('produtos/delete')?>",
                    dataType : "JSON",
                    data : {produto_id:produto_id},
                    success: function(data){
                        show_product();
                    }
                });
                return false;
            }

        });
 
    });
 
</script>

</body>
</html>