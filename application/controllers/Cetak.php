<?php

class Cetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    function cetakAP()
    {
        $pdf = new FPDF('p', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak gambar
        $pdf->Image('assets/img/background/Telkom-indonesia.png', 10, 5, -900);
        // mencetak string 
        $pdf->Cell(190, 7, '', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR BARANG AP', 0, 1, 'C');
        //buat garis horisontal
        $pdf->Line(10, 25, 200, 25);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Merk Barang', 1, 0, 'C');
        $pdf->Cell(35, 6, 'SN', 1, 0, 'C');
        $pdf->Cell(35, 6, 'MAC', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Kondisi', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Di Input', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);

        $this->db->order_by('merk', 'ASC');
        $barang = $this->db->get_where('barang', ['id_barang' => 1])->result();
        $i = 1;
        foreach ($barang as $row) {
            $pdf->Cell(10, 6, $i, 1, 0, 'C');
            $pdf->Cell(35, 6, $row->merk, 1, 0);
            $pdf->Cell(35, 6, $row->sn, 1, 0);
            $pdf->Cell(35, 6, $row->mac, 1, 0);
            $pdf->Cell(35, 6, $row->status, 1, 0);
            $pdf->Cell(40, 6, date('d F Y', $row->date_created), 1, 1);
            $i++;
        }
        $pdf->Cell(10, 7, '', 0, 1);
        date_default_timezone_set('Asia/Jakarta');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(190, 7, 'Di Download : ' . date('d/m/Y H:i:s'), 0, 1, 'R');


        $pdf->Output();
    }

    function cetakPOE()
    {
        $pdf = new FPDF('p', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak gambar
        $pdf->Image('assets/img/background/Telkom-indonesia.png', 10, 5, -900);
        // mencetak string 
        $pdf->Cell(190, 7, '', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR BARANG POE', 0, 1, 'C');
        //buat garis horisontal
        $pdf->Line(10, 25, 200, 25);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(50, 6, 'Merk Barang', 1, 0);
        $pdf->Cell(45, 6, 'SN', 1, 0);
        $pdf->Cell(35, 6, 'Kondisi', 1, 0);
        $pdf->Cell(50, 6, 'Di Input', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $barang = $this->db->get_where('barang', ['id_barang' => 2])->result();
        $i = 1;
        foreach ($barang as $row) {
            $pdf->Cell(10, 6, $i, 1, 0);
            $pdf->Cell(50, 6, $row->merk, 1, 0);
            $pdf->Cell(45, 6, $row->sn, 1, 0);
            $pdf->Cell(35, 6, $row->status, 1, 0);
            $pdf->Cell(50, 6, date('d F Y', $row->date_created), 1, 1);
            $i++;
        }
        $pdf->Cell(10, 7, '', 0, 1);
        date_default_timezone_set('Asia/Jakarta');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(190, 7, 'Di Download : ' . date('d/m/Y H:i:s'), 0, 1, 'R');
        $pdf->Output();
    }

    function cetakRouter()
    {
        $pdf = new FPDF('p', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak gambar
        $pdf->Image('assets/img/background/Telkom-indonesia.png', 10, 5, -900);
        // mencetak string 
        $pdf->Cell(190, 7, '', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR BARANG ROUTER', 0, 1, 'C');
        //buat garis horisontal
        $pdf->Line(10, 25, 200, 25);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(35, 6, 'Merk Barang', 1, 0);
        $pdf->Cell(35, 6, 'SN', 1, 0);
        $pdf->Cell(35, 6, 'MAC', 1, 0);
        $pdf->Cell(35, 6, 'Kondisi', 1, 0);
        $pdf->Cell(40, 6, 'Di Input', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $barang = $this->db->get_where('barang', ['id_barang' => 3])->result();
        $i = 1;
        foreach ($barang as $row) {
            $pdf->Cell(10, 6, $i, 1, 0);
            $pdf->Cell(35, 6, $row->merk, 1, 0);
            $pdf->Cell(35, 6, $row->sn, 1, 0);
            $pdf->Cell(35, 6, $row->mac, 1, 0);
            $pdf->Cell(35, 6, $row->status, 1, 0);
            $pdf->Cell(40, 6, date('d F Y', $row->date_created), 1, 1);
            $i++;
        }
        $pdf->Cell(10, 7, '', 0, 1);
        date_default_timezone_set('Asia/Jakarta');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(190, 7, 'Di Download : ' . date('d/m/Y H:i:s'), 0, 1, 'R');
        $pdf->Output();
    }

    function cetakKabel()
    {
        $pdf = new FPDF('p', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 7, 'TELKOM INDONESIA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR BARANG KABEL', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(25, 6, 'Merk Barang', 1, 0);
        $pdf->Cell(27, 6, 'Panjang Kabel', 1, 0);
        $pdf->Cell(35, 6, 'Di Input', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $barang = $this->db->get_where('barang', ['id_barang' => 5])->result();
        $i = 1;
        foreach ($barang as $row) {
            $pdf->Cell(10, 6, $i, 1, 0);
            $pdf->Cell(25, 6, $row->merk, 1, 0);
            $pdf->Cell(27, 6, $row->panjang . $row->satuan, 1, 0);
            $pdf->Cell(35, 6, date('d F Y', $row->date_created), 1, 1);
            $i++;
        }
        $pdf->Cell(10, 7, '', 0, 1);
        date_default_timezone_set('Asia/Jakarta');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(190, 7, 'Di Download : ' . date('d/m/Y H:i:s'), 0, 1, 'R');
        $pdf->Output();
    }
}
