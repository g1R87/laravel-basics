<x-layout>
    <a href="/" class="btn btn-outline-dark ml-4 mb-4"><i class="fa fa-arrow-left"></i> Back</a>

    <div class="container mt-5">
        <div class="card bg-light border border-secondary p-4 rounded-lg mx-auto" style="max-width: 400px;">
            <div class="card-header text-center">
                <h2 class="text-2xl font-weight-bold text-uppercase mb-1">Create</h2>
                <p class="mb-4">Create an Account</p>
            </div>
            <div class="card-body">
                <form method="POST" action="/users">
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
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                        @error('password')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation"
                            value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <button class="btn btn-primary">Sign Up</button>
                    </div>

                </form>
                <div class="mb-3">Already have an account?
                    <a href="/signin"><button class="btn btn-primary">Log in</button></a>
                </div>
            </div>
        </div>
    </div>


</x-layout>
