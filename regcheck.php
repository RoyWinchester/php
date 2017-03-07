<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "Sign in")
    {
        $usnm = $_POST["username"];
        $pswd = $_POST["password"];
        $pswd_conf = $_POST["confirm"];
        if($usnm == "" || $pswd == "" || $pswd_conf == "")
        {
            echo "<script>alert('请完整填写!(´pωq｀)ﾟ'); history.go(-1);</script>";
        }
        else
        {
            if($pswd == $pswd_conf)
            {
                mysql_connect("localhost","roywinchester","roywinchester");
                mysql_select_db("roywinchester");
                mysql_query("select Names 'GBK'");
                $sql = "select username from idk where username = '$usnm'";
                $result = mysql_query($sql);
                $num = mysql_num_rows($result);
                if($num)
                {
                    echo "<script>alert('已经有这个人了!ಥ_ಥ'); history.go(-1);</script>";
                }
                else
                {
                    $sql_insert = "INSERT INTO idk (username, password) VALUES('$usnm','$pswd')";
                    $res_insert = mysql_query($sql_insert);
                    if($res_insert)
                    {
                        echo "<script>alert('成功啦!撒花(～￣▽￣)～！'); history.go(-1);</script>";
                        header('Location:../message.php');
                    }
                    else
                    {
                        echo "<script>alert('出错嘞?????'); history.go(-1);</script>";
                    }
                }
            }
            else
            {
                echo "<script>alert('密码不一致!(*´Д`*)'); history.go(-1);</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('提交未成功!(╬▔皿▔)'); history.go(-1);</script>";
    }
?>
