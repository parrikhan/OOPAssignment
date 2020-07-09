<?php
include 'controller/userRecord.php';
class userData extends userRecord
{
    private $userName;
    private $userPassword; 
    private $userEmail;
    private $userAddress;
    private $userCity;
    private $userProvince;
    private $userZipCode; 
    
    public function setValues($name,$pass,$email,$addr,$city,$prov,$zip)
    {
        $this->userName = $name;
        $this->userPassword = $pass;
        $this->userEmail = $email;
        $this->userAddress = $addr;
        $this->userCity = $city;
        $this->userProvince = $prov;
        $this->userZipCode = $zip;
        echo "Values are set Successfully!!!";
    }
    public function display()
    {
        echo "Welcome to the display functipon of user class ";
        echo $this->userName;
        echo $this->userPassword;
        echo $this->userEmail;
        echo $this->userAddress;
        echo $this->userCity;
        echo $this->userProvince;
        echo $this->userZipCode; 
    }
    public function insert()
    {
        $insert_Data = "INSERT INTO Users(Name , Password , Email ,Address,City,Province,ZipCode) VALUES
         ('$this->userName','$this->userPassword','$this->userEmail','$this->userAddress','$this->userCity','$this->userProvince','$this->userZipCode')";
        if($this->connect->query($insert_Data) === TRUE)
            {
                echo "Data is inserted successfully !";
            }
            else
            {
                echo "An Error occured";
            }
    }
}
$data = new userData();
$data->setValues($_POST['user-name'],$_POST['user-pass'],$_POST['user-email'],$_POST['user-address'],$_POST['user-city'],$_POST['user-prov'],$_POST['user-zipcode']);  
//$data->display();
$data->check();
$data->CreateTable();
$data->insert();

?>