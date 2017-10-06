@extends('layouts.temp')

@section('title', 'Serial Number Registration')

@section('content')
		<section class='snr-section-form'>
			<form class='js-form' method='post' action='/posts'>
				{{csrf_field()}}
				<input type="text" name="company" placeholder="Company Name" autofocus required>
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
					<th>Edit</th>
				</tr>
				@foreach($table as $db)
					<tr>
						<form class='js-edit' method='post' action='/delete/{{$db->id}}'>
						{{csrf_field()}}
						<input type='hidden' name='_method' value='DELETE'>
						<td>{{$db->company}}</td>
						<td>{{$db->invoice}}</td>
						<td>{{$db->product}}</td>
						<td>{{$db->product_sn}}</td>
						<td>{{$db->hdd}}</td>
						<td>{{$db->hdd_sn}}</td>
						<td>{{$db->created_at}}</td>
						<td>{{$db->updated_at}}</td>
						<td><input type='submit' class='button edit-btn' value='Remove'></td>
						</form>
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
