<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<thead>
		<tr>
			<td>Table Number</td>
			<td>Payment</td>
			<td>Total</td>
			<td>Created_by</td>
			<td>Action</td>
		</tr>
	</thead>

	<tbody>
		@foreache($orders as $row)
			<tr>
				<td>{{$row->table_num}}</td>
				<td>{{$row->payment_nade}}</td>
				<td>{{$row->total}}</td>
				<td>{{$row->user->name}}</td>
			</tr>
			<a href="{{route('route.show',$order->id)}}">Cek</a>
		@endforeache
	</tbody>

</body>
</html>