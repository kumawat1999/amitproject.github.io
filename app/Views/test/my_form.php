<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <title>Document</title>
</head>

<body>
    <h1>hello</h1>


    <form id="myform" method="post" action="<?= base_url('formsubmit') ?>">

        <h5>Name</h5>
        <input type="text" name="name" value="<?= set_value('name') ?>" size="50">
            <?php
                $errors = validation_errors();
                if (isset($errors['name'])) {
                    echo validation_show_error('name');
                }
                ?>
       
        <h5>Email</h5>
        <input type="text" name="email" value="<?= set_value('email') ?>" size="50">
        <?php
        if (isset($errors['email'])) {
            echo validation_show_error('email');
        }
        ?>
        <h5></h5>
        <div><input type="submit" value="Submit"></div>

    </form>
    <?php 
        // echo "<pre>";
        // print_r($errors);
        ?>
</body>

</html>