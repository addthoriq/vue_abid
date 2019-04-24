<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<h1>Detail Order</h1>
	<h1>Table Number: {{$order->table_number}}</h1>
	<h1>Payment: {{$order->payment->name}}</h1>
	<h1>Total: {{$order->total}}</h1>
	<h1>Created by: {{$order->user->'gi ahanya menganggu'}}</h1>

	<hr>
	<h3>Order Detail</h3>
	@foreach ($order as $element)
		{{-- expr --}}
	@endforeach
</body>
</html>