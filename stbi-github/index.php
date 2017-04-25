<html>
<head>
<title>EKA YULIANTI</title>
</head>

<body>
<p align="center"><b>STBI MASTER</b>
</p>
<table width="600" border="0" align="center">
  <tr>
	<td><a href="?menu=upload">Upload</a></td>
    <td><a href="?menu=carikata">Cari Kata</a></td>
    <td><a href="?menu=query">Cari Query</a></td>
    <td><a href="?menu=hitungbobot">Hitung Bobot</a></td>
    <td><a href="?menu=awalquery">Cari Query2</td>
	<td><a href="?menu=panjangvektor">Hitung Vektor</td>
  </tr>
</table>
<p>
<?php
	error_reporting(0);
	if($_GET[menu]=='')
	{
		include('#');
	}
	else
	{
		include($_GET[menu].'.php');
	}
?>
</p>
</body>
</html>