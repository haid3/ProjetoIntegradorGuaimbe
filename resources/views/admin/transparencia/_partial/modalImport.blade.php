<!-- /.modal produtos -->
<div class="modal fade" id="modalImportCsv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Importação de produtos</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['class' => 'import', 'route' => 'admin.transparencia.importCsv', 'method' => 'post','enctype' => "multipart/form-data", ]) !!}
                    <p style="font-size:15px;">Utilize o modelo de excel disponibilizado e após apertar o botão espere até que apareça uma mensagem</p>
                    <p style="font-size:15px;">O tempo de processamento pode ser equivalente ao tamanho do arquivo. Aguarde alguns minutos.</p>
                    <p style="font-size:15px;">Atenção: não mude o excel de modelo apenas cole os dados e importe.</p>
            
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label("excel", 'Arquivo xls ou xlsx') !!}
                                {!! Form::file("excel", ['class' => '']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group" align="right">
                            {!! Form::submit('Importar',['class' => 'btn btn-success btn-sm']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
