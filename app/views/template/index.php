<!DOCTYPE html>
<html lang="en">
  <head>
    

    <?php include '../app/views/partials/_head.php'; ?>
  </head>
  <body>

   <?php include '../app/views/partials/_nav.php'; ?>
  
    <!-- END nav -->

    <?php include '../app/views/partials/_loader.php'; ?>

    <?php include '../app/views/partials/_main.php';?>
    <?php include '../app/views/partials/_aside.php';?>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <?php include '../app/views/partials/_footer.php' ?>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php include '../app/views/partials/_scripts.php'; ?>

  </body>
</html>
