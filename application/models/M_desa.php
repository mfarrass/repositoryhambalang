<?php 
class M_desa extends CI_Model{

	function get_all_desa(){
		$hsl=$this->db->query("SELECT * FROM tbl_desa");
		return $hsl;
	}

	function simpan_desa($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_desa (desa_nip,desa_nama,desa_jenkel,desa_tmp_lahir,desa_tgl_lahir,desa_mapel,desa_photo) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$mapel','$photo')");
		return $hsl;
	}
	function simpan_desa_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel){
		$hsl=$this->db->query("INSERT INTO tbl_desa (desa_nip,desa_nama,desa_jenkel,desa_tmp_lahir,desa_tgl_lahir,desa_mapel) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$mapel')");
		return $hsl;
	}

	function update_desa($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$photo){
		$hsl=$this->db->query("UPDATE tbl_desa SET desa_nip='$nip',desa_nama='$nama',desa_jenkel='$jenkel',desa_tmp_lahir='$tmp_lahir',desa_tgl_lahir='$tgl_lahir',desa_mapel='$mapel',desa_photo='$photo' WHERE desa_id='$kode'");
		return $hsl;
	}
	function update_desa_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel){
		$hsl=$this->db->query("UPDATE tbl_desa SET desa_nip='$nip',desa_nama='$nama',desa_jenkel='$jenkel',desa_tmp_lahir='$tmp_lahir',desa_tgl_lahir='$tgl_lahir',desa_mapel='$mapel' WHERE desa_id='$kode'");
		return $hsl;
	}
	function hapus_desa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_desa WHERE desa_id='$kode'");
		return $hsl;
	}

	//front-end
	function desa(){
		$hsl=$this->db->query("SELECT * FROM tbl_desa");
		return $hsl;
	}
	function desa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_desa limit $offset,$limit");
		return $hsl;
	}

}