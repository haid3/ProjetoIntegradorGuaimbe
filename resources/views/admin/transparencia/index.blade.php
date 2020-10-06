
@extends('layout')

@section('conteudo')
<div class="row">   
    <div class="col-md-12">
        {!! Form::open(['class' => 'import', 'route' => 'admin.transparencia.importCsv', 'method' => 'post','enctype' => "multipart/form-data", ]) !!}
            <div class="text-right">
                {!! Form::file("excel", ['class' => 'btn btn-primary']) !!}
                </a>
            </div>
            <br>
            <div class="col-md-12">
                <div class="form-group" align="right">
                <button class="btn btn-success"> Importar
                        <fa class="fa fa-upload"></fa>
                </button>
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