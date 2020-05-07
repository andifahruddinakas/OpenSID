<?php if(!defined('BASElokasi')) exit('No direct script access allowed');

class Tema extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('header_model');
		$this->load->model('theme_model');
		$this->load->library('session');
		$this->load->helper("file");

		$this->modul_ini = 11;
		$this->sub_modul_ini = 205;
	}

	public function index()
	{
		$data['list_tema'] = $this->theme_model->list_all();
		$this->setting_model->load_options();

		$header = $this->header_model->get_data();

		$this->load->view('header', $header);
		$this->load->view('nav', $nav);
		$this->load->view('tema/table', $data);
		$this->load->view('footer');
	}

	// Ganti Tema
	public function change($folder, $tema = NULL)
	{
		if($tema != NULL){
			$themes = $folder.'/'.$tema;
		}
		else
		{
			$themes = $folder;
		}

		$this->db->where('key', 'web_theme')->update('setting_aplikasi', array('value' => $themes));

		redirect('tema');
	}
	
	// Backup Tema
	function backup($folder, $tema = NULL)
	{		
		$this->load->library('zip');
		
		if($tema != NULL){			
			$nama_berkas = $tema;
			$lokasi = $folder.'/themes/'.$tema;
		}
		else
		{
			$nama_berkas = $folder;
			$lokasi = 'themes/'.$folder;
		}

		$this->zip->read_dir($lokasi);
		$this->zip->archive(FClokasi.'/assets/backup/'.$nama_berkas);
		$this->zip->download($nama_berkas);
	}

	//hapus folder dan file
	public function delete($tema)
	{
		//delete_files("desa/themes/".$tema."/", TRUE);
		//rmdir("desa/themes/lupa/");
		//$this->delete_directory($tema);
		@delete_folder(FClokasi.'desa/themes/'.$tema);
		//delete_file($lokasi, true, false, 1);

		redirect('tema');
	}

	public function delete_directory($folder_name)
	{
		$this->load->helper('file');

		$dir_lokasi = 'desa/themes/'.$folder_name;
		$del_lokasi = './desa/themes/'.$folder_name.'/';

		if(is_dir($dir_lokasi))
		{
			delete_files($del_lokasi, true, false, 1);
			rmdir($dir_lokasi);

			return true;
		}

		return false;
	}

}
