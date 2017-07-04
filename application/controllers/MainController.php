<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

    private $styles = array();
    private $scripts = array();

    public function __construct() {
        parent::__construct();
        $this->load->model(array());
        $this->load->library('email');
        //$this->load->helper('cookie');
        /*
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.postmarkapp.com';
        $config['smtp_user'] = '2d77b1e0-2839-48f9-b6f6-99a3fb110bf0';
        $config['smtp_pass'] = '2d77b1e0-2839-48f9-b6f6-99a3fb110bf0';
        $config['smtp_port'] = '587';
        $config['wordwrap'] = TRUE;
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        */
    }

    public function index() {
        $this->styles[] = '<link href="'.asset_url().'css/home.css" rel="stylesheet">';
        $this->scripts[] = '<script src="'.asset_url().'js/home.js"></script>';

        // Imprimir vista con datos
        $data["styles"] = $this->styles;
        $data["scripts"] = $this->scripts;
        $component["content"] = $this->load->view("public/home", $data, true);
        $this->load->view("template/body_main", $component);
    }

    public function nosotros() {
        $this->styles[] = '<link href="'.asset_url().'css/nosotros.css" rel="stylesheet">';
        $this->scripts[] = '<script src="'.asset_url().'js/nosotros.js"></script>';

        // Imprimir vista con datos
        $data["styles"] = $this->styles;
        $data["scripts"] = $this->scripts;
        $component["content"] = $this->load->view("public/nosotros", $data, true);
        $this->load->view("template/body_main", $component);
    }
}
