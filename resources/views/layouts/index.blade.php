@extends('layouts.temp')

@section('title', 'Serial Number Registration')

@section('content')
		<section class='snr-section-form'>
			<form class='js-form' action='#'>
				{{csrf_field()}}
				<input type="text" name="company" id='company' placeholder="Company Name" autofocus required>
				<input type="text" name="invoice" id='invoice' placeholder="Invoice number" required>	
				<input type="text" name="product" id='product' placeholder="Product">
				<input type="text" name="product_sn" id='product_sn' placeholder="Product serial number">
				<input type="text" name="hdd" id='hdd' placeholder="HDD type">
				<input type="text" name="hdd_sn" id='hdd_sn' placeholder="HDD serial number">	
				<input type="submit" name="submit">
			</form>
		</section>

		<section id='section_table'>	
			<table id='list' >
				<tr id='table_title'>
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
			</table>
		</section>
@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
@endsection

@section('js')
<script src="{{URL::asset('js/main.js')}}"></script>
@endsection
