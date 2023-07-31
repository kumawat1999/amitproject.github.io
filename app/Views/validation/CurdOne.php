<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CurdOne</title>
    <style>
        span.help-block {
            color: red;
        }
    </style>
</head>

<body style="background-color:yellow;">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">

                <form action="<?= base_url('CurdOneSubmit') ?>" method="post">


                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?= set_value('name') ?>" placeholder="Name">
                        <?php
                        $errors = validation_errors();
                        if (isset($errors['name'])) {
                            echo validation_show_error('name');
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" value="<?= set_value('password') ?>" placeholder="Password">
                        <?php
                        echo validation_show_error('password');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Passconf:</label>
                        <input type="password" class="form-control" name="passconf" id="passconf" value="<?= set_value('passconf') ?>" placeholder="Passconf">
                        <?php
                        echo validation_show_error('passconf');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" placeholder="Email">
                        <?php
                        echo validation_show_error('email');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">City:</label>
                        <input type="text" class="form-control" name="city" id="city" value="<?= set_value('city') ?>" placeholder="City">
                        <?php
                        echo validation_show_error('city');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Vilege:</label>
                        <input type="text" class="form-control" name="vilege" id="vilege" value="<?= set_value('vilege') ?>" placeholder="Vilege">
                        <?php
                        echo validation_show_error('vilege');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Mobile:</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" value="<?= set_value('mobile') ?>" placeholder="mobile">
                        <?php
                        echo validation_show_error('mobile');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Address:</label>
                        <input type="text" class="form-control" name="address" id="address" value="<?= set_value('address') ?>" placeholder="Address">
                        <?php
                        echo validation_show_error('address');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Pin Code:</label>
                        <input type="text" class="form-control" name="pin" id="pin" value="<?= set_value('pin') ?>" placeholder="Pin">
                        <?php
                        echo validation_show_error('pin');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Submit Button </label><br>
                        <input type="submit" class="btn btn-info" name="submit" id="submit" value="Submit">
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>

</html>