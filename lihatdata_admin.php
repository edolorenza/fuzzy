<?php
session_start();
if (isset($_SESSION['user'])){
?>
<html>
<head>
<title>Administrator</title>
</head>
<body bgcolor=white>
<?php
include "koneksi.php";

?>
<br><br><br>
<table width=1000px height="700px" align=center cellpadding=1 cellspacing=1 border=1>

<tr>
<th width="199" height="100" valign="top">
<table border=5 cellpadding=1 cellspacing=1>

<tr valign="middle"><td width="198" height="25" bgcolor=grey><a href=admin.php> <b><font color=black>Home</font></b></a></td></tr>

<tr valign="middle"><td   height="25"   bgcolor=grey><a   href= olahdata_admin.php><b><font color=black>Olah Data</font></b></a></td></tr> 

<tr valign="middle"><td   height="25"   bgcolor=grey><a   href=
lihatdata_admin.php> <b><font color=black>Lihat Data</font></b></a></td> </tr>



</td></tr>
<tr valign="middle"><td height="25" bgcolor=grey><a href=logout.php> <b><font color=black>Logout</font></b></a></td></tr>

</table>
</th>
<td width="792" rowspan="2" valign=top align="center"> <table align="center" border="1" bgcolor="white">
<caption> <font color=black> <b> Data Bulan September 2019 PT ROTI TOP 100 <b></font></caption><br> <tr>
<br>
<td><b>No</b></td>
<td><b>Tanggal</b></td>
<td><b>Permintaan</b> </td>
<td><b>Persediaan</b></td>
<td><b>Produksi</b></td></tr>
<?php
$query=mysqli_query($koneksi, "select * from tanggal");
while ($result=mysqli_fetch_array($query)){
$id=$result['id'];
$query2=mysqli_query($koneksi, "select * from permintaan where id='$id'");
$result2=mysqli_fetch_array($query2);
$query3=mysqli_query($koneksi, "select * from persediaan where id='$id'");
$result3=mysqli_fetch_array($query3);
$query4=mysqli_query($koneksi, "select * from produksi where id='$id'");
$result4=mysqli_fetch_array($query4);
echo "<tr><td>$id</td>
<td>$result[tanggal]</td>
<td>$result2[permintaan]</td>
<td>$result3[persediaan]</td>
<td>$result4[produksi]</td></tr>";
}
?>
</table>
<br><br>
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
