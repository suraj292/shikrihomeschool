<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left p-5">
                    <div class="brand-logo">
                        <img src="{{ asset('admin_assets/images/logo.svg') }}">
                    </div>
                    <h4>Hello Admin! let's get started</h4>
                    <h6 class="font-weight-light">Sign in to continue.</h6>
                    <form class="pt-3" wire:submit.prevent="login">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Username" wire:model.lazy="userName">
                            @error('userName')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" placeholder="Password" wire:model.lazy="password">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @if(session()->has('wrong_credential'))
                        <span class="text-danger">{{ session('wrong_credential') }}</span>
                        @endif
                        <div class="mt-3">
                            <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                        </div>
                        <div class="my-2 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                            </div>
                            <a href="#" class="auth-link text-black">Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>