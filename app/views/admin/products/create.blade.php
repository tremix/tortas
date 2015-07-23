@extends('admin.layouts.default')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Producto</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Por favor escriba la informacion del producto a continuacion
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{ Form::open(array('url' => 'products', 'class'=>'form-group')) }}
                                <div class="form-group">
                                    {{ Form::label('Código de Producto') }}
                                    {{ Form::text('code', $value = null, array('placeholder' => 'Código', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Nombre de Producto') }}
                                    {{ Form::text('name', $value = null, array('placeholder' => 'Nombre Producto', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Categoría') }}
                                    {{ Form::select('category', array($combobox), null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Unidades por Producto') }}
                                    {{ Form::text('unit', $value = null, array('placeholder' => 'Ingrese unidades', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Tamaño') }}
                                    {{ Form::text('size', $value = null, array('placeholder' => 'Ingrese Tamaño', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Costo de Producto') }}
                                    {{ Form::text('cost', $value = null, array('placeholder' => 'Ingrese costo', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Precio de Producto') }}
                                    {{ Form::text('price', $value = null, array('placeholder' => 'Ingrese Precio', 'class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Imagen de Producto') }}
                                    {{ Form::file('file[]', array('multiple' => 'multiple', 'id' => 'multiple-files', 'accept' => 'image/*')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Descripción del Producto') }}
                                    {{ Form::textarea('note', $value = null, array('class'=> 'form-control', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                                </div>
                                {{ Form::submit('Agregar Producto', array('class' => 'btn btn-default btn-primary')) }}
                        {{ Form::close() }}
                            </div>
                            <!-- /.col-lg-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@stop

@section('scripts')
    <!-- jQuery -->
    <script src="{{{ asset('bower_components/jquery/dist/jquery.min.js') }}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{{ asset('bower_components/metisMenu/dist/metisMenu.min.js') }}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{{ asset('dist/js/sb-admin-2.js') }}}"></script>

@endsection