
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

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
                                        Danh sách quản trị
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
                                            <div class="page-header-icon"><i data-feather="<?= $icon ?? null ?>"></i></div>
                                            Sinh Viên
                                        </h1>
                                        <nav aria-label="breadcrumb">
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="/quan-ly">Trang thống kê</a></li>
                                                <li class="breadcrumb-item active"><a href="#">Danh sách sinh viên</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="card-header">
                        <a href="/student/create" class="btn btn-sm btn-green float-right" type="button">Thêm sinh viên</a>
                    </div>
                    <div class="container mt-3">
                        <table class="table table-bordered">
                                <thead>
                                <tr>
                                        <th>FullName</th>
                                        <th>Birthday</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                        @foreach ($students as $item) 
                                        <tr>
                                                <td>{{$item->fullname}}</td>
                                                <td>{{$item->birthday}}</td>
                                                <td>{{$item->address}}</td>
                                                <td><a href="/student/edit?id={{$item->id}}"><i class="bi bi-pencil-square"></i></a>
                                                        <a class="offset-3" href="/student/delete?id={{$item->id}}" onclick="return confirm('Bạn có chắc muốn xóa không?');"><i class="bi bi-dash-circle-fill" style="color:red"></i></a>
                                                </td>
                                        </tr>
                                        @endforeach
                                
                                </tbody>
                        </table>
                        
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