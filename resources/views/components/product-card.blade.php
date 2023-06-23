@props(['product'])
<div class="col-md-3 py-3 py-md-0">
    <div class="card">
        <img src="{{ $product->logo ? asset('storage/' . $product->logo) : asset('asset/image/p13.png') }}"
            alt="no image">
        <div class="card-body">
            <a href="/products/{{ $product['id'] }}">
                <h3>{{ $product['name'] }}</h3>
            </a>
            <p>Lorem ipsum dolor sit amet.</p>
            <div class="star">
                <x-product-tags :tagsCsv="$product['tags']" />
            </div>
            <h5>${{ $product['price'] }}<span><i class="fa-solid fa-cart-shopping"></i></span></h5>
        </div>
    </div>
</div>
