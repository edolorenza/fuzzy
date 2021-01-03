<?php
session_start();
if (isset($_SESSION['user'])){
?>
<html>
<head>
<title>Administrator</title>
</head>
<body bgcolor=#FFFFFF>
<?php
include "koneksi.php";

?>
<br><br><br>
<table width=1000px height="700px" align=center cellpadding=1 cellspacing=1 border=1>

<tr>
<th width="199" height="100" valign="top">
<table border=5 cellpadding=1 cellspacing=1>

<tr valign="middle"><td width="198" height="30" bgcolor=#808080><a href=admin.php> <b><font color=black>Home</font></b></a></td>

</tr>
<tr valign="middle"><td height="25" bgcolor=#808080><a href= olahdata_admin.php><b><font color=black>Olah Data</font></b></a></td>

</tr>
<tr valign="middle"><td height="25" bgcolor=#808080><a href= lihatdata_admin.php><b><font color=black>Lihat Data</font></b></a> </td>

</tr>


<tr valign="middle"><td height="25" bgcolor=#808080><a href= logout.php><b><font color=black>Logout</font></b></a></td>

</tr>
</table>
</th>
<td width="792" rowspan="2" valign=top align="center"><font color=#800000>Selamat datang Administrator</font></td>

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