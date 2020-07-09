<?php
include 'connection.php';
class delete extends connection
{
    private $deleteRow;
    
    public function deleteData()
    {
        $this->connected();
        $deleteQuery = "DELETE FROM Users WHERE ID = '$this->deleteRow'";
        if($this->connect->query($deleteQuery)===TRUE)
        {
            echo "Record is Deleted Successfully !!!";
            header("location:allUsers.php");
        }
        else 
        {
            echo "An error has occured !!!";
        }

    }
    public function getValue()
    {
        $this->deleteRow = $_REQUEST['ID'];
        echo $this->deleteRow;
    }
} 
$deleteKey = new delete();
$deleteKey->getValue();
$deleteKey->deleteData();

?>