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
        margin-top: 1px;
    }
    kop {
        
        text-justify: inter-word;
        font-size: 90%;
        margin-top: 5px;
        margin-bottom: 5px;
        
    }
    isi {
        width: 300px;
        font-size: 90%;
        margin-top: 40px;
        margin-bottom: 1px;
        margin-right: 40px;
        
    }

    ala {
        width: 300px;
        font-size: 90%;
        margin-top: 40px;
        margin-bottom: 1px;
        margin-right: 40px;
        padding-right: 300px;
    }

    ttd{
        font-size: 90%;
        margin-left: 50%;
        margin-bottom: 5px;
    }
    nip {
        font-size: 90%;
        margin-left: 39%;
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
    p.align{
        margin-bottom: 1rem;
        margin-top: 1rem;
    }
    thinker{
        font-weight: bold;
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

<kop>Nomor : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;/B/DST/UN3.FV/I/PK.01.06/<?php echo date('Y');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo format_indo(date('Y-m-d')); ?></kop></br>
<kop>Hal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Permohonan Ijin <?php echo $proses;?></kop></br>
<p>&nbsp;</p>
      
<?php foreach($berkas as $row){?>
<isi>Yth. <?php echo $row['NAMA_TUJUAN']; ?></isi></br>
<isi><?php echo $row['NAMA_PERUSAHAAN']; ?></isi></br>
<ala><?php echo $row['ALAMAT_PERUSAHAAN']; ?></ala></br>
<isi><?php echo $row['KOTA']; ?></isi></br>
    
 
<p class="justify-text align">Sehubungan dengan kegiatan kurikulum berupa <?php echo $proses;?> yang dilaksanakan oleh mahasiswa, maka kami mohon kesediaan Bapak / Ibu untuk mengijinkan mahasiswa Fakultas Vokasi, Universitas Airlangga, Semester <?php echo $sems;?> Tahun Akademik <?php echo $row['TAHUN_AKADEMIK']; ?> Program Studi <?php echo $row['NAMA_PRODI']; ?>, untuk melaksanakan <?php echo $proses;?> di <?php echo $row['NAMA_PERUSAHAAN'] ;?> adapun Mahasiswa yang akan melaksanakan <?php echo $proses;?> sebagai berikut :</p>
<?php };?>
<table border="1" cellspacing="0" width="100%" class="isi">        
    <tr class="text-center">
        <th scope="col-sm-1">No</th>
        <th scope="col-sm-4">Nama</th>
        <th scope="col-sm-2">Nim</th>
        <th scope="col-sm-2">Telp</th>
        <th scope="col-sm-3">Prodi</th>
    </tr>
    <?php $a=1; foreach($mhs as $key){ ?>
    <tr>
        <td><center><?php echo $a++;?></center></td>
        <td><?php echo $key['NAMA_MHS'];?></td>
        <td><center><?php echo $key['NIM_MHS']?></center></td>
        <td><center><?php echo $key['NO_TLP_MHS'];?></center></td>
        <td><center><?php echo $key['NAMA_PRODI'];?></center></td>
    </tr><?php };?>
</table>
<?php foreach($berkas as $data){?>
               <p class="justify-text align">Waktu Pelaksanaan <?php echo $proses;?> Tersebut direncanakan Mulai Tanggal <?php echo date("d-m-Y",strtotime($data['TGL_MULAI'])) ;?> Sampai dengan <?php echo date("d-m-Y",strtotime($data['TGL_BERAKHIR'])); ?>.</br>Mohon konfirmasi surat balasan <?php echo $proses;?> dari Perusahaan yang Bapak/Ibu Pimpin ke Pembimbing <?php echo $proses;?> <?php echo $data['NAMA_PRODI'];?>: <thinker><?php echo $data['NAMA_DOSEN'];?> (<?php echo $data['EMAIL_TLP'];?>).</thinker></br>Demikian atas perhatian dan kerjasama yang baik, kami sampaikan terima kasih.</p>
<p>&nbsp;</p>

<ttd>a.n. Dekan</ttd></br>
<ttd>Plt.Wakil Dekan I</ttd></br>
<ttd>&nbsp;</ttd>
<ttd>&nbsp;</ttd>
<ttd>&nbsp;</ttd>
<ttd>&nbsp;</ttd></br>


<ttd>Dr. Andi Estetiono, S.E., M.M.</ttd></br>
<tem>Tembusan :</tem><nip>NIP. 196807162016123101</nip></br>

<tem>1. Ketua <?php echo $data['NAMA_DEPARTEMEN'];?></br>2. Ketua Kordinator Program Studi <?php echo $data['NAMA_PRODI'];?></br>Fakultas Vokasi</tem>
       
<?php }?>

</body>