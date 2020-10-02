<div class="page-subtitle">
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Transparencia</h3>
    </div>
    <div class="panel-body table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>id_rec_arrec_detalhe</th>
                    <th>ano_exercicio</th>
                    <th>ds_municipiol</th>
                    <th>ds_orgao</th>
                    <th>mes_referencia</th>
                    <th>mes_ref_extenso</th>
                    <th>ds_poder</th>
                    <th>ds_fonte_recurso</th>
                    <th>ds_cd_aplicacao_fixo</th>
                    <th>ds_cd_aplicacao_variavel</th>
                    <th>ds_categoria</th>
                    <th>ds_subcategoria</th>
                    <th>ds_fonte</th>
                    <th>ds_rubrica</th>
                    <th>ds_alinea</th>
                    <th>ds_subalinea</th>
                    <th>vl_arrecadacao</th>
                </tr>
            </thead>
            <tbody>
            @if(!empty($transparencias))
                @foreach($transparencias as $transparencia)
                    <tr>
                        <td>{{$transparencia->id_rec_arrec_detalhe}}</td>
                        <td>{{$transparencia->ano_exercicio}}</td>
                        <td>{{$transparencia->ds_municipiol}}</td>
                        <td>{{$transparencia->ds_orgao}}</td>
                        <td>{{$transparencia->mes_referencia}}</td>
                        <td>{{$transparencia->mes_ref_extenso}}</td>
                        <td>{{$transparencia->ds_poder}}</td>
                        <td>{{$transparencia->ds_fonte_recurso}}</td>
                        <td>{{$transparencia->ds_cd_aplicacao_fixo}}</td>
                        <td>{{$transparencia->ds_cd_aplicacao_variavel}}</td>
                        <td>{{$transparencia->ds_categoria}}</td>
                        <td>{{$transparencia->ds_subcategoria}}</td>
                        <td>{{$transparencia->ds_fonte}}</td>
                        <td>{{$transparencia->ds_rubrica}}</td>
                        <td>{{$transparencia->ds_alinea}}</td>
                        <td>{{$transparencia->ds_subalinea}}</td>
                        <td>{{$transparencia->vl_arrecadacao}}</td>
                    </tr>
                @endforeach
            </tbody>
            @else
            <tr>
                <td></td>
            <tr>
            @endif
        </table>    
    </div>                                  
</div>



