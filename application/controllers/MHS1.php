<?php

class MHS extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('DataEx','First','Mahasiswa'));
        $this->load->library('form_validation','session','database','Pdf');
        $this->load->helper(array('form','url'));
    }  

    function index(){
        if(!isset($_SERVER['HTTP_REFERER'])){
                    $this->load->helper('url');
                    redirect(site_url('Backbone/index'));

                }
        $this->reportmhs();
    }


    function newmhs(){
        $outdata['prodi'] = $this->First->nama_prodi();
        $outdata['title'] = 'MSMHS_SIMLIBV2';
        //$this->load->view('login/headerlog',$outdata);
        $this->load->view('mahasiswa/newaccount',$outdata);
    }

   
    function createaccount(){
        $username = $this->input->post('Username');
        $prodi_id = 6;
        $password = $this->input->post('Password');
        $password2 = $this->input->post('Password2');
        $nama = $this->input->post('Nama');
        $nip = $this->input->post('nim');
        $email = $this->input->post('email');
        $add = $this->input->post('alamat');
        $tlp = $this->input->post('tlp');
        $id_nama_prodi = $this->input->post('id_nam_prod');
        $tanggal = date('Y-m-d');
        
        if(empty($username && $password && $password2 && $nama && $nip)){
            echo '<script language="javascript">';
            echo 'alert("data yang anda inputkan tidak boleh kosong")';
            echo '</script>';
            $this->newmhs(); 
        }elseif($password == $password2){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $data = array(
                'ID_LOGIN' => ' ',
                'LOGIN_USER' => $username,
                'LOGIN_PASS' => $password,
                'ID_RULE' => $prodi_id,
                'HASH_LOG' => $hash
            );
            $data_hash =  array(
                'ID_HASH' => ' ',
                'HASH_LOG' => $hash,
                'LOGIN_USER' => $username
                 );
            $this->load->model('First');
            $this->First->insertUser($data);
            $id_user = $this->First->selectId($username)->row();
            $cekId = $this->First->selectId($username);
                if($cekId->num_rows() > 0){
                    $datuser = array(
                        'ID_PEGAWAI' => ' ',
                        'NAMA_PEGAWAI' => $nama,
                        'NIP_PEGAWAI' => $nip,
                        'GOLONGAN' => ' ',
                        'ID_LOGIN' => $id_user->ID_LOGIN,
                        'ID_RULE'=> $prodi_id,
                        'ID_PRODI'=> $id_nama_prodi,
                        'NO_TLP' => $tlp,
                        'E_MAIL' => $email,
                        'ALAMAT' => $add,
                        'TMT' => $tanggal
                    );
                    $this->First->insertPegawai($datuser);
                    
                    echo '<script language="javascript">';
                    echo 'alert("data yang anda inputkan sukses mohon login dengan user dan password yang anda daftarkan")';
                    echo '</script>'; 
                    $this->load->model('DataEx');
                    $outadmin['login'] = $this->DataEx->UserSearch();
                    redirect(site_url('Home/index'));
            }

        }else{
            $errorpas = 'password not same, please insert corectly';
        }

    }
    function magang(){
        $this->frontuimhs();
        $this->load->model('DataEx');
        $this->load->model('Mahasiswa');
        $id = $_SESSION['idpegawai'];
        $mailing = $this->Mahasiswa->countmsg($id);
        $data = $this->Mahasiswa->countmsg($id)->result();
            foreach($data as $key){
                $tanggal = date('d-m-Y',strtotime('+15 day',strtotime($key->TIME_SEND)));
                $idpkl = $key->ID_DATA_PKL;
            }

        if($tanggal < date('d-m-Y')){$this->Mahasiswa->countmsgdel($idpkl);}
        if($mailing->num_rows() != 0){
            $outdata['pesan'] = $this->Mahasiswa->countmsg($id)->result();
            $this->load->view('mahasiswa/report',$outdata);
        }else{
            $outdata['user'] = $this->DataEx->datauser($id);
            $outdata['tujuan'] = $this->Mahasiswa->tujuan();

            $this->load->view('mahasiswa/magang',$outdata);
            
        }
        $this->load->view('login/footer');
        
    }
    function pkl(){
        $this->frontuimhs();
        $this->load->model('DataEx');
        $this->load->model('Mahasiswa');
        $id = $_SESSION['idpegawai'];
        $mailing = $this->Mahasiswa->countmsg($id);
        $data = $this->Mahasiswa->countmsg($id)->result();
            foreach($data as $key){
                $tanggal = date('d-m-Y',strtotime('+15 day',strtotime($key->TIME_SEND)));
                $idpkl = $key->ID_DATA_PKL;
            }
        if($tanggal < date('d-m-Y')){ $this->Mahasiswa->countmsgdel($idpkl);}
        if($mailing->num_rows() != 0){
            $outdata['pesan'] = $this->Mahasiswa->countmsg($id)->result();
            
                $this->load->view('mahasiswa/report',$outdata);
                
        }else{
        $idprodi = $this->DataEx->datauser($id);
        $outdata['user'] = $this->DataEx->datauser($id);
        $outdata['tujuan'] = $this->Mahasiswa->tujuan();
        $this->load->view('mahasiswa/pkl',$outdata);
        
        }
        $this->load->view('login/footer');
        
    }
    function magangpersonal(){
        $this->frontuimhs();
        $this->load->model('DataEx');
        $this->load->model('Mahasiswa');
        $id = $_SESSION['idpegawai'];
        $idprodi = $this->DataEx->datauser($id);
        foreach($idprodi as $key){
            $idprod = $key['ID_PRODI'];
        }
        $outdata['namadosen'] = $this->DataEx->namadosen($idprod);
        $jenis = $this->uri->segment(3,0);

        if($jenis==1){
            $outdata['headerpos']  = 'Magang';
            $outdata['value']  = 1;
        }else{
            $outdata['headerpos'] = 'PKL';
            $outdata['value']  = 2;
        }

        $outdata['departemen'] = $this->Mahasiswa->departemen();
        $outdata['user'] = $this->DataEx->datauser($id);
        $outdata['tujuan'] = $this->Mahasiswa->tujuan();
        $this->load->view('mahasiswa/magangpersonal',$outdata);
        $this->load->view('login/footer');
    }
    function magangkelompok(){
        $this->frontuimhs();
        $this->load->model('DataEx');
        $this->load->model('Mahasiswa');
        $id = $_SESSION['idpegawai'];
        $idprodi = $this->DataEx->datauser($id);
        foreach($idprodi as $key){
            $idprod = $key['ID_PRODI'];
        }
        $outdata['namadosen'] = $this->DataEx->namadosen($idprod);
        $jenis = $this->uri->segment(3,0);
        if($jenis==1){
            $outdata['headerpos']  = 'Magang';
            $outdata['value']  = 1;
        }else{
            $outdata['headerpos'] = 'PKL';
            $outdata['value']  = 2;
        }
        $outdata['departemen'] = $this->Mahasiswa->departemen();
        $outdata['user'] = $this->DataEx->datauser($id);
        $outdata['tujuan'] = $this->Mahasiswa->tujuan();
        $this->load->view('mahasiswa/magangkelompok',$outdata);
        $this->load->view('login/footer');
    }
    
    function skripsi(){
        $this->frontuimhs();
        $this->load->model('DataEx');
        $this->load->model('Mahasiswa');
        $id = $_SESSION['idpegawai'];
        $idprodi = $this->DataEx->datauser($id);
        foreach($idprodi as $row){ $idprod = $row['ID_PRODI'];}

        $outdata['dosen'] = $this->Mahasiswa->namadosen($idprod);
        $outdata['user'] = $this->DataEx->datauser($id);
        $this->load->view('mahasiswa/skripsi', $outdata);
        $this->load->view('login/footer');
    }
    /*function search(){
        if(isset($_POST["query"])){
            $output = '';
            $key = "%".$_POST['query']."%";
            $exdata = $this->Mahasiswa->autosearch($key);

            $output .= '<ul class="list-unstyled">';
            if($exdata->num_rows > 0){
                while($row = $exdata->fetch_assoc()){
                    $output .= '<li>'.$row["NAMA_MHS"].'</li>';
                }
            }else{
                $output .= '<li>Nama Tersebut Belum Mengajukan. </li>'
            }
        }
        $output .= '</ul>';
        echo $output;
    }*/
    function insertpkl(){
        $this->load->model('Mahasiswa');
        $this->load->model('DataEx');
        $id_mhs = $this->input->post('idmhs');
        $date = date("Y-m-d");
        $id = $_SESSION['idpegawai'];
        $idprodi = $this->DataEx->datauser($id);
        $datapengajuan = $this->input->post('jml');
        foreach($idprodi as $row){ $idprod = $row['ID_PRODI'];}
        $datapkl = array(

            'ID_DATA_PKL' => ' ',
            'ID_PEGAWAI' => $this->input->post('idmhs'),
            'ID_TUJUAN' => $this->input->post('tujuan'),
            'NAMA_PERUSAHAAN' => $this->input->post('perusahaan'),
            'ALAMAT_PERUSAHAAN' => $this->input->post('almtprsh'),
            'KOTA' => ' ',
            'TGL_MULAI' => $this->input->post('waktumulai'),
            'TGL_BERAKHIR' => $this->input->post('waktuakhir'),
            'EMAIL_TLP' => $this->input->post('kps'),
            'RESPONS' => ' ',
            'VALUE_DATA' => $this->input->post('value'),
            'ID_DEPARTEMEN' => $this->input->post('departemen'),
            'ID_NAMA_DOSEN' => $this->input->post('dosen'),
            'JENIS_MAGANG' => $this->input->post('jenis'),
            'ID_PRODI' => $idprod,
            'TYPE' => ' ',
            'ID_SEMESTER' => 1,
            'ID_TAHUN_AKD' => 7,
            'TANGGAL_MHS_INPUT'=> $date
        );
        
        $this->Mahasiswa->insertpkl($datapkl);
        $iddatapkl = $this->Mahasiswa->selectdatapkl($id_mhs);
        foreach($iddatapkl as $row){
            $idpkl = $row->ID_DATA_PKL;
        }

        if($datapengajuan == 1){
            $type = 1;
            $data = array(
                'ID_MHS_PKL' => ' ',
                'ID_DATA_PKL' => $idpkl,
                'NAMA_MHS' => $this->input->post('nama'),
                'NIM_MHS' => $this->input->post('nim'),
                'NO_TLP_MHS' => $this->input->post('tlp'),
                'ID_PRODI' => $idprod,
                'TYPE_PENGAJUAN' => $type,
                'ID_SEMESTER' => 1,
                'ID_TAHUN_AKD' => 7
            );
            $this->Mahasiswa->insertpklkelompok($data);
        }else{
           
            $type = 2;
            for($a=1;$a<=$datapengajuan;$a++){
                $data = array(
                    'ID_MHS_PKL' => ' ',
                    'ID_DATA_PKL' => $idpkl,
                    'NAMA_MHS' => $this->input->post('nm'.$a),
                    'NIM_MHS' => $this->input->post('nim'.$a),
                    'NO_TLP_MHS' => $this->input->post('tlp'.$a),
                    'ID_PRODI' => $idprod,
                    'TYPE_PENGAJUAN' => $type,
                    'ID_SEMESTER' => 1,
                    'ID_TAHUN_AKD' => 7
                );
                $this->Mahasiswa->insertpklkelompok($data);
                /*$nimcheck = $this->input->post('nim'.$a);
                $result = $this->Mahasiswa->countnim($nimcheck)->num_rows();
                    if($result > 2){
                        $namamhs = $this->Mahasiswa->countnim($nimcheck)->result();
                            foreach($namamhs as $row){
                                $outname = $row->NAMA_MHS;
                                echo '<script type="text/javascript">';
                                echo 'alert("Mohon maaf'.$outname.' sudah lebih dari 2x mengajukan permohonan magang")';
                                echo '</script>';
                                redirect(site_url('MHS/index'));
                            }
                        }else{$this->Mahasiswa->insertpklkelompok($data); }*/
            }
        }
           
    
        
       if(isset($data) === true){
            echo '<script type="text/javascript">';
            echo 'alert("data yang anda inputkan sukses mohon ditunggu konfirmasi Admin untuk keberlanjutan proses cetak surat pengantar")';
            echo '</script>';
            redirect(site_url('MHS/index'));
        }else{
            echo '<script type=text/javascript">';
            echo 'alert("data yang anda inputkan tidak falid, mohon cek ulang kebenaran data anda")';
            echo '</script>';
            redirect(site_url('MHS/index'));
        }
    }
    function timelaps(){
        $end_time = strtotime("2024-02-28 23:59:59"); // Countdown end time
        $current_time = time(); // Current timestamp
        $time_left = $end_time - $current_time; // Time remaining in seconds

        $days = floor($time_left / 86400); // 86400 seconds in a day
        $time_left = $time_left % 86400;

        $hours = floor($time_left / 3600); // 3600 seconds in an hour
        $time_left = $time_left % 3600;

        $minutes = floor($time_left / 60); // 60 seconds in a minute
        $seconds = $time_left % 60;
        $outdata['timeleft'] = $days;
        $outdata['hours'] = $hours;
        $outdata['minute'] = $minutes;
        $outdata['seconds'] = $seconds;

        $this->load->view('login/alertmodal',$outdata);
    }
    function pengambilandata(){
        $this->frontuimhs();
        $this->load->model('DataEx');
        $this->load->model('Mahasiswa');
        $id = $_SESSION['idpegawai'];
        $idprodi = $this->DataEx->datauser($id);
        $outdata['user'] = $this->DataEx->datauser($id);
        $outdata['tujuan'] = $this->Mahasiswa->tujuan();
        $outdata['departemen'] = $this->Mahasiswa->departemen();
        $this->load->view('mahasiswa/ambildata',$outdata);
        $this->load->view('login/footer');
    }
    function insertpengambilandata(){
        $this->load->model('DataEx');
        $id = $_SESSION['idpegawai'];
        $idprod = $this->DataEx->datauser($id);
        foreach($idprod as $row){ $idprodi = $row['ID_PRODI'];}
        $data = array(
            'ID_AMBIL_DATA' => ' ',
            'ID_PEGAWAI' => $this->input->post('idmhs'),
            'ID_TUJUAN' => $this->input->post('tujuan'),
            'NAMA_PERUSAHAAN' => $this->input->post('perusahaan'),
            'ALAMAT_PERUSAHAAN' => $this->input->post('almtprsh'),
            'KOTA' => $this->input->post('kota'),
            'ID_PRODI' => $idprodi,
            'STATUS_PROSES' => ' ',
            'ID_DEPARTEMEN' => $this->input->post('departemen'),
            'ID_SEMESTER' => 1,
            'ID_TAHUN_AKD' => 7
        );
        $this->load->model('Mahasiswa');
        $this->Mahasiswa->insertambildata($data);
        if(isset($data) === true){
            echo '<script type="text/javascript">';
            echo 'alert("data yang anda inputkan sukses mohon ditunggu konfirmasi Admin untuk keberlanjutan proses cetak surat pengantar")';
            echo '</script>';
            redirect(site_url('MHS/index'));
        }else{
            echo '<script type="text/javascript">';
            echo 'alert("data yang anda inputkan tidak falid, mohon cek ulang kebenaran data anda")';
            echo '</script>';
            redirect(site_url('MHS/index'));
        }

    }
    
    
    function prosespengajuanambildata(){
        $this->load->model('Mahasiswa');
        $idberkas = $this->uri->segment(3,0);
        $idmhs = $this->uri->segment(4,0);
        $outdata['proses'] = 'Permohonan Pengambilan Data';
        $outdata['berkas'] = $this->Mahasiswa->pengambilandata($idmhs);
        $outdata['isi'] = $this->Mahasiswa->pengambilandata($idmhs);
        $this->frontuimhs();
        $this->load->view('mahasiswa/pengambilandata',$outdata);
        $this->load->view('login/footer');
    }
    function revisipengajuan(){
        $this->load->model('Mahasiswa');
        $idpkl = $this->uri->segment(3,0);
        $namamhs $this->uri->segment(4,0);
        $tujuan = $this->input->post('tujuan');
        $namaperusahaan = $this->input->post('perusahaan');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $id = $this->input->post('id');
        $data = array(

        );
        $this->Mahasiswa->revisidatapkl();
    }
    function prosespengajuan(){
        $this->load->model('Mahasiswa');
        $idberkas = $this->uri->segment(3,0);
        //$namamhs = $this->uri->segment(4,0);
        $peng = $this->uri->segment(6,0);
        $jenis = $this->uri->segment(7,0);
        if($peng == 1){$outdata['proses'] = 'Magang';}else{$outdata['proses'] = 'Praktek Kerja Lapangan (PKL)';}

        if($jenis == 1){
            $outdata['berkas'] = $this->Mahasiswa->prosesberkas($idberkas);
            //$outdata['isi'] = $this->Mahasiswa->prosesberkasberkelompok($idberkas);
            $outdata['mhs'] = $this->Mahasiswa->prosesdatapkl($idberkas);
        }else{
            $outdata['berkas'] = $this->Mahasiswa->pengajuanberkelompok($idberkas);
            //$outdata['isi'] = $this->Mahasiswa->prosesberkasberkelompok($idberkas);
            $outdata['mhs'] = $this->Mahasiswa->prosesdatapkl($idberkas);
        }
        foreach($outdata['mhs'] as $row ){
            $nimcheck = $row['NIM_MHS'];
        }
         $result = $this->Mahasiswa->countnim($nimcheck)->num_rows();
         if($result >= 2){
            $outdata['check'] = 1;
         }else{ $outdata['check'] = 0; }

        //$outdata['prodi'] =$this->Mahasiswa->dataprodi($idberkas);
        $this->frontuimhs();
        $this->load->view('mahasiswa/prosespengajuan',$outdata);
        $this->load->view('login/footer');

    }
    function prosespdf(){
        $this->load->model('Mahasiswa');
        
        $idberkas = $this->uri->segment(3,0);
        $namaberkas = $this->uri->segment(4,0);
        $peng = $this->uri->segment(6,0);
        $jenis = $this->uri->segment(7,0);

        if($peng == 1){$outdata['proses'] = 'Magang';}else{$outdata['proses'] = 'Praktek Kerja Lapangan (PKL)';}
        $this->load->library('pdf');
        $this->pdf->set_option('isRemoteEnabled',TRUE);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename =$namaberkas."_proses_magang.pdf";
        $up = 1;
        $this->Mahasiswa->updatedatapkl($up,$idberkas);
        if($jenis == 1){
            $outdata['berkas'] = $this->Mahasiswa->prosesberkas($idberkas);
            $outdata['isi'] = $this->Mahasiswa->prosesberkasberkelompok($idberkas);
            $outdata['mhs'] = $this->Mahasiswa->prosesdatapkl($idberkas);
        }else{
            $outdata['berkas'] = $this->Mahasiswa->pengajuanberkelompok($idberkas);
            $outdata['isi'] = $this->Mahasiswa->prosesberkasberkelompok($idberkas);
            $outdata['mhs'] = $this->Mahasiswa->prosesdatapkl($idberkas);
        }
        $this->pdf->load_view('mahasiswa/prosespdf',$outdata);
        $this->Pdf->createPdf($html);
    }
    function prosespdfambildata(){

        $this->load->model('Mahasiswa');
        $idberkas = $this->uri->segment(3,0);
        //$namaberkas = $this->uri->segment(4,0);
        $peng = $this->uri->segment(5,0);
        $jenis = $this->uri->segment(6,0);
        $this->load->library('pdf');
        $this->pdf->set_option('isRemoteEnabled',TRUE);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename =$idberkas."_ambilberkas"."."."pdf";
        $up = 1;
        $this->Mahasiswa->updateambildata($up,$idberkas);
        $outdata['proses'] = 'Permohonan Pengambilan Data';
        $outdata['berkas'] = $this->Mahasiswa->pengambilandatapdf($idberkas);
        $outdata['isi'] = $this->Mahasiswa->pengambilandatapdf($idberkas);
        $this->pdf->load_view('mahasiswa/prosespdfambildata',$outdata);
        $this->Pdf->createPdf($html);
    }
    function reportmhs(){
        
        $this->load->model('Mahasiswa');
        $id = $this->Mahasiswa->iduser($_SESSION['user']);


        $idmhs = $this->Mahasiswa->idmhs($id->ID_LOGIN);
        foreach($idmhs as $row){
            $id = $row->ID_PEGAWAI;
        }
        $countid = $this->Mahasiswa->countmagang($id)->num_rows();

        if($countid > 2){
            $outdata['msg'] = 'Pengajuan permohonan magang anda lebih dari 2x yang disetujui, mohon maaf anda bisa mengajukan lagi setelah 2 minggu. dan data yang sudah masuk akan ditolak'; 
        }else{ $outdata['msg'] = 'mohon untuk mengingat maximal pengajuan permohonan magang dan PKL dalam 2 minggu hanya 2x pengajuan';}

        $outdata['skripsi'] = $this->Mahasiswa->outskripsi($id);
        $outdata['report'] = $this->Mahasiswa->reportmhs($id);
        $outdata['pengambilandata'] = $this->Mahasiswa->pengambilandata($id);
        $this->frontuimhs();
        $this->load->view('mahasiswa/reportpengajuan',$outdata);
        $this->load->view('login/footer');
        
    }
    function reportpengajuan(){
        $this->load->model('Mahasiswa');
        $this->load->model('Page');
        $data = $this->uri->segment(3,0);
        $level = $this->uri->segment(4,0);
        $outdata['level'] = $this->uri->segment(4,0);
        $id = $this->Mahasiswa->iduser($_SESSION['user']);
        $idmhs = $this->Mahasiswa->idmhs($id->ID_LOGIN);
        foreach($idmhs as $row){
            $idmahasiswa = $row->ID_PEGAWAI;
        }
        // pagination 
        $url = base_url().'MHS/reportpengajuan/'.$data.'/'.$level.'/';
        $counting = $this->Page->get_count_report_fak($data);
        $config['array']= array($this->pagination($url,$counting));
        $this->pagination->initialize($config['array']);
        $page = ($this->uri->segment(5)) ? $this->uri->segment(5):0;
        $outdata['links'] = $this->pagination->create_links();
        $outdata['report'] = $this->Page->get_limit_report_fak(10,$page,$data);
        //end pagination

        //if($_SESSION['rule'] == 4){$data = 0;}else{$data = 1;}
        //$outdata['tujuan'] = $this->Mahasiswa->tujuan();
        //$outdata['report'] = $this->Mahasiswa->reportadminfak($data);
        $this->frontuimhs();
        $this->load->view('mahasiswa/reportpengajuanmhs',$outdata);
        $this->load->view('login/footer');
    }
    function reportambildata(){
        $this->load->model('Mahasiswa');
        $this->load->model('Page');
        $data = $this->uri->segment(3,0);
        $level = $this->uri->segment(4,0);
        $outdata['level'] = $this->uri->segment(4,0);
        $id = $this->Mahasiswa->iduser($_SESSION['user']);
        $idmhs = $this->Mahasiswa->idmhs($id->ID_LOGIN);
        foreach($idmhs as $row){
            $idmahasiswa = $row->ID_PEGAWAI;
        }
        // pagination 
        $url = base_url().'MHS/reportpengambilandata/'.$data.'/'.$level.'/';
        $counting = $this->Page->get_count_report_ambil_data($data);
        $config['array']= array($this->pagination($url,$counting));
        $this->pagination->initialize($config['array']);
        $page = ($this->uri->segment(5)) ? $this->uri->segment(5):0;
        $outdata['links'] = $this->pagination->create_links();
        $outdata['report'] = $this->Page->get_limit_ambil_data(10,$page,$data);
        //end pagination

        //if($_SESSION['rule'] == 4){$data = 0;}else{$data = 1;}
        //$outdata['tujuan'] = $this->Mahasiswa->tujuan();
        //$outdata['report'] = $this->Mahasiswa->reportambildata($data);
        $this->frontuimhs();
        $this->load->view('mahasiswa/reportpengambilandata',$outdata);
        $this->load->view('login/footer');
    }
    function reportpengambilandata(){
        $this->load->model('Mahasiswa');
        $this->load->model('Page');
        $data = $this->uri->segment(3,0);        
        $level = $this->uri->segment(4,0);
        $outdata['level'] = $this->uri->segment(4,0);
        $id = $this->Mahasiswa->iduser($_SESSION['user']);
        $idmhs = $this->Mahasiswa->idmhs($id->ID_LOGIN);
        foreach($idmhs as $row){
            $idmahasiswa = $row->ID_PEGAWAI;
        }
        // pagination 
        $url = base_url().'MHS/reportpengambilandata/'.$data.'/'.$level.'/';
        $counting = $this->Page->get_count_report_ambil_data($data);
        $config['array']= array($this->pagination($url,$counting));
        $this->pagination->initialize($config['array']);
        $page = ($this->uri->segment(5)) ? $this->uri->segment(5):0;
        $outdata['links'] = $this->pagination->create_links();
        $outdata['report'] = $this->Page->get_limit_ambil_data(10,$page,$data);
        //end pagination

        //if($_SESSION['rule'] == 4){$data = 0;}else{$data = 1;}
        //$outdata['tujuan'] = $this->Mahasiswa->tujuan();
        //$outdata['report'] = $this->Mahasiswa->reportambildata($data);
        $this->frontuimhs();
        $this->load->view('mahasiswa/reportpengambilandata',$outdata);
        $this->load->view('login/footer');
    }
    function tolakpengajuan(){
        $this->load->model('Mahasiswa');
        $int = $this->uri->segment(3,0);
        $idpkl = $this->uri->segment(4,0);
        $this->Mahasiswa->updatedatapkl($int,$idpkl);
        echo "<script>alert('pengajuan berhasil ditolak')</script>";
        redirect(site_url('Backbone/detailpengajuan'));
        
    }
    function bataspengajuan(){
        $this->load->model('Mahasiswa');
        $int = $this->uri->segment(3,0);
        $idpkl = $this->uri->segment(4,0);
        $this->Mahasiswa->updatedatapkl($int,$idpkl);
        echo "<script>alert('pengajuan berhasil ditolak')</script>";
        redirect(site_url('Backbone/detailpengajuan'));
    }
    function uploadberkas(){
        $this->load->model('Mahasiswa');
        $id = $this->uri->segment(3,0);
        $dataout['datapkl'] = $this->Mahasiswa->uploadmagang($id);
        $this->frontuimhs();
        $this->load->view('mahasiswa/upload',$dataout);
        $this->load->view('login/footer');
    }
    function insertskripsi(){
       $idprodi = $this->input->post('idprodi');
       $nim = $this->input->post('nim');
       $idmhs = $this->input->post('idmhs');
       $judul = $this->input->post('judul');
       $pembimbing1 = $this->input->post('pembimbing1');
       $pembimbing2 = $this->input->post('pembimbing2');
       $bidangmk = $this->input->post('MK');
       $date = date('Y-m-d');
       $respons = ' ';
       $data = array('ID_SKRIPSI'=>' ' , 'ID_PEGAWAI'=>$idmhs, 'ID_PRODI' => $idprodi,'NIM_MHS'=> $nim, 'JUDUL'=> $judul, 'PEMBIMBING1'=> $pembimbing1, 'PEMBIMBING2'=>$pembimbing2, 'MK_ACUAN'=>$bidangmk, 'DATE_SKRIPSI'=>$date, 'RESPONS'=>$respons);
       $this->load->model('Mahasiswa');
       $output = $this->Mahasiswa->insertskripsi($data);

       if(isset($output) == true){
            echo '<script language="javascript">';
            echo 'alert("data yang anda inputkan sukses mohon ditunggu konfirmasi Admin untuk keberlanjutan proses cetak surat pengantar")';
            echo '</script>';
            redirect(site_url('MHS/index'));
        }else{
            echo '<script language="javascript">';
            echo 'alert("data yang anda inputkan tidak falid, mohon cek ulang kebenaran data anda")';
            echo '</script>';
            redirect(site_url('MHS/index'));
        }
    }
    function get_autocomplete(){
        if(isset($_GET['term'])){
            $result = $this->Mahasiswa->namadosen($_GET['term']);
            if(count($result) > 0) {
                foreach($result as $row){
                    $arr_result[] = $row['NAMA_DOSEN'];
                    echo json_encode($arr_result);
                }
            }
        }
    }
    function frontuimhs(){
        //countdown time active
           /* $end_time = strtotime("2024-02-29 23:59:59"); // Countdown end time
            $current_time = time(); // Current timestamp
            $time_left = $end_time - $current_time; // Time remaining in seconds

            $days = floor($time_left / 86400); // 86400 seconds in a day
            $time_left = $time_left % 86400;
            $outdata['timeleft'] = $days;*/
        //
        $this->load->model('DataEx');
        $this->load->model('First');
        $this->load->model('Page');
        $outdata['info'] = $this->Page->countinfo()->num_rows();
        $outdata['berita'] = $this->Page->countinfo()->result();
        $idLogin = $this->DataEx->UserProfile($_SESSION['user']);
        $idpegawai = $this->DataEx->idpegawai($idLogin->ID_LOGIN);
        $outdata['mail'] = $this->Page->findmail($idpegawai->ID_PEGAWAI)->num_rows();
        $outdata['surat'] = $this->Page->outmail($idpegawai->ID_PEGAWAI);
        $outdata['data'] = $this->DataEx->allDataProfile($idLogin->ID_LOGIN);
        $_SESSION['idpegawai'] = $idpegawai->ID_PEGAWAI; 
        $out['data'] = array($_SESSION['user'], $_SESSION['prodi'], $_SESSION['rule'],$_SESSION['idpegawai']);

        if($_SESSION['rule'] == 6){
            $outdata['title'] = 'MSMHS_ADEMI';
            $outdata['header'] = array('profile'); 
            //$this->timelaps();
            $this->load->view('login/headerlog',$outdata);
            $this->load->view('login/sidebarmhs',$outdata);
            $this->load->view('login/topbar',$outdata); 

            }elseif($_SESSION['rule'] == 4){
                $this->load->model('Page');
                    $dat = 0;
                    $outdata['alert'] = $this->Page->alertMagang($dat)->num_rows();
                    $outdata['alertambil'] = $this->Page->alertambildata($dat)->num_rows();
                $outdata['title'] = 'MSMHS_ADEMI';
                $outdata['header'] = array('BERKAS_MBKM','PENGAMBILAN_DATA','UNDUR_DIRI','CUTI');
                $outdata['head'] = array('SK_MENGAJAR','SK_DOSEN_WALI','SK_DOSEN_PJMK','SK_PEMBIMBING_TA','PLOTING_JADWAL','BEBAN_MENGAJAR');
                //$this->timelaps();
                $this->load->view('login/headerlog',$outdata);
                $this->load->view('login/sidebarfakultas',$outdata);
                $this->load->view('login/topbar',$outdata); 
            }else{
                $outdata['title'] = 'MSMHS_ADEMI';
                $outdata['header'] = array('Profile','SK_PRODI', 'Kepegawaian'); 
                //$this->timelaps();
                $this->load->view('login/headerlog',$outdata);
                $this->load->view('login/sidebar',$outdata);
                $this->load->view('login/topbar',$outdata);
            }
        
    }
    function downloadberkas(){
        $this->load->model('Mahasiswa');
        $id = $this->uri->segment(4,0);
        $databerkas = $this->Mahasiswa->downberkas($id);
        foreach($databerkas as $value){
            $nam = $value->LINK_BERKAS;
        }
        
        $outdata['url'] = base_url()."upload/berkasmhs"."/".$nam;
        
        $outdata['file'] ='pdf';
        $this->load->view('content/outpdf',$outdata);
    }
    function deletdatapkl(){
        $this->load->model('Mahasiswa');
        $idpkl = $this->uri->segment(3,0);
        $this->Mahasiswa->delmhspkl($idpkl);
        $this->Mahasiswa->delmhssecond($idpkl);

        $this->index();
        
    }
    function delmagpkl(){
        $id = $this->uri->segment(4,0);
        $this->Mahasiswa->delmhspkl($id);
        $this->redierect();
    }
    function redierect(){
        redirect(site_url('Backbone/detailpengajuan'));
    }
    function pagination($url, $counting){
        $config = array();
        $config["base_url"] = $url;
        $config["total_rows"] = $counting;
        $config["per_page"] = 10;
        $config["uri_segment"] = 5;
        $config['full_tag_open'] = '<ul class="pagination">';        
        $config['full_tag_close'] = '</ul>';        
        $config['first_link'] = 'First';        
        $config['last_link'] = 'Last';        
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['first_tag_close'] = '</span></li>';        
        $config['prev_link'] = '&laquo'.' '.'Previous';        
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['prev_tag_close'] = '</span></li>';        
        $config['next_link'] = '&raquo'.' '.'Next';        
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['next_tag_close'] = '</span></li>';        
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['last_tag_close'] = '</span></li>';        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" >';        
        $config['cur_tag_close'] = '</a></li>';        
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['num_tag_close'] = '</span></li>';
               
                $this->pagination->initialize($config);
                $page = ($this->uri->segment(5)) ? $this->uri->segment(5):0;
        }
}
?> 