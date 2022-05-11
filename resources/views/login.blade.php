@include('style')
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/love-pic.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="../assets/images/big/icon.png" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Masukan NIK dan Nama lengkap yang sudah di daftarkan.</p>
                        <form class="mt-4" method="POST" action="/postLogin" class="needs-validation" novalidate="">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>
                                            @yield('massage')
                                        </p>
                                        <label class="text-dark" for="email">NIK</label>
                                        <input class="form-control" id="email" type="text" name="email"
                                            placeholder="Masukan NIK">
                                            <input class="form-control" id="password" type="hidden" name="password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="name">Nama Lengkap</label>
                                        <input class="form-control" id="name" type="text" name="nama"
                                            placeholder="Masukan Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Sign In</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Don't have an account? <a href="/register" class="text-danger">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->

        <script>
            window.onload = function() {
                var src = document.getElementById("email"),
                dst = document.getElementById("password");
                src.addEventListener('input', function() {
                    dst.value = src.value;
                });
            };
        </script>

