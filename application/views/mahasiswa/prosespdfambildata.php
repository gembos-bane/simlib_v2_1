<!DOCTYPE html>
<html lang="en">

<head>
<style>
    .justify-text{
        text-align: justify;
    }
    rem {
        font-size: 11px;
        margin-bottom: 1px;
    }
    fak {
        font-size: 120%;
        margin-bottom: 1px;
        font-weight: bold;
    }
    uni {
        font-size: 140%;
        margin-bottom: 1px;
    }
    kop {
        
        text-justify: inter-word;
        font-size: 90%;
        margin-top: 5px;
        margin-bottom: 5px;
        
    }
    div.isi {
        font-size: 90%;
        margin-top: 40px;
        margin-bottom: 1px;
        width: 300px;
    }
    ttd{
        font-size: 90%;
        margin-left: 60%;
        margin-bottom: 5px;
    }
    nip {
        font-size: 90%;
        margin-left: 49%;
        margin-bottom: 5px;
    }
    tem {
        font-size: 90%;
        margin-bottom: 5px;
    }
    body.srt{
        margin-top: -5%;
        margin-left: 7%;
        margin-right: 6%;
    }
    table.isi{
        font-size: 90%;
        margin-bottom: 1px; 
    }
</style>

</head>
<body class="srt">
    <table width="100%">
        <tr>
            <td width="10%"><img src="<?php echo base_url()."assets/img/logo.jpg"; ?>" width="120%"/></td>
            <td width="90%"><center><uni>UNIVERSITAS AIRLANGGA</uni></center>
                <center><fak>FAKULTAS VOKASI</fak></center>
                <center ><rem>JL. Dharmawangsa Dalam No. 28-30 (Kampus B) Surabaya 60286 Telp. (031)5033869, 5053156. Fax (031) 99005114</rem></center>
                <center><rem>website: http://vokasi.unair.ac.id, email: info@vokasi.unair.ac.id</rem></center>
            </td>
        </tr>
    </table><hr> <br>      

<kop>Nomor : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;/B/DST/UN3.FV/I/PT.01.04/<?php echo date('Y'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo format_indo(date('Y-m-d')); ?></kop></br>
<kop>Hal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<?php echo $proses;?></kop></br>
<p>&nbsp;</p>
      
<?php foreach($berkas as $row){?>
<div class="isi">
<isi width="30%" height="100%">Yth. <?php echo $row['NAMA_TUJUAN']; ?></br>
<?php echo $row['NAMA_PERUSAHAAN']; ?></br>
<?php echo $row['ALAMAT_PERUSAHAAN']; ?></br>
</isi>
</div>
    
<p>&nbsp;</p>
&nbsp; 
<p class="justify-text align">
    Sesuai dengan buku Pedoman Pelaksanaan Pendidikan Program Studi <?php echo $row['NAMA_PRODI']; ?>, Fakultas Vokasi, Universitas Airlangga, bahwa setiap mahasiswa diwajibkan untuk menyelesaikan tugas perkuliahan dari dosen.</br>
    Sehubungan dengan hal tersebut diatas, kami mohon bantuan dan kebijakan Saudara untuk berkenan memberi ijin pengambilan data di <?php echo $row['NAMA_PERUSAHAAN'];?> kepada mahasiswa sebagai berikut:</p>
<?php };?>
<table border="1" cellspacing="0" cellpadding="2" width="100%" class="isi">
              
    <tr class="text-center">
        <th scope="col-sm-1">No</th>
        <th scope="col-sm-4">Nama</th>
        <th scope="col-sm-2">Nim</th>
        <th scope="col-sm-2">No TELP</th>
        <th scope="col-sm-3">Prodi</th>
    </tr>
    <?php $a=1; foreach($isi as $key){ ?>
    <tr>
        <td class="text-center"><?php echo $a++;?></td>
        <td><?php echo $key['NAMA_PEGAWAI'];?></td>
        <td><center><?php echo $key['NIP_PEGAWAI']?></center></td>
        <td><center><?php echo $key['NO_TLP']?></center></td>
        <td class="text-center"><?php echo $key['NAMA_PRODI'];?></td>
    </tr><?php };?>
</table></br>
<?php foreach($isi as $data){?>
               <kop>Demikian atas perhatian dan kerjasama yang baik, kami sampaikan terima kasih.</kop>
<p>&nbsp;</p>

<ttd>a.n. Dekan</ttd></br>
<ttd>Plt.Wakil Dekan I</ttd></br>
<ttd>&nbsp;</ttd>
<ttd>&nbsp;</ttd>
<ttd>&nbsp;</ttd>
<ttd>&nbsp;</ttd>
<ttd>Dr. Andi Estetiono, S.E., M.M.</ttd></br>
<tem>Tembusan :</tem><nip>NIP 196807162016123101</nip></br>

<tem>1. Ketua <?php echo $data['NAMA_DEPARTEMEN'];?></br>2. Ketua Kordinator Program Studi <?php echo $data['NAMA_PRODI'];?></br>Fakultas Vokasi</tem>
       
<?php }?>

</body>