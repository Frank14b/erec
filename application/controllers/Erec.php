<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!isset($_SESSION)) {
    session_start();
}

//$_SESSION['abbr_lang'] = "fr";

class Erec extends CI_Controller
{
    public function view($page = "acceuil")
    {
        if (!file_exists(APPPATH . '/views/erec/' . $page . 'php')) {

            $data['title'] = $page;

            $this->load->library('email');
            $this->load->model('message');
            $this->load->model('newsletter');
            $this->load->model('users');
            //$this->load->model('Langue');

            if (isset($_POST['sendsms'])) {
                $this->sendSMS();
            }

            $param1 = $this->uri->segment(2);
            $param2 = $this->uri->segment(3);

            if (isset($param2)) {
               $data[$param2] = $param1;
            }

            if (isset($_SESSION['erec_user'])) {
                $lang = $_SESSION['abbr_lang'] ?? "en";
                //$url = "http://localhost/CodeIgniter/";
                header("Location:" . base_url() . $lang . "/dashboard");
                die();
            }

            $this->addMess();
            $this->addNewsletter();
            $this->Connexion();

            $this->lang->load('form', $this->config->item('language'));

            if($page == "connexion"){
                $this->load->view('erec/' . $page);
            }else{
                $this->load->view('templates/header', $data);
                $this->load->view('erec/' . $page);
                $this->load->view('templates/footer');
            }

        } else {
            show_404();
        }
    }

    public function Connexion()
    {
        if (isset($_POST['connectUser'])) {
            if ($this->users->connectUsers()) {
                foreach ($this->users->connectUsers($_POST) as $dat) {
                    $id = $dat->id;
                    $user = $dat->login;
                    $pass = $dat->password;
                    $status = $dat->status;
                }
                if ($status == "0") {
                    $this->users->startSession($id, $user);

                    mail($_POST['email'], 'Connexion au Compte', "Nouvelle connexion a votre compte EREC ... Effectuer a:".date("Y-m-d h:i:s")."");
                    
                    $result = 0;
                } else if ($status == "3") {
                    $result = 'Connexion refusé veuillez contacter l\'administrateur';
                } else {
                    $result = "Connexion refusé veuillez activer votre compte via votre boite mail";
                }
            } else {
                $result = 'Echec de connexion veuillez reessayer';
            }
            //echo $result;
            header('Content-type: application/json');
            echo json_encode($result);
            die();
        }
    }


    public function addMess(){
        if(isset($_POST['ajouterMess'])){
            $rs = $this->message->insertMess();
            if($rs != false){
                echo 'ok';
            }else{
                echo '0';
            }
            die();
        }
    }

    public function addNewsletter(){
        if(isset($_POST['addNewsletter'])){
            $rs = $this->newsletter->insertnewsletter();
            if($rs != false){
                echo 'ok';
            }else{
                echo '0';
            }
            die();
        }
    }

    public function sendMail()
    {
        if (isset($_POST['mail'])) {
            $to = 'demo@spondonit.com';
            $firstname = $_POST["fname"];
            $email = $_POST["email"];
            $text = $_POST["message"];
            $phone = $_POST["phone"];

            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            $message = '<table style="width:100%">
        <tr>
            <td>' . $firstname . '  ' . $laststname . '</td>
        </tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>phone: ' . $phone . '</td></tr>
        <tr><td>Text: ' . $text . '</td></tr>

        </table>';

            if (@mail($to, $email, $message, $headers)) {
                echo 'The message has been sent.';
            } else {
                echo 'failed';
            }
        }
    }
}
