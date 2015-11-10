<table id="customers" class="table table-striped table-bordered table-condensed">
    <thead>
    <th>Id</th>
			<th>Custcode</th>
			<th>Custname</th>
			<th>Address1</th>
			<th>Address2</th>
			<th>Address3</th>
			<th>City</th>
			<th>State</th>
			<th>Zip</th>
			<th>Shipto</th>
			<th>Destination Id</th>
			<th>Shipvia</th>
			<th>Carrier Id</th>
			<th>Deffreight</th>
			<th>Contact1</th>
			<th>Phone1</th>
			<th>Extension1</th>
			<th>Contact2</th>
			<th>Phone2</th>
			<th>Extension2</th>
			<th>Fax</th>
			<th>Email</th>
			<th>Cod</th>
			<th>Taxiden</th>
			<th>Remarks</th>
			<th>Timestamp</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{!! $customer->ID !!}</td>
			<td>{!! $customer->CUSTCODE !!}</td>
			<td>{!! $customer->CUSTNAME !!}</td>
			<td>{!! $customer->ADDRESS1 !!}</td>
			<td>{!! $customer->ADDRESS2 !!}</td>
			<td>{!! $customer->ADDRESS3 !!}</td>
			<td>{!! $customer->CITY !!}</td>
			<td>{!! $customer->STATE !!}</td>
			<td>{!! $customer->ZIP !!}</td>
			<td>{!! $customer->SHIPTO !!}</td>
			<td>{!! $customer->destination_id !!}</td>
			<td>{!! $customer->SHIPVIA !!}</td>
			<td>{!! $customer->carrier_id !!}</td>
			<td>{!! $customer->DEFFREIGHT !!}</td>
			<td>{!! $customer->CONTACT1 !!}</td>
			<td>{!! $customer->PHONE1 !!}</td>
			<td>{!! $customer->EXTENSION1 !!}</td>
			<td>{!! $customer->CONTACT2 !!}</td>
			<td>{!! $customer->PHONE2 !!}</td>
			<td>{!! $customer->EXTENSION2 !!}</td>
			<td>{!! $customer->FAX !!}</td>
			<td>{!! $customer->EMAIL !!}</td>
			<td>{!! $customer->COD !!}</td>
			<td>{!! $customer->TAXIDEN !!}</td>
			<td>{!! $customer->REMARKS !!}</td>
			<td>{!! $customer->TimeStamp !!}</td>
            <td>
                <a href="{!! route('customers.edit', [$customer->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('customers.delete', [$customer->id]) !!}" onclick="return confirm('Are you sure wants to delete this Customer?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
