<x-auth-layout bodyClass="login-page bg-body-secondary">

    <div class="login-box rounded overflow-hidden">
        <div class="login-logo"> <a href="#"><b>Admin</b>LTE</a> </div> <!-- /.login-logo -->
        <div class="card card-outline card-info">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{route('auth.login.cek')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <input name="email" type="email"  @class(['form-control','is-invalid'=>$errors->has('email')]) placeholder="Email">
                        <div class="input-group-text"> 
                            <span class="bi bi-envelope"></span> 
                        
                        </div>
                        @error('email')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" @class(['form-control','is-invalid'=>$errors->has('password')]) placeholder="Password">
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                        @error('password')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                    </div> <!--begin::Row-->
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input name="remember_me" value="true" class="form-check-input" type="checkbox" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label> </div>
                        </div> <!-- /.col -->
                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>
                <div class="social-auth-links text-center mb-3 d-grid gap-2">
                    <p>- Atau -</p>
                    <a href="{{ route('auth.social',['provider'=>'github']) }}" class="btn btn-secondary"> <i class="bi bi-github me-2"></i> Sign in using GitHub
                    </a>
                    <a href="{{ route('auth.social',['provider'=>'google']) }}" class="btn btn-danger"> <i class="bi bi-google me-2"></i> Sign in using Google
                    </a>
                </div> <!-- /.social-auth-links -->
                <p class="mb-1"> <a href="forgot-password.html">I forgot my password</a> </p>
                <p class="mb-0"> <a href="register.html" class="text-center">
                        Register a new membership
                    </a> </p>
            </div> <!-- /.login-card-body -->
        </div>
    </div> <!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->

</x-auth-layout>
