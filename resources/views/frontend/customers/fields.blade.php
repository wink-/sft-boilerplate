<div class="row">
    <div class="form-group-sm">
        <!-- Custcode Field -->
        <div class="col-md-1">
            {!! Form::label('CUSTCODE', 'Code:') !!}
            {!! Form::text('CUSTCODE', null, ['class' => 'form-control input-sm', 'required' ]) !!}
        </div>

        <!-- Custname Field -->
        <div class="col-md-5 ">
            {!! Form::label('CUSTNAME', 'Name:') !!}
            {!! Form::text('CUSTNAME', null, ['class' => 'form-control input-sm', 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group-sm">
        <!-- Address1 Field -->
        <div class="col-md-3">
            {!! Form::label('ADDRESS1', 'Physical Address:') !!}
            {!! Form::text('ADDRESS1', null, ['class' => 'form-control input-sm']) !!}
        </div>
        <!-- City Field -->
        <div class="col-md-1">
            {!! Form::label('CITY', 'City:') !!}
            {!! Form::text('CITY', null, ['class' => 'form-control input-sm']) !!}
        </div>
        <!-- State Field -->
        <div class=" col-md-1">
            {!! Form::label('STATE', 'State:') !!}
            {!! Form::selectState('STATE', null, ['class' => 'form-control input-sm']) !!}
        </div>

        <!-- Zip Field -->
        <div class="col-md-1">
            {!! Form::label('ZIP', 'Zip:') !!}
            {!! Form::text('ZIP', null, ['class' => 'form-control input-sm']) !!}
        </div>

    </div>
</div>
<div class="row">
    <!-- Address2 Field -->
    <div class="form-group-sm col-md-3 ">
        {!! Form::label('ADDRESS2', 'Address Extension:') !!}
        {!! Form::text('ADDRESS2', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Phone1 Field -->
    <div class="form-group-sm col-md-3">
        {!! Form::label('PHONE1', 'Company Phone:') !!}
        {!! Form::text('PHONE1', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Address3 Field -->
    <div class="form-group-sm col-md-3 ">
        {!! Form::label('ADDRESS3', 'Billing Address:') !!}
        {!! Form::text('ADDRESS3', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Fax Field -->
    <div class="form-group-sm col-md-3">
        {!! Form::label('FAX', 'Fax:') !!}
        {!! Form::text('FAX', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Email Field -->
    <div class="form-group-sm col-md-3">
        {!! Form::label('EMAIL', 'Email:') !!}
        {!! Form::email('EMAIL', null, ['class' => 'form-control']) !!}
    </div>

    <!-- COD Field -->
    <div class="form-group-sm col-md-1">
        {!! Form::label('COD', 'Cod:') !!}
        {!! Form::checkbox('COD', -1) !!}
    </div>

    <!-- Taxiden Field -->
    <div class="form-group-sm col-md-2">
        {!! Form::label('TAXIDEN', 'Tax ID:') !!}
        {!! Form::text('TAXIDEN', null, ['class' => 'form-control']) !!}
    </div>

</div>
<div class="row">
    <!-- Remarks Field -->
    <div class="form-group-sm col-md-6">
        {!! Form::label('REMARKS', 'Remarks:') !!}
        {!! Form::textarea('REMARKS', null, ['class' => 'form-control']) !!}
    </div>
</div>


<div class="row">
    <!-- Submit Field -->
    <div class="form-group-sm col-md-2">
        {!! Form::submit('Save Customer', ['class' => 'btn btn-primary']) !!}
    </div>
</div>