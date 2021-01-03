<?php
session_start();
if (isset($_SESSION['user'])){
?>
<html>

<head>
    <title>Administrator</title>
</head>

<body bgcolor=d5edb3>
    <?php
include "koneksi.php";

?>
    <br><br><br>
    <table width=1000px height="700px" align=center cellpadding=1 cellspacing=1 border=1>

        <tr>
            <th width="199" height="100" valign="top">
                <table border=5 cellpadding=1 cellspacing=1>
                    <tr valign="middle">
                        <td bgcolor=5c743d width="198" height="30"><b>
                                <font color=d5edb3><b>Menu Administrator</b></font>
                            </b></td>
                    </tr>

                    <tr valign="middle">
                        <td height="25" bgcolor=d5edb3><a href=admin.php> <b>
                                    <font color=5c743d>Home</font>
                                </b></a></td>
                    </tr>

                    <tr valign="middle">
                        <td height="25" bgcolor=d5edb3><a href=olahdata_admin.php><b>
                                    <font color=5c743d>Olah Data</font>
                                </b></a></td>
                    </tr>

                    <tr valign="middle">
                        <td height="25" bgcolor=d5edb3><a href=lihatdata_admin.php><b>
                                    <font color=5c743d>Lihat Data</font>
                                </b></a></td>
                    </tr>

                    <tr valign="middle">
                        <td height="25" bgcolor=d5edb3><a href=edit_admin.php><b>
                                    <font color=5c743d>Edit Data</font>
                                </b></a></td>
                    </tr>

                    <tr valign="middle">
                        <td height="25" bgcolor=d5edb3><a href=ubahpsw_admin.php><b>
                                    <font color=5c743d>Ubah Password</font>
                                </b></a> </td>
                    </tr>
                    <tr valign="middle">
                        <td height="25" bgcolor=d5edb3><a href=logout.php><b>
                                    <font color=5c743d>Logout</font>
                                </b></a></td>
                    </tr>
                </table>
            </th>
            <td width="792" rowspan="2" valign=top align="center">
                <table border="1" align="center" bgcolor=white>

                    <caption>
                        <font color=#5C743D> <b> EDIT DATA <b></font>
                    </caption>
                    <tr>
                        <td><b>id</b></td>
                        <td><b>Tanggal</b></td>
                        <td><b>Permintaan</b></td>
                        <td><b>Persediaan</b></td>
                        <td><b>Produksi</b></td>
                    </tr> <?php

$query=mysqli_query ($koneksi, "select * from tanggal");
while ($result=mysqli_fetch_array($query)){
$id=$result['id'];

$query1=mysqli_query($koneksi, "select * from tanggal where id='$id'");
$result1=mysqli_fetch_array($query1);
$query2=mysqli_query($koneksi, "select * from permintaan where id='$id'");
$result2=mysqli_fetch_array($query2);
$query3=mysqli_query($koneksi, "select * from persediaan where id='$id'");
$result3=mysqli_fetch_array($query3);
$query4=mysqli_query($koneksi, "select * from produksi where id='$id'");
$result4=mysqli_fetch_array($query4);

echo "<tr><td>$id</td>
<td><a href=update_admin.php?kt=tanggal&id=$id>$result1[tanggal]</a></td> 

<td><a href=update_admin.php?kt=permintaan&id=$id>$result2[permintaan]</a>

</td>
<td><a href=update_admin.php?kt=persediaan&id=$id> $result3[persediaan]</a> </td>

<td><a href=update_admin.php?kt=produksi&id=$id>$result4[produksi]</a> </td> </tr>";
}//while
?>
                </table>
            </td>
        </tr>
        <tr>
            <th scope="row" valign="top"></th>
        </tr>
    </table>
    <?php
}
?>
</body>

</html>