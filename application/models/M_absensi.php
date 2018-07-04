<?php
/**
 * Created by PhpStorm.
 * User: bxmai
 * Date: 7/3/2018
 * Time: 4:37 PM
 */

class M_absensi
{
	function __construct()
	{
		parent::__construct();
	}

	function getAll()
	{
		$this->db->select('*');
		$this->db->from('absensi');
		$this->db->join('pegawai', 'absensi.idPegawai = pegawai.idPegawai', 'left');
		return $this->db->get();
	}

	function getByDate($date){
		$this->db->select('*');
		$this->db->from('absensi');
		$this->db->join('pegawai', 'absensi.idPegawai = pegawai.idPegawai', 'left');
		$this->db->where(array('tanggal'=>$date));
	}

	function getPegawais()
	{
		return $this->db->get('pegawai');
	}

	function getAbsensi($idAbsensi)
	{
		return $this->db->get_where('absensi', array('idAbsensi' => $idAbsensi));
	}

	function addAbsensi($data)
	{
		$this->db->insert('absensi', $data);
	}

	function updateAbsensi($idAbsensi, $data)
	{
		$this->db->where(array('idAbsensi'=>$idAbsensi));
		$this->db->update('absensi', $data);
	}

	function hapusAbsensi($idAbsensi)
	{
		$this->db->where(array('idAbsensi'=>$idAbsensi));
		$this->db->delete('absensi');
	}
}
