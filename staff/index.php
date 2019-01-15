<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  
  <?php  include("../resourses/css.php");?>
</head>
<body>
  <?php  include("components/left-panel.php");?>
  <div id="right-panel" class="right-panel">
    <?php  include("../resourses/header.php");?>

    <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1>Dashboard</h1>
              </div>
          </div>
      </div>
      <div class="col-sm-8">
          <div class="page-header float-right">
              <div class="page-title">
                  <ol class="breadcrumb text-right">
                      <li><a href="index.php">Dashboard</a></li>
                  </ol>
              </div>
          </div>
      </div>
    </div>


    <!-- Main Content -->
    <div class="content mt-3">
      <div class="animated fadeIn">
        <h1>This is my dashboard for Staff</h1>

      </div>
    </div>
  </div>

  <?php  include("../resourses/js.php");?>
  
</body>
</html>