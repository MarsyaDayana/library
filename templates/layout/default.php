<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <?= $this->Html->css('/plugins/fontawesome-free/css/all.min.css') ?> 
    <?= $this->Html->css('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?> 
    <?= $this->Html->css('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?> 
    <?= $this->Html->css('/plugins/jqvmap/jqvmap.min.css') ?> 
    <?= $this->Html->css('/dist/css/adminlte.min.css') ?> 
    <?= $this->Html->css('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?> 
    <?= $this->Html->css('/plugins/daterangepicker/daterangepicker.css') ?> 
    <?= $this->Html->css('/plugins/summernote/summernote-bs4.min.css') ?>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->

 
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">

        <?php echo $this->Html->image('/dist/img/AdminLTELogo.png',['class' =>'animation__shake', 'height'=>60, 'width'=>60, 'alt'=>'AdminLTELogo']); ?>
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">

        <?php echo $this->Html->image('/dist/img/AdminLTELogo.png' , ['class' => 'brand-image img-circle elevation-3' , 'style' => 'opacitiy: .8' , 'alt' => 'AdminLTE logo']); ?>


          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
             
              <?php echo $this->Html->image('/dist/img/user2-160x160.jpg' , ['class' => 'img-circle elevation-2' , 'alt' => 'User Image']); ?>

            </div>
            <div class="info">
              <a href="#" class="d-block">Marsya Dayana</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              
              <li class="nav-item">
                <li class="nav-link">
                <?= $this->Html->link('&nbsp &nbsp Dashboard', '/', ['escape' => false, 'class' => 'far fa-circle nav-icon' ]); ?>
              </li>
            </li>
              <li class="nav-item">
                <li class="nav-link">
                <?= $this->Html->link('&nbsp &nbsp Books', '/books', ['escape' => false, 'class' => 'fa fa-book']); ?>
              </li>
            </li>
              <li class="nav-item">
                <li class="nav-link">
                <?= $this->Html->link('&nbsp &nbsp Magazines', '/magazines', ['escape' => false, 'class' => 'fas fa-book-open']); ?>
              </li>
            </li>
              <li class="nav-item">
                <li class="nav-link">
                <?= $this->Html->link('&nbsp &nbspNewspaper', '/newspapers', ['escape' => false, 'class' => 'fa fa-newspaper-o']); ?>
              </li>
            </li>
              <li class="nav-item">
                <li class="nav-link">
                <?= $this->Html->link('&nbsp &nbsp Borrow Details', '/borrows', ['escape' => false, 'class' => 'fas fa-hand-holding']); ?>
              </li>
            </li>
            <li class="nav-item">
                <li class="nav-link">
                <?= $this->Html->link('&nbsp &nbsp Issued', '/issueds', ['escape' => false, 'class' => 'fa fa-space-shuttle']); ?>
              </li>
            </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <p class="nav-link">Returned</p>
                  </li>
                  <li class="nav-item">
                      <p class="nav-link">Not Returned</p>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

        <main class="main m-5">
            <div class="content-wrapper">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>

      
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery --> 
    <?= $this->Html->script('/plugins/jquery/jquery.min.js') ?> 
 
    <!-- jQuery UI 1.11.4 --> 
    <?= $this->Html->script('/plugins/jquery/jquery.min.js') ?> 
    <?= $this->Html->script('/plugins/jquery-ui/jquery-ui.min.js') ?> 
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --> 
    <script> 
      $.widget.bridge('uibutton', $.ui.button) 
    </script> 
    <!-- Bootstrap 4 --> 
    <?= $this->Html->script('/plugins/bootstrap/js/bootstrap.bundle.min.js') ?> 
    <!-- ChartJS --> 
    <?= $this->Html->script('/plugins/chart.js/Chart.min.js') ?> 
    <!-- Sparkline --> 
    <?= $this->Html->script('/plugins/sparklines/sparkline.js') ?> 
    <!-- JQVMap --> 
    <?= $this->Html->script('/plugins/jqvmap/jquery.vmap.min.js') ?> 
    <?= $this->Html->script('/plugins/jqvmap/maps/jquery.vmap.usa.js') ?> 
    <!-- jQuery Knob Chart --> 
    <?= $this->Html->script('/plugins/jquery-knob/jquery.knob.min.js') ?> 
    <!-- daterangepicker --> 
    <?= $this->Html->script('/plugins/moment/moment.min.js') ?> 
    <?= $this->Html->script('/plugins/daterangepicker/daterangepicker.js') ?> 
    <!-- Tempusdominus Bootstrap 4 --> 
    <?= $this->Html->script('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?> 
    <!-- Summernote --> 
    <?= $this->Html->script('/plugins/summernote/summernote-bs4.min.js') ?> 
    <!-- overlayScrollbars --> 
    <?= $this->Html->script('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?> 
    <!-- AdminLTE App --> 
    <?= $this->Html->script('/dist/js/adminlte.js') ?> 
    <!-- AdminLTE for demo purposes --> 
    <?= $this->Html->script('/dist/js/demo.js') ?> 
    <!-- AdminLTE dashboard demo (This is only for demo purposes) --> 
    <?= $this->Html->script('/dist/js/pages/dashboard.js') ?>



</body>
</html>