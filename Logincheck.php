<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    if(isset($_POST["submit"]) && $_POST["submit"] == "Login")
    {
        $usnm = $_POST["username"];
        $pswd = $_POST["password"];
        if($usnm == "" || $pswd == "")
        {
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
        }
        else
        {
            mysql_connect("localhost","roywinchester","roywinchester");
            mysql_select_db("roywinchester");
            mysql_query("select Names 'GBK'");
            $sql = "select username,password from idk where username = $usnm and password = $pswd ";
            $result = mysql_query($sql);
            $num = mysql_num_rows($result);
            if($num)
            {
                $row = mysql_fetch_array($result);
                header('Location:../message.php');
            }
            else
            {
                echo "<script>alert('用户不存在!或密码不正确！');history.go(-1);</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";
    }

?>
