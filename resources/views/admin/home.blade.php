

<!DOCTYPE html>
<html lang="en">

<head>
 @include('admin.css')
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')

    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
        @include('admin.sidebar')
      <!-- partial:partials/_sidebar.html -->
        @include('admin.body')

      <!-- partial -->
     
      
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  @include('admin.script')
  <!-- End custom js for this page-->
</body>

</html>

