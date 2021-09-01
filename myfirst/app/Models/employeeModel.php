<?php

namespace App\Models;

use CodeIgniter\Model;

class employeeModel extends Model
{
    public $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    public function get_all_data()
    {
        $query = $this->db->query('select * from employee_new');
        return $query->getResult();
    }
}