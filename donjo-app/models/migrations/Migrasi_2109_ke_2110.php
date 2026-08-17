<?php

/**
 * File ini:
 *
 * Model untuk migrasi database
 *
 * donjo-app/models/migrations/Migrasi_2109_ke_2110.php
 *
 */

/**
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:

 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.

 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package   OpenSID
 * @author    Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2021 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/OpenSID/OpenSID
 */
class Migrasi_2109_ke_2110 extends MY_model
{
	public function up()
	{
		$hasil = true;

		$hasil = $hasil && $this->tambah_kelompok_umur();

		status_sukses($hasil);
		return $hasil;
	}

	// Statistik Umur Kategori: pengguna dapat membuat beberapa kumpulan rentang umur sendiri,
	// selain kumpulan bawaan (Kategori Umur Kemendagri dan Rentang Umur per 5 Tahun)
	private function tambah_kelompok_umur()
	{
		$hasil = true;

		if ( ! $this->db->table_exists('tweb_penduduk_kelompok_umur'))
		{
			$this->dbforge->add_field([
				'id' => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => true,
					'auto_increment' => true,
				],
				'nama' => [
					'type'       => 'VARCHAR',
					'constraint' => 100,
				],
				'bawaan' => [
					'type'       => 'TINYINT',
					'constraint' => 1,
					'default'    => 0,
				],
			]);
			$this->dbforge->add_key('id', true);
			$hasil = $hasil && $this->dbforge->create_table('tweb_penduduk_kelompok_umur');

			$hasil = $hasil && $this->db->insert('tweb_penduduk_kelompok_umur', [
				'id'     => 1,
				'nama'   => 'Kategori Umur Kemendagri',
				'bawaan' => 1,
			]);
			$hasil = $hasil && $this->db->insert('tweb_penduduk_kelompok_umur', [
				'id'     => 2,
				'nama'   => 'Rentang Umur per 5 Tahun',
				'bawaan' => 0,
			]);
		}

		if ( ! $this->db->field_exists('kelompok_umur_id', 'tweb_penduduk_umur'))
		{
			$hasil = $hasil && $this->dbforge->add_column('tweb_penduduk_umur', [
				'kelompok_umur_id' => [
					'type'       => 'INT',
					'constraint' => 11,
					'null'       => true,
					'after'      => 'status',
				],
			]);

			// Kaitkan data rentang umur yang sudah ada dengan kumpulan bawaan yg sepadan
			$hasil = $hasil && $this->db->where('status', 0)->update('tweb_penduduk_umur', ['kelompok_umur_id' => 1]);
			$hasil = $hasil && $this->db->where('status', 1)->update('tweb_penduduk_umur', ['kelompok_umur_id' => 2]);
		}

		return $hasil;
	}
}
