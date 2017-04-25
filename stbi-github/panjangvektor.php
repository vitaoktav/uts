<div align='center'>
<?php
require_once('connect.php');
//hapus isi tabel tbvektor
mysql_query("TRUNCATE TABLE tbvektor");
//ambil setiap DocId dalam tbindex
//hitung panjang vektor untuk setiap DocId tersebut
//simpan ke dalam tabel tbvektor
$resDocId = mysql_query("SELECT DISTINCT DocId FROM tbindex");
$num_rows = mysql_num_rows($resDocId);
print("Terdapat " . $num_rows . " dokumen yang dihitung panjang vektornya. <br />");
while($rowDocId = mysql_fetch_array($resDocId)) {
$docId = $rowDocId['DocId'];
$resVektor = mysql_query("SELECT Bobot FROM tbindex WHERE DocId = $docId");
//jumlahkan semua bobot kuadrat
$panjangVektor = 0;
while($rowVektor = mysql_fetch_array($resVektor)) {
$panjangVektor = $panjangVektor + $rowVektor['Bobot'] * $rowVektor['Bobot'];
}
//hitung akarnya
$panjangVektor = sqrt($panjangVektor);
//masukkan ke dalam tbvektor
$resInsertVektor = mysql_query("INSERT INTO tbvektor (DocId, Panjang) VALUES ('$docId', '$panjangVektor')");
mysql_query($conn, $resInsertVektor);
} //end while $rowDocId
 //end function panjangvektor
?>
</div>