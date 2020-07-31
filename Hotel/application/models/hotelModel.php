<?php
class hotelModel extends CI_Model
{
    public function insert_tamu($nama, $telp, $email, $checkin, $checkout, $tipe, $tamu, $cttn)
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
            'catatan' => $cttn
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
        return $this->db->query("SELECT * FROM user");
    }
    //    public function ambilData2($id){
    //        return $this->db->query("SELECT * FROM user WHERE id = '$id'");
    //    }
    public function bayarUser($telp)
    {
        $this->load->database();
        $this->db->query("UPDATE user SET statusBayar = TRUE WHERE telp = '$telp'");
    }
    public function get_post($telp)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM user where telp='$telp'");
        return $query->result();
    }
}
