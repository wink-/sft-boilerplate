@extends('frontend.layouts.master')

@section('content')

    <div class="container-fluid">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Workorders</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('workorders.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($workorders->isEmpty())
                <div class="well text-center">No Workorders found.</div>
            @else
                @include('frontend.workorders.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $workorders])


    </div>
@endsection