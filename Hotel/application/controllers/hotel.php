<?php
class hotel extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->model('hotelModel');
        $posts = $this->hotelModel->get_posts();
        $data['posts'] = $posts;
        $this->load->view('awalHotel', $data);
    }
    public function pesan()
    {
        $this->load->helper('url');
        $this->load->view('pemesanan');
    }
    public function reserve()
    {
        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $email = $this->input->post('email');
        $checkin = $this->input->post('checkin');
        $checkout = $this->input->post('checkout');
        $tipe = $this->input->post('tipe');
        $tamu = $this->input->post('tamu');
        $cttn = $this->input->post('message');

        $this->load->helper('url');
        $this->load->model('hotelModel');
        $this->hotelModel->insert_tamu($nama, $telp, $email, $checkin, $checkout, $tipe, $tamu, $cttn);
        $this->load->view('abisPesan');
    }
    public function dataPemesanan()
    {
        $this->load->helper('url');
        $this->load->model('hotelModel');
        $data['user'] = $this->hotelModel->ambilData();
        $this->load->view('dataPemesanan', $data);
    }
    public function bayar($telp)
    {
        $this->load->helper('url');
        $this->load->model('hotelModel');
        $this->hotelModel->bayarUser($telp);
        $this->pembayaran($telp);
    }
    public function pembayaran($telp)
    {
        $this->load->helper('url');
        $this->load->model('hotelModel');
        $posts = $this->hotelModel->get_post($telp);
        $data['posts'] = $posts;
        $this->load->view('pembayaran', $data);
    }
}
