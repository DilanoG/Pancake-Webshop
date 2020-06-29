@include('layouts/header')
<body>
	<div class="container mx-auto">
        <h1 class="my-5 ml-10">Shoppingcart</h1>
        @if($items != null)
            @foreach($items as $item)
                <div class="flex border-b border-grey mb-2 m-3">
                    <div class="flex p-4 w-full">
                        <p class="text-black">{{$item['title']}} <span class="text-grey block"></span></p>
                        <div class="flex flex-1 justify-end items-center">
                            <p class="text-black">${{$item['price']}}</p>
                        </div>
                    </div>
        			<div class="flex flex-1 justify-end items-center">
                        <form id="{{ $item['id'] }}" autocomplete="off"  method="POST" action="{{ url('/cart/update/' . $item['id']) }}" >
            				@csrf
                            <select name="quantity" onchange="submit{{ $item['id'] }}()" class="bg-white border border-black ml-1">
                                @for($i = 1; $i <= 10; $i++)
                                    <option @if($item['quantity'] == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
                                @endfor
            				</select>
                            <noscript><input type="submit" value="Submit"></noscript>
                        </form>
                        <a href="{{ url('/cart/delete/' . $item['id'])}}" class="p-2">X</a>
                    </div>
                </div>
            @endforeach
            @php
                $total = 0;
                foreach ($items as $item) {
                    $total += ($item['price'] * $item['quantity']);
                }
                $price = $total
            @endphp
            <div class="flex justify-end mt-5 items-center">
                <p class="mr-4">Total: ${{ $price }}</p>
                <a href="{{ url('/cart') }}" class="py-2 px-10 m-2" href="#">Pay</a>
                <a href="{{ url('/cart/clear')}}">
					<button class="bg-black text-white py-2 px-3 m-2">Clear cart</button>
				</a>
            </div>
        @else
            <p class="text-center mb-20">Shoppingcart is empty</p>
        @endif
    </div>
    <script type="text/javascript">
        @if($items != null)
            @foreach($items as $item)
            function submit{{ $item['id'] }}(){
                document.getElementById("{{ $item['id'] }}").submit();
            }
            @endforeach
        @endif
    </script>
</body>
</html>