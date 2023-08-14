<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Nakami | <?php echo "$judul"; ?></title>
	<link rel="icon" type="image/x-icon" href="<?php echo base_url('Aset/logo.png') ?>">
	<style type="text/css">
		input{
			text-align: center;
		}
		footer {
		  position: absolute;
		  right: 0;
		  bottom: 0;
		  left: 0;
		  text-align: center;
		}
	</style>
	<title></title>
</head>
<body>
	<div class="bg-[#919191] w-full"><pre> </pre> </div>
	<div class="container mx-auto grid grid-cols-4">
		<div>
			<img src="<?php echo base_url('Aset/logo-text.png') ?>">
		</div>
		<div class="col-span-3">
			<h2 class="text-4xl font-bold pt-[5%]"><?php echo $judul; ?></h2>
		</div>	
	</div>
	<div class="container mx-auto grid grid-cols-6 gap-4">
		
		