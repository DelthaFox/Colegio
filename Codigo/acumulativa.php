<html>
<head> Log in 
</head>
<body bgcolor=orange>
    <form action="" method=""postb>
        <center>
            <b> Log in 
                <br>
                <br>
                usuario: <input type="text" values="" name="txtuser" maxLength="20">
                <br>
                clave: <input type="password" values="" name="txtpassword" maxÑength="10">
                <br>
                <input type=submit name=btnconfirmar value=confirmar >
                <br><br>
                <?php
                errorrreporting(0);
                isset($_post ["btnconfirmar"]);
                $username= $_post['txtuser'];
                $password= $_post['txtpassword'];
                $sql= " select * from  users where username = '$username' and password = '$password '";
                $re4sult = mysql_query ($sql) or die (mysql_error());
                $nemrows = mysql_num_rows($result);
                if($numrows > 0 )
                {
                    echo 'listo ';
                }
                else
                {
                 echo 'clave incorrecta ';
                }}
                ?>
</body>    
</html>