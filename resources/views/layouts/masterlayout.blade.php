

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <title>
@yield('title')

    </title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-5 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>ADMIN Dashboard</div>
            <div class="list-group list-group-flush my-3">
                <a href="admindashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>

                <a href="userdetails" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-user"></i>User Details</a>

              

                <a href="adminreports" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Reports</a>

                <a href="adminlogout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
                        
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0"> @yield('dashboardTitle')</h2>
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
                                    <a class="dropdown-item"  href="{{url('admin/logout')}}"> Logout
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