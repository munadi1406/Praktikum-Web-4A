<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Surat_ajuan extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model("masuk_model");
cek_login();
$this->load->library('form_validation');
}
public function index()
{ $user_id = $this->session->userdata('id');
$data = array(
'title' => 'View Data Surat Pengajuan','userlog'=> infoLogin(),'surat' => $this->db->where('is_active',1)->where('user_id',$user_id)->get('tb_surat_masuk')->result(),'content'=> 'admin/surat_ajuan/index');
$this->load->view('template_user/main',$data);
}
public function add()
{
$data = array(
'title' => 'Tambah Data Surat Pengajuan',
'userlog'=> infoLogin(),
'content'=> 'admin/surat_ajuan/add_form'
);
$this->load->view('template_user/main',$data);
}
public function save()
{
$this->masuk_model->saveAjuan();
if($this->db->affected_rows()>0){
$this->session->set_flashdata("success","Data Surat Masuk Berhasil DiSimpan");
}
redirect('surat_ajuan');
}
public function getedit($id)
{
	$data = array(
'title' => 'Update Data Surat Masuk',
'userlog'=> infoLogin(),
'surat' => $this->masuk_model->getById($id),
'content'=> 'admin/surat_ajuan/edit_form'
);
$this->load->view('template_user/main',$data);
}
public function edit()
{
$this->masuk_model->editData();
if($this->db->affected_rows()>0){
$this->session->set_flashdata("success","Data user Berhasil DiUpdate");
}
redirect('surat_ajuan');
}
function delete($id)
{
$this->masuk_model->delete($id);
redirect('surat_ajuan');
}
}
