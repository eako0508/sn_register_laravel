<?php
/*
namespace App\MyApp;
use App\MyApp\Serial_db;

	$db_class = new Serial_db();
	$db_class.first_index();
	$db_class.just_echo();
*/
?>

@extends('layers.temp')

@section('title', 'Serial Number Registration')

@section('snr-section-form')
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
@endsection

<!--
@foreach($table as $entry)
	<li>{{ $entry->company }}</li>
@endforeach 
-->

<!--
{{$arr = $table->where('company','SECUREPOL')}}
-->

<?php
 $arr = $table->where('company','SECUREPOL');

?>
@foreach($arr as $ent)

{{$ent->invoice}}
@endforeach
