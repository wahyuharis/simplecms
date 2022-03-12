<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tester extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
    }

    function index(){
		$success=true;
		$message="message";
		$data=[];

		$data = array(
			array(
				"id_item" => 1,
				"kode_item" => "87123",
				"item_nama" => "Hic saepe dolores vitae magni id.",
				"satuan" => "pcs",
				"harga_jual" => 5700000,
				"harga_beli" => 5130000,
				"foto" => "",
				"document" => "",
				"keterangan" => "<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Source Sans Pro&quot;; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><br></p>",
				"deleted" => 0,
			),
			array(
				"id_item" => 2,
				"kode_item" => "99851",
				"item_nama" => "Tenetur minima vel qui quidem rerum dolorem.",
				"satuan" => "pcs",
				"harga_jual" => 2700000,
				"harga_beli" => 2430000,
				"foto" => "",
				"document" => "",
				"keterangan" => "<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Source Sans Pro&quot;; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><br></p>",
				"deleted" => 0,
			),
			array(
				"id_item" => 3,
				"kode_item" => "52401",
				"item_nama" => "Aut corporis et inventore doloremque.",
				"satuan" => "pcs",
				"harga_jual" => 2700000,
				"harga_beli" => 2430000,
				"foto" => "",
				"document" => "",
				"keterangan" => "<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Source Sans Pro&quot;; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><br></p>",
				"deleted" => 0,
			),
			array(
				"id_item" => 4,
				"kode_item" => "82142",
				"item_nama" => "Aspernatur dignissimos consequatur accusamus repudiandae nulla qui aliquam.",
				"satuan" => "pcs",
				"harga_jual" => 6500000,
				"harga_beli" => 5850000,
				"foto" => "",
				"document" => "",
				"keterangan" => "<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Source Sans Pro&quot;; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><br></p>",
				"deleted" => 0,
			),
			array(
				"id_item" => 5,
				"kode_item" => "38949",
				"item_nama" => "Facilis libero sunt ratione voluptas qui et.",
				"satuan" => "pcs",
				"harga_jual" => 2700000,
				"harga_beli" => 2430000,
				"foto" => "",
				"document" => "",
				"keterangan" => "<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Source Sans Pro&quot;; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><br></p>",
				"deleted" => 0,
			),
			array(
				"id_item" => 6,
				"kode_item" => "11611",
				"item_nama" => "Accusantium vitae atque deleniti quia.",
				"satuan" => "pcs",
				"harga_jual" => 5700000,
				"harga_beli" => 5130000,
				"foto" => "",
				"document" => "",
				"keterangan" => "<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Source Sans Pro&quot;; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><br></p>",
				"deleted" => 0,
			),
			array(
				"id_item" => 7,
				"kode_item" => "81344",
				"item_nama" => "Deserunt molestias voluptates nisi tempora qui maiores consequuntur ea.",
				"satuan" => "pcs",
				"harga_jual" => 1200000,
				"harga_beli" => 1080000,
				"foto" => "",
				"document" => "",
				"keterangan" => "<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Source Sans Pro&quot;; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><br></p>",
				"deleted" => 0,
			),
			array(
				"id_item" => 8,
				"kode_item" => "34487",
				"item_nama" => "Ex accusamus sed voluptatum nostrum est voluptas ut.",
				"satuan" => "pcs",
				"harga_jual" => 2700000,
				"harga_beli" => 2430000,
				"foto" => "",
				"document" => "",
				"keterangan" => "<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Source Sans Pro&quot;; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><br></p>",
				"deleted" => 0,
			),
			array(
				"id_item" => 9,
				"kode_item" => "15320",
				"item_nama" => "Sit suscipit praesentium consequatur eius.",
				"satuan" => "pcs",
				"harga_jual" => 6500000,
				"harga_beli" => 5850000,
				"foto" => "",
				"document" => "",
				"keterangan" => "<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Source Sans Pro&quot;; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><br></p>",
				"deleted" => 0,
			),
			array(
				"id_item" => 10,
				"kode_item" => "11376",
				"item_nama" => "Blanditiis autem est consequatur distinctio non.",
				"satuan" => "pcs",
				"harga_jual" => 2700000,
				"harga_beli" => 2430000,
				"foto" => "",
				"document" => "",
				"keterangan" => "<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Source Sans Pro&quot;; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><br></p>",
				"deleted" => 0,
			),
		);
		

		header_cross_domain();
		header_json();
		$response=array(
			'success'=>$success,
			'message'=>$message,
			'data'=>$data,
		);
		echo json_encode($response);
    }
}