<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .thumbnail{
            height: 100px;
            width: 100px;
            overflow: hidden;
        }
        .thumbnail img{
            width:100%;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Phan Hải Linh", "ngaysinh" => "2002/10/04", "diachi" => "Hà Nội", "anh" => "images/img1.png"),
        "2" =>array("ten" => "Lê Đình Tuấn", "ngaysinh" => "2004/01/08", "diachi" => "Phú Châu", "anh" => "images/img2.png"),
        "3" =>array("ten" => "Khuất Anh Quân", "ngaysinh" => "1998/06/05", "diachi" => "Phú Thọ", "anh" => "images/img3.png"),
        "4" =>array("ten" => "Nguyễn Hoàng Tâm", "ngaysinh" => "2002/10/09", "diachi" => "Minh Châu", "anh" => "images/img4.png"),
        "5" =>array("ten" => "Lê Thị Thúy Hường", "ngaysinh" => "2002/09/15", "diachi" => "Phú Phương", "anh" => "images/img5.png")
    );
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><div class='thumbnail'><image src = '".$values['anh']."'/></div></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
