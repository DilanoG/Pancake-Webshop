<!DOCTYPE html>
<html>
<head>
	@include('layouts.app')
	
</head>
<body>
	<div class="w-8/12 bg-red-400 m-auto text-white" style="height: 700px">
		<div class="pt-40 ml-32 text-5xl" style="font-family: palatino linotype, serif;">
			<p >The Best</p>
			<p>Pancakes</p>
			<p>In The World.</p>
		</div>
		<button class="text-black text-base px-4 py-2 ml-32 mt-20 bg-white font-hairline"><a href="{{ url('/shop')}}">Shop Now</a></button>
	</div>
</body>
</html>