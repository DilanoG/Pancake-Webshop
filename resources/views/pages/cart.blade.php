@include('layouts/header')

@if($items != null)
@foreach($items as $item)
<div class="mt-20">
	<div class="border border-black">
		<p>ID</p>
		{{ $item['id'] }}
	</div>
	<div class="border border-black">
		<p>Title</p>
		{{ $item['title'] }}
	</div>
	<div>
		<p>Quantity:</p>
		<form id="{{ $item['id'] }}" autocomplete="off"  method="POST" action="{{ url('/cart/update/' . $item['id']) }}">
			@csrf
			<select onchange="submit{{ $item['id'] }}()" name="quantity">
				@for($i = 1; $i <= 10; $i++)
					<option @if($item['quantity'] == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
				@endfor
			</select>
		</form>
	</div>
	<div>
		<p>Price</p>
		{{ $item['price'] }}
	</div>
	<a href="{{ url('/cart/delete/' . $item['id']) }}">x</a>
</div>
@endforeach
<a href="{{ url('/cart/clear')}}">
	<button class="bg-black text-white py-2 px-3 mt-4">Clear cart</button>
</a>
@else
<p>Cart is empty</p>
@endif


<script type="text/javascript">
	@if($items != null)
		@foreach($items as $item)
		function submit{{ $item['id'] }}(){
			document.getElementById("{{ $item['id'] }}").submit();
		}
		@endforeach
	@endif
</script>