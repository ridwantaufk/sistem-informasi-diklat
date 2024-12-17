<?php
Yii::import('application.extensions.fpdf183.*');

class PDF extends fpdf
{
    // Page header
    function Header()
    {
        // Logo

        $logoUrl = Yii::app()->baseUrl . 'assets/assets/img/logo.png';
        $this->Image($logoUrl, 10, 6, 30);

        $this->SetFont('Times', '', 8);
        $this->SetY(25);
        $this->SetX(10);
        $this->SetTextColor(247, 37, 69);
        $this->Cell(0, 10, 'Pendidikan Latihan Teknologi', 0, 1, 'L');

        // Mengembalikan warna teks ke default
        $this->SetTextColor(null);

        // Times bold 15
        $this->SetFont('Times', 'B', 18);
        $this->SetY(18);
        $this->SetX(10);
        $this->Cell(0, 0, 'Laporan Keseluruhan Diklat', 0, 0, 'C');

        // Thickness of frame (1 mm)
        $this->SetLineWidth(1);

        $this->SetFont('Times', 'B', 15);
        $this->SetY(35);
        $this->SetX(10);
        $this->Cell(0, 20, 'Peserta Diklat', 0, 0, 'C');
        // Line break
        // $this->Ln(10);

        $this->SetY(8); // Mulai dari posisi Y gambar
        $this->SetX(50);
        // Informasi di atas pojok kanan
        $this->SetFont('Times', '', 9);
        $this->Cell(0, 5, 'Jl. Buahbatu No. 110,', 0, 1, 'R');
        $this->Cell(0, 5, 'Kota Bandung, Jawabarat', 0, 1, 'R');
        $this->Cell(0, 5, 'Email : ridwan@solusi.com', 0, 1, 'R');
        $this->Cell(0, 5, 'No. HP : 081312025217', 0, 1, 'R');

        // Garis pemisah
        $this->Line(8, 35, 202, 35);

        // Line break
        $this->Ln(10);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Times italic 8
        $this->SetFont('Times', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    // Your additional methods for PDF content
    // ...

    public function generatePesertaPDF()
    {
        $this->AliasNbPages();
        $this->AddPage();

        $this->Ln(20);
        $this->Cell(80);
        // $this->Cell(31, 7, 'Data Peserta', 0, 1, 'C');
        $this->Ln(5);

        $this->SetFont('Times', 'B', 8);
        $this->Cell(10, 7, 'ID', 1, 0, 'C');
        $this->Cell(40, 7, 'NAMA', 1, 0, 'C');
        $this->Cell(90, 7, 'Jenis Pelatihan', 1, 0, 'C');
        $this->Cell(50, 7, 'Alamat Peserta', 1, 0, 'C');
        $this->Cell(20, 7, '', 0, 1);

        $this->SetFont('Times', '', 8);
        $model = PesertaM::model()->with('diklat')->findAll(array('order' => 'peserta_id ASC'));

        foreach ($model as $row) {
            $this->Cell(10, 6, $row['peserta_id'], 1, 0, 'C');
            $this->Cell(40, 6, $row['nama_peserta'], 1, 0, 'L');
            $this->Cell(90, 6, $row->diklat['nama_diklat'], 1, 0, 'L');
            $this->Cell(50, 6, $row['alamat_peserta'], 1, 0, 'L');
            $this->Cell(20, 6, '', 0, 1);
        }

        $this->Output();
    }
}
