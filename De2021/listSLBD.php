<?php
include 'connection.php';
if (isset($_POST['SOLAN'])){
    $SOLAN = intval($_POST['SOLAN']);
    $sql = "select KH.HOTENKH, XE.SOXE, COUNT(BD.MABD) as SOLAN
            from KHACHHANG KH, XE, BAODUONG BD
            where KH.MAKHACHHANG = XE.MAKHACHHANG and
            BD.SOXE = XE.SOXE
            GROUP BY KH.HOTENKH, XE.SOXE
            having COUNT(BD.MABD) > {$SOLAN}";
    $stmt = $conn->query($sql);
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<table>
    <tr>
        <th>Họ tên khách hàng</th>
        <th>Số xe</th>
        <th>Số lần bảo dưỡng</th>
    </tr>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo $row['HOTENKH'] ?></td>
            <td><?php echo $row['SOXE'] ?></td>
            <td><?php echo $row['SOLAN'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>