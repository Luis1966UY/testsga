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
                                <h1>Pedidos</h1>
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
                                                <label for="codigo_pedido" class=" form-control-label">Código</label>
                                                <input type="text" id="codigo_pedido" name="codigo_pedido" placeholder="Escreva o código do pedido" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="data_pedido" class=" form-control-label">Data</label>
                                                <input type="text" id="data_pedido" name="data_pedido" placeholder="Data do pedido com formato dd/mm/yyyy" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <div class="col-1"><label for="observacoes_pedido" class=" form-control-label">Observações</label></div>
                                            <div class="col-12"><textarea name="observacoes_pedido" id="observacoes_pedido" rows="4" placeholder="Observações..." class="form-control"></textarea></div>
                                            </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="col col-md-3"><label for="forma_pagamento_pedido" class=" form-control-label">Forma pagamento</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select name="forma_pagamento_pedido" id="forma_pagamento_pedido" class="form-control">
                                                        <option value="Dinheiro">Dinheiro</option>
                                                        <option value="Cartão">Cartão</option>
                                                        <option value="Cheque">Cheque</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
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

                <div class="rows">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Detalhe do Pedido</strong></div>
                            <div class="card-body card-block">
                                <div class="form-actions form-group float-right">
                                    <button class="btn btn-primary" id="add_prod">Adicionar produto</button>
                                </div>
                                <form action="#" method="post" id="detalhe_pedido">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 40%">Produto</th>
                                                <th style="width: 20%">Valor</th>
                                                <th style="width: 20%">Quantidade</th>
                                                <th style="text-align: right;">Preço</th>
                                                <th style="text-align: right;">Acões</th>
                                            </tr>
                                        </thead>
                                        <tbody id="linhas_pedido">
                                            <tr>
                                                <td>
                                                    <select name="produto[0][produto_id]" id="produtoid0" class="select_produto">

                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="produto[0][valor]" value="" onfocus="blur()">
                                                </td>
                                                <td>
                                                    <input type="text" name="produto[0][qtd]" class="qtd-produto" id="produtoqtd0" value="">
                                                </td>
                                                <td>
                                                    <input type="text" name="produto[0][tp]" value="" onfocus="blur()">
                                                </td>
                                                <td>
                                                    &nbsp;
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"><strong>Lista de Pedidos</strong></div>
                            <div class="card-body card-block"> 
                                <table class="table table-striped" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Data</th>
                                            <th>Cliente</th>
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

        show_pedidos(); //lista todos os pedidos

        load_clientes();

        load_produtos(0);

         
        $('#mydata').dataTable();
          
        //mostra a lista de pedidos
        function show_pedidos(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('xpedidos/pedido_data')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        date_pedido = data[i].data_pedido;
                        date_pedido = date_pedido.substring(8,10)+"/"+date_pedido.substring(5,7)+"/"+date_pedido.substring(0,4);
                        html += '<tr>'+
                                '<td>'+data[i].codigo_pedido+'</td>'+
                                '<td>'+date_pedido+'</td>'+
                                '<td>'+data[i].nome_cliente+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-codigo_pedido="'+data[i].codigo_pedido+'" data-data_pedido="'+date_pedido+'" data-cliente_id="'+data[i].cliente_id+'" data-observacoes_pedido="'+data[i].observacoes_pedido+'" data-forma_pagamento_pedido="'+data[i].forma_pagamento_pedido+'" data-pedido_id="'+data[i].pedido_id+'">Editar</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-pedido_id="'+data[i].pedido_id+'">Eliminar</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-success btn-sm item_email" data-pedido_id="'+data[i].pedido_id+'">Email</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_pdf" data-pedido_id="'+data[i].pedido_id+'">Imprimir</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

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

        function load_produtos(indice){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('xpedidos/product_data')?>',
                async : true,
                dataType : 'json',
                async : false,
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].produto_id+'" data-valor="'+data[i].valor_produto+'">'+
                                data[i].nome_produto+
                                '</option>';
                                
                    }

                    $('#produtoid'+indice).html(html);
                    $('[name="produto['+indice+'][valor]"]').val(data[0].valor_produto);

                }

            });
        }

        // cálculo do total para o produto quando muda o produto
        $('#linhas_pedido').on('change','.select_produto',function(){
            valor = $(this).find(':selected').attr('data-valor');
            idcampo = $(this).attr('id');
            posicion = idcampo.substring(9,idcampo.length);
            $('[name="produto['+posicion+'][valor]"]').val(valor);
            if($('[name="produto['+posicion+'][qtd]"]').val() != ""){
                total_linha = eval(valor * $('[name="produto['+posicion+'][qtd]"]').val());
                $('[name="produto['+posicion+'][tp]"]').val(total_linha);
            }

        });

        // cálculo do total para o produto quando muda a quantidade do produto
        $('#linhas_pedido').on('change','.qtd-produto',function(){
            idcampo = $(this).attr('id');
            posicion = idcampo.substring(10,idcampo.length);
            valor = $('[name="produto['+posicion+'][valor]"]').val();
            total_linha = eval(valor * $('[name="produto['+posicion+'][qtd]"]').val());
            $('[name="produto['+posicion+'][tp]"]').val(total_linha);

        });
 
        //Save pedido
        $('#btn_save').on('click',function(){
            var codigo_pedido  = $('#codigo_pedido').val();
            var data_pedido    = $('#data_pedido').val();
            var observacoes_pedido     = $('#observacoes_pedido').val();
            var forma_pagamento_pedido = $('#forma_pagamento_pedido option:selected').val();
            var cliente_id = $('#cliente_id option:selected').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('xpedidos/save')?>",
                dataType : "JSON",
                data : {codigo_pedido:codigo_pedido , data_pedido:data_pedido, observacoes_pedido:observacoes_pedido, forma_pagamento_pedido:forma_pagamento_pedido, cliente_id:cliente_id},
                success: function(data){
                    salvar_detalhe();
                    

                    $('[name="codigo_pedido"]').val("");
                    $('[name="data_pedido"]').val("");
                    $('[name="observacoes_pedido"]').val("");
                    $("#forma_pagamento_pedido").val("Dinheiro");
                    $("#cliente_id").val([]);

                    fila_original = '<tr>'+
                                        '<td>'+
                                            '<select name="produto[0][produto_id]" id="produtoid0" class="select_produto">'+

                                            '</select>'+
                                        '</td>'+
                                        '<td>'+
                                            '<input type="text" name="produto[0][valor]" value="" onfocus="blur()">'+
                                        '</td>'+
                                        '<td>'+
                                            '<input type="text" name="produto[0][qtd]" class="qtd-produto" id="produtoqtd0" value="">'+
                                        '</td>'+
                                        '<td>'+
                                            '<input type="text" name="produto[0][tp]" value="" onfocus="blur()">'+
                                        '</td>'+
                                        '<td>'+
                                            '&nbsp;'+
                                        '</td>'+
                                    '</tr>';
                    $("#linhas_pedido").html(fila_original);

                    show_pedidos();
                    load_clientes();
                    load_produtos(0);
                }
            });
            return false;
        });
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            $("#btn_update").show();
            $("#btn_save").hide();
            var codigo_pedido           = $(this).data('codigo_pedido');
            var data_pedido             = $(this).data('data_pedido');
            var observacoes_pedido      = $(this).data('observacoes_pedido');
            var forma_pagamento_pedido  = $(this).data('forma_pagamento_pedido');
            var cliente_id              = $(this).data('cliente_id');
            var pedido_id               = $(this).data('pedido_id');


            $('[name="codigo_pedido"]').val(codigo_pedido);
            $('[name="data_pedido"]').val(data_pedido);
            $('[name="observacoes_pedido"]').val(observacoes_pedido);
            $('#forma_pagamento_pedido option[value='+forma_pagamento_pedido+']').prop("selected", true);
            $('#cliente_id option[value='+cliente_id+']').prop("selected", true);
            $('[name="pedido_id"]').val(pedido_id);

            $.ajax({
                type  : 'post',
                url   : '<?php echo site_url('xpedidos/detalhe_data')?>',
                data  : {pedido_id:pedido_id},
                dataType : 'json',
                async : false,
                success : function(data){
                    var html = '';
                    $( "#linhas_pedido" ).html(html);
                    for(indice=0; indice<data.length; indice++){

                        html ='<tr id="linha'+indice+'">'+
                            '<td>'+
                                '<select name="produto['+indice+'][produto_id]" id="produtoid'+indice+'"  class="select_produto">'+
                                '</select>'+
                            '</td>'+
                            '<td>'+
                                '<input type="text" name="produto['+indice+'][valor]" value="'+data[indice].preco+'" class="valor-produto" onfocus="blur()">'+
                            '</td>'+
                            '<td>'+
                                '<input type="text" name="produto['+indice+'][qtd]" class="qtd-produto" id="produtoqtd'+indice+'" value="'+data[indice].quantidade+'">'+
                            '</td>'+
                            '<td>'+
                                '<input type="text" name="produto['+indice+'][tp]" value="'+eval(data[indice].preco * data[indice].quantidade)+'" onfocus="blur()">'+
                            '</td>'+
                            '<td>';
                            if(indice > 0){
                                html +='<a href="javascript:void(0);" class="btn btn-danger btn-sm linha_delete" onclick="$(\'#linha'+indice+'\').remove()">Eliminar</a>';
                            }
                            else{
                                html += '&nbsp;';
                            }
                        html +='</td>'+
                        '</tr>';
                        $( "#linhas_pedido" ).append(html);
                        load_produtos(indice);
                        $('#produtoid'+indice+' option[value='+data[indice].produto_id+']').prop("selected",true);
                        html = '';
                    }
                }
 
            });

        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var codigo_pedido           = $('#codigo_pedido').val();
            var data_pedido             = $('#data_pedido').val();
            var observacoes_pedido      = $('#observacoes_pedido').val();
            var forma_pagamento_pedido  = $('#forma_pagamento_pedido option:selected').val();
            var cliente_id              = $('#cliente_id option:selected').val();
            var pedido_id               = $('#pedido_id').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('xpedidos/update')?>",
                dataType : "JSON",
                data : {codigo_pedido:codigo_pedido , data_pedido:data_pedido, observacoes_pedido:observacoes_pedido, forma_pagamento_pedido:forma_pagamento_pedido, cliente_id:cliente_id, pedido_id:pedido_id},
                success: function(data){
                    apaga_detalhe(pedido_id);
                    salvar_detalhe();

                    $('[name="codigo_pedido"]').val("");
                    $('[name="data_pedido"]').val("");
                    $('[name="observacoes_pedido"]').val("");
                    $("#forma_pagamento_pedido").val("Dinheiro");
                    $("#cliente_id").val("Dinheiro");
                    $('[name="pedido_id"]').val("");
                    $("#btn_update").hide();
                    $("#btn_save").show();

                    fila_original = '<tr>'+
                                        '<td>'+
                                            '<select name="produto[0][produto_id]" id="produtoid0" class="select_produto">'+

                                            '</select>'+
                                        '</td>'+
                                        '<td>'+
                                            '<input type="text" name="produto[0][valor]" value="" onfocus="blur()">'+
                                        '</td>'+
                                        '<td>'+
                                            '<input type="text" name="produto[0][qtd]" class="qtd-produto" id="produtoqtd0" value="">'+
                                        '</td>'+
                                        '<td>'+
                                            '<input type="text" name="produto[0][tp]" value="" onfocus="blur()">'+
                                        '</td>'+
                                        '<td>'+
                                            '&nbsp;'+
                                        '</td>'+
                                    '</tr>';
                    $("#linhas_pedido").html(fila_original);

                    show_pedidos();
                    load_clientes();
                    load_produtos(0);

                }
            });
            return false;
        });
 
        //delete data
        $('#show_data').on('click','.item_delete',function(){
            var pedido_id = $(this).data('pedido_id');
             
            if(confirm("Deseja eliminar esse pedido?")){
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('xpedidos/delete')?>",
                    dataType : "JSON",
                    data : {pedido_id:pedido_id},
                    success: function(data){
                        apaga_detalhe(pedido_id);
                        show_pedidos();
                        alert("Pedido eliminado");
                    }
                });
                return false;
            }

        });

        //envia pedido por email
        $('#show_data').on('click','.item_email',function(){
            var pedido_id = $(this).data('pedido_id');
             
            if(confirm("Deseja enviar esse pedido por email?")){
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('xpedidos/email')?>",
                    dataType : "JSON",
                    data : {pedido_id:pedido_id},
                    success: function(data){
                        alert("Email enviado");
                    },
                    error: function(data){
                        alert("Email não enviado. Tente mais tarde.")
                    }
                });
                return false;
            }

        });

        //gera pedido em pdf
        $('#show_data').on('click','.item_pdf',function(){
            var pedido_id = $(this).data('pedido_id');
            if(confirm("Deseja gerar esse pedido em pdf?")){
                window.open("<?php echo site_url()?>"+'xpedido/pdf/'+pedido_id);
            }

        });


        $("#add_prod").click(function(){
            datos = $("#detalhe_pedido").serializeArray();
            indice = datos.length /4;
            fila = '<tr id="linha'+indice+'">'+
                        '<td>'+
                            '<select name="produto['+indice+'][produto_id]" id="produtoid'+indice+'"  class="select_produto">'+
                            '</select>'+
                        '</td>'+
                        '<td>'+
                            '<input type="text" name="produto['+indice+'][valor]" value="" class="valor-produto" onfocus="blur()">'+
                        '</td>'+
                        '<td>'+
                            '<input type="text" name="produto['+indice+'][qtd]" class="qtd-produto" id="produtoqtd'+indice+'" value="">'+
                        '</td>'+
                        '<td>'+
                            '<input type="text" name="produto['+indice+'][tp]" value="" onfocus="blur()">'+
                        '</td>'+
                        '<td>'+
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm linha_delete" onclick="$(\'#linha'+indice+'\').remove()">Eliminar</a>'+
                        '</td>'+
                    '</tr>';

            $( "#linhas_pedido" ).append( fila ); 
            load_produtos(indice);
            
        });

        function salvar_detalhe(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('xpedidos/last_pedido_id')?>',
                async : true,
                dataType : 'json',
                async: false,
                success : function(data){
                    pedido_id = data[0].pedido_id;
                    datos = $("#detalhe_pedido").serializeArray();
                    cont_campos = 1;
                    nome_campo = "";
                    $.each(datos, function(i, field) {
                        nome_campo = field.name;
                        if(nome_campo.includes("produto_id")){
                            produto_id = field.value;
                        }
                        else if(nome_campo.includes("valor")){
                            preco = field.value;
                        }
                        else if(nome_campo.includes('qtd')){
                            quantidade = field.value;
                        }
                        cont_campos++;
                        if(cont_campos > 4){
                            $.ajax({
                                type : "POST",
                                url  : "<?php echo site_url('xpedidos/save_detalhe')?>",
                                dataType : "JSON",
                                data : {pedido_id:pedido_id , produto_id:produto_id, preco:preco, quantidade:quantidade},
                                success: function(data){
                                    console.log('Salvado detalhe');
                                },
                                async: false,
 
                            });
                            cont_campos = 1;
                        }
                    });

                }
 
            });
        }

        function apaga_detalhe(pedido_id){
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('xpedidos/delete_detalhe')?>",
                dataType : "JSON",
                data : {pedido_id:pedido_id},
                success: function(data){
                    console.log("Detalhe eliminado");
                }
            });
        }

 
    });
 
</script>

</body>
</html>