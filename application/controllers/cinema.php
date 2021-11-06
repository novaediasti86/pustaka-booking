<?php 
class Cinema extends CI_Controller 
{ 
    
    public function index() 
    { 
        
        $this->load->view('view-input-cinema'); 
    } 
    
    public function cetak() 
    { 
        $data = 

        $Nama=$_POST['Nama'];

        $judul=$_POST['Judul_film'];

        $pukul=$_POST['Pukul'];

        $tipe=$_POST['Tipe_studio'];

        $jumlah=$_POST['Jumlah_pesan'];

        
            
            $this->load->view('view-output-cinema', $data); 
        } 
    }