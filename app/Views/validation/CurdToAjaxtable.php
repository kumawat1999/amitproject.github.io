<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Curd To Ajax Table</title>
    <script>
        $(document).on('click', '.deletedata', function() {

            var curntObject = $(this);
            var ids = curntObject.parent().attr('data-ids');
            var confirmsss = confirm('Sure to delete row...!');

            // alert();
            if (confirmsss == true) {
                $.ajax({

                    type: "post",
                    url: "<?= base_url() ?>DeleteAction",
                    data: {id: ids},
                    dataType: 'JSON',
                    success: function(Response) {
                        if(Response.status){
                            window.location.href=window.location.href;
                        }
                        else{
                            alert(Response.msg);
                        }
                    }

                });
            }

        });

        $(document).on('click','.addButton',function(){
            window.location.href="http://localhost:8080/CurdToAjax";
        });
       
    </script>

</head>

<body>
<button class="btn btn-success addButton">Add</button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sr no.</th>
                <th>Name:</th>
                <th>Email:</th>
                <th>Password:</th>
                <th>ConfPass:</th>
                <th>City:</th>
                <th>Vilege:</th>
                <th>Address:</th>
                <th>Gender:</th>
                <th>Action:</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $number = 1;
            foreach ($data as $datas) {
            ?>
                <tr>
                    <td><?= $number ?></td>
                    <td><?= $datas->name ?></td>
                    <td><?= $datas->email ?></td>
                    <td><?= $datas->password ?></td>
                    <td><?= $datas->confPass ?></td>
                    <td><?= $datas->city ?></td>
                    <td><?= $datas->vilege ?></td>
                    <td><?= $datas->address ?></td>
                    <td><?= $datas->gender ?></td>
                    <td data-ids='<?= $datas->id ?>'>
                        <button class="btn btn-danger deletedata">Delete</button>
                        <a href="<?= base_url()?>UpdateData/<?= $datas->id ?>" class="btn btn-info UpdateBtn">Update</a>
                    </td>
                </tr>
            <?php
                $number++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>