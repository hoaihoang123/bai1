<?php
if (isset($_POST["ten"])) {
    $ten = $_POST["ten"];
    $xuat_ten = "Chào bạn " . $ten;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào các bạn</title>
</head>

<body>
    <form action="vidu.php" method="post">
        <table width="271" border="1">
            <tr>
                <td colspan="2" bgcolor="#336699"><strong>In lời chào</strong></td>
            </tr>
            <tr>
                <td width="91">Họ tên bạn</td>
                <td width="164">
                    <input type="text" name="ten" id="chao3" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label><?php if(isset($xuat_ten)) echo $xuat_ten; ?></label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>

</body>

</html>