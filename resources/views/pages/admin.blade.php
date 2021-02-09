@include('layouts/header')


<div class="mt-10 px-4 sm:px-6">
    <h3 class="text-lg leading-6 font-bold text-gray-900 text-center">
        Users
    </h3>
</div>
<div class="flex justify-center mt-2">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 w-2/5 ">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-t border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Created on
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Role
                            </th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $user->name }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $user->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $user->created_at }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="text-sm text-gray-900">{{ $user->role }}</div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<div class="px-4 sm:px-6 mt-10">
    <h3 class="text-lg leading-6 font-bold text-gray-900 text-center">
        Categories
    </h3>
</div>
<div class="flex justify-center mt-2">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 w-2/5 ">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-t border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                        </tr>
                    </thead>
                    @foreach ($categories as $category)
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $category->title }}
                                    </div>
                                </div>
                            </td>
                            <td class=" py-4 text-sm text-gray-500 float-right">
                                <a href="{{ url('category/edit/' . $category->id)}}" class="bg-black rounded-lg text-sm text-white text-center px-3 py-1 transition duration-300 ease-in-out mx-1">
                                    Edit
                                </a>
                            </td>
                            <td class=" py-4 text-sm text-gray-500 float-right">
                                <a href="{{ url('category/delete/' . $category->id)}}" class="bg-black rounded-lg text-sm text-white text-center px-3 py-1 transition duration-300 ease-in-out">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<div class="flex justify-center">
    <a href="{{ url('/category/create')}}" class="bg-black rounded-lg text-base text-white text-center px-3 py-1 mt-3">
        Create
    </a>
</div>


<div class="px-4 pt-5 sm:px-6 mt-10">
    <h3 class="text-lg leading-6 font-bold text-gray-900 text-center">
        Products
    </h3>
</div>
<div class="flex justify-center mt-2">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 w-2/5 ">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-t border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Category
                            </th>
                        </tr>
                    </thead>
                    @foreach ($products as $product)
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $product->title }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $product->desc }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $product->price }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $product->category->title }}
                                    </div>
                                </div>
                            </td>
                            <td class=" py-4 text-sm text-gray-500 float-right">
                                <a href="{{ url('product/edit/' . $product->id)}}" class="bg-black rounded-lg text-sm text-white text-center px-3 py-1 transition duration-300 ease-in-out mx-1">
                                    Edit
                                </a>
                            </td>
                            <td class=" py-4 text-sm text-gray-500 float-right">
                                <a href="{{ url('product/delete/' . $product->id)}}" class="bg-black rounded-lg text-sm text-white text-center px-3 py-1 transition duration-300 ease-in-out">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<div class="flex justify-center pb-10">
    <a href="{{ url('/product/create')}}" class="bg-black rounded-lg text-base text-white text-center px-3 py-1 my-3 mb-5">
        Create
    </a>
</div>

@include('layouts/footer')