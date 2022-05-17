<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Template_model extends CI_Model
{
protected $_table ='tb_template_surat';
protected $primary = 'id';
public function getAll()
{
	return $this->db->where('is_active',1)->get($this->_table)->result();
}
public function save(){
$data = [
'nama' => $this->input->post('no_surat'),
'tujuan_surat' => $this->input->post('tgl_surat'),
'tgl_kirim' => $this->input->post('surat_from'),
'perihal' => $this->input->post('surat_to'),
'keterangan' => $this->input->post('tgl_terima'),
'is_active' => '1',
];
$this->db->insert($this->_table,$data);
}
public function getById($id)
{
return $this->db->get_where($this->_table, ["id" => $id])->row();
}
}
