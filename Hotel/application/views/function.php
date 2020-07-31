<?php 
	function getHargaKamar($jenisKamar){
		//harga kamar normal
		$harga = 0;
		if(strtolower($jenisKamar)== 'super'){
			$harga = 500000;
		} else {
			$harga = 700000;
		}
		return $harga;
	}
	
	function getLiburJumatSabtuMinggu($tanggal){
		//fungsi mencari namahari
		//format $tgl YYYY-MM-DD
		//harviacode.com
		//will.is
		$hari = "";
		$tgl=substr($tanggal,8,2);
		$bln=substr($tanggal,5,2);
		$thn=substr($tanggal,0,4);
		$info=date('w', mktime(0,0,0,$bln,$tgl,$thn));
		switch($info){
			case '0': $hari = "Minggu"; break;
			case '1': $hari = "Senin"; break;
			case '2': $hari = "Selasa"; break;
			case '3': $hari = "Rabu"; break;
			case '4': $hari = "Kamis"; break;
			case '5': $hari = "Jumat"; break;
			case '6': $hari = "Sabtu"; break;
		}
		if($hari == "Minggu" || $hari == "Jumat" || $hari == "Sabtu"){
			return true;
		} else {
			return false;
		}
	}

	function getHariLibur($date){
		$haminsatuLibur = array("2019-01-04", "2019-03-06", "2019-04-02", "2019-04-18", "2019-04-30", "2019-05-18", "2019-05-29", "2019-05-31", "2019-06-02", "2019-08-10", "2019-08-16", "2019-08-31", "2019-11-08", "2019-12-23");
		if(in_array($date, $haminsatuLibur)){
			return true;
		} 
		//manggil fungsi jumatsabtuminggu libur ngga
		else if(getLiburJumatSabtuMinggu($date)){
			return true;
		} else {
			return false;
		}
	}

	function getHargaAkhir($date, $hargaNormal){
		//manggil getHariLibur
		if(getHariLibur($date)){
			$hargaAkhir = ($hargaNormal * 1.2);
			return $hargaAkhir;
		} else {
			return $hargaNormal;
		}
	}

	function getLamaNginap($startDate, $endDate){
		$out = new DateTime($endDate);
		$in = new DateTime($startDate);
		$interval =  $in->diff($out);
		$lamaNginap = $interval->days;
		return $lamaNginap;
	}

	function getHargaTotal($hargaPerMalam, $lamaNginap){
		$hargaTotal = ($hargaPerMalam * $lamaNginap );
		return $hargaTotal;
	}
?>