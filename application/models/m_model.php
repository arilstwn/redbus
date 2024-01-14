<?php
class M_model extends CI_Model
{
    function get_data($table){
        return $this->db->get($table);
    }
    public function get_image_by_id($table, $id)
    {
        // Gantilah 'nama_tabel' dengan nama tabel yang sesuai dalam database Anda
        $query = $this->db->get_where($table, array('id' => $id));

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->image; // Asumsikan bahwa nama kolom gambar adalah 'image'
        }

        return null;
    }
    public function get_by_id($tabel, $id_column, $id)
    {
        $data=$this->db->where($id_column, $id)->get($tabel);
        return $data;
    }
    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data); 
    }
    
    // public function delete($table, $field, $id)
    // {
    //     $data=$this->db->delete($table, array($field => $id));
    //     return $data;
    // }

 
  
    public function register($data) {
        $this->db->insert('admin', $data);
    }
    public function register_pelanggan($data) {
        $this->db->insert('pelanggan', $data);
    }

    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
    }
  
}