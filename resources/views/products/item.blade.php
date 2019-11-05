@include('layouts/header')
<div class="bg-gray-300 mb-5" style="background-color: #F3F3F5; margin-right: 320px; margin-left: 320px; height: 900px;">
	<div class="font-hairline pt-24 px-48">
    	<a href="{{ url('/home')}}">Home</a><span> /</span>
    	<a href="{{ url('/shop')}}">Shop</a><span> /</span>
    	{{ $product->title }}
	</div>
	<div class="w-full flex flex-wrap mt-10 px-48">
		<div class="w-7-12" style="background-color: #EBCCDD; padding: 250px">
		</div>
		<div class="w-5-12 ml-8">
			<form method="POST" action="{{ url('cart/add/' . $product->id)}}" class="">
				@csrf

				<h1 class="font-hairline text-2xl">{{ $product->title }}</h1>
				<h1 class="text-2xl"><span>ID: </span>{{ $product->id }}</h1><br>
				<p>{{ $product->price }}</p>
				<p class="font-hairline mt-5">Quantity</p>
				<input name="quantity" class="mt-3 border border-black p-2" type="number" value="1"></input><br>
				<button class="bg-black mt-8 px-24 py-2 text-white font-hairline">ADD TO CART</button>
				<p class="font-hairline mt-10">PRODUCT INFO:</p>
				<p class="mt-5">{{ $product->desc }}</p>
				@if (session()->has('error'))
					<span>{{ session()->get('error') }}</span>
				@endif
			</form>
		</div>
	</div>
</div>