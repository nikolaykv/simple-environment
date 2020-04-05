<?php

namespace application\models;

use application\core\Model;

/**
 * Class Task
 * @package application\models
 */
class Task extends Model
{
    /**
     * @return array
     */
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

    /**
     * @return array
     */
    public function getIdOfDepartmnetWorkers()
   {
       $sql = $this->dataBase->row("
                                        SELECT worker.id AS 'worker_id', department.name, department.id AS 'department_id' FROM worker
                                        INNER JOIN department ON worker.department_id=department.id
                                        GROUP BY worker.id
                                        ");

       return $sql;
   }
}