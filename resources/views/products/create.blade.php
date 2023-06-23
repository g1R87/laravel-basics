<x-layout>
    <a href="/" class="btn btn-outline-dark ml-4 mb-4"><i class="fa fa-arrow-left"></i> Back</a>

    <div class="container mt-5">
        <div class="card bg-light border border-secondary p-4 rounded-lg mx-auto" style="max-width: 400px;">
            <div class="card-header text-center">
                <h2 class="text-2xl font-weight-bold text-uppercase mb-1">Create</h2>
                <p class="mb-4">Create a new product</p>
            </div>
            <div class="card-body">
                <form method="POST" action="/products" enctype="multipart/form-data">
                    <!-- prevent people to have form on their website submitting to this endpoint -->
                    <!-- prevents cross-site scripting attack -->
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="company" class="form-label">Company</label>
                        <input type="text" class="form-control" name="company" placeholder="Example: Apple"
                            value="{{ old('company') }}">
                        @error('company')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags (Comma Separated)</label>
                        <input type="text" class="form-control" name="tags" placeholder="Example: Mens, White, XL"
                            value="{{ old('tags') }}">
                        @error('tags')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                        @error('price')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>




                    <div class="mb-3">
                        <label for="logo" class="form-label">Picture</label>
                        <input type="file" class="form-control" name="logo">
                        @error('logo')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Product Description</label>
                        <textarea class="form-control" name="description" rows="10" placeholder="Include specification, description, etc">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Create</button>
                        <a href="/" class="text-black ml-4">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-layout>
