<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<style type="text/css">
	.container {
  padding-top: 140px;
  padding-bottom: 40px;
}

.form-signin {
  max-width: 400px;
  padding: 25px;
  margin: 0 auto;
  background: #f8f9fa!important;
  border-radius: 5px;
      border: 1px solid #ced4da;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.bg-danger p{
  margin-bottom: 0px;
  font-size: 13px;
  padding: 10px;
}
.bg-danger{margin-top: 10px;color: #fff;border-radius: 5px;}
	</style>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<body>

	<div class="container">

      <?php echo form_open("admin/login",array('class' => 'form-signin')); ?>
        <?php echo form_input('username','',array('class'=>'form-control','id'=>'inputEmail','placeholder'=>'Username')); ?>
        <?php echo form_password('password','',array('class'=>'form-control','id'=>'inputPassword','placeholder'=>'Password')); ?>
        <?php echo form_submit('','Login',array('class'=>'btn btn-lg btn-primary btn-block')); ?>
        <div class="bg-danger" >
          <?php echo validation_errors(); ?>
          <?php if (isset($error)) {
            echo $error;
          }
           ?>
        </div>
      <?php echo form_close(); ?>
    </div>
</body>
</html>