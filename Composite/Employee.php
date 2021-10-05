<?php
namespace Composite;

class Employee
{
    private string $name;
    private string $dept;
    private int $salary;
    private array $subordinates;

    public function __construct(string $name, string $dept, int $salary)
    {
        $this->name = $name;
        $this->dept = $dept;
        $this->salary = $salary;
        $this->subordinates = [];
    }

    public function add(Employee $e)
    {
        $this->subordinates[$e->name] = $e;
    }

    public function remove(Employee $e)
    {
        if (isset($this->subordinates[$e->name])) {
            unset($this->subordinates[$e->name]);
        }
    }

    public function getSubordinates(): array
    {
        return $this->subordinates;
    }

    public function __toString(): string
    {
        return "Employee :[ Name : " . $this->name . ", dept :" . $this->dept . " , salary : " . $this->salary . " ]\n" ;
    }
}