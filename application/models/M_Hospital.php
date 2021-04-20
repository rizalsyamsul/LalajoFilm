<?php

class M_Hospital extends CI_model
{

  public function getAllHospital()
  {
    return $this->db->get('hospital')->result_array();
  }

  public function insertHospital($data)
  {
    return $this->db->insert('hospital', $data);
  }

  public function editHospital($id)
  {
        $data = [
          'nama' => $this->input->post('nama'),
          'alamat' => $this->input->post('alamat'),
          'slot' => $this->input->post('slot')
        ];
     $this->db->where('id', $id);
     $this->db->update('hospital', $data);
  }

  public function deleteHospital($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('hospital');
  }

  public function getHospitalById($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('hospital')->row_array();
  }

  public function getHospitalNameById($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('hospital')->row('nama');
  }

  public function Laporan($name)
  {
    $this->db->where('hospital', $name);
    return $this->db->get('appoitment')->result_array();
  }

  public function getHospitalSlotByName($name)
  {
    $this->db->where('nama', $name);
    return $this->db->get('hospital')->row('slot');
  }

  public function getHospitalidByName($name)
  {
    $this->db->where('nama', $name);
    return $this->db->get('hospital')->row('id');
  }

  public function editHospital2($id,$data)
  {
     $this->db->where('id', $id);
     $this->db->update('hospital', $data);
  }

}
