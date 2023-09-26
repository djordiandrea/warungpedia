<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function addDataTable($tableCode, $tableName, $tableCapacity, $totalTable)
    {
        $query = "CALL insert_table('" . $tableCode . "','" . $tableName . "'," . $tableCapacity . "," . $totalTable . ");";
        // var_dump($query);
        $this->db->query($query);
        $affectedRows = $this->db->affectedRows();
        // kalo affectedRows hasilnya 1, berarti berhasil
        return $affectedRows;
    }
}
