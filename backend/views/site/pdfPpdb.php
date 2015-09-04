<?php 
use app\components\DateHelper;
 ?>
<style type="text/css">
table{
  border-collapse: collapse;
}
table, th, td {
  border: none;
   font-family: "Times New Roman", Georgia, Serif;;
}
h4, th{
  text-align: center;
}
table.ttd{
  width:100%;
  margin: 0 auto;
}
table.tugas{
  width:80%;
  margin: 0 auto;
}
table.ttd, table.ttd th, table.ttd td{
  border: none;
  font-size: 13px;
  text-align: center;
}
.underline{
  text-decoration: underline;
}
</style>
<h4>FORMAT PENDAFTARAN</h4>
<h4>PENERIMAAN PESERTA DIDIK BARU (PPDB)</h4>
<br>
  <table class="ppdb" width=100%>
   <tr>
       <td colspan=4 >Identitas Siswa</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Nama Lengkap</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>   
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Nama</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Tempat Tanggal Lahir</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Asal Sekolah</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Jurusan yang diminati</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Alamat</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>No. Hp</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Agama</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
    <td colspan="4">Identitas Orang Tua / Wali   :</td>
  </tr>
  <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Nama Ayah</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Tempat Tanggal Lahir</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Alamat</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Agama</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>No. Hp</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
   <td colspan="4">&nbsp;</td>
   </tr>  
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Nama Ibu</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Tempat Tanggal Lahir</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Alamat</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>Agama</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
   <tr>
       <td width=1%>&nbsp;</td>
       <td width=25%>No. Hp</td>
       <td width=1%>:</td>
       <td width=100%>&nbsp;</td>
   </tr>
</table>
<br>
  <div>
    <table class="ttd">
      <tr>
        <td><br>Mengetahui Orang Tua/Wali,</td>
        <td>............, ..................................15
        <br>
        <p>Siswa</p>
        </td>
      </tr>
      <tr>
      </tr>
      <?php for ($i=0; $i < 10; $i++): ?> 
      <tr> 
        <td></td>
        <td></td>
      </tr>
      <?php endfor; ?>
     <tr>
    <td class="underline">                          </td>
    <td class="underline">                          </td>
    </tr>
    <tr>
    <td>............................................</td>
    <td>............................................</td>
    </tr>
    <tr>
    <td>*) Coret yang tidak perlu</td>
    <td>&nbsp;</td>
    </tr>
    </table>
  </div>
