<?php
defined('BASEPATH') or exit('No direct script access allowed');

class users extends CI_Model
{
    public $id;
    public $login;
    public $password;
    public $numero;
    public $status;
    public $dates;
    public $email;
    public $photo;
    public $nom;
    public $prenom;
    public $role;

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        //$this->db->method_name();
    }

    public function getAllusers()
    {
        $query = $this->db->get("users");
        return $query->result();
    }

    public function countAllusers()
    {
        $query = $this->db->get_where("users", array("status" => 0));
        return $query->num_rows();
    }

    public function checkIfuserExist($code)
    { // please read the below note
        $query = $this->db->get_where("users", array("email" => $_POST['email']));
        if ($query->num_rows() == 1) 
        {
            if ($this->restorPassword($code) == true) {
                return true;
            }

        } else {
            return false;
        }
    }

    public function checkIfExist($code)
    { // please read the below note
        $query = $this->db->get_where("users", array("email" => $_POST['email']));
        if ($query->num_rows() == 0) {
            $query2 = $this->db->get_where("users", array("login" => $_POST['login']));
            if ($query2->num_rows() == 0) {
                if ($this->insertusers($code) == true) {
                    return true;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function checkIfExist2($code)
    { // please read the below note
        $query = $this->db->get_where("users", array("email" => $_POST['email']));
        if ($query->num_rows() == 0) {
            $query2 = $this->db->get_where("users", array("login" => $_POST['login']));
            if ($query2->num_rows() == 0) {
                if ($this->insertusers2($code) == true) {
                    return true;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function restorPassword($code)
    {
        $this->db->set('status', $code);
        $this->db->set('password', $code);
        $this->db->where('email', $_POST["email"]);
        if ($this->db->update("users")) {
            return true;
        } else {
            return false;
        }
    }

    public function activateAccount($code)
    {
        $this->db->set('status', 0);
        $this->db->where('status', $code);
        if ($this->db->update("users")) {
            return 'ok';
        } else {
            return false;
        }
    }

    public function changePassword($code)
    {
        $this->db->set('password', sha1($_POST["pass2"]));
        $this->db->where('password', $code);
        if ($this->db->update("users")) {
            return 'ok';
        } else {
            return false;
        }
    }

    public function insertusers($code)
    {
        $this->idPays = $_POST['pays']; // please read the below note
        $this->password = sha1($_POST['password']);
        $this->dates = date("Y-m-d");
        $this->login = $_POST['login'];
        $this->nom = $_POST['nom'];
        $this->prenom = $_POST['prenom'];
        $this->role = $_POST['role'];
        $this->numero = $_POST['tel'];
        $this->email = $_POST['email'];
        $this->matricule = 1;
        $this->status = $code;

        if ($this->db->insert("users", $this)) {
            return true;
        } else {
            return false;
        }
    }

    public function insertusers2($code)
    {
        $this->db->select_max("id");
        $id = $this->db->get("users");
    /////////////// ===================== /////////////////////////
        $this->id = $id;
        $this->idPays = $_POST['pays']; // please read the below note
        $this->password = sha1($_POST['password']);
        $this->dates = date("Y-m-d");
        $this->login = $_POST['login'];
        $this->nom = $_POST['nom'];
        $this->prenom = $_POST['prenom'];
        $this->role = $_POST['role'];
        $this->numero = $_POST['tel'];
        $this->email = $_POST['email'];
        $this->matricule = 1;
        $this->status = $code;

        if ($this->db->insert("users", $this)) {
            return true;
        } else {
            return false;
        }
    }

    public function editUsers($user)
    {
        $this->db->set('idPays', $_POST['idPays']); // please read the below note
        $this->db->set('login', $_POST['login']);
        $this->db->set('nom', $_POST['nom']);
        $this->db->set('prenom', $_POST['prenom']);
        $this->db->set('numero', $_POST['numero']);
        $this->db->set('email', $_POST['email']);
        $this->db->set('bpUsers', $_POST['bpUsers']);
        $this->db->set('autre', $_POST['autre']);

        $this->db->where('id', $user);
        if ($this->db->update("users")) {
            return true;
        } else {
            return false;
        }
    }

    public function editPassword($user, $code)
    {
        $this->db->set('password', sha1($_POST["pass3"])); // please read the below note
        $this->db->set('status', $code);
        $this->db->where('id', $user);

        $this->db->update('users');
        return true;
    }

    public function updateImage($lien, $user)
    {
        $this->db->set('photo', $lien); // please read the below note
        //$this->db->set('dates', time());
        $this->db->where('id', $user);

        $this->db->update('users');
        return true;
    }

    public function basculeRole($user, $role)
    {
        $this->db->set('role', $role); // please read the below note
        $this->db->where('id', $user);

        $this->db->update('users');
        return true;
    }

    public function poweroff_entry($id)
    {
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        $this->db->update('users');
        return true;
    }

    public function poweron_entry($id)
    {
        $this->db->set('status', 0);
        $this->db->where('id', $id);
        $this->db->update('users');
        return true;
    }

    public function delete_entry($id)
    {
        $this->db->set('status', 3);
        $this->db->where('id', $id);
        $this->db->update('users');
        return true;
    }

    public function connectUsers() {
        $this->password = sha1($_POST['password']);
        $this->login = $_POST['login'];
        $query = $this->db->get_where("users", array('login' => $this->login, 'password' => $this->password));
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function checkPasswordUsers($users)
    {
        $this->password = sha1($_POST['password']);
        $query = $this->db->get_where("users", array('id' => $users, 'password' => $this->password));
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function sendMail($from, $to, $subject, $mess, $to1, $to2)
    {
        $this->email->from($from, "AGZJobs");
        $this->email->to($to);
        $this->email->cc($to1);
        $this->email->bcc($to2);

        $this->email->subject($subject);
        $this->email->message($mess);

        $this->email->send();
    }

    public function startSession($id, $user)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['erec_user'] = $user;
        $_SESSION['erec_userid'] = $id;
    }

    public function getUsersByID($id)
    {
        $this->id = $id;
        $this->status = 3;

        $query = $this->db->get_where("users", array('id' => $this->id));
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getOneData($id, $value)
    {
        foreach ($this->getUsersByID($id) as $row):
            return $row->$value;
        endforeach;
    }

    public function getAllUsersLimit($min, $max)
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get_where("users", array('status !=' => 3), $max);
        return $query->result();
    }

    public function getAllUsersByStatus($id)
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get_where("users", array('status!=' => $id));
        return $query->result();
    }

    public function getUsersByEmail($id)
    {
        $this->email = $id;

        $query = $this->db->get_where("users", array('email' => $this->email));
        if ($query) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getOneDatabyEmail($id, $value)
    {
        foreach ($this->getUsersByID($id) as $row):
            return $row->$value;
        endforeach;
    }
}
