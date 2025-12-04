<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('style.css') }}">
	<title>Prasojo App</title>
</head>
<body>
	
	<x-sidebar />

	<!-- NAVBAR -->
	<section id="content">
		<x-navbar />

		<!-- MAIN -->
		<main>
			{{ $slot }}
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="{{ asset('script.js') }}"></script>
</body>
</html>