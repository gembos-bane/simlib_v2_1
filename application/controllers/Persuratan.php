<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Passing
 *
 * @author D4 MB
 */
class Persuratan extends CI_Controller{
    //put your code here
    function __construct(){
        parent::__construct();
        
        $this->load->model('DataEx');
        $this->load->model('First');
        $this->load->model('Page');
        $this->load->model('Akd');
        $this->load->library("form_validation","session","database","pagination");
        $this->load->helper(array('form','url'));
        if(!isset($_SERVER['HTTP_REFERER'])){
                    $this->load->helper('url');
                    redirect(site_url('Backbone/index'));
                }
       
    }
    function index(){
        
    	$this->formUi();
        $outdata['std'] = $this->Akd->standarBorang()->result();
    	$idLogin = $this->DataEx->UserProfile($_SESSION['user']);
        $idpegawai = $this->DataEx->idpegawai($idLogin->ID_LOGIN);
        $outdata['data'] = $this->DataEx->datauser($idpegawai->ID_PEGAWAI);
        $outdata['borang'] = $this->Akd->standarBorang()->result();
        $countrow = $this->Akd->standarBorang()->num_rows();
    	$this->load->view('persuratan/UiPersuratan',$outdata);
        $this->load->view('login/footer');
    }
    
    function formUi(){

        $outdata['info'] = $this->Page->countinfo()->num_rows();
        $outdata['berita'] = $this->Page->countinfo()->result();
        $idLogin = $this->DataEx->UserProfile($_SESSION['user']);
        $idpegawai = $this->DataEx->idpegawai($idLogin->ID_LOGIN);
        $outdata['mail'] = $this->Page->findmail($idpegawai->ID_PEGAWAI)->num_rows();
        $outdata['surat'] = $this->Page->outmail($idpegawai->ID_PEGAWAI);
        $outdata['data'] = $this->DataEx->allDataProfile($idLogin->ID_LOGIN);
        $_SESSION['idpegawai'] = $idpegawai->ID_PEGAWAI; 
        $out['data'] = array($_SESSION['user'], $_SESSION['prodi'], $_SESSION['rule'],$_SESSION['idpegawai']);

        if($_SESSION['rule'] == 2 ){
        	$outdata['title'] = 'Ademi';
            $outdata['header'] = array('Profile','persuratan'); 
            //$this->timelaps();
            $this->load->view('login/headerlog',$outdata);
            $this->load->view('login/sidebardosen',$outdata);
            $this->load->view('login/topbar',$outdata);
        }else{
            $outdata['title'] = 'Ademi';
            $outdata['header'] = array('Profile','persuratan'); 
            //$this->timelaps();
            $this->load->view('login/headerlog',$outdata);
            $this->load->view('login/sidebar',$outdata);
            $this->load->view('login/topbar',$outdata);
        }
    }
  
    function download(){
        $this->load->library('zip','docx','doc','pdf','jpg','JPG');
        $this->load->helper('download');
        $url = $this->uri->segment(3,0);
        $file = $this->uri->segment(4,0);
        $type = $this->uri->segment(5,0);
        //$outdata['url'] = base_url()."upload"."/".$url."/".$file;
        $path = file_get_contents(base_url()."upload"."/".$url."/".$file);
        $filename = $url.'_'.'akd'.'.'.$type;
        $this->formUi();
        $outdata = force_download($filename,$path);
        $this->load->view('akreditasi/sucses');
        $this->load->view('login/footer');
    }
    function sso_surat(){

            echo '<script type="text/javascript">
             window.location.href = "http://10.11.8.50/pentor/" ; 
             </script>';

    }
    function dapeg(){
        echo '<script type="text/javascript">
             window.location.href = "http://10.11.8.50/dapeg/" ; 
             </script>';
    }
    
 }