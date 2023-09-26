<?php

namespace App\Controllers;

class Login extends BaseController
{
    // ini jangan pernah lupa, kalo bisa ini duluan
    protected $db;
    //bikin session
    protected $session;

    public function __construct()
    {
        $this->db = db_connect();
        $this->session = session();
    }

    public function index()
    {
        return view('login/index');
    }

    public function submitLogin()
    {
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");

        // $db = db_connect();
        $query = "SELECT * FROM mst_user WHERE mus_username = '" . $username . "' AND mus_password = '" . $password . "' ";
        $result = $this->db->query($query)->getResult(); // ini gua pake cara gampang
        // inget query dl, baru $this, baru tunjuk db, baru query lu masukin, baru dibungkus di getResult()
        $sess = [
            'username'  => $result[0]->mus_username,
            'name'     => $result[0]->mus_name,
            'logged_in' => true,
        ]; // bikin array session, abis itu kita check di Home.php
        $this->session->set("sess", $sess);
        return json_encode($result);
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to(base_url('/login')); //enak lu ekekwke base url dimana si pak? base url ? ga penting sih del itu dimana wkwkw emang templatenya gt, dia ngarah kmn?
        //dia ngarah ke localhost:8080/owalah
    }
}
