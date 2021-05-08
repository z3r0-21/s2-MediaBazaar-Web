
<?php include '../DataAccess/DbHelper.php'; ?>
<?php
class EmployeeManager
{
  private $employees = array();
  private $storage;



  public function __construct()
  {
      $this->storage = new DbHelper();
      $this->LoadFromStorage();
  }

  public function LoadFromStorage()
  {
      $this->employees = $this->storage->GetUsers();
  }

  public function AddEmployee($newEmp)
  {
    //$this->employees[] = $newEmp;
  }

  public function GetEmployee($id)
  {
    foreach ($this->employees as $employee) {
      if($employee->GetID() == $id)
      {
        return $employee;
      }
    }
    return null;
  }

  public function GetAllEmployees()
  {
    return $this->employees;
  }
}
 ?>
