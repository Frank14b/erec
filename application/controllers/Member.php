<?php

defined('BASEPATH') or exit('No direct script access allowed');

if (!isset($_SESSION)) {
    session_start();
}

$_SESSION['abbr_lang'] = "fr";

if (!isset($_SESSION['erec_user'])) {
    $lang = $_SESSION['abbr_lang'] ?? "en";
    $url = "http://localhost/erec/";
    $url1 = "https://ensjobs.cm/";
    header("Location:" . $url . $lang);
    die();
}

class Member extends CI_Controller {

    public function view($page = "acceuil") {
        if (!file_exists(APPPATH . '/views/member/' . $page . 'php')) {

            if ($page == "acceuil") {
                $titre = "dashboard";
            } else {
                $titre = $page;
            }


            $data['title'] = $titre;

            $this->load->model('newsletter');
            $this->load->model('users');
            $this->load->model('message');
            $this->load->model('postes');
            $this->load->model('offres');

            $this->load->library('email');
            $this->load->library('user_agent');
            $this->load->library('pagination');
            //$this->load->model('Langue');

            $data['refer'] = $this->agent->referrer();

            $param1 = $this->uri->segment(4);
            $param2 = $this->uri->segment(5);

            if (isset($param2)) {
                $data[$param2] = $param1;

                if ($param2 == "delete") {
                    if($titre == "comment"){
                        $titre = "comments";
                    }
                    if ($this->$titre->delete_entry($param1)) {
                        $data['supprimer'] = $titre . " supprimer avec succes";
                    }
                } else if ($param2 == "power-off") {
                    if ($this->$titre->poweroff_entry($param1)) {
                        $data['power'] = $titre . " desactiver avec succes";
                    }
                } else if ($param2 == "power-on") {
                    if ($this->$titre->poweron_entry($param1)) {
                        $data['power'] = $titre . " activer avec succes";
                    }
                } else if (explode("-", $param2)[0] == "define") {
                    if ($this->post_offre->setPC($param1, explode("-", $param2)[1])) {
                        $data['define'] = "Postulant associé avec succes à l'offre";
                    }
                    $data['details'] = explode("-", $param2)[1];
                }
            } else {
                $data["details"] = $param1;
            }

            if ($this->uri->segment(3) == "bascule") {
                if ($this->users->getOneData($_SESSION['erec_userid'], 'role') == "Postulant") {
                    $role = "Entreprise";
                } else {
                    $role = "Postulant";
                }
                $this->users->basculeRole($_SESSION['erec_userid'], $role);
                header("Location:" . base_url() . $this->uri->segment(1) . "/dashboard");
            }

            if ($this->users->getOneData($_SESSION["erec_userid"], "status") != 0) {
                header("Location:" . base_url() . $this->uri->segment(1) . "/dashboard/deconnexion");
            }


            $data['roleUser'] = $this->users->getOneData($_SESSION['erec_userid'], 'role');

            $this->addPoste();
            $this->deleteEle();
            $this->addPosteP();

            if (isset($_POST['sendsms'])) {
                $this->sendSMS();
            }

            $this->lang->load('form', $this->config->item('language'));
            $this->load->view('member/templates/header', $data);
            $this->load->view('member/' . $page);
            $this->load->view('member/templates/footer');

            //$this->Mouchard($titre);
        } else {
            show_404();
        }
    }

//////////////////////////////// inscription ........................///////////////////////////

    public function Inscription() {
        if (isset($_POST['saveUserss'])) {
            $code = substr(sha1($_POST['email'] . time() . "ensJobs"), 0, 20);
            if ($this->users->checkIfExist2($code) != false) {
                $lang = $_SESSION['abbr_lang'] ?? "en";
                $message = "Bienvenue sur ensJobs cher utilisateur " . $_POST['login'] . " veuillez activer votre compte en validant le lien &lt;a href='" . base_url() . $lang . "/connexion/" . $code . "/activate'&gt;Activer mon compte&lt/a&gt;";
                //$this->users->sendMail("service@ensjobs.cm", $_POST['email'], "Confirmation du Compte", $message, "ensJobs", "ensJobs");

                $_POST['phone'] = $_POST['tel'];
                $_POST['Details'] = "Bienvenue sur ensJobs " . $_POST['login'];
                //$this->sendSMS();

                echo "0";
            } else {
                echo "Echec: soit Email ou login existant; soit veuillez reessayer plutard";
            }
            die();
        }
    }

    public function addPoste(){
        if(isset($_POST['addPoste'])){
            $rs = $this->postes->insertpostes();
            if($rs != false){
                echo "ok";
            }else{
                echo "0";
            }
        }
    }

    public function addPosteP(){
        if(isset($_POST['addPosteP'])){
            $rs = $this->offres->insertoffres();
            if($rs != false){
                echo "ok";
            }else{
                echo "0";
            }
        }
    }

