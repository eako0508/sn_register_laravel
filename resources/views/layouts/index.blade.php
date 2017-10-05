@extends('layouts.temp')

@section('title', 'Serial Number Registration')

@section('content')
		<section class='snr-section-form'>
			<form class='js-form'>
				<input type="text" name="company_name" placeholder="Company Name" autofocus required>
				<input type="text" name="invoice" placeholder="Invoice number" required>	
				<input type="text" name="product" placeholder="Product">
				<input type="text" name="product_sn" placeholder="Product serial number">
				<input type="text" name="hdd" placeholder="HDD type">
				<input type="text" name="hdd_sn" placeholder="HDD serial number">	
				<input type="submit" name="submit">
			</form>
		</section>

		<section id='section_table'>	
			<table id='list' >
				<tr>
					<th>Company</th>
					<th>Invoice Number</th>
					
					<th>Product</th>
					<th>Product Serial Number</th>
					<th>HDD</th>
					<th>HDD Serial Number</th>
					<th>Created</th>
					<th>Last Updated</th>
				</tr>
				@foreach($table as $db)
					<tr>
					<td>{{$db->company}}</td>
					<td>{{$db->invoice}}</td>
					<td>{{$db->product}}</td>
					<td>{{$db->product_sn}}</td>
					<td>{{$db->hdd}}</td>
					<td>{{$db->hdd_sn}}</td>
					<td>{{$db->created_at}}</td>
					<td>{{$db->updated_at}}</td>
					</tr>
				@endforeach
			</table>
		</section>
@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
@endsection

@section('js')
<script src="{{URL::asset('js/main.js')}}"></script>
@endsection
