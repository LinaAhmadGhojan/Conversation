<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
       
      </div>
     
      <!-- partial -->
      <br><br>

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            
   
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <a href="{{ route('seat') }}" class="btn btn-success" style="background-color: #198754;">Rgister Seat</a>

                
              </span>
            </li>

            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <a href="{{ route('invinit') }}" class="btn btn-success" style="background-color: #198754;">Rgister Seat</a>

                
              </span>
            </li>
            
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <a href="{{ route('form.confirm') }}" class="btn btn-success" style="background-color: #198754;">Rgister Seat</a>

                
              </span>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">

                <a href="{{ route('form.invinit') }}" class="btn btn-success" style="background-color: #198754;width: 88%;">+ Add a Invited</a>

                
              </span>
            </li>

          
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper" style="background-color: #19875417">
            <div class="page-header">
              
              
            
              
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body" style="background-color: white;
                  color: #198754;">

                    <h4 class="font-weight-normal mb-3">Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">$ 15,0000</h2>
                    <h6 class="card-text">Increased by 60%</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body" style="background-color: white;
                  color: #198754;">

                    <h4 class="font-weight-normal mb-3">Dashboard <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">45,6334</h2>
                    <h6 class="card-text">Decreased by 10%</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body" style="background-color: white;
                  color: #198754;">

                    <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">95,5741</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                  </div>
                </div>
              </div>
            </div>
   
            
      
            
         
            
       
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
      
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>