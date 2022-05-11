<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <!-- Logo icon -->
                <a href="/dashboard">
                    <h3 class="font-weight-medium text-dark">Peduli Diri</h3>
                    <h6>Catatan Perjalanan</h6>
                    {{-- {{-- <b class="logo-icon"> --}}
                        <!-- Dark Logo icon -->
                        {{-- <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> --}}
                        <!-- Light Logo icon -->
                        {{-- <img src="../assets/images/big/icon.png" alt="homepage" class="light-logo" /> --}}
                    {{-- </b> --}}
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    {{-- <span class="logo-text"> --}}
                        <!-- dark Logo text -->
                        {{-- <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" /> --}}
                        <!-- Light Logo text -->
                        {{-- <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> --}}
                    {{-- </span> --}}
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="javascript:void(0)">
                        <form class="form-inline mr-auto" method="GET" action="/cari">
                            @csrf
                                <div class="col-auto">
                                    <select onchange="yesnoCheck(this);" class="form-control form-select" type="search">
                                        <option value="lokasi">Lokasi</option>
                                        <option value="tanggal">Tanggal</option>
                                        <option value="jam">Jam</option>
                                        <option value="suhu">Suhu</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input name="lokasi" id="iflokasi" class="form-control" type="search" placeholder="Cari Lokasi" aria-label="Search">
                                        <button class="btn" id="ifLokasiBtn" btn-outline-success my-2 my-sm-0 type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                    <div class="form-group">
                                        <input name="tanggal" id="iftgl" style="display: none;" class="form-control" type="date" placeholder="Cari Tanggal" aria-label="Search">
                                        <button id="ifBtnTgl" style="display: none;" btn-outline-success my-2 my-sm-0 type="submit"><i class="fas fa-search"></i></button>
                                    </div>

                                    <div class="form-group">
                                        <input name="jam" id="ifjam" style="display: none;" class="form-control" type="time" placeholder="Cari Jam" aria-label="Search">
                                        <button id="ifBtnjam" style="display: none;" btn-outline-success my-2 my-sm-0 type="submit"><i class="fas fa-search"></i></button>
                                    </div>

                                    <div class="form-group">
                                        <input name="suhu" id="ifsuhu" style="display: none;" class="form-control" type="search" placeholder="Cari Suhu" aria-label="Search">
                                        <button id="ifBtnsuhu" style="display: none;" btn-outline-success my-2 my-sm-0 type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                        </form>
                    </a>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="../assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                            width="40">
                        <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span>
                        <span class="text-dark">
                            @if (!empty(auth()->user()->name))
                            {{ auth()->user()->name }}
                            @else
                            user
                            @endif
                        </span> <i data-feather="chevron-down"
                            class="svg-icon"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        {{-- <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                class="svg-icon mr-2 ml-1"></i>
                            My Profile</a> --}}
                        <a class="dropdown-item" href="/logout"><i data-feather="power"
                                class="svg-icon mr-2 ml-1"></i>
                            Logout</a>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
<script>
    function yesnoCheck(that) {
        if (that.value == "tanggal"){
            document.getElementById("iftgl").style.display = "block";
            document.getElementById("ifBtnTgl").style.display = "block";

            document.getElementById("iflokasi").style.display = "none";
            document.getElementById("ifLokasiBtn").style.display = "none";

            document.getElementById("ifsuhu").style.display = "none";
            document.getElementById("ifBtnsuhu").style.display = "none";

            document.getElementById("ifjam").style.display = "none";
            document.getElementById("ifBtnjam").style.display = "none";

        } else if(that.value == "jam"){
            document.getElementById("iftgl").style.display = "none";
            document.getElementById("ifBtnTgl").style.display = "none";

            document.getElementById("iflokasi").style.display = "none";
            document.getElementById("ifLokasiBtn").style.display = "none";

            document.getElementById("ifsuhu").style.display = "none";
            document.getElementById("ifBtnsuhu").style.display ="none";

            document.getElementById("ifjam").style.display = "block";
            document.getElementById("ifBtnjam").style.display = "block";

        } else if(that.value == "suhu"){
            document.getElementById("iftgl").style.display = "none";
            document.getElementById("ifBtnTgl").style.display = "none";

            document.getElementById("iflokasi").style.display = "none";
            document.getElementById("ifLokasiBtn").style.display = "none";

            document.getElementById("ifsuhu").style.display = "block";
            document.getElementById("ifBtnsuhu").style.display = "block";

            document.getElementById("ifjam").style.display = "none";
            document.getElementById("ifBtnjam").style.display = "none";

        }else{
            document.getElementById("iftgl").style.display = "none";
            document.getElementById("ifBtnTgl").style.display = "none";

            document.getElementById("iflokasi").style.display = "block";
            document.getElementById("ifLokasiBtn").style.display = "block";

            document.getElementById("ifsuhu").style.display = "none";
            document.getElementById("ifBtnsuhu").style.display = "none";

            document.getElementById("ifjam").style.display = "none";
            document.getElementById("ifBtnjam").style.display = "none";
        }
    }
</script>
