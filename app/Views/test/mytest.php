<html>
<head>
    <title>My Form</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
   function mydata(){

      // tuds type=get/post u=url d=data={} s=callback function success:function(){}

      $.ajax({

        type:"post",
        url:"<?= base_url()?>form1",
        data:$("#myform").serialize(),
        dataType:'JSON',
        success:function(result){

          if (result.errors && !result.errors == '') {

          $.each(result.errors,(key, value)=>{

            var msg = '<label class="error formmessage error2"  style="color:red">' + value + '</label>';


            $("#myform").find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);

          });

          }

          
        }

      });

    }

$(document).ready(function(){

// mydata();

});
</script>
</head>
<body>

    <form id="myform">

        <h5>Username</h5>
        <input type="text" name="username" value="<?= set_value('username') ?>" size="50">
        <?php
        $errors = validation_errors();

        echo "<pre>";
        print_r($errors);
        if (isset($errors['username'])) {
            echo validation_show_error('username');
        }
        ?>
      
        <h5>Password</h5>
        <input type="text" name="password" value="<?= set_value('password') ?>" size="50">
        <?= validation_show_error('password') ?>

        <h5>Password Confirm</h5>
        <input type="text" name="passconf" value="<?= set_value('passconf') ?>" size="50">
        <?= validation_show_error('passconf') ?>

        <h5>Email Address</h5>
        <input type="text" name="email" value="<?= set_value('email') ?>" size="50">
        <?= validation_show_error('email') ?>

        <div><input type="button"  onclick="mydata()" value="Submit"></div>

    <?= form_close() ?>
      </form>
</body>
</html>