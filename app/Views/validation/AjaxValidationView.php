<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>AjaxVlidation View </title>
    <script>
        function validationButton() {
            // alert();
            var myForm = $('#Myform');
            $.ajax({

                type: 'post',
                url: '<?= base_url() ?>MyvalidationAction',
                data: myForm.serialize(),
                dataType: 'JSON',
                success: function(responce) {
                    $('.formmessage').remove();
                    if (responce.errors && !responce.errors == '') {
                        $.each(responce.errors, (key, value) => {
                            var msg = '<label class="error formmessage error2" style="color:red">' + value + '</label>';
                            myForm.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);
                        }); 
                    }
                    else{
                        if(responce.status==true){
                            alert('data add successfully');
                        }
                    }
                }
            });

        }
    </script>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form id="Myform" >

                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="">Address:</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="address">
                    </div>
                    <div class="form-group">
                        <label for="">MObile:</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile">
                    </div>
                    <button type="button"  onclick="validationButton()" class="btn btn-primary">Button</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>