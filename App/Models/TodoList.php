<?php

namespace App\Models;

use App\Conn;
use mysqli;

class TodoList
{
    private $db;
    private $list;

    private function getDB()
    {
        return new mysqli("localhost:4406", "root", "root", "todo_list_db");
    }

    public function getList()
    {
        $db = $this->getDB();
        return $db->query('SELECT * FROM todo_list_table');
    }

    public function saveTask()
    {
        $db = $this->getDB();

        $task = isset($_POST['task']) ? $_POST['task'] : null;
        
        $query = 'INSERT INTO todo_list_table (task) VALUES ("'. $task .'")';
        
        //Se o Get não receber nada, ele não roda a Query
        if ($task != null) {
            $db->query($query);
        }
    }
}