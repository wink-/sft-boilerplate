@extends('frontend.layouts.master')

@section('content')
<div class="container-fluid">

    @include('common.errors')
    <h2>Create Discrepant Material Report</h2>

    <p><b>WO:</b> {{ $workorder->WORKORDR }} <b>CUSTOMER:</b> {{ $workorder->CUSTCODE }} <b>PN:</b> {{ $workorder->PARTNUM }} <b>PROC:</b> {{ $workorder->PROCNAME }} </p>
    <hr>
    {!! Form::open(['route' => 'dmrs.store']) !!}

        @include('frontend.dmrs.fields')

    {!! Form::close() !!}
</div>
@endsection
