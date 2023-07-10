

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4.5.1/css/metro-all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <title>
@yield('title')

    </title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-5 fw-bold text-uppercase border-bottom"><i class="fa fa-user" aria-hidden="true"></i>
                User Dashboard</div>
            <div class="list-group list-group-flush my-3">
                <a href="{{url('user/userdashboard')}}" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fa fa-tachometer" aria-hidden="true"></i>
                    Dashboard</a>

                <a href="{{url('user/yourdetails')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa fa-info-circle" aria-hidden="true"></i> Your Details</a>

              

                <a href="{{url('user/usergroupspage')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa fa-users" aria-hidden="true"></i>
                    Groups</a>

                <a href="{{url('user/userlogout')}}" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout</a>
                        
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                     <i class="fa fa-bars primary-text fs-4 me-3"  id="menu-toggle" aria-hidden="true"></i>

                    <h2 class="fs-2 m-0"> @yield('dashboard-title')</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse  container" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user me-2"></i>
                                   Settings

                                </a>
                                <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item" href="#
                                        ">My profile</a></li>
                                <li>
                                    <a class="dropdown-item"  href="{{url('user/userlogout')}}"> Logout
                                    </a>

                                    <form id="logout-form" action="" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                  
                                  
                                </ul>
                              </li>
                       
                    </ul>
                </div>
            </nav>

            @yield('content')
    <!-- /#page-content-wrapper -->
    </div>
    <script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

    @yield('scripts')
</body>

</html>