<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


// Base Homepage
  public function index()
  {
    $data['title'] = 'AKU SEHAT - Website Kesehatan';
    $this->load->view('templates/header', $data);
    $this->load->view('homepage');
    $this->load->view('templates/footer');
  }

    public function homepage_login()
  {
    $data['title'] = 'AKU SEHAT - Website Kesehatan';
    $this->load->view('templates/header', $data);
    $this->load->view('homepage-login');
    $this->load->view('templates/footer');
  }


// Navbar - Obat & Vitamin
  public function obat()
  {
    $data['title'] = 'Obat & Vitamin';
    $this->load->view('templates/header', $data);
    $this->load->view('obat');
    $this->load->view('templates/footer');
  }


// Navbar - Our Team
  public function team()
  {
    $data['title'] = 'Our Team';
    $this->load->view('templates/header', $data);
    $this->load->view('team');
    $this->load->view('templates/footer');
  }


// Navbar - Kebijakan & Privasi
  public function kebijakan()
  {
    $data['title'] = 'Kebijakan & Privasi';
    $this->load->view('templates/header', $data);
    $this->load->view('kebijakan-privasi');
    $this->load->view('templates/footer');
  }


// Navbar - Artikel
  public function artikel()
  {
    $data['title'] = 'Informasi & Artikel Kesehatan';
    $this->load->view('templates/artikel_header', $data);
    $this->load->view('artikel/index');
    $this->load->view('templates/artikel_footer');
  }

  public function details_1()
  {
    $data['title'] = 'Covid-19';
    $this->load->view('templates/artikel_header', $data);
    $this->load->view('artikel/details_1');
    $this->load->view('templates/artikel_footer');
  }

  public function details_2()
  {
    $data['title'] = 'Kesehatan Mental';
    $this->load->view('templates/artikel_header', $data);
    $this->load->view('artikel/details_2');
    $this->load->view('templates/artikel_footer');
  }

  public function details_3()
    {
      $data['title'] = 'HIV/AIDS';
      $this->load->view('templates/artikel_header', $data);
      $this->load->view('artikel/details_3');
      $this->load->view('templates/artikel_footer');
    }

  public function bottom_details1()
    {
      $data['title'] = 'Kanker';
      $this->load->view('templates/artikel_header', $data);
      $this->load->view('artikel/bottom_details1');
      $this->load->view('templates/artikel_footer');
    }




// Email
  public function SendMail()
  {
    if (isset($_POST['submit'])) {

      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $subject = $this->input->post('subject');
      $message = $this->input->post('message');

      if (!empty($email)) {

        // Configuration to email & process

        $config = [
          'mailtype' => 'text',
          'charset' => 'iso-8859-1',
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_user' => 'asepnr01@gmail.com',
          'smtp_pass' => 'ixtjxfkabmhzojmm',
          'smtp_port' => '465'
        ];
// ixtjxfkabmhzojmm
        $this->load->library('email', '$config');
        $this->email->initialize($config);

        $this->email->from($name);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
          echo "Email, berhasil dikirimkan";
        } else {
          show_error($this->email->print_debugger());
        }
      }
    }
  }




// Login (Develop)
  public function login()
  {
    $this->load->view('auth/login');
  }

  // // Chatapp (Depelop)
  // public function chatapp()
  // {
  //   $this->load->view('chat_app/index');
  // }





}



