<?php

class M_Film extends CI_model
{

  public function getAllFilm()
  {
    return $this->db->get('film')->result_array();
  }

  public function insertFilm($data)
  {
    return $this->db->insert('film', $data);
  }

  public function editFilm($id)
  {
        $data = [
          'Deskripsi' => $this->input->post('Deskripsi'),
          'Rating' => $this->input->post('Rating'),
          'Judul' => $this->input->post('Judul'),
          'Kategori' => $this->input->post('Kategori')
        ];
     $this->db->where('id', $id);
     $this->db->update('film', $data);
  }

  public function deleteFilm($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('film');
  }

}
