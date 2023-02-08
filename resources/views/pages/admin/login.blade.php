<x-layouts.app title="Login">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center" style="width: 100vw;min-height: 100vh;">
                <form method="POST" action="{{ route('admin.auth.post') }}" style="width: 600px" class="mw-75 bg-light shadow-lg p-3">
                    @csrf
                    <h4 class="text-secondary text-center fs-3">Login</h4>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                      
                      @error('email')
                        <span class="text-danger mt-1">{{ $message }}</span>
                      @enderror
                    
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input name="password" type="password" class="form-control" id="password">

                      @error('password')
                        <span class="text-danger mt-1">{{ $message }}</span>
                      @enderror

                      @error('unauth')
                        <span class="text-danger mt-1">{{ $message }}</span>
                      @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
            </div>
        </div>
    </div>
</x-layouts.app>