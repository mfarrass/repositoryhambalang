<?php 
class M_penginapan extends CI_Model{

	function get_all_penginapan(){
		$hsl=$this->db->query("SELECT tbl_penginapan.*,kelas_nama FROM tbl_penginapan JOIN tbl_kelas ON penginapan_kelas_id=kelas_id");
		return $hsl;
	}

	function simpan_penginapan($nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_penginapan (penginapan_nis,penginapan_nama,penginapan_jenkel,penginapan_kelas_id,penginapan_photo) VALUES ('$nis','$nama','$jenkel','$kelas','$photo')");
		return $hsl;
	}
	function simpan_penginapan_tanpa_img($nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("INSERT INTO tbl_penginapan (penginapan_nis,penginapan_nama,penginapan_jenkel,penginapan_kelas_id) VALUES ('$nis','$nama','$jenkel','$kelas')");
		return $hsl;
	}

	function update_penginapan($kode,$nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("UPDATE tbl_penginapan SET penginapan_nis='$nis',penginapan_nama='$nama',penginapan_jenkel='$jenkel',penginapan_kelas_id='$kelas',penginapan_photo='$photo' WHERE penginapan_id='$kode'");
		return $hsl;
	}
	function update_penginapan_tanpa_img($kode,$nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("UPDATE tbl_penginapan SET penginapan_nis='$nis',penginapan_nama='$nama',penginapan_jenkel='$jenkel',penginapan_kelas_id='$kelas' WHERE penginapan_id='$kode'");
		return $hsl;
	}
	function hapus_penginapan($kode){
		$hsl=$this->db->query("DELETE FROM tbl_penginapan WHERE penginapan_id='$kode'");
		return $hsl;
	}

	function penginapan(){
		$hsl=$this->db->query("SELECT tbl_penginapan.*,kelas_nama FROM tbl_penginapan JOIN tbl_kelas ON penginapan_kelas_id=kelas_id");
		return $hsl;
	}
	function penginapan_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_penginapan.*,kelas_nama FROM tbl_penginapan JOIN tbl_kelas ON penginapan_kelas_id=kelas_id limit $offset,$limit");
		return $hsl;
	}

}