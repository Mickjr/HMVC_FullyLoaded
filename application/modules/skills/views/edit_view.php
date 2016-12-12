<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax CRUD with Bootstrap modals and Datatables</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/media/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
<body>

    <div class="container">
       <!--  <h1 style="font-size:20pt">Ajax CRUD with Bootstrap modals and Datatables</h1> -->

<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Edit Data</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="skill">Skills</label>
  <div class="col-md-4">
  <input id="skill" name="skill" placeholder="skill" class="form-control input-md" required="" type="text" value="<?php echo $skill; ?>">


  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="something">Something</label>
  <div class="col-md-5">
  <!-- <input id="something" name="something" placeholder="something" class="form-control input-md" required="" type="text" value="<?php echo $something; ?>"> -->
  <?php $someinput = array(
          'type'  => 'text',
          'name'  => 'something',
          'id'    => 'something',
          'value' => $something,
          'class' => 'form-control input-md',
          'placeholder' => 'something',
          'required' => ''
  );

  echo form_input($someinput);
  ?>

  </div>
</div>

<input type="hidden" name="myID" value="<?php echo $id; ?>">

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-default">Save</button>
  </div>
</div>

</fieldset>
</form>




    </div>


<!-- End Bootstrap modal -->
</body>
</html>
