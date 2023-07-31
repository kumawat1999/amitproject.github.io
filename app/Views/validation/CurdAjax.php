<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Curd Ajax</title>

    <script>
        function getValidation() {
            // alert();
            var myform =$('#myform');
            $.ajax({
                type: "post",
                url: "<?= base_url() ?> CurdAjaxSubmit",
                data: myform.serialize(),
                dataType: 'JSON',
                success: function(respoce) {
                    $('.formmessage').remove();

                    if (respoce.errors && !respoce.errors == '') {
                        $.each(respoce.errors, (key, value) => {
                            var Msg = '<label class="error formmessage error2" style="color:red">' + value + '</label>';
                            myform.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(Msg);
                        });

                    } 

                }

            });
        }

        // $(document).ready(function() {
        //     getValidation();
        // });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form id="myform" >
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
                        <label for="">Passconf:</label>
                        <input type="text" class="form-control" name="passconf" id="passconf" placeholder="passconf">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile:</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile">
                    </div>
                    <div class="form-group">
                        <label for="">city:</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="city">
                    </div>
                    <div class="form-group">
                        <label for="">Address:</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="address">
                    </div>
                    <button type="button" onclick="getValidation()">Button </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>