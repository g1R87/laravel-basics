<x-layout>
    <a href="/" class="btn btn-outline-dark ml-4 mb-4"><i class="fa fa-arrow-left"></i> Back</a>

    <div class="d-flex flex-column align-items-center justify-content-center text-center">
        <img class="w-48 mr-6 mb-6"
            src="{{ $product->logo ? asset('storage/' . $prodcut->logo) : asset('asset/image/p13.png') }}" alt="">
        <h3 class="h2 mb-2">{{ $product->name }}</h3>
        <div class="h4 font-weight-bold mb-4">{{ $product->company }}</div>
        <x-product-tags :tagsCsv="$product->tags" />
        <div class="h5 my-4">
            <h5>${{ $product['price'] }}<span></span></h5>
        </div>
        <div class="border border-gray-200 w-100 mb-6"></div>
        <div>
            <h3 class="h2 font-weight-bold mb-4">
                Description
            </h3>
            <div class="h5 my-4">
                <p>{{ $product->description }}</p>

                <a href="{{ $product->website }}" target="_blank" class="btn btn-dark text-white py-2 rounded-xl">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </div>

</x-layout>
