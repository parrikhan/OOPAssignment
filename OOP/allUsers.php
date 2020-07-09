<?php
    include 'userRecord.php';
    
    class allUsers extends userRecord
    {
        public function __constructor()
        {
            echo "Constructor of AllUsers Class";
        }
        public function showUsers()
        {
            $fetch = "SELECT * FROM Users";
?>
<div class="container-fluid">
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Password</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Province</th>
                <th scope="col">ZipCode</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $result = $this->connect->query($fetch);
                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                        {
                        ?>
                        <tr>
                            <td><?php echo $row['ID']?></td>
                            <td><?php echo $row['Name']?></td>
                            <td><?php echo $row['Password']?></td>
                            <td><?php echo $row['Email']?></td>
                            <td><?php echo $row['Address']?></td>
                            <td><?php echo $row['City']?></td>
                            <td><?php echo $row['Province']?></td>
                            <td><?php echo $row['ZipCode']?></td>
                            <td><a href="edit.php?ID=<?php echo $row['ID']?>"><button id="edit-user" class = "btn btn-primary" name="edit">Edit</button>
                                <a href="delete.php?ID=<?php echo $row['ID']?>"><button id="delete-user" class="btn btn-danger" name="delete">Delete</button>
                            </td>
                        </tr><?php
                        }?>
        </tbody>
    </table> 
</div>       
<?php
    }
}
} 

$show = new allUsers();
$show->check();
$show->showUsers();

?>