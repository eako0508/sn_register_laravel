<!DOCTYPE html>
<html lang='en'>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
	
</head>
<body>
	@yield('nav')
	<main>
		<nav role='banner'>
			<a href="">Serial Number Registration</a>
			<a href="">Product Register</a>
			<a href="">Search</a>
			<a href="">Old Serial Search</a>
		</nav>

		<h1 id='title'>@yield('title')</h1>
		<!--
		
		<div id='form_pt1'>
		
		-->

		@yield('snr-section-form')
		<!--
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
		-->
		<section id='section_table'>	
			<table id='list' >
				<tr>
					<th>Company</th>
					<th>Invoice Number</th>
					
					<th>Product</th>
					<th>Product Serial Number</th>
					<th>HDD</th>
					<th>HDD Serial Number</th>
					<th>Date</th>
				</tr>
				<tr>
					<td>something</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</section>
	</main>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>
