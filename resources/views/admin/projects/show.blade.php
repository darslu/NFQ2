@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.project.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.project.fields.book')</th>
                            <td field-key='book'>{{ $project->book }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.project.fields.author')</th>
                            <td field-key='author'>{{ $project->author }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.project.fields.genre')</th>
                            <td field-key='genre'>{{ $project->genre }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.project.fields.date')</th>
                            <td field-key='date'>{{ $project->date }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.projects.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
