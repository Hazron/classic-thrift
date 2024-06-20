@include('layout.navbar')
<!-- Offcanvas Overlay -->
<div class="offcanvas-overlay"></div>
<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Registrasi</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Customer Login Section :::... -->
<div class="customer-login">
    <div class="container">
        <div class="row">
            <!--register area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                    <h3>Register</h3>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="default-form-box">
                            <label>Name <span>*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="default-form-box">
                            <label>Email address <span>*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="default-form-box">
                            <label>Password <span>*</span></label>
                            <input type="password" name="password" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="default-form-box">
                            <label>Alamat <span>*</span></label>
                            <input type="text" name="alamat" required>
                            @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="default-form-box">
                            <label>Confirm Password <span>*</span></label>
                            <input type="password" name="password_confirmation" required>
                        </div>
                        <div class="login_submit">
                            <button class="btn btn-md btn-black-default-hover" type="submit">Register</button>
                            <p class="text-center">Already have an account? <a
                                    href="{{ route('indexlogin') }}">Signin</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div> <!-- ...:::: End Customer Login Section :::... -->

<!-- Start Footer Section -->
@include('layout.footer')

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@endsection
