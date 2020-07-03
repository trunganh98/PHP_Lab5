<?php
require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal Error");

//hiển thị người dùng
echo <<<_END
<form action="register.php" method="post"><pre>
      UserID <input type="text" name="userid">
      
       UserName <input type="text" name="username">
       
    Password <input type="text" name="password">
    
        Email <input type="text" name="emai">
        
        Phone <input type="text" name="phone">
        
        FullName <input type="text" name="fullname">
        
    <input type="submit" value="ADD">
    </pre>
</form>
_END;

//lấy giữ liệu từ database và hiển thị
$query="SELECT * FROM users";
$result=$conn->query($query);
if (!$result) die("Database access failed");
$rows=$result->num_rows;
for ($j=0;$j<$rows;++$j){
    $rows=$result->fetch_array(MYSQLI_NUM);
    $r0=$rows[0];
    $r1=$rows[1];
    $r2=$rows[2];
    $r3=$rows[3];
    $r4=$rows[4];
    $r5=$rows[5];

    echo <<<_END
<pre>
UserID $r0
UserName $r1
Password $r2
Email $r3
Phone $r4
FullName $r5
</pre>

_END;
}
$result->close();
$conn->close();

?>
