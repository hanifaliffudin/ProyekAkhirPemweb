<?php
class hotelModel extends CI_Model
{
    public function insert_tamu($nama, $telp, $email, $checkin, $checkout, $tipe, $tamu, $cttn, $nopbyrn)
    {
        $this->load->database();
        $data = array(
            'nama' => $nama,
            'telp' => $telp,
            'email' => $email,
            'checkin' => $checkin,
            'checkout' => $checkout,
            'tipekamar' => $tipe,
            'tamu' => $tamu,
            'catatan' => $cttn,
            'nopembayaran' => $nopbyrn
        );
        $this->db->insert('user', $data);
    }
    public function get_posts()
    {
        $this->load->database();
        $query = $this->db->get('user');
        return $query->result();
    }
    public function ambilData()
    {
        return $this->db->query("SELECT * FROM user where statusBayar = 0");
    }
    //    public function ambilData2($id){
    //        return $this->db->query("SELECT * FROM user WHERE id = '$id'");
    //    }
    public function bayarUser($nopbyrn)
    {
        $this->load->database();
        $this->db->query("UPDATE user SET statusBayar = TRUE WHERE nopembayaran = '$nopbyrn'");
    }
    public function get_post($nopbyrn)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM user where nopembayaran='$nopbyrn'");
        return $query->result();
    }
}
