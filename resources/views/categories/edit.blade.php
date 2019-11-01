@include('layouts.app')
<div class="flex justify-center w-full mt-10">
    @if ($errors)
        <div class="text-red rounded mt-2">
            <span>
                <strong class="block">{{ $errors->first('title') }}</strong>
            </span>
        </div>
    @endif
    <form action="{{ url('category/edit/' . $category->id)}}" method="post" autocomplete="off">
        @csrf
        <p>Title</p>
        <input value="{{ $category->title }}" class="border border-black" name="title"/>
        <button class="border border-black px-3 py-2 mt-4 bg-white">Add Product</button>
    </form>
</div>
