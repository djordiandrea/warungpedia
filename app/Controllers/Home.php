<?php

namespace App\Controllers;

use App\Models\DataModel;

class Home extends BaseController
{
    protected $db;
    protected $session;
    protected $dataModel;

    public function __construct()
    {
        $this->db = db_connect();
        $this->session = session();
        $this->dataModel = new DataModel();
    } // ini lu catet aja, wajibb ini

    public function index()
    {
        $header = array(
            "username" => $this->session->get("sess")['username'],
            "name" => $this->session->get("sess")['name'],
        );

        $queryMeja = "SELECT * FROM mst_table";
        $dataMeja = $this->db->query($queryMeja)->getResultArray(); //ini querynya
        $queryBarang = "SELECT * FROM mst_stuff";
        $dataBarang = $this->db->query($queryBarang)->getResultArray(); //ini querynya

        $data = array(
            "dataMeja" => $dataMeja,
            "dataBarang" => $dataBarang
        );

        echo view('template/header', $header);
        echo view('home/home', $data);
        echo view('template/footer');
        // print_r($data);
        //karna session ga bisa ditampilin langsung di view, kita buat variablenya

    }

    //ini buat load form input table
    public function loadFormTable()
    {
        return view('form/form-table');
    }

    //kita buat function entri meja
    public function inputData()
    {
        $type = $this->request->getPost("type");
        if ($type == "add-table") {
            $tableCode = $this->request->getPost("tableCode");
            $tableName = $this->request->getPost("tableName");
            $tableCapacity = $this->request->getPost("tableCapacity");
            $totalTable = $this->request->getPost("totalTable");

            $result = $this->dataModel->addDataTable($tableCode, $tableName, $tableCapacity, $totalTable);
            return json_encode($result); //gua balikin angka antara angka 1 / 0
        }
    }
}
