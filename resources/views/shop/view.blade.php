<!DOCTYPE html>
<html>
<head>
	@include('layouts.app')
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
	<div class="flex">
		<div class="bg-gray-300 w-full h-screen mb-5 p-2" style="margin-left: 400px; margin-right: 400px">
			<h1 class="text-center mt-24 text-3xl">Pancakes</h1>
			@foreach ($products as $product)
    			<p>{{ $product->title }}</p>
				<p>{{ $product->desc }}</p>
			@endforeach
			<a href="{{ url('/create')}}" class="text-center mt-5">Create</a>
		</div>
	</div>
</body>
</html>