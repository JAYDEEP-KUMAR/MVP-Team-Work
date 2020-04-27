<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="main">

        <div class="inter">
        
            <form action="" method="post" enctype="multipart/form-data">
                
                Name : <input name="name" placeholder="Your Name" type="text">
                ID   : <input name="id" placeholder="Chosse a Id"  type="text">
                Password : <input name="pass" type="password" placeholder="Create Your Password">
                Confirm Password : <input name="pass2" type="password" placeholder="Confirm Your Password">
                
                <button type="submit" name="submit">Submit</button>
            </form>
        
        </div>
    
    </div>
    
    
    
    <!-------
ajax call for signup

$(document).ready(function(){
    $("#but_submit").click(function(){
        var username = $("#txt_uname").val().trim();
        var password = $("#txt_pwd").val().trim();

        if( username != "" && password != "" ){
            $.ajax({
                url:'checkUser.php',
                type:'post',
                data:{username:username,password:password},
                success:function(response){
                    var msg = "";
                    if(response == 1){
                        window.location = "home.php";
                    }else{
                        msg = "Invalid username and password!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});




----------------->
    
    
    
    
</body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href=""><script src=""></script>