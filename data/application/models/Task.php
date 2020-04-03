<?php

namespace application\models;

use application\core\Model;

class Task extends Model
{
   public function getDepartmentName()
   {
       $sql = $this->dataBase->row("
                                         SELECT department.name, COUNT(*) AS 'count_workers' FROM department
                                         LEFT JOIN worker ON (department.id = worker.department_id)
                                         GROUP BY department.id HAVING COUNT(worker.department_id) >= 5
                                         ORDER BY department.id ASC ;
                                   ");
       return $sql;
   }
}