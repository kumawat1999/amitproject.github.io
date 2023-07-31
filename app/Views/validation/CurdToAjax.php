<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CurdToAjax</title>

    <script>

    function curdToAjaxSubmit(){
        // alert();

            var FormData=$('#FormData');

            $.ajax({
                type:'post',    
                url:'<?= base_url()?>CurdToAction',
                data:FormData.serialize(),
                dataType:'JSON',
                success:function(responce){
                    // alert(responce.msg);
                    $('.formmessage').remove();

                    if (responce.errors && !responce.errors == '') {
                        $.each(responce.errors, (key, value) => {
                            var msg = '<label class="error formmessage error2" style="color:red">' + value + '</label>';
                            FormData.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);
                        });

                    } 
                    else{
                        window.location.href="http://localhost:8080/MydataForm";
                    }
                    
                }
            });
    }

    </script>


</head>

<body>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form id="FormData" method="post">
                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" class="form-control" name="email" id="eamil" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="password">
                </div>
                <div class="form-group">
                    <label for="">ConfPass:</label>
                    <input type="text" class="form-control" name="confPass" id="confPass" placeholder="confPass">
                </div>
                <div class="form-group">
                    <label for="">City:</label>
                    <select class="form-control" name="city" id="city">
                        <option value="">Select</option>
                        <option>Jaipur</option>
                        <option>Sikar</option>
                        <option>Ajamer</option>
                        <option>Bikaner</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Vilege:</label>
                    <input type="text" class="form-control" name="vilege" id="vilege" placeholder="vilege">
                </div>
                <div class="form-group">
                    <label for="">Address:</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="">Gender:</label>
                   Male <input type="radio" name="gender" id="male" value="male" checked >
                   Female <input type="radio" name="gender" id="female" value="female">
                </div>
                
                <button type="button" name="button" onclick="curdToAjaxSubmit()" id="button" class="btn btn-primary">Button</button>
            </form>
        </div>
    </div>

</body>

</html>