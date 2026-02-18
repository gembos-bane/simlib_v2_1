<html>

<div class="container-fluid ">
	<div class="card" style="width: 100rem;">
	  <div class="card-body">
	    <h5 class="card-title">Persyaratan Mendaftar Yudisium</h5>
	    <h6 class="card-subtitle mb-2 text-muted">persyaratan dikumpulkan dalam 1 file pdf maximal 10mb</h6>
	    <ol class="text font-monospace">
		  <li>Untuk D3 Minimal SKS yang ditempuh Sudah 116 dan D4 140 dibuktikan dengan transkrip nilai</li>
		  <li>File KTP </li>
		  <li>Toefl minimal 400 untuk D3 dan 450 untuk D4 link download TOEFL <a href="https://elpt.pusatbahasa.unair.ac.id/auth/login" target="blank">disini</a></li>
		  <li>Nilai SKP Minimal 75 dengan dibuktikan surat skp yang dikeluarkan dari bagian kemahasiswaan</li>
		  <li>Sertifikat PPKMB yang dikeluarkan oleh pihak Universitas Airlangga</li>
		  <li>Bukti Upload Artikel / journal di bagian branding Fakultas Vokasi bisa upload dilink -> <a href="https://linktr.ee/vokasiunair" target="blank">Upload</a></li>
		  <li>KTM yang sebelumnnya sudah ditutup account di Bank</li>
		  <li>Bukti Penyerahan TA / Skripsi di Perpustakaan Universitas Airlangga <a href="https://ailisx.lib.unair.ac.id/keanggotaan/site/login" target="blank">Upload disini</a></li>
		  <li>Bukti Bebas Pinjaman Yang Dikeluarkan Dari pihak Perpusatakaan Universitas Airlangga <a href="https://ailisx.lib.unair.ac.id/keanggotaan/site/login" target="blank">Upload disini</a></li>
		  <li>Bukti Lunas Pembayaran SOP, UKT dan SP3 bisa download lewat account cybercampus anda</li>
		  <li>Sertifikat UKOM (uji Kompetensi), kondisional kebijakan tiap Prodi</li>
		</ol>
	    <a href="<?php echo site_url("MHS/yudisium")?>/<?php echo hash("sha256",$_SESSION['idpegawai']);?>/Yudisium" class="card-link"><button class="btn btn-info" onclick="myFunction">Ajukan</button></a>
	    <a href="<?php echo site_url('MHS/index');?>" class="card-link"><button class="btn btn-danger">Back</button></a>
	  </div>
	</div>
</div>

<script>
function myFunction(){
	alert"(Pastikan Semua data anda Sudah Siap dan dikumpulkan menjadi satu file .PDF dengan ukuran maxsimal 10 mb)";
}
 </script>;
</html>