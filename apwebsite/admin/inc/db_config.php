<?php 
    $host_name='localhost';
    $user_name='root';
    $pass='';
    $db='hbwebsite';

    $con = mysqli_connect($host_name, $user_name,$pass,$db);

    if(!$con){
       die("Cannot Connect Database".mysqli_connect_error());
    }

    function filteration($data){
        foreach($data as $key => $value){//thực hiện trên từ phần tử có trong array của $data
            $data[$key] = trim($value);//loại bỏ khoảng trắng đầu tiên và cuối cùng của chuỗi
            $data[$key] =  stripslashes($value);// loại bỏ các dấu backslashes ( \ ) có trong chuỗi
            $data[$key] =  htmlspecialchars($value);//Nó sẽ chuyển các ký tự &, “, ‘, < và >thành các thực thể HTML.
            $data[$key] =  strip_tags($value);//loại bỏ các thẻ HTML và PHP từ một chuỗi
        }
        return $data;
    }
    function select($sql,$values,$datatypes){
        $con =$GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql)){ //được sử dụng để chuẩn bị thực thi một câu lệnh SQL. mysqli_prepare(connection, query)
            mysql_stmt_bind_param($stmt,$datatypes,...$values  );// Liên kết các biến với câu lệnh đã chuẩn bị dưới dạng tham số
        }
        else{
            die("Query connot be executed-Select");
        }
    }
?>