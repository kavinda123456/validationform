<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 6/18/2019
 * Time: 9:33 PM
 */
?>
<?php
$id = $_POST['cid'];
$name = $_POST['name'];
$address = $_POST['address'];
$tp = $_POST['tp'];
$salary = $_POST['salary'];

class Customer
{
    private $id;
    private $name;
    private $address;
    private $tp;
    private $salary;

    /**
     * Customer constructor.
     * @param $id
     * @param $name
     * @param $address
     * @param $tp
     * @param $salary
     */
    public function __construct($id, $name, $address, $tp, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->tp = $tp;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * @param mixed $tp
     */
    public function setTp($tp)
    {
        $this->tp = $tp;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}
$customer = new Customer($id, $name,$address, $tp, $salary);
Customer_ID: echo $customer->getid(); echo"<br>";
Customer_Name:echo $customer->getName();echo"<br>";
Customer_Address:echo $customer->getAddress();echo"<br>";
Telephone_Number:echo $customer->getTp();echo"<br>";
Salary:echo $customer->getSalary();