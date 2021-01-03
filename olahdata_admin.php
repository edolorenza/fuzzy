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

<tr   valign="middle"><td   height="25"   bgcolor=grey><a   href= olahdata_admin.php><b><font color=black>Olah Data</font></b></a></td></tr> 

<tr   valign="middle"><td   height="25"   bgcolor=grey><a   href= lihatdata_admin.php><b><font color=black>Lihat Data</font></b></a></td></tr>


</td></tr>
<tr valign="middle"><td height="25" bgcolor=grey><a href=logout.php> <b><font color=black>Logout</font></b></a></td></tr>

</table>
</th>
<td width="792" rowspan="2" valign=top align="center"> <br><br>

<form action="iftsukamoto_admin.php" method="post"> <table width=350px align="center" bgcolor="grey">

<caption><font color="black" size="5"><b>Menu Olah Data</b></font> </caption>

<tr><td	colspan="3"><font	color=black><b>Periode</b></font></td>
</tr>
<tr><td> <font color="black"><b>Data mulai bulan ke </b></font></td><td><input name="mulai" type="text"></td></tr>

<tr><td> <font color="black"><b>Masa produksi</b></font> </td><td><input name="masa" type="text"></td><td><font color=red><b>hari </b></font></td></tr>
<tr><td colspan="2"><font color=black><b>Data Saat ini</b></font> </td></tr>

<tr><td><font color="black" size="3"><b>Permintaan</b></font></td> <td><input name="x" type="text"></td></tr>

<tr><td><font color="black" size="3"><b>Persediaan</b></font></td><td> <input name="y" type="text"></td></tr>

<tr>
<td></td><td><input name="submit" type="submit" value="Olah Data"> </td>

</tr>
</table>
</form>
</td> </tr>
<tr>
<th scope="row" valign="top"></th>
</tr>
</table>
<?php
}
?>
</body>
</html>

