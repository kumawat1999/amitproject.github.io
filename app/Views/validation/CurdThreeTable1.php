<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Curd Three table 1</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>sr no </th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $num=1; foreach($data as $datass){
             ?>
            <tr>
                <td scope="row"><?=$num?></td>
                <td><?= $datass->name ?></td>
                <td><?= $datass->email ?></td>
            </tr>
           <?php $num++; } ?>
        </tbody>
    </table>
</body>
</html>