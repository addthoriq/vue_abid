<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Order List</h1>
	<a href="{{route()}}"></a>

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
			<form method="post" action="{{ route('orders.destroy',$order->id) }}">
				<a href="{{route('orders.show',$order->id)}}">Detail</a>
				<a href="{{route('orders.edit',$order->id)}}">edit</a>
				@csrf @method('DELETE')
				<button>Delete</button>
			</form>
		@endforeache
	</tbody>

</body>
</html>