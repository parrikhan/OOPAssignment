<?php
include 'connection.php';
class edit extends connection
{

    private $EditedRow;
    public $row;
    public function getValue()
    {
        $this->EditedRow = $_REQUEST['ID'];
        echo $this->EditedRow;
    }
    public function editData()
    {
        $this->connected();
        $fetchData = "SELECT * FROM Users WHERE ID = '$this->EditedRow'";
        $result = $this->connect->query($fetchData);
        if($result->num_rows>0)
        {
            $this->row = $result->fetch_assoc();
        }
    ?>
           
           <div class="container form-container">
        <form method="Post">
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label for="uName"><b>Enter Name :</b></label>
                     <input type="text" class="form-control" id="uName" placeholder="Name" name="user-name" value="<?php echo $this->row['Name']?>">
                 </div>
                 <div class="form-group col-md-6">
                     <label for="pass"><b>Password</b></label>
                     <input type="password" class="form-control" id="pass" placeholder="Password" name="user-pass" value="<?php echo  $this->row['Password']?>">
                 </div>
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label for="Email"><b>Email</b></label>
                     <input type="text" class="form-control" id="Email" placeholder="abc2@gmail.com" name="user-email" value="<?php echo $this->row['Email']?>">
                 </div>
                 <div class="form-group col-md-6">
                     <label for="inputAddress"><b>Address</b></label>
                     <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="user-address" value="<?php echo  $this->row['Address']?>">
                 </div>    
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label for="city"><b>Select city :</b></label>
                     <select name="user-city" id="city" class="form-control" value="<?php echo $this->row['City']?>">
                         <option value="Lahore">Lahore</option>
                         <option value="Islamabad">Islamabad</option>
                         <option value="Karachi">Karachi</option>
                         <option value="Peshawar">Peshawar</option>
                     </select>
                 </div>
                 <div class="form-group col-md-4">
                     <label for="prov"><b>Province :</b></label>
                     <select name="user-prov" id="prov" class="form-control" value="<?php echo $this->row['Province']?>">
                         <option value="Punjab">Punjab</option>
                         <option value="Sindh">Sindh</option>
                         <option value="Balochistan">Balochistanhi</option>
                         <option value="Khyber">Khyber</option>
                     </select>
                 </div>
                 <div class="form-group col-md-2">
                     <label for="zip"><b>ZipCode :</b></label>
                     <input type="text" class="form-control" id="zip" placeholder="ZipCode" name="user-zipcode" value="<?php echo $this->row['ZipCode']?>">             
                 </div>
             </div>
             <button type="submit" class="btn btn-primary"  name="edit">Edit</button>
         </form>
    </div>
    <?php    
        if(isset($_POST['edit']))
        {
            $user_Name = $_POST['user-name'];
            $user_Password = $_POST['user-pass'];
            $user_Email = $_POST['user-email'];
            $user_Address = $_POST['user-address'];
            $user_City = $_POST['user-city'];
            $user_Province = $_POST['user-prov'];
            $user_Zipcode = $_POST['user-zipcode'];

            $update = "UPDATE Users SET Name = '$user_Name' , Password = '$user_Password' ,Email = '$user_Email' , Address = '$user_Address' ,
            City = '$user_City', Province = '$user_Province', ZipCode = '$user_Zipcode' WHERE ID = '$this->EditedRow'";
            if($this->connect->query($update))
            {
                echo "Data Has been Updated Successfully";
            } 
            else
            {
                echo "An Error Occured !!!";
            }
        }
    }
}
$EditValue = new edit();
$EditValue->getValue();
$EditValue->editData();
?>    