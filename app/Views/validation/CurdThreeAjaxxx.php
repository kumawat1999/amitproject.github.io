<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   
    <title>Curd Ajax three </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script>
 
        
        $(document).on('submit', '#myform', function(e) {
            // alert('');
            e.preventDefault();
            var myfrom = new FormData();
            $.each($(':input', $('#myform')), function(i, fileds) {
                myfrom.append($(fileds).attr('name'), $(fileds).val());
            });
            $.each($('input[type=file]', $("#myform"))[0].files, function(i, file) {
                myfrom.append(file.name, file);
            });
            
            // var myform = $('#myforms');
            $.ajax({
                type: 'post',
                url: '<?= base_url() ?>CurdThreeAjaxAction',
                data: myfrom,
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                success: function(respoce) {
                    // alert(status.msg);
                    $('.formmessage').remove();
                    if (respoce.errors && !respoce.errors == '') {
                        $.each(respoce.errors, (key, value) => {
                            var msg = '<label class="error formmessage error2" style="color:red">' + value + '</label>';
                            $("#myform").find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);
                        });

                    }
                    else{
                        if(respoce.status){
                            window.location.href="http://localhost:8080/printdata";
                        }
                    }

                }

            });
        });


</script>


</head>


<body>
    <form id="myform" method="post ">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="">email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="">Photo</label>
            <input type="file" class="form-control-file" name="file" id="file" placeholder="file">
        </div>
        <button type="submit"  class="btn btn-primary">Button</button>
    </form>
</body>

</html>