<!DOCTYPE html>
<html>
<head>
	<title><?= $setting['title'] ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $setting['description'] ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/blog.css') ?>">
  <style type="text/css">
    *{font-family: Arial}
    .footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px; /* Set the fixed height of the footer here */
  line-height: 60px; /* Vertically center the text there */
  background-color: #f5f5f5;
}
html {
  position: relative;
  min-height: 100%;
}
body {
  margin-bottom: 60px; /* Margin bottom by footer height */
}
  </style>
  </head>
<body>
  <header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="<?= base_url() ?>">Home</a>
            <?php
              foreach ($label as $label) {
                echo anchor('blog/label/'.$label->label,$label->label,array('class'=>'nav-link'));
              }
            ?>
          </nav>
        </div>
      </div>

      <div class="blog-header">
        <div class="container">
          
          <h1 class="blog-title"><a href="<?= base_url() ?>"><?= $setting['title'] ?></a></h1>
          <p class="lead blog-description"><?= $setting['description'] ?></p>
        
        </div>
      </div>
    </header>
    <div class="container" style="padding-bottom:100px;">
      <div class="row">