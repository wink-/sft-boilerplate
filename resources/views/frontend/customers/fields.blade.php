<!-- Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ID', 'Id:') !!}
	{!! Form::number('ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Custcode Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('CUSTCODE', 'Custcode:') !!}
	{!! Form::text('CUSTCODE', null, ['class' => 'form-control']) !!}
</div>

<!-- Custname Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('CUSTNAME', 'Custname:') !!}
	{!! Form::text('CUSTNAME', null, ['class' => 'form-control']) !!}
</div>

<!-- Address1 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ADDRESS1', 'Address1:') !!}
	{!! Form::text('ADDRESS1', null, ['class' => 'form-control']) !!}
</div>

<!-- Address2 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ADDRESS2', 'Address2:') !!}
	{!! Form::text('ADDRESS2', null, ['class' => 'form-control']) !!}
</div>

<!-- Address3 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ADDRESS3', 'Address3:') !!}
	{!! Form::text('ADDRESS3', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('CITY', 'City:') !!}
	{!! Form::text('CITY', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('STATE', 'State:') !!}
	{!! Form::text('STATE', null, ['class' => 'form-control']) !!}
</div>

<!-- Zip Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ZIP', 'Zip:') !!}
	{!! Form::text('ZIP', null, ['class' => 'form-control']) !!}
</div>

<!-- Shipto Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('SHIPTO', 'Shipto:') !!}
	{!! Form::text('SHIPTO', null, ['class' => 'form-control']) !!}
</div>

<!-- Destination Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('destination_id', 'Destination Id:') !!}
	{!! Form::number('destination_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Shipvia Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('SHIPVIA', 'Shipvia:') !!}
	{!! Form::text('SHIPVIA', null, ['class' => 'form-control']) !!}
</div>

<!-- Carrier Id Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('carrier_id', 'Carrier Id:') !!}
	{!! Form::number('carrier_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Deffreight Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('DEFFREIGHT', 'Deffreight:') !!}
	{!! Form::text('DEFFREIGHT', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact1 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('CONTACT1', 'Contact1:') !!}
	{!! Form::text('CONTACT1', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone1 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('PHONE1', 'Phone1:') !!}
	{!! Form::text('PHONE1', null, ['class' => 'form-control']) !!}
</div>

<!-- Extension1 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('EXTENSION1', 'Extension1:') !!}
	{!! Form::text('EXTENSION1', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact2 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('CONTACT2', 'Contact2:') !!}
	{!! Form::text('CONTACT2', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone2 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('PHONE2', 'Phone2:') !!}
	{!! Form::text('PHONE2', null, ['class' => 'form-control']) !!}
</div>

<!-- Extension2 Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('EXTENSION2', 'Extension2:') !!}
	{!! Form::text('EXTENSION2', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('FAX', 'Fax:') !!}
	{!! Form::text('FAX', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('EMAIL', 'Email:') !!}
	{!! Form::email('EMAIL', null, ['class' => 'form-control']) !!}
</div>

<!-- Cod Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('COD', 'Cod:') !!}
	{!! Form::text('COD', null, ['class' => 'form-control']) !!}
</div>

<!-- Taxiden Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('TAXIDEN', 'Taxiden:') !!}
	{!! Form::text('TAXIDEN', null, ['class' => 'form-control']) !!}
</div>

<!-- Remarks Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('REMARKS', 'Remarks:') !!}
	{!! Form::textarea('REMARKS', null, ['class' => 'form-control']) !!}
</div>

<!-- Timestamp Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('TimeStamp', 'Timestamp:') !!}
	{!! Form::date('TimeStamp', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
