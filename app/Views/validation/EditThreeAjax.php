<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   
    <title>Curd Ajax three </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>

        $(document).on('click', '.editbutton', function() {
            // alert();
            var editform=$('#myeditForm');
                
            
            $.ajax({
                type: 'post',
                url: '<?= base_url() ?>EditAction',
                data:editform.serialize(),
                dataType: 'JSON',
                success: function(respoce) {
                    // alert(status.msg);
                    $('.formmessage').remove();
                    if (respoce.errors && !respoce.errors == '') {
                        $.each(respoce.errors, (key, value) => {
                            var msg = '<label class="error formmessage error2" style="color:red">' + value + '</label>';
                            editform.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);
                        });

                    }
                    else{
                        if(respoce.status){
                            alert(respoce.msg);
                        }
                    }

                }

            });
        });


</script>


</head>


<body>
    <form id="myeditForm" action="<?= base_url('myFormThree')  ?>" method="post ">
    <input type="text" name="hideenid" id="hideenid" value="<?= $ids['hideenid']; ?>">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" value="<?= $name['name']; ?>" name="name" id="nameedit">
        </div>
        <div class="form-group">
            <label for="">email:</label>
            <input type="email" class="form-control" value="<?= $email['email']; ?>" name="email" id="emailedit" >
        </div>
        <div class="form-group">
            <label for="">Photo</label>
            <input type="file" class="form-control-file" value="<?= $file['file']; ?>" name="file" id="fileedit">
        </div>
        <button type="button"  class="btn btn-primary editbutton">Edit</button>
    </form>
</body>

</html>