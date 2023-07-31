<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Cur To </title>
    <style>
        span.help-block {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="<?= base_url('CurdformAction'); ?>" method="post">
                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?= set_value('name') ?>" id="name" placeholder="name">
                        <?php
                        $errors = validation_errors();
                        if (isset($errors['name'])) {
                             echo  validation_show_error('name');
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" value="<?= set_value('email') ?>" name="email" id="email" placeholder="email">
                        <?php
                        echo  validation_show_error('email');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="form-control" value="<?= set_value('password') ?>" name="password" id="password" placeholder="password">
                        <?php
                        echo  validation_show_error('password');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">ConfPass:</label>
                        <input type="password" class="form-control" value="<?= set_value('confpass') ?>" name="confpass" id="confpass" placeholder="confpass">
                        <?php
                        echo  validation_show_error('confpass');
                        ?>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">Gender</label><br>
                        Male <input type="radio" class="form-check-input"  name="gender" id="male" value="Male">
                        Female <input type="radio" class="form-check-input"  name="gender" id="female" value="Female">
                        <?php
                        echo  validation_show_error('gender');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">City:</label>
                        <select class="form-control" name="city"  id="city">
                            <option value="">Select</option>
                            <option value="jaipur">jaipur</option>
                            <option value="ajmer">ajmer</option>
                        </select>
                        <?php
                        echo  validation_show_error('city');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Address:</label>
                        <input type="text" class="form-control" value="<?= set_value('address') ?>" name="address" id="address" placeholder="address">
                        <?php
                        echo  validation_show_error('address');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Mobile:</label>
                        <input type="number" class="form-control" value="<?= set_value('number') ?>" name="number" id="number" placeholder="number">
                        <?php
                        echo  validation_show_error('number');
                        ?>
                    </div>
                    <button type="submit" name="button" id="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

</body>

</html>