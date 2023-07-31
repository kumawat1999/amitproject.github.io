<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Frist page</title>
</head>
<body>
    <?= $name ?>
    <table class="table table-defolt">
        <thead>
            <tr>
                <th>Name</th>
                <th>FatheName</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>rakesh</td>
                <td>suraj</td>
                <td>vinod@gmail.com</td>
                <td>8596485</td>
                <td>Jaipur</td>
                <td>Lunwa</td>
                <td><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Edit</button></td>
                <td><button type="button" name="" id="" class="btn btn-danger" btn-lg btn-block">Delete</button></td>
            </tr>
            <tr>
            <td>amit </td>
                <td>devi lal </td>
                <td>amit@gmail.com</td>
                <td>9785964646</td>
                <td>Jaipur</td>
                <td>Lunwa</td>
                <td><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Edit</button></td>
                <td><button type="button" name="" id="" class="btn btn-danger" btn-lg btn-block">Delete</button></td>
            </tr>
        </tbody>
    </table>

</body>
</html>