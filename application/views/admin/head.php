<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/dashboard.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/awesome/css/font-awesome.min.css') ?>">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Howdy <?= $this->session->userdata('username'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/logout') ?>">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

      <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
            <?php echo anchor('admin/home','<i class="fa fa-home"></i> Dashboard',array('class'=>'nav-link')) ?>
            </li>
            <li class="nav-item">
              <?php echo anchor('admin/post','<i class="fa fa-file-o"></i> Post',array('class'=>'nav-link')) ?>
            </li>
            <li class="nav-item">
              <?php echo anchor('admin/media','<i class="fa fa-picture-o"></i> Media',array('class'=>'nav-link')) ?>
            </li>
            <li class="nav-item">
              <?php echo anchor('admin/comments','<i class="fa fa-comments-o"></i> Comments',array('class'=>'nav-link')) ?>
            </li>
            <li class="nav-item">
              <?php echo anchor('admin/labels','<i class="fa fa-tags"></i> Lables',array('class'=>'nav-link')) ?>
            </li>
            <li class="nav-item">
              <?php echo anchor('admin/setting','<i class="fa fa-cog"></i> Setting',array('class'=>'nav-link')) ?>
            </li>
          </ul>
        </nav>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">