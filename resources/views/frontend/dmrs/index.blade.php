@extends('frontend.layouts.master')

@section('content')

    <div class="container-fluid">

        @include('flash::message')
        <div class="row">
            <h1 class="pull-left">Discrepant Material Report Index</h1>
     
            <div class="pull-right" style="margin-top: 25px">
                <fieldset class="form-inline">
                {!! Form::open(['route' => 'dmrs.stage']) !!}        
                    {!! Form::label('WORKORDR', 'Workorder:') !!}
                    {!! Form::text('WORKORDR', null, ['class' => 'form-control', 'required']) !!}
                    {!! Form::submit('Create DMR', ['class' => 'btn btn-primary']) !!} 
                {!! Form::close() !!}
                </fieldset>
            </div>
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