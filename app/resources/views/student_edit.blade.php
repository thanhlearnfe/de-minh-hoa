<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand" href="/">Phan Xuân Thành</a>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <div id="layoutSidenav">
                    <div id="layoutSidenav_nav">
                        <nav class="sidenav shadow-right sidenav-light">
                            <div class="sidenav-menu">
                                <div class="nav accordion" id="accordionSidenav">
                                    <div class="sidenav-menu-heading d-sm-none">Account</div>
                                    <div class="sidenav-menu-heading">Quản trị</div>
                                    <a class="nav-link collapsed" href="/student/show" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="nav-link-icon"><i data-feather="users"></i></div>
                                        Danh sách sinh viên
                                    </a>
                                </div>
                            </div>
                            <div class="sidenav-footer">
                                <div class="sidenav-footer-content">
                                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                                    <div class="sidenav-footer-title">Thành</div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-fluid">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            Sửa thông tin sinh viên
                                        </h1>
                                        <nav aria-label="breadcrumb">
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="/quan-ly">Trang thống kê</a></li>
                                                <li class="breadcrumb-item active"><a href="#">Sửa thông tin sinh viên</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="container-fluid mt-n10">
                        <div class="card">
                            
                            <div class="card-body">
                                <form  action="/student/update" method="post">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="id" value="{{$student[0]->id}}" />
                                    <input class="form-control mb-2" name="fullname" type="text" placeholder="FullName" value="{{$student[0]->fullname}}">
                                    <input class=" form-control mb-2" name="birthday" type="text" placeholder="Birthday" value="{{$student[0]->birthday}}">
                                    <input class=" form-control mb-2" name="address" type="text" placeholder="Address" value="{{$student[0]->address}}">
                                    <div class=" action-group mt-2 float-right">
                                        <input type="submit"class="btn btn-primary btn-submit" value="Submit">
                                    </div>
                            </form>
                        </div>
                    </div>
            </div>
            </main>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &#xA9; Your Website 2021</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &#xB7;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        </div>
        <div id="thongBao"></div>
</body>

</html>