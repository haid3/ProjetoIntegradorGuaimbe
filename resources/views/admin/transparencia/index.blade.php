
@extends('layout')

@section('conteudo')
<div class="row">   
    <div class="col-md-12">
        {!! Form::open(['class' => 'import', 'route' => 'admin.transparencia.importCsv', 'method' => 'post','enctype' => "multipart/form-data", ]) !!}
            <div class="text-center">
                {!! Form::file("excel", ['class' => 'btn btn-primary']) !!}
                </a>
                <button class="btn btn-success"> Importar
                        <fa class="fa fa-upload"></fa>
                </button>
            </div>
                    
        <div class="row">   
            <div class="col-md-12">
                <br>
                    <center><img style="width:35%;height: auto;" src="https://thumbs.dreamstime.com/z/infographic-dashboard-template-flat-design-graphs-chart-infographic-dashboard-template-flat-design-graphs-charts-129188591.jpg" alt=""></center>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="row">
{!! Form::open(['route' => 'admin.transparencia.index', 'class' => 'form-horizontal form-produtos', 'method' => 'get']) !!}

    @include('admin.transparencia._partial.table')
    {!! Form::close() !!}
</div>

@endsection'