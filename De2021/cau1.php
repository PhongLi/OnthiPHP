<?php
    include 'khachhang.php'
?>

<div border=1>
    <form action="" method="POST">
        <div>Thêm Khách hàng</div><br>
        <div>
            Mã khách hàng
            <input type="text" name="MAKH">
        </div><br>
        <div>
            Tên khách hàng
            <input type="text" name="HOTENKH">
        </div><br>
        <div>
            Địa chỉ
            <input type="text" name="DIACHI">
        </div><br>
        <div>
            Điện thoại
            <input type="text" name="SDT">
        </div><br>
        <input type="submit" name="submit" value="Thêm">
    </form>
</div>

<?php
addkh() ?>