
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">

 <style>

*{
    box-sizing: border-box;
    text-decoration: none;
}
*:focus{
    outline: none;
}
body{
    font-family: Arial;
    padding: 50px;
    background: #4ECDC4;  
background: -webkit-linear-gradient(to right, #556270, #4ECDC4);  
background: linear-gradient(to right, #556270, #4ECDC4);
}
.login{
    margin: 20px auto;
    width: 300px;
}
.login-screen{
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
}
.app-title{
    text-align: center;
    color: dark;
}
.login-form{
    text-align: center;
}
.controld-group{
    margin-bottom: 10px;
}
input{
    text-align: center;
    background-color: #ECF0f1;
    border: 2px solid transparent;
    border-radius: 3px;
    font-size: 16px;
    font-weight: 200;
    padding: 10px;
    width: 250px;
    transition: border .5s;
}
input:focus{
    border: 2px solid #3498DB;
    box-shadow: none;
}
.btn{
    border: 2px solid transparent;
    background: #3498DB;
    color: #ffffff;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    text-decoration: none;
    text-shadow: none;
    border-radius: 3px;
    transition: 0.25s;
    display: block;
    width: 250px;
    margin: 0 auto;
    margin-top: 5px;
}
.btn:hover{
    background-color: #2980B9;
}

 </style>

</head>
<body>

    <div class="login">
        <div class="login-screen ">
            <div class="app-title">
                <h1>Giriş Yap</h1>
            </div>
        <form action="islem.php" method="post">
            <div class="login-form">
                    <div class="control-group" >
                        <input type="text" name="username" class="login-field" required="" placeholder="Kullanıcı Adı" id="login-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    <div class="control-group" >
                        <input type="password" name="password" class="login-field" required="" placeholder="Şifre" id="login-pass">
                        <label class="login-field-icon fui-user" for="login-pass"></label>
                    </div>
            </div>
                    <button href="index.php" name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</button>
                   
        </form>
        

        <a href="kayit.php" ><button class="btn btn-primary btn-large btn-block">Kayıt Ol</button></a>

        </div>
    </div>
    
</body>
</html>