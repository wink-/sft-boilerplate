<!-- Partid Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('PartID', 'Partid:') !!}
	{!! Form::number('PartID', null, ['class' => 'form-control']) !!}
</div>

<!-- Custcode Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('CUSTCODE', 'Custcode:') !!}
	{!! Form::text('CUSTCODE', null, ['class' => 'form-control']) !!}
</div>

<!-- Partnum Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('PARTNUM', 'Partnum:') !!}
	{!! Form::text('PARTNUM', null, ['class' => 'form-control']) !!}
</div>

<!-- Procname Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('PROCNAME', 'Procname:') !!}
	{!! Form::text('PROCNAME', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('PRICE', 'Price:') !!}
	{!! Form::number('PRICE', null, ['class' => 'form-control']) !!}
</div>

<!-- Pricecode Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('PRICECODE', 'Pricecode:') !!}
	{!! Form::text('PRICECODE', null, ['class' => 'form-control']) !!}
</div>

<!-- Rework Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('REWORK', 'Rework:') !!}
	{!! Form::text('REWORK', null, ['class' => 'form-control']) !!}
</div>

<!-- Daterecv Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('DATERECV', 'Daterecv:') !!}
	{!! Form::date('DATERECV', null, ['class' => 'form-control']) !!}
</div>

<!-- Datereqd Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('DATEREQD', 'Datereqd:') !!}
	{!! Form::date('DATEREQD', null, ['class' => 'form-control']) !!}
</div>

<!-- Shipped Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('SHIPPED', 'Shipped:') !!}
	{!! Form::text('SHIPPED', null, ['class' => 'form-control']) !!}
</div>

<!-- Custpo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('CUSTPO', 'Custpo:') !!}
	{!! Form::text('CUSTPO', null, ['class' => 'form-control']) !!}
</div>

<!-- Custpl Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('CUSTPL', 'Custpl:') !!}
	{!! Form::text('CUSTPL', null, ['class' => 'form-control']) !!}
</div>

<!-- Qty Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('QTY', 'Qty:') !!}
	{!! Form::number('QTY', null, ['class' => 'form-control']) !!}
</div>

<!-- Qtytype Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('QTYTYPE', 'Qtytype:') !!}
	{!! Form::text('QTYTYPE', null, ['class' => 'form-control']) !!}
</div>

<!-- Wonote Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('WONOTE', 'Wonote:') !!}
	{!! Form::textarea('WONOTE', null, ['class' => 'form-control']) !!}
</div>

<!-- Hot Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('HOT', 'Hot:') !!}
	{!! Form::text('HOT', null, ['class' => 'form-control']) !!}
</div>

<!-- Priority Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('Priority', 'Priority:') !!}
	{!! Form::number('Priority', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
