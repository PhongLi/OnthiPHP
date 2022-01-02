<?php 
    include 'khachhang.php';
    include 'xe.php';
    $list = select_KH();

?>


<div >
    <form action="" method="POST">
       <div>
           Họ tên khách hàng
           <select name="MAKH" id="TENKH">
               <?php foreach ($list as $row) : ?>
                    <option value="<?php echo $row['MAKHACHHANG']?>"><?php echo $row['HOTENKH'] ?></option>
                <?php endforeach; ?>
           </select>
       </div><br>
       <div>
           Số xe
           <input type="text" name="SOXE">
       </div><br>
       <div>
            Hãng xe
            <select name="HANGXE" id="XE">
                <option value="Toyota">Toyota</option>
                <option value="BMW">BMW</option>
                <option value="Audi">Audi</option>
            </select>
       </div><br>
       <div>
            Năm sản xuất
            <input type="text" name="NAMSX" placeholder="2022">

       </div><br>
        <input type="submit" value="thêm">
    </form>
</div>

<?php addXe() ?>