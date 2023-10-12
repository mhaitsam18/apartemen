<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	private $conn;
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "apartemen";
		$this->conn = mysqli_connect($servername,$username, $password, $db);
	}

	public function index(){
		$this->load->view('data/input_penghuni');
	}
	public function insert(){
		$id_penghuni	= $_POST['id_penghuni'];
		$nama_penghuni	= $_POST['nama_penghuni'];
		$jenis_kelamin	= $_POST['jenis_kelamin'];
		$no_telp		= $_POST['no_telp'];
		$email			= $_POST['email'];
		$umur		= $_POST['umur'];

		$sql="INSERT INTO penghuni VALUES ('$id_penghuni','$nama_penghuni','$jenis_kelamin', '$no_telp', '$email', $umur)";
		$result=$this->conn->query($sql);
		$this->load->view('data/input_penghuni');
	}
	public function list(){
		$sql = "SELECT * FROM penghuni";
		$data['konek'] = $this->conn->query($sql);
		$this->load->view('data/list', $data);
	}
	public function edit(){
		$sql="UPDATE `pemesanan_member` SET `jumlah`=$jml,`sub_harga`=$sub_harga WHERE menu_id='$menu_id'";
		return $this->conn->query($sql);
		$this->load->view('data/list', $data);
	}
	public function hapus(){
		$id_penghuni=$_GET['id_penghuni'];
		$sql = "DELETE FROM `penghuni` WHERE id_penghuni='$id_penghuni'";
		$this->conn->query($sql);
	}
}
