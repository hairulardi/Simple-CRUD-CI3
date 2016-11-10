<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 //nama class harus huruf besar, nama harus sama dengan file
class Error extends CI_Controller { 
    public function index()
    {
        echo "Halaman tidak ditemukan";
    }
 
}