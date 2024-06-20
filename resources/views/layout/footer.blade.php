   <footer class="footer-section footer-bg">
       <div class="footer-wrapper">
           <!-- Start Footer Top -->
           <div class="footer-top">
               <div class="container">
                   <div class="row mb-n6">
                       <div class="col-lg-3 col-sm-6 mb-6">
                           <!-- Start Footer Single Item -->
                           <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                               data-aos-delay="0">
                               <h5 class="title">INFORMATION</h5>
                               <ul class="footer-nav">
                                   <li><a href="#">Shipping Information</a></li>

                                   <li><a href="/contact-us">Contact</a></li>

                               </ul>
                           </div>
                           <!-- End Footer Single Item -->
                       </div>
                       <div class="col-lg-3 col-sm-6 mb-6">
                           <!-- Start Footer Single Item -->
                           <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                               data-aos-delay="200">
                               <h5 class="title">MY ACCOUNT</h5>
                               <ul class="footer-nav">

                                   <li><a href="/wishlist">Wishlist</a></li>
                                   <li><a href="/privacy-policy">Security</a></li>
                                   <li><a href="/faq">FAQ</a></li>

                               </ul>
                           </div>
                           <!-- End Footer Single Item -->
                       </div>
                       <div class="col-lg-3 col-sm-6 mb-6">
                           <!-- Start Footer Single Item -->
                           <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                               data-aos-delay="400">
                               <h5 class="title">CATEGORIES</h5>
                               <ul class="footer-nav">
                                   <li><a href="#">Shirts</a></li>
                                   <li><a href="#">Bags</a></li>
                                   <li><a href="#">Pants</a></li>
                                   <li><a href="#">Shoes</a></li>

                               </ul>
                           </div>
                           <!-- End Footer Single Item -->
                       </div>

                       <div class="col-lg-3 col-sm-6 mb-6">
                           <!-- Start Footer Single Item -->
                           <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
                               data-aos-delay="600">
                               <h5 class="title">ABOUT US</h5>
                               <div class="footer-about">
                                   <p>We, Group 2, created a ClassicThrift website for the PWEB2 Project
                                   </p>

                                   <address class="address">
                                       <span>Address: Jl. Mendalo</span>
                                       <span>Email: ClassicThrift@gmail.com</span>
                                   </address>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- End Footer Top -->

           <!-- Start Footer Center -->

           <!-- Start Footer Center -->

           <!-- Start Footer Bottom -->

           <!-- End Footer Section -->

           <!-- material-scrolltop button -->
           <button class="material-scrolltop" type="button"></button>

           <!-- Start Modal Add cart -->


           <!-- Start Modal Quickview cart -->


           <script src="{{ asset('js/vendor/vendor.min.js') }}"></script>
           <script src="{{ asset('js/plugins/plugins.min.js') }}"></script>
           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
           @if (session('success'))
               <script>
                   Swal.fire({
                       title: 'Registration Successful!',
                       text: "{{ session('success') }}",
                       icon: 'success',
                       confirmButtonText: 'OK'
                   });
               </script>
           @endif


           <!-- Main JS -->
           <script src="{{ asset('js/main.js') }}"></script>

           </body>



           </html>
