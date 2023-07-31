<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>ValidationV</title>
</head>
<body>

<form action="<?= base_url()?>validationaction" method="post">
    <div class="form-group">
      <label for="">Name:</label>
      <input type="text" class="form-control" value="<?= set_value('name') ?>" name="name" id="name" placeholder="Name">
    <?php 
    $errors= validation_errors();
    if(isset($errors['name'])){
        echo validation_show_error('name');
    }
    ?>
      
    </div>
    <div class="form-group">
      <label for="">Email:</label>
      <input type="email" class="form-control" value="<?= set_value('email') ?>" name="email" id="email" placeholder="Email">
      <?php 
        echo validation_show_error('email');
    ?>
    </div>
    <button type="submit"  class="btn btn-primary">Button</button>
</form>
    
</body>
</html>