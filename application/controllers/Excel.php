<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model(array('DataEx','First','Mahasiswa','Page','Yudisium'));
		$this->load->library('form_validation','session','database');
        $this->load->helper(array('form','url'));
    	}
    function selecttoexcel(){

    }
    function yudisiumToexcel(){ 

    	$this->load->model('Mahasiswa');
        $idprodi = $this->uri->segment(4,0);
        $idperiode = $this->uri->segment(3,0);
        $string = $this->uri->segment(6,0);
        $tahun = $this->uri->segment(7,0);
        $semester = $this->uri->segment(8,0);
        $prod = $this->uri->segment(9,0);
        $prodi = urldecode($prod);
        $tglperiode = str_replace('%20',' ', $string);

        if($idprodi == 3 ){
            $datayudisium = $this->Yudisium->yudisiumpjk($idprodi, $idperiode)->result_array();
            $head1 = 'KUP';
            $head2 = 'POTPUT PPh';
            $head3 = 'PAJAK PENGHASILAN (PPH)';
            $head4 = 'PPN DAN PPNBM BEA MATERAI';
        }elseif($idprodi == 7){
            $datayudisium = $this->Yudisium->yudisiummp($idprodi, $idperiode)->result_array();
            $head1 = 'Pengantar Pemasaran';
            $head2 = 'Pengantar Manajemen';
            $head3 = '-';
            $head4 = '-';
        }else{
            $datayudisium = $this->Mahasiswa->setexcel($idprodi,$idperiode)->result_array();
            $head1 = '-';
            $head2 = '-';
            $head3 = '-';
            $head4 = '-';
        }
        
        

        if(!empty($datayudisium)){
            $spreadsheet = new spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();


            $style_title = [
                'font' => [
                    'bold' => TRUE,
                    'size' => 11,
                    'name' => 'Times New Roman',
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
                    ]
            ];
            // Style row header
            $style_col = [
                // Set font bold
                'font' => [
                    'bold' => true,
                    'size' => 8,
                    'name' => 'Times New Roman',
                ],
                //Set aligntment di middle
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    'wrapText' => true,
                ],
                //Set border atas, bawah, kanan kiri cell dengan garis tipis
                'borders' => [
                    'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                    'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                    'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                    'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN]
                ]
            ];
            // Style row data
            $style_row = [
                //set font
                'font' => [
                    'size' => 8,
                    'name' =>'Times New Roman',
                ],
                //Set aligntment di tengah
                    'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                ],
                //Set border atas, bawah, kanan kiri cell dengan garis tipis
                    'borders' => [
                    'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                    'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                    'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                    'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN]
              ]
            ];
            $style_lastrow = [
                'font' => [
                    'size' => 8,
                    'name' =>'Times New Roman',
                ],
                //Set aligntment di tengah
                    'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                ]
            ];
            //style number
            $style_number = [
                 'font' => [
                    'size' => 8,
                    'name' =>'Times New Roman',
                ],
                //Set aligntment di tengah
                    'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                ],
                //Set border atas, bawah, kanan kiri cell dengan garis tipis
                    'borders' => [
                    'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                    'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                    'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                    'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN]
                ],
                //set number format
                    ''

            ];

            $sheet->getRowDimension('6')->setRowHeight(25);
            $sheet->getRowDimension('7')->setRowHeight(25);
            $sheet->getRowDimension('8')->setRowHeight(25);
            $sheet->getRowDimension('9')->setRowHeight(5);

            $sheet->setCellValue('A1',"DAFTAR LULUSAN MAHASISWA FAKULTAS VOKASI UNIVERSITAS AIRLANGGA");
            $sheet->mergeCells('A1:X1');

            $sheet->setCellValue('A2',"SEMESTER".' '.$semester.' '.$tahun);
            $sheet->mergeCells('A2:X2');

            $sheet->setCellValue('A3', $prodi);
            $sheet->mergeCells('A3:X3');

            $sheet->setCellValue('A4',"YUDISIUM TANGGAL".' '.$tglperiode);
            $sheet->mergeCells('A4:X4');

            $sheet->setCellValue('A6',"No");
            $sheet->mergeCells('A6:A8');

            $sheet->setCellValue('B6',"NAMA MAHASISWA");
            $sheet->mergeCells('B6:B8');

            $sheet->setCellValue('C6',"NIM");
            $sheet->mergeCells('C6:C8');

            $sheet->setCellValue('D6',"NIK");
            $sheet->mergeCells('D6:D8');

            $sheet->setCellValue('E6',"TEMPAT TANGGAL LAHIR");
            $sheet->mergeCells('E6:F8');

            $sheet->setCellValue('G6',"NOMOR HP");
            $sheet->mergeCells('G6:G8');

            $sheet->setCellValue('H6',"SKS");
            $sheet->mergeCells('H6:H8');

            $sheet->setCellValue('I6',"IPK");
            $sheet->mergeCells('I6:I8');

            $sheet->setCellValue('J6',"MAX 20% NILAI D");
            $sheet->mergeCells('J6:J8');

            $sheet->setCellValue('K6',"TOEFL");
            $sheet->mergeCells('K6:K8');

            $sheet->setCellValue('L6',"SKP");
            $sheet->mergeCells('L6:L8');

            $sheet->setCellValue('M6',"PPKMB");
            $sheet->mergeCells('M6:M8');

            $sheet->setCellValue('N6',"BUKTI ARTIKEL");
            $sheet->mergeCells('N6:N8');

            $sheet->setCellValue('O6',"KTM");
            $sheet->mergeCells('O6:O8');

            $sheet->setCellValue('P6',"BUKTI PENYERAHAN TA/PKL/SKRIPSI");
            $sheet->mergeCells('P6:P8');

            $sheet->setCellValue('Q6',"BEBAS PINJAM PERPUS");
            $sheet->mergeCells('Q6:Q8');

            $sheet->setCellValue('R6',"BUKTI LUNAS SP3");
            $sheet->mergeCells('R6:R8');

            $sheet->setCellValue('S6',"BUKTI LUNAS SOP");
            $sheet->mergeCells('S6:S8');

            $sheet->setCellValue('T6',"SERTIFIKAT UKOM");
            $sheet->mergeCells('T6:T8');

            $sheet->setCellValue('U6',"MATA AJAR WAJIB PRASYARAT C");
            $sheet->mergeCells('U6:X6');

            $sheet->setCellValue('U7',"NILAI C");
            $sheet->mergeCells('U7:X7');

            $sheet->setCellValue('U8',$head1);
            $sheet->setCellValue('V8',$head2);
            $sheet->setCellValue('W8',$head3);
            $sheet->setCellValue('X8',$head4);

            // Apply style judul tabel dan row header 
            $sheet->getStyle('A1:X1')->applyFromArray($style_title);
            $sheet->getStyle('A2:X2')->applyFromArray($style_title);
            $sheet->getStyle('A3:X3')->applyFromArray($style_title);
            $sheet->getStyle('A4:X4')->applyFromArray($style_title);

            $sheet->getStyle('A6:A8')->applyFromArray($style_col);
            $sheet->getStyle('B6:B8')->applyFromArray($style_col);
            $sheet->getStyle('C6:C8')->applyFromArray($style_col);
            $sheet->getStyle('D6:D8')->applyFromArray($style_col);
            $sheet->getStyle('E6:F8')->applyFromArray($style_col);
            $sheet->getStyle('G6:G8')->applyFromArray($style_col);
            $sheet->getStyle('H6:H8')->applyFromArray($style_col);
            $sheet->getStyle('I6:I8')->applyFromArray($style_col);
            $sheet->getStyle('J6:J8')->applyFromArray($style_col);
            $sheet->getStyle('K6:K8')->applyFromArray($style_col);
            $sheet->getStyle('L6:L8')->applyFromArray($style_col);
            $sheet->getStyle('M6:M8')->applyFromArray($style_col);
            $sheet->getStyle('N6:N8')->applyFromArray($style_col);
            $sheet->getStyle('O6:O8')->applyFromArray($style_col);
            $sheet->getStyle('P6:P8')->applyFromArray($style_col);
            $sheet->getStyle('Q6:Q8')->applyFromArray($style_col);
            $sheet->getStyle('R6:R8')->applyFromArray($style_col);
            $sheet->getStyle('S6:S8')->applyFromArray($style_col);
            $sheet->getStyle('T6:T8')->applyFromArray($style_col);
            $sheet->getStyle('U6:X6')->applyFromArray($style_col);
            $sheet->getStyle('U7:X7')->applyFromArray($style_col);
            $sheet->getStyle('U8')->applyFromArray($style_col);
            $sheet->getStyle('V8')->applyFromArray($style_col);
            $sheet->getStyle('W8')->applyFromArray($style_col);
            $sheet->getStyle('X8')->applyFromArray($style_col);

            $numrow = 10;
            $a = 1;
            $ket = 'ada';
            $dash = '-';

            foreach($datayudisium as $value){

                if($idprodi == 3){
                    $dash1 = $value['SYARAT_KUP'];
                    $dash2 = $value['SYARAT_POTPUTPPH'];
                    $dash3 = $value['SYARAT_PPH'];
                    $dash4 = $value['SYARAT_PPNBM'];
                }elseif($idprodi == 7){
                    $dash1 = $value['SYARAT_PGN_PEMASARAN'];
                    $dash2 = $value['SYARAT_PGN_MANAJEMEN'];
                    $dash3 = '-';
                    $dash4 = '-';
                }else{
                    $dash1 = '-';
                    $dash2 = '-';
                    $dash3 = '-';
                    $dash4 = '-';

                }


                $sheet->setCellValue('A'.$numrow, $a++);
                $sheet->setCellValue('B'.$numrow, $value['NAMA_PEGAWAI']);
                $sheet->setCellValue('C'.$numrow, "'".$value['NIP_PEGAWAI']);
                $sheet->setCellValue('D'.$numrow, $value['NIK']);
                $sheet->setCellValue('E'.$numrow, $value['TEMPAT_LAHIR']);
                $sheet->setCellValue('F'.$numrow, date("d-m-Y", strtotime($value['TANGGAL_LAHIR'])));
                $sheet->setCellValue('G'.$numrow, $value['NO_HP']);
                $sheet->setCellValue('H'.$numrow, $value['SKS']);
                $sheet->setCellValue('I'.$numrow, $value['IPK']);
                $sheet->setCellValue('J'.$numrow, $value['NILAI_D']);
                $sheet->setCellValue('K'.$numrow, $value['TOEFL']);
                $sheet->setCellValue('L'.$numrow, $value['SKP']);
                $sheet->setCellValue('M'.$numrow, $ket);
                $sheet->setCellValue('N'.$numrow, $ket);
                $sheet->setCellValue('O'.$numrow, $ket);
                $sheet->setCellValue('P'.$numrow, $ket);
                $sheet->setCellValue('Q'.$numrow, $ket);
                $sheet->setCellValue('R'.$numrow, $ket);
                $sheet->setCellValue('S'.$numrow, $ket);
                $sheet->setCellValue('T'.$numrow, $dash);
                $sheet->setCellValue('U'.$numrow, $dash1);
                $sheet->setCellValue('V'.$numrow, $dash2);
                $sheet->setCellValue('W'.$numrow, $dash3);
                $sheet->setCellValue('x'.$numrow, $dash4);
                 
        // Apply style row data

                $sheet->getStyle('A'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('B'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('C'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('D'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('E'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('F'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('G'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('H'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('I'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('J'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('K'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('L'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('M'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('N'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('O'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('P'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('Q'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('R'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('S'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('T'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('U'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('V'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('W'.$numrow)->applyFromArray($style_row);

                $sheet->getStyle('X'.$numrow)->applyFromArray($style_row);

                $numrow++;
            }

            // Set width kolom

            $sheet->getColumnDimension('A')->setWidth(3); 
            $sheet->getColumnDimension('B')->setWidth(25); 
            $sheet->getColumnDimension('C')->setWidth(15); 
            $sheet->getColumnDimension('D')->setWidth(18); 
            $sheet->getColumnDimension('E')->setWidth(10);
            $sheet->getColumnDimension('F')->setWidth(10);
            $sheet->getColumnDimension('G')->setWidth(15);
            $sheet->getColumnDimension('H')->setWidth(5);
            $sheet->getColumnDimension('I')->setWidth(5); 
            $sheet->getColumnDimension('J')->setWidth(5); 
            $sheet->getColumnDimension('K')->setWidth(5); 
            $sheet->getColumnDimension('L')->setWidth(5); 
            $sheet->getColumnDimension('M')->setWidth(5);
            $sheet->getColumnDimension('N')->setWidth(5);
            $sheet->getColumnDimension('O')->setWidth(5); 
            $sheet->getColumnDimension('P')->setWidth(5); 
            $sheet->getColumnDimension('Q')->setWidth(5); 
            $sheet->getColumnDimension('R')->setWidth(5); 
            $sheet->getColumnDimension('S')->setWidth(5);
            $sheet->getColumnDimension('T')->setWidth(5);
            $sheet->getColumnDimension('U')->setWidth(8); 
            $sheet->getColumnDimension('V')->setWidth(8); 
            $sheet->getColumnDimension('W')->setWidth(8); 
            $sheet->getColumnDimension('X')->setWidth(8); 
            // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
            $sheet->getDefaultRowDimension()->setRowHeight(-1);


            //last sheet
            $lastrow = $sheet->getHighestRow();
            $signRow = $lastrow + 3;
            //left ttd
            foreach($datayudisium as $row){
            $sheet->setCellValue('B'.$signRow, 'Mengetahui');
            $sheet->setCellValue('B'.$signRow + 1, 'a.n Dekan');
            $sheet->setCellValue('B'.$signRow + 2, 'Plt. Wakil Dekan I');
            $sheet->setCellValue('B'.$signRow + 5, 'Dr. Andi Estetiono, Se., M.M');
            $sheet->setcellvalue('B'.$signRow + 6, 'NIP. 196807162016123101');

            //right ttd
            $sheet->setCellValue('S'.$signRow, 'Surabaya,'.$tglperiode);
            $sheet->setCellValue('S'.$signRow + 1, 'Koordinator Program Studi');
            $sheet->setCellValue('S'.$signRow + 2, $prodi);
            $sheet->setCellValue('S'.$signRow + 5, $row['NAMA_KAPRODI']);
            $sheet->setcellvalue('S'.$signRow + 6, 'NIP. '.$row['NIP_KAPRODI']);

            // 6. (Opsional) Format agar terlihat lebih rapi
            $sheet->getStyle('B' . $signRow)->applyFromArray($style_lastrow);
            $sheet->getStyle('B' . $signRow + 1)->applyFromArray($style_lastrow);
            $sheet->getStyle('B' . $signRow + 2)->applyFromArray($style_lastrow);
            $sheet->getStyle('B' . $signRow + 5)->applyFromArray($style_lastrow);
            $sheet->getStyle('B' . $signRow + 6)->applyFromArray($style_lastrow);

            $sheet->getStyle('S' . $signRow)->applyFromArray($style_lastrow);
            $sheet->getStyle('S' . $signRow + 1)->applyFromArray($style_lastrow);
            $sheet->getStyle('S' . $signRow + 2)->applyFromArray($style_lastrow);
            $sheet->getStyle('S' . $signRow + 5)->applyFromArray($style_lastrow);
            $sheet->getStyle('S' . $signRow + 6)->applyFromArray($style_lastrow);
            }
            // Set orientasi kertas LANDSCAPE
            $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
            // Set judul sheet
            $sheet->setTitle($tglperiode);
            // Proses download file excel
            $spreadsheet->getActiveSheet()->getHeaderFooter()->setOddHeader('&C&HPlease treat this document as confidential!');
            $spreadsheet->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $spreadsheet->getProperties()->getTitle() .  '&RPage &P of &N');
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="pendaftaran_yudisium.xlsx"'); // Set nama file excel nya
            header('Cache-Control: max-age=0');
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
        }else{
            print_r("mohon maaf data yang anda inputkan salah dan tidak dapat diproses lebih lanjut");
            exit();
        }
    }

}