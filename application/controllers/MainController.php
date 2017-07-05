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

    public function enviar_mensaje() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $asunto = $this->input->post('asunto');
        $mensaje = $this->input->post('mensaje');

        $this->email->from("webmaster@dral.gob.pe", $name);
        $this->email->to("info_publica@dral.gob.pe");
        $this->email->subject($asunto);
        $this->email->message($mensaje . "<br><br><i>Enviado por ". $name. " (" . $email . ") desde <a href=\"http://dral.gob.pe/contacto\" target=\"_blank\">Formulario de contacto - Sitio Web DRAL</a><br>".date("d/m/Y h:i A") . "</i><br>");
        $this->email->send();

        $type_system = "success";
        $message_system = "El mensaje ha sido enviado con éxito";
        set_message_system($type_system, $message_system);
        header('Location: ' . base_url('contacto'));
    }

    public function login() {
        if (!$this->session->userdata("usuario")) {
            $data["username_login"] = $this->session->userdata("username_login");
            $data["label_login"] = $this->session->userdata("label_login");
            $data["mensaje_login"] = $this->session->userdata("mensaje_login");
            $this->session->unset_userdata("username_login");
            $this->session->unset_userdata("label_login");
            $this->session->unset_userdata("mensaje_login");

            $this->styles[] = '<link href="'.asset_url().'css/login.css" rel="stylesheet">';
            //$this->scripts[] = '<script src="'.asset_url().'js/transparencia.js"></script>';
            // Imprimir vista con datos
            $data["styles"] = $this->styles;
            $data["scripts"] = $this->scripts;
            $component["content"] = $this->load->view("public/login", $data, true);
            $this->load->view("template/body_main", $component);
        } else {
            header("Location: " . base_url());
        }
    }
}
