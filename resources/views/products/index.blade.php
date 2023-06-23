<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <!-- product cards -->
    <div class="container" id="product-cards">
        <h1 class="text-center">PRODUCT</h1>
        <div class="row" style="margin-top: 30px;">
            @unless (count($products) == -0)
                @foreach ($products as $product)
                    <x-product-card :product="$product" />
                @endforeach

            @endunless


        </div>


        {{-- <a href="clothe.html" id="viewmorebtn">View More</a> --}}
    </div>
    <!-- product cards -->
</x-layout>
