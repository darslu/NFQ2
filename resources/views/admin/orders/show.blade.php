@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.order.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.order.fields.name')</th>
                            <td field-key='name'>{{ $order->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.order.fields.surname')</th>
                            <td field-key='surname'>{{ $order->surname }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.order.fields.date')</th>
                            <td field-key='date'>{{ $order->date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.order.fields.adress')</th>
                            <td field-key='adress'>{{ $order->adress }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.order.fields.phone-number')</th>
                            <td field-key='phone_number'>{{ $order->phone_number }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.orders.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