    public function deleteEle(){
        if(isset($_POST['deleteEle'])){
            $ele = $_POST['ele'];
            $rs = $this->$ele->delete_entry($_POST['id']);
            if($rs != false){
                echo "ok";
            }else{
                echo "0";
            }
        }
    }

    public function getAllDataById() {
        if (isset($_POST['getAlloneDataById'])) {
            $table = $_POST['table'];
            $val = $this->$table->getOneData($_POST['id'], $_POST['elem']);
            echo $val;
            die();
        }
    }

    public function retriveMess() {
        if (isset($_POST['retriveMess'])) {
            if ($_POST['retriveMess'] == 'groupe') {
                $val = $this->messages->getmessagesByGroupID($_POST['useid'], $_POST['useid2']);
                if ($val != false) {
                    header('Content-type: application/json');
                    print_r(json_encode($val));
                    die();
                } else {
                    echo 0;
                }
                die();
            } else {
                $val = $this->messages->getmessagesByID($_POST['useid'], $_POST['useid2']);
                if ($val != false) {
                    header('Content-type: application/json');
                    print_r(json_encode($val));
                    die();
                } else {
                    echo 0;
                }
                die();
            }
        }
    }

    public function addMess() {
        if (isset($_POST['addMess'])) {
            $val = $this->messages->insertmessages(0);
            if ($val != false) {
                echo 1;
            } else {
                echo 0;
            }
            die();
        }
    }

    public function addUsers() {
        if (isset($_POST['addUsers'])) {
            $role = $this->typeuser->getOneData($_POST['Typ_id'], 'libeller');
            $val = $this->users->insertusers(0, $role);
            if ($val != false) {

                $lien = base_url().$_SESSION['abbr_lang']."/dashboard/users/";

                $nbruser = $this->users->selectMaxID();
                $id = 1;
                foreach($nbruser as $row):
                    $id = $row->id;
                endforeach;

                $this->addNotif($_SESSION['erec_userid'], $lien, "Nouveau Utilisateur VirteK", "Nom: ".$_POST['prenom']. "email: ".$_POST['email']);
                $this->addNotif($id, $lien, "Bienvenue sur VirteK", $_POST['prenom']. " email: ".$_POST['email']);
                mail($email, 'Nouveau Utilisateur VirteK ', $_POST['prenom']." Cliquer sur le lien pour consulter: ".$lien);
                mail($_POST['email'], 'Bienvenue sur VirteK ',"Votre compte VirteK a ete creer veuillez vous connecter pour configurer");

                echo 1;
            } else {
                echo 0;
            }
            die();
        }
    }

    public function editUsers1(){
        if (isset($_POST['editUsers1'])) {
            $val = $this->users->updateusers1(0, $_SESSION['erec_userid']);
            if ($val != false) {
                echo 1;
            } else {
                echo 0;
            }
            die();
        }
    }

    public function editUsers2(){
        if (isset($_POST['editUsers2'])) {
            $val = $this->users->updateusers2(0, $_SESSION['erec_userid']);
            if ($val != false) {
                echo 1;
            } else {
                echo 0;
            }
            die();
        }
    }

    public function addProfile()
    {
        if(isset($_POST['addProfile'])){
            if (isset($_POST['imageP'])) {
                $croped_image = $_POST['imageP'];
                list($type, $croped_image) = explode(';', $croped_image);
                list(, $croped_image) = explode(',', $croped_image);
                $croped_image = base64_decode($croped_image);
                $name = time() . "png";
                $image_name = $name;

                if ($this->users->updateImage($image_name, $_SESSION['erec_userid']) == true) {
                    //$resultat = move_uploaded_file($_FILES['imageP']['tmp_name'], "../../images/gallery/proprioLogo/" . $image_name);
                    file_put_contents('assets/profile/' . $name, $croped_image);
                    echo 'Operation effectue avec succes';
                    die();
                } else {
                    echo 'echec lors de lajout du document';
                    die();
                }

                die();
            }
        }
    }

    public function addNotif($user, $link, $libeller, $autres)
    {
        $val = $this->notifications->insertnotifications($user, $link, $libeller, $autres);
            if ($val != false) {
                //echo $val;
            } else {
                //echo 0;
            }
            //die();
    }

    public function sendSMS() {
        require 'osms-php-master/src/Osms.php';

        //use Osms\Osms;

        $config = array(
            'clientId' => 'ythYdifKMRbkGJIst2uU2Zpt9IKooNQ3',
            'clientSecret' => 'bbxpxCGgjJ7gP5cR',
        );

        $osms = new Osms\Osms($config);
        // retrieve an access token
        $response = $osms->getTokenFromConsumerKey();

        if (!empty($response['access_token'])) {
            $senderAddress = 'tel:+237698924416';
            $receiverAddress = 'tel:+237' . $_POST['phone'];
            $message = $_POST['Details'];
            $senderName = 'ensJobs';

            $osms->sendSMS($senderAddress, $receiverAddress, $message, $senderName);

            echo 'Message Envoye avec Succes';
        } else {
            echo 'Echec denvoi du message reéssayer !';
        }
    }

}
