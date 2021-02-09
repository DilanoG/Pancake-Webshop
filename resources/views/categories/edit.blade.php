@include('layouts/header')

<div class="flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-4 lg:px-8">
    <div class="max-w-md w-full space-y-2">
        <div>
            <h2 class=" text-center text-3xl font-bold text-gray-900">
                Edit a Category
            </h2>
        </div>
        <form class="mt-8 space-y-3" action="{{ url('category/edit/' . $category->id)}}" method="post" autocomplete="off">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <input value="{{ $category->title }}" name="title" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-black focus:border-black focus:z-10 sm:text-sm" placeholder="Title">
            </div>
            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-black hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">Edit Category</button>
        </form> 