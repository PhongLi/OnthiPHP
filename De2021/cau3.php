<?php
include 'baoduong.php'
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cau3.js"></script>


<script>
    $(document).ready(function(){
        $('#SOXE').change(function(){
            var SOXE = $('#SOXE').val();
            timKH(SOXE);
        })
    });
</script>

<div>
    <form action="" method="POST">
        <div>
            Số Xe
            <input type="text" name="SOXE" id="SOXE">
        </div><br>
        <div>
            Họ tên khách hàng
            <input type="text" name="HOTENKH" id="result">
        </div><br>
        <div>
            Mã bảo dưỡng
            <input type="text" name="MABD">
        </div><br>
        <div>
            Số KM
            <input type="text" name="SOKM">
        </div><br>
        <div>
            Nội dung
            <input type="text" name="NOIDUNG">
        </div><br>
        <input type="submit" value="Thêm">
    </form>
</div>

<?php addbd() ?>