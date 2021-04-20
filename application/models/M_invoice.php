<?php
class M_invoice extends CI_model
{


  public function getKodeById($id)
  {
    $this->db->where('IdInvoice', $id);
    return $this->db->get('Kode')->row_array();
  }
}
