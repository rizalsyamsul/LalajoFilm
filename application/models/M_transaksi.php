<?php

class M_transaksi extends CI_model
{

  
  public function insertFilm($data)
  {
    return $this->db->insert('film', $data);
  }

  public function editFilm($id)
  {
    $data = [
      'deskripsi' => $this->input->post('deskripsi', true),
      'rating' => $this->input->post('rating', true),
      'judul' => $this->input->post('judul'),
      'kategori' => $this->input->post('kategori', true)
    ];
    $this->db->where('idFilm', $id);
    $this->db->update('film', $data);
  }

  public function insertKursi($data)
  {
    return $this->db->insert('kursi', $data);
  }

  public function editKursi($id)
  {
    $data = [
      'noKursi' => $this->input->post('noKursi', true)
    ];
    $this->db->where('idKursi', $id);
    $this->db->update('kursi', $data);
  }

  public function deleteKursi($id)
  {
    $this->db->where('idKursi', $id);
    $this->db->delete('kursi');
  }
}
