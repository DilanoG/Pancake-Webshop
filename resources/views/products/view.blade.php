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
			<div class="w-full flex">
				@foreach ($products as $product)
				<div class="w-1/3 border border-black">
					<p>{{ $product->title }}</p>
					<p>{{ $product->desc }}</p>
					<a href="{{ url('products/edit/' . $product->id)}}" class="text-center mt-5">edit</a>
					<a href="{{ url('products/delete/' . $product->id)}}" class="text-center mt-5">delete</a>
				</div>
				@endforeach
			</div>
			<a href="{{ url('products/create')}}" class="text-center mt-5">Create</a>
		</div>
	</div>
	<div class="flex">
		<div class="bg-gray-300 w-full h-screen mb-5 p-2" style="margin-left: 400px; margin-right: 400px">
			<h1 class="text-center mt-24 text-3xl">Catagories</h1>
			<div class="w-full flex">
				@foreach ($categories as $category)
				<div class="w-1/3 border border-black">
					<p>{{ $category->title }}</p>
					<a href="{{ url('category/edit/' . $category->id)}}" class="text-center mt-5">edit</a>
					<a href="{{ url('category/delete/' . $category->id)}}" class="text-center mt-5">delete</a>
				</div>
				@endforeach
			</div>
			<a href="{{ url('category/create')}}" class="text-center mt-5">Create</a>
		</div>
	</div>
</body>
</html>