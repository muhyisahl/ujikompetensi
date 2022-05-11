@include('style')
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
        style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
        <div class="auth-box row text-center">
            <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/love-pic.jpg);">
            </div>
            <div class="col-lg-5 col-md-7 bg-white">
                <div class="p-3">
                    <img src="../assets/images/big/icon.png" alt="wrapkit">
                    <h2 class="mt-3 text-center">Sign Up for Peduli Diri</h2>
                    <form class="mt-4" method="POST" action="/simpanUser">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-12">
                                <P class="text-danger">
                                    @yield('massage')
                                </P>
                                <div class="form-group">
                                    <input class="form-control" for="password" type="text" name="nik" placeholder="Masukan NIK Anda">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" for="name" type="text" name="nama" placeholder="Masukan Nama Lengkap Anda">
                                </div>
                            </div>
                            {{-- <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="email address">
                                </div>
                            </div> --}}
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-block btn-dark">Sign Up</button>
                            </div>
                            <div class="col-lg-12 text-center mt-5">
                                Already have an account? <a href="/" class="text-danger">Sign In</a>
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
