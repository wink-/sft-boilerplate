@extends('frontend.layouts.master')

@section('content')

    <div class="container-fluid">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Dmrs</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('dmrs.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($dmrs->isEmpty())
                <div class="well text-center">No Dmrs found.</div>
            @else
                @include('frontend.dmrs.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $dmrs])


    </div>
@endsection