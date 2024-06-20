@include('layout.navbar')<!-- Offcanvas Overlay -->
<div class="offcanvas-overlay"></div>

<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Login</h3>
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
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="account_form" data-aos="fade-up" data-aos-delay="0">
                    <h3 class="text-center">Login</h3>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="default-form-box">
                            <label>Email <span>*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
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
                        <div class="login_submit">
                            <button class="btn btn-md btn-black-default-hover mb-4" type="submit">Login</button>
                            <a href="{{ route('indexregis') }}">Belum punya akun?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- ...:::: End Customer Login Section :::... -->
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
@include('layout.footer')
