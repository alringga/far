<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

class far_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('form', 'url'));
		$this->load->model('far_model');
	}

	public function index(){
		
    $korban=$this->far_model->getkorban();
   $this->load->view('home', array('korban'=> $korban)); 
	}

	public function tampilLoginSar(){
		$this->load->view('loginsar');	
	}
	public function loginsar() {   
  $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES); 
  $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES); 
 
        $cek_sar=$this->far_model->masuksar($username,$password); 
 
        if($cek_sar->num_rows() > 0){  
            $data=$cek_sar->row_array(); 
            $this->session->set_userdata('masuksar',TRUE); 
            $this->session->set_userdata('ses_username',$data['username']); 
            $this->session->set_userdata('ses_password',$data['password']); 
            redirect('far_controller/tampiladminsar');
        } else {
          echo "<script>  
   alert('password dan username salah !') 
   </script>"; 
   $this->load->view('loginsar');
        }
      
  }
  public function logindinas() {   
  $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES); 
  $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES); 
 
        $cek_sar=$this->far_model->masukdinas($username,$password); 
 
        if($cek_sar->num_rows() > 0){  
            $data=$cek_sar->row_array(); 
            $this->session->set_userdata('masukdinas',TRUE); 
            $this->session->set_userdata('ses_username',$data['username']); 
            $this->session->set_userdata('ses_password',$data['password']); 
            redirect('far_controller/tampiladmindinas');
        } else {
          echo " <script>  
   alert('password dan username salah !') 
   </script>"; 
   $this->load->view('logindinas');
        }
      
  }

  public function add_data()
  {
    $korban = $this->far_model->getkorban();
    $this->load->view('form_add',array('korban' => $korban));
  }
  public function do_insert()
  {
    $nama_dpn = $_POST['nama_dpn'];
    $nama_blkng = $_POST['nama_blkng'];
    $umur = $_POST['umur'];
    $jenis_klmn = $_POST['jenis_klmn'];
    $alamat = $_POST['alamat'];
    $no_ktp = $_POST['no_ktp'];
    $triase = $_POST['triase'];
    $data_insert = array(
      'nama_dpn' => $nama_dpn,
      'nama_blkng' => $nama_blkng,
      'umur' => $umur,
      'jenis_klmn' => $jenis_klmn,
      'alamat' => $alamat,
      'no_ktp' => $no_ktp,
      'triase' => $triase,
    );
    $res = $this->far_model->InsertData('data_korban',$data_insert);
    if ($res>=1) {
      redirect('far_controller/index');
    }else {
      echo "Gagal";
    }
  }

  public function edit_data(){
      $korban = $this->far_model->getkorban();
      
      $this->load->view('form.edit', array('korban'=>$korban)); 
    }

      public function do_update(){
      $nama_dpn = $_POST['nama_dpn'];
    $nama_blkng = $_POST['nama_blkng'];
    $umur = $_POST['umur'];
    $jenis_klmn = $_POST['jenis_klmn'];
    $alamat = $_POST['alamat'];
    $no_ktp = $_POST['no_ktp'];
    $triase = $_POST['triase'];
    $data_insert = array(
      'nama_dpn' => $nama_dpn,
      'nama_blkng' => $nama_blkng,
      'umur' => $umur,
      'jenis_klmn' => $jenis_klmn,
      'alamat' => $alamat,
      'no_ktp' => $no_ktp,
      'triase' => $triase,
      );
      $where = array('nama_belakang' => $nama_belakang);
      $res = $this->far_model->UpdateData('pegawai',$data_update,$where);
      if ($res>=1) {
        redirect('far_controller/index');
      }
    }



	public function tampilRegisterSar(){
		$this->load->view('registrasisar');
	}
	public function tampilLogindinas(){
		$this->load->view('logindinas');	
	}
	public function tampilRegisterdinas(){
		$this->load->view('registrasidinas');	
	}
	public function tampiladminsar(){
		$this->load->view('adminsar');	
	}
	public function tampiladmindinas(){
		$this->load->view('admindinas');	
	}
	public function tampilalatdinas(){
    $alat=$this->far_model->getalat();
		$this->load->view('alatdinas', array('alat'=>$alat));	
	}
	public function tampilrelawandinas(){
    $sar=$this->far_model->getrelawan();
		$this->load->view('tabelrelawandinas', array('sar'=>$sar));	
	}
	public function tampilkorbandinas(){
    $korban=$this->far_model->getkorban();
		$this->load->view('tabelkorbandinas', array('korban'=> $korban));	
	}
	public function tampilalatsar(){
    $alat=$this->far_model->getalat();
		$this->load->view('alat', array('alat'=> $alat));	
	}
	public function tampilkorbansar(){
    $korban=$this->far_model->getkorban();
		$this->load->view('tablekorban', array('korban'=> $korban));	
	}
  public function tampilformtambah(){
    $this->load->view('form_add');  
  }
  public function tampilformedit(){
    $this->load->view('form_edit');  
  }

	public function registersar() {  
  $this->form_validation->set_rules('nama', 'NAMA','required'); 
        $this->form_validation->set_rules('username', 'username','required'); 
        $this->form_validation->set_rules('email','EMAIL','required|valid_email'); 
        $this->form_validation->set_rules('password','PASSWORD','required'); 

  if($this->form_validation->run() == FALSE) { 
   echo " <script>  
   alert('Terdapat kesalahan') 
   </script>"; 
   $this->load->view('registrasisar'); 
  } else { 
   $data['nama'] = $this->input->post('nama'); 
            $data['username'] = $this->input->post('username'); 
            $data['email'] = $this->input->post('email');  
            $data['password'] = md5($this->input->post('password')); 
  
 
   $this->far_model->daftarsar($data); 
 
   echo "<script>  
   alert('Selamat akun Anda berhasil didaftarkan, silahkan tunggu proses aktifasi agar akun Anda dapat digunakan') 
   </script>"; 
   $this->load->view('adminsar'); 
  } 
 }

 //registrasi dinas//
 public function registerdinas() {  
  $this->form_validation->set_rules('nama', 'NAMA','required'); 
        $this->form_validation->set_rules('username', 'username','required'); 
        $this->form_validation->set_rules('email','EMAIL','required|valid_email'); 
        $this->form_validation->set_rules('password','PASSWORD','required'); 

  if($this->form_validation->run() == FALSE) { 
   echo " <script>  
   alert('Terdapat kesalahan') 
   </script>"; 
   $this->load->view('registrasidinas'); 
  } else { 
   $data['nama'] = $this->input->post('nama'); 
            $data['username'] = $this->input->post('username'); 
            $data['email'] = $this->input->post('email');  
            $data['password'] = md5($this->input->post('password')); 
  
 
   $this->far_model->daftardinas($data); 
 
   echo "<script>  
   alert('Selamat akun Anda berhasil didaftarkan, silahkan tunggu proses aktifasi agar akun Anda dapat digunakan') 
   </script>"; 
   $this->load->view('admindinas'); 
  } 
 }
}