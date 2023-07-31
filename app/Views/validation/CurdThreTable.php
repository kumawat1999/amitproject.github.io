

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <script>
        $(document).on('click','.Deletess',function(){
            // alert();    
            var curntid=$(this);
            var idss=curntid.parent().attr('data-ids');
            var confirmss=confirm('are you sure row delete...');
            if(confirmss==true){
                $.ajax({
                    type:'post',
                    url:"<?= base_url()?>DeleteAction",
                    data:{id:idss},
                    dataType:'JSON',
                    success:function(responce){
                        if(responce.status){
                            // window.location.href=window.location.href;
                            alert(responce.msg);
                        }

                    }
                });
            }

        });
        $(document).on('click','.add',function(){
            window.location.href="http://localhost:8080/CurdThreeAjax";
        });


    </script>
</head>
<body>
        <button type="button" class="btn btn-primary add" >Add</button>
    <table class="table table-bordered">
        <thead>
            
            <tr>
                <th>sr no </th>
                <th>Name</th>
                <th>Email</th>
                <th>File</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $num=1; foreach($data as $datas){ ?>
            <tr>
                <td scope="row"><?= $num ?></td>
                <td><?= $datas->name ?></td>
                <td><?= $datas->email ?></td>
                <td><?= $datas->file ?></td>
                <td data-ids='<?= $datas->id ?>'>
                <button type="button" class="btn btn-danger Deletess" >Delete</button>
                </td>
                <td><a type="button" href="<?= base_url()?>UpdateData/<?= $datas->id ?>" class="btn btn-info update" >Edit</a></td>
            </tr>
           <?php 
           $num++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php 
// echo "<pre>";
// print_r($data);


?>