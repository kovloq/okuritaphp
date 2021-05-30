<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;

class LazismuController extends Controller
{
    //
    public function index(){
    	return view("lazismu.index");
    }

    function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = $this->penyebut($nilai - 10). " Belas";
		} else if ($nilai < 100) {
			$temp = $this->penyebut($nilai/10)." Puluh". $this->penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " Seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = $this->penyebut($nilai/100) . " Ratus" . $this->penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " Seribu" . $this->penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = $this->penyebut($nilai/1000) . " Ribu" . $this->penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = $this->penyebut($nilai/1000000) . " Juta" . $this->penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = $this->penyebut($nilai/1000000000) . " Milyar" . $this->penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = $this->penyebut($nilai/1000000000000) . " Trilyun" . $this->penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
 
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim($this->penyebut($nilai));
		} else {
			$hasil = trim($this->penyebut($nilai));
		}     		
		return $hasil;
	}

    public function pdf(Request $request){
    	
    	$pdf = new TCPDF();
    	$pdf::SetTitle('Lazismu Kuitansi');
		$pdf::AddPage();
		$pdf::setPageOrientation('L');
		$pdf::SetFont('arial', 'B', 20);
	    // PDF::Write(0, 'Hello World');
		// get the current page break margin
		$bMargin = $pdf::getBreakMargin();
		// get current auto-page-break mode
		$auto_page_break = $pdf::getAutoPageBreak();
		// disable auto-page-break
		$pdf::SetAutoPageBreak(false, 0);
		// set bacground image
		//Image($file, $x='', $y='', $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $
		$pdf::Image(public_path('img/kuitansi_template.jpg'), 0, 0, 310, 210, '', '', '', false, 300, '', false, false, 0);
		// restore auto-page-break status
		$pdf::SetAutoPageBreak($auto_page_break, $bMargin);
		// set the starting point for the page content
		$pdf::setPageMark();
		// function Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M'
		$pdf::SetXY(105, 26);
		//Nomor Kuitansi
		$pdf::Cell(30,10,$request->nomor);
		$tgl=str_split($request->tanggal);
		// Tanggal
		$pdf::SetXY(243, 27);
		$pdf::Cell(10,10,$tgl[0]);
		$pdf::SetXY(251, 27);
		$pdf::Cell(10,10,$tgl[1]);
		// End Tanggal
		// Bulan
		$pdf::SetXY(262, 27);
		$pdf::Cell(10,10,$tgl[3]);
		$pdf::SetXY(269, 27);
		$pdf::Cell(10,10,$tgl[4]);
		// end Bulan
		// Tahun
		$pdf::SetXY(280, 27);
		$pdf::Cell(10,10,$tgl[8]);
		$pdf::SetXY(287, 27);
		$pdf::Cell(10,10,$tgl[9]);
		// end Tahun
		// nama 
		$pdf::SetFont('cid0jp', '', 12);
		$pdf::SetXY(132, 50);
		$pdf::Cell(150,8,$request->nama);
		// alamat
		$pdf::SetXY(132, 58);
		$pdf::Cell(150,8,$request->alamat);
		// Telpon
		if($request->hp){
			$pdf::SetXY(225, 66);
			$pdf::Cell(30,8,$request->hp);
		}
		// Nma zakat
		if($request->jenis_zakat){
			$pdf::SetXY(100, 100);
			$pdf::Cell(30,8,$request->jenis_zakat);
		}
		// Jumlah Zakat cid0jp
		if($request->jumlah_zakat){
			$pdf::SetXY(160, 100);
			$pdf::Cell(30,8,"￥ ".number_format($request->jumlah_zakat));
		}
		// Jumlah Sodaqoh
		if($request->jumlah_infaq){
			$pdf::SetXY(160, 109);
			$pdf::Cell(30,8,"￥ ".number_format($request->jumlah_infaq));
		}
		// Nama Lainnya
		if($request->jenis_lainnya){
			$pdf::SetXY(105, 117);
			$pdf::Cell(30,8,$request->jenis_lainnya);
		}
		// Jumlah Lainnya
		if($request->jumlah_lainnya){
			$pdf::SetXY(160, 117);
			$pdf::Cell(30,8,"￥ ".number_format($request->jumlah_lainnya));
		}
		$jumlah=$request->jumlah_lainnya+$request->jumlah_infaq+$request->jumlah_zakat;
		// Total
		$pdf::SetFont('cid0jp', 'B', 12);
		$pdf::SetXY(160, 127);
		$pdf::Cell(30,8,"￥ ".number_format($jumlah));
		// Terbilang
		$pdf::SetFont('cid0jp', '', 12);
		$pdf::SetXY(133, 137);
		$terbilang=$this->terbilang($jumlah);
		$pdf::Cell(100,8,$terbilang."Yen");
		$pdf::SetFont('cid0jp', '', 20);
		// Kas
		if(in_array("Kas",$request->melalui)){
			$pdf::SetXY(265, 99);
			$pdf::Cell(7,8,"✓");
		}
		// Bank
		if(in_array("Bank",$request->melalui)){
			$pdf::SetXY(265, 107);
			$pdf::Cell(7,8,"✓");
		}
		// Wesel
		if(in_array("Wesel",$request->melalui)){
			$pdf::SetXY(265, 116);
			$pdf::Cell(7,8,"✓");
		}
		// Nama Penyetor
		$pdf::SetFont('cid0jp', '', 12);
		$pdf::SetXY(222, 181);
		$pdf::Cell(60,8,$request->nama,0,0, "C");
		$pdf::Output($request->nomor.'.pdf');
    }
}
