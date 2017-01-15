<?php
if (isset($_SESSION['username']))
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
td
{
	padding:5px 9px;
	border:none;
}
</style>
<script language="JavaScript" type="text/javascript">
    function checkform ( form )
    {
      if (form.nobpkb.value == "") {
        alert( "Maaf, No BPKB tidak boleh dikosongkan.!!" );
        form.nobpkb.focus();
        return false ;
      }
      else if (form.tnoid.value == "") {
        alert( "Maaf, No ID tidak boleh dikosongkan.!!" );
        form.tnoid.focus();
        return false ;
      }
	   else if (form.noplat.value == "") {
        alert( "Maaf, No Plat tidak boleh dikosongkan.!!" );
        form.noplat.focus();
        return false ;
      }
	   else if (form.nama.value == "") {
        alert( "Maaf, Nama tidak boleh dikosongkan.!!" );
        form.nama.focus();
        return false ;
      }
	   else if (form.alamat.value == "") {
        alert( "Maaf, Alamat tidak boleh dikosongkan.!!" );
        form.alamats.focus();
        return false ;
      }
	   else if (form.nohp.value == "") {
        alert( "Maaf, No HP tidak boleh dikosongkan.!!" );
        form.nohp.focus();
        return false ;
      }
	   else if (form.saldo.value == "") {
        alert( "Maaf, Saldo tidak boleh dikosongkan.!!" );
        form.saldo.focus();
        return false ;
      }
      return true ;
    }
</script>
</head>

<body>
<div id="judulHalaman"><strong>Form Data Pelanggan</strong></div>
<form id="form1" name="form1" method="post" action="simpanpelanggan_baru.php" onsubmit="return checkform(this);">
<input name="proses" type="hidden" value="akun_insert" />
<table border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td>Nomor BPKB</td>
    <td>:</td>
    <td><label>
      <input type="text" name="nobpkb" class="form-control" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>No id</td>
    <td>:</td>
    <td><input type="text" name="tnoid" id="input2" /></td>
  </tr>
  <tr>
    <td>No PLat</td>
    <td>:</td>
    <td><label>
      <input type="text" name="noplat" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><label>
      <input type="text" name="nama" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><label>
      <input type="text" name="alamat" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>Nomor HP</td>
    <td>:</td>
    <td><label>
      <input type="text" name="nohp" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>Saldo</td>
    <td>:</td>
    <td><label>
      <input type="text" name="saldo" id="input" />
    </label></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="simpan" id="tombol" value="simpan" />
      <a href="../parkir/index.php?halaman=member"><button name="batal" id="tombol">batal</button></a>  </td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
	}
	else
	{
		echo "anda tidak berhak meng-akses halaman ini !";
	}
?>
