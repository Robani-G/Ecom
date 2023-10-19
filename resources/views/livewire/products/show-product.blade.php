<div>
    <div class=" flex  flex-row gap-4">
    @foreach($products as $product)

        <div wire:key={{$product->id}} class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow  ">
            <a href="#" class="h-12" >
                <img class="p-8 rounded-t-lg " src="/storage/{{ $product->Images }}" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="{{route('single-list/{{$product->id}}')}}">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">{{$product->name}}</h5>
                </a>
                {{$product->description}}
               
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 ">{{$product->price}} ETB </span>
                    <a wire:click="store({{$product ->id}}, '{{$product ->name}}', {{$product ->price}})" href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                </div>
    </div>

</div>

    @endforeach
</div>

</div>
