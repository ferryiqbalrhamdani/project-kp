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
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 7, 'TELKOM AKSES', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR BARANG AP', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(25, 6, 'Jenis Barang', 1, 0);
        $pdf->Cell(25, 6, 'Merk Barang', 1, 0);
        $pdf->Cell(27, 6, 'SN', 1, 0);
        $pdf->Cell(35, 6, 'MAC', 1, 0);
        $pdf->Cell(25, 6, 'Kondisi', 1, 0);
        $pdf->Cell(35, 6, 'Di Input', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $barang = $this->db->get_where('barang', ['id_barang'=>1])->result();
        $i = 1;
        foreach ($barang as $row) {
            $pdf->Cell(10, 6, $i, 1, 0);
            $pdf->Cell(25, 6, $row->jenis_barang, 1, 0);
            $pdf->Cell(25, 6, $row->merk, 1, 0);
            $pdf->Cell(27, 6, $row->sn, 1, 0);
            $pdf->Cell(35, 6, $row->mac, 1, 0);
            $pdf->Cell(25, 6, $row->status, 1, 0);
            $pdf->Cell(35, 6, date('d F Y', $row->date_created), 1, 1);
            $i++;
        }
        $pdf->Output();
    }

    function cetakPOE()
    {
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 7, 'TELKOM AKSES', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR BARANG POE', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(25, 6, 'Jenis Barang', 1, 0);
        $pdf->Cell(25, 6, 'Merk Barang', 1, 0);
        $pdf->Cell(27, 6, 'SN', 1, 0);
        $pdf->Cell(25, 6, 'Kondisi', 1, 0);
        $pdf->Cell(35, 6, 'Di Input', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $barang = $this->db->get_where('barang', ['id_barang'=>2])->result();
        $i = 1;
        foreach ($barang as $row) {
            $pdf->Cell(10, 6, $i, 1, 0);
            $pdf->Cell(25, 6, $row->jenis_barang, 1, 0);
            $pdf->Cell(25, 6, $row->merk, 1, 0);
            $pdf->Cell(27, 6, $row->sn, 1, 0);
            $pdf->Cell(25, 6, $row->status, 1, 0);
            $pdf->Cell(35, 6, date('d F Y', $row->date_created), 1, 1);
            $i++;
        }
        $pdf->Output();
    }

    function cetakRouter()
    {
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 7, 'TELKOM AKSES', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR BARANG POE', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0);
        $pdf->Cell(25, 6, 'Jenis Barang', 1, 0);
        $pdf->Cell(25, 6, 'Merk Barang', 1, 0);
        $pdf->Cell(27, 6, 'SN', 1, 0);
        $pdf->Cell(27, 6, 'MAC', 1, 0);
        $pdf->Cell(25, 6, 'Kondisi', 1, 0);
        $pdf->Cell(35, 6, 'Di Input', 1, 1);
        $pdf->SetFont('Arial', '', 10);
        $barang = $this->db->get_where('barang', ['id_barang'=>3])->result();
        $i = 1;
        foreach ($barang as $row) {
            $pdf->Cell(10, 6, $i, 1, 0);
            $pdf->Cell(25, 6, $row->jenis_barang, 1, 0);
            $pdf->Cell(25, 6, $row->merk, 1, 0);
            $pdf->Cell(27, 6, $row->sn, 1, 0);
            $pdf->Cell(27, 6, $row->mac, 1, 0);
            $pdf->Cell(25, 6, $row->status, 1, 0);
            $pdf->Cell(35, 6, date('d F Y', $row->date_created), 1, 1);
            $i++;
        }
        $pdf->Output();
    }
}