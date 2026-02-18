<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Home
 *
 * @author D4 MB
 */
class Home extends CI_Controller{
    //put your code here
    function __construct(){
    parent::__construct();
            $this->load->library(array('form_validation','session','database'));
            $this->load->model(array('Check','Mahasiswa','Yudisium'));
            $this->load->helper(array('form','url'));
    }

    function index(){
        //echo "<script>alert ('Mohon maaf pada tanggal 11 Februari 2026, jam 13.00 - 14.00 sistem dalam perbaikan');</script>";
        
       $outdata['title'] = 'SIMLIB_V2';
        $this->load->view('login/headerlog',$outdata);
        //$this->timelaps();
        $this->load->view('login/login');
       
    }
    function backpass(){
        if(isset($_SESSION['rule']) == FALSE){
            $this->load->vie('errors/cli');
            $this->index();
        }else{
            redirect(site_url('API/outreport'));
        }
    }
    public function check($nip){

        $check = $this->Check->checkname($nip)->num_rows();

        if($check != null){
            echo "<script type='text/javascript'>";
            echo "alert('Anda sudah memiliki account, mohon login dengan account yang sudah anda miliki')";
            echo "</script>";
        }else{
            redirect(site_url('MHS/newmhs'));
        }
        
    }

    /*function timelaps(){
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
    }*/
}
