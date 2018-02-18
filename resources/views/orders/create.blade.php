@extends('layouts.master')

@section('content')


{{-- <form action="padeka" method="post">
    <div>
        <label for="name">Vardas:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="surname">Pavardė:</label>
        <input type="text" id="name" name="surname">
    </div>
    <div>
        <label for="date">Tinkama data:</label>
        <input type="date" id="mail" name="date">
    </div>
     <div>
        <label for="tel">Telefono Numeris:</label>
        <input type="tel" id="mail" name="tel_nr">
    </div>
    <div>
        <label for="adresas">Adresas:</label>
        <textarea id="adresas" name="adresas"></textarea>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
   <button  type="submit" class="btn btn-success my-2 my-sm-0" >Užsakyti</button>
</form> --}}


{{-- {!! Form::open(['method' => 'POST', 'route' => ['OrdersController@store']]) !!}  --}}

{!! Form::open(array('action' => 'OrdersController@store')) !!}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group ">
                    {!! Form::label('name', 'Vardas'.'', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('surname', 'Pavardė'.'', ['class' => 'control-label']) !!}
                    {!! Form::text('surname', old('surname'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('surname'))
                        <p class="help-block">
                            {{ $errors->first('surname') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date', 'Atvykimo data'.'', ['class' => 'control-label']) !!}
                    {!! Form::date('date', old('date'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date'))
                        <p class="help-block">
                            {{ $errors->first('date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('adress', 'Adresas'.'', ['class' => 'control-label']) !!}
                    {!! Form::text('adress', old('adress'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('adress'))
                        <p class="help-block">
                            {{ $errors->first('adress') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone_number', 'Telefono numeris'.'', ['class' => 'control-label']) !!}
                    {!! Form::number('phone_number', old('phone_number'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone_number'))
                        <p class="help-block">
                            {{ $errors->first('phone_number') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Išsaugoti', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')

    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "HH:mm:ss"
        });
    </script>

@stop

