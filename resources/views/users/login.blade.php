<x-layout>
    <a href="/" class="btn btn-outline-dark ml-4 mb-4"><i class="fa fa-arrow-left"></i> Back</a>

    <div class="container mt-5">
        <div class="card bg-light border border-secondary p-4 rounded-lg mx-auto" style="max-width: 400px;">
            <div class="card-header text-center">
                <h2 class="text-2xl font-weight-bold text-uppercase mb-1">Log in</h2>
                <p class="mb-4">Log in to your account</p>
            </div>
            <div class="card-body">
                <form method="POST" action="/users/authenticate">
                    <!-- prevent people to have form on their website submitting to this endpoint -->
                    <!-- prevents cross-site scripting attack -->
                    @csrf


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
                        <button class="btn btn-primary">Log In</button>
                    </div>

                </form>
                <div class="mb-3">Don't have an account?
                    <a href="/signup"><button class="btn btn-primary">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>


</x-layout>
