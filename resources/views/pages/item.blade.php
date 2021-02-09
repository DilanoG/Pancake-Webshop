@include('layouts/header')

<div class="bg-gray-300 py-5" style="background-color: #F3F3F5;">
	<div class="w-full flex flex-wrap px-48">
    <img class="w-1/4 h-1/4" src="images/Pancakeee.png">
		<div>
			<form method="POST" action="{{ url('cart/add/' . $product->id)}}" class="">
				@csrf
				<h1 class="text-sm text-2xl">{{ $product->title }}</h1>
				<p>{{ $product->price }}</p>
				<p class="text-sm mt-5">Quantity</p>
				<input name="quantity" class="mt-3 border border-black p-2" type="number" value="1"></input><br>
				<button class="bg-black mt-8 px-24 py-2 text-white text-sm">ADD TO CART</button>
				<p class="text-sm mt-10">PRODUCT INFO:</p>
				<p class="mt-5">{{ $product->desc }}</p>
			</form>
		</div>
	</div>
</div>