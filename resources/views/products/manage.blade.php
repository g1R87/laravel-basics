<x-layout>
    <div class="container">
        <div class="card p-10">
            <header>
                <h1 class="text-3xl text-center font-bold my-6 uppercase">
                    Manage your products
                </h1>
            </header>

            <table class="table table-bordered table-striped">
                <tbody>
                    @unless ($products->isEmpty())
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-4 py-3 border-top border-bottom">
                                    <a href="/products/{{ $product['id'] }}">
                                        {{ $product->name }}
                                    </a>
                                </td>
                                <td class="px-4 py-3 border-top border-bottom">
                                    <a href="/products/{{ $product->id }}/edit" class="btn btn-primary"><i
                                            class="fas fa-pen"></i> Edit</a>
                                </td>
                                <td class="px-4 py-3 border-top border-bottom">
                                    <form method="POST" action="/products/{{ $product->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-4 py-3 border-top border-bottom" colspan="3">
                                <p class="text-center">No products</p>
                            </td>
                        </tr>
                    @endunless
                </tbody>
            </table>
        </div>
    </div>

</x-layout>
