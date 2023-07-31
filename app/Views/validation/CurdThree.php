<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Curd Three </title>
    <style>
        #myform {
            background-image: url('../img/df.jpg');
            color: black;
            font-size: 20px;
            position: absolute;
            text-shadow: 5px 5px 10px chartreuse;
            margin: 30px;
            border-radius: 10px;
        }

        input {
            border-radius: 10px;
            box-shadow: 5px 5px 10px red;
        }

        form h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" id="myform">
                <form action="<?= base_url('myFormThree')  ?>" method="post">
                    <h1>My Form Curd Three </h1>
                    <div class="form-group">
                        <label for="">name:</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?= set_value('name') ?>" placeholder="name">
                        <?php
                        $errors = validation_errors();
                        if (isset($errors['name'])) {
                            echo validation_show_error('name');
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" placeholder="email">
                        <?php
                        echo validation_show_error('email');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" value="<?= set_value('password') ?>" placeholder="password">
                        <?php
                        echo validation_show_error('password');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">ConfPass:</label>
                        <input type="password" class="form-control" name="confpass" id="confpass" value="<?= set_value('confpass') ?>" placeholder="confpass">
                        <?php
                        echo validation_show_error('confpass');
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <select class="form-control" value="<?= set_value('city') ?>" name="city" id="city">
                            <option value="">Select</option>
                            <option>jaipur</option>
                            <option>sikar</option>
                        </select>
                        <?php
                        echo validation_show_error('city');
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
                        <input type="text" class="form-control" name="address" id="address" value="<?= set_value('address') ?>" placeholder="address">
                        <?php
                        echo validation_show_error('address');
                        ?>
                    </div>
                    <button type="submit" id="submit" name="submit" value="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>