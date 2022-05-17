<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Templatesurat extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model("template_model");
cek_login();
$this->load->library('form_validation');
}
public function index()
{
$data = array(
'title' => 'View Data History',
'userlog'=> infoLogin(),
'template' => $this->template_model->getAll(),
'content'=> 'templatesurat/index');
$this->load->view('template_user/main',$data);
}
public function surat_ajuan($id){
	$surat = $this->template_model->getById($id);
	$nama = $surat->nama;
	$perihal = $surat->perihal;
	$date = $surat->tgl_kirim;
	$kepada = $surat->tujuan_surat;
// memanggil dan membaca template dokumen
$alamat_file = base_url('assets/lap/contoh_surat.rtf');
$document = file_get_contents($alamat_file);
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#NAMA", $nama, $document);
$document = str_replace("#PER", $perihal, $document);
$document = str_replace("#SURAT_TO", $kepada, $document);
$document = str_replace("#DATE", $date, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=Laporan_contoh.doc");
header("Content-length: ".strlen($document));
echo $document;
}
}