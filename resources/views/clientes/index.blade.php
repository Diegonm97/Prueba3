@extends('layouts.apphome')
@section('content')


<div class="col-md-10">

    <h1 align="center">Información Clientes</h1>
</div>

<div class="col-md-2">

    @include('clientes.fragment.info')
    
</div>


<div class="col-md-12">

    <div class="card">
        <div class="header">
            <h4 class="title">Clientes</h4>

            <!-- Ruta al create de clientes -->
            @can('Clientes.create')
            <a href="{{route('clientes.create')}}" class="btn btn-default pull-right" title="Crear Clientes" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
            @endcan


            <p class="category">Aqui se muestran datos de los clientes registrados</p>
            <!-- Buscador -->
            {!!Form::open(['route'=>'clientes.index', 'method'=>'GET'])!!}
            <div class="col-md-3">
                <div class="form group" title="Buscar Clientes">
                    {!!Form::number('identificacion',null,['class'=>'form-control' , 'placeholder'=>'Buscar..', 'aria-describedby'=>'search'])!!}

                </div>
            </div>
            {!!Form::close()!!}
        </div>

        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <div class="container">
                    <div class="row">
                        <thead>
                            <th>Identificación</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Estado</th>
                            <th>Tipo Cliente</th>
                            <th>Teléfono</th>
                            <th>Rango</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            <!--Cada cliente los toma uno por uno y obtiene sus datos-->
                            @foreach ($clientes as $cliente)
                            <tr>
                                <th>{{$cliente->identificacion}}</th>
                                <th>{{$cliente->nombres}}</th>
                                <th>{{$cliente->apellidos}}</th>
                                <th>
                                    @if($cliente->estado == 1)
                                    Activo

                                    @endif
                                    @if($cliente->estado == 2)
                                    Retirado
                                    @endif
                                </th>
                                <th>
                                    @if($cliente->tipo_id == 1)
                                    CC
                                    @endif
                                    @if($cliente->tipo_id == 2)
                                    PASAPORTE
                                    @endif
                                    @if($cliente->tipo_id == 3)
                                    PERMISO DE TRABAJO
                                    @endif
                                </th>
                                <th>{{$cliente->telefono}}</th>
                                <th>{{$cliente->rango}}</th>
                                <th>
                                    <!-- Ruta al show de clientes -->
                                    @can('Clientes.show')
                                    <a href="{{route('clientes.show', $cliente->id)}}"><i class="far fa-eye" title="Ver Clientes"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endcan

                                    <!-- Ruta al edit de clientes -->
                                    @can('Clientes.edit')
                                    <a href="{{route('clientes.edit', $cliente->id)}}"><i class="fas fa-pen" title="Editar Clientes"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endcan

                                    <a target="_blank" href="{{route('imprimir', $cliente->id)}}"><i class="fa fa-file-pdf-o" aria-hidden="true" title="Factura Clientes"></i></a>
                                </th>

                            </tr>
                            @endforeach


                        </tbody>
                    </div>
                </div>
            </table>
            <div align="center">
                {!!$clientes->render() !!}
            </div>
        </div>
    </div>
</div>





@endsection