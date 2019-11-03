@include('layouts/header')

<h1>Admin panel</h1>
<div class="flex justify-center">
    <div class="w-1/2 border h-screen">
        <h2 class="text-center">Products</h2>
        @foreach ($products as $product)
            <div class="w-full bg-black text-white py-3">
                <div class="flex">
                    <p>{{ $product->id }}</p>
                    <p>{{ $product->title }}</p>
                </div>
                <p>{{ $product->desc }}</p>
            </div>         
        @endforeach

        <h2 class="text-center">Categories</h2>
        @foreach ($categories as $category)
            <div class="w-full bg-black text-white py-3">
                <div class="flex">
                    <p>{{ $category->id }}</p>
                    <p>{{ $category->title }}</p>
                    <div class="flex flex-1 justify-end">
                        <p>Edit</p>
                        <p>Delete</p>
                    </div>
                </div>
                <p>{{ $category->desc }}</p>
            </div>         
        @endforeach
    </div>
</div>