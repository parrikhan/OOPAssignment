<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Crud</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body id = "grad">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-white" href="#">PHP(OOP) CRUD </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon color-white"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link bg-dark text-white" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="controller/allUsers.php">View All</a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1 class="text-center mx-4 my-4"> Registration Form</h1>
    <div class="container form-container">
        <form action="userData.php" method="Post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="uName"><b>Enter Name :</b></label>
                    <input type="text" class="form-control" id="uName" placeholder="Name" name="user-name">
                </div>
                <div class="form-group col-md-6">
                    <label for="pass"><b>Password</b></label>
                    <input type="password" class="form-control" id="pass" placeholder="Password" name="user-pass">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Email"><b>Email</b></label>
                    <input type="text" class="form-control" id="Email" placeholder="abc2@gmail.com" name="user-email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress"><b>Address</b></label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="user-address">
                </div>    
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city"><b>Select city :</b></label>
                    <select name="user-city" id="city" class="form-control">
                        <option value="Lahore">Lahore</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Peshawar">Peshawar</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="prov"><b>Province :</b></label>
                    <select name="user-prov" id="prov" class="form-control">
                        <option value="Punjab">Punjab</option>
                        <option value="Sindh">Sindh</option>
                        <option value="Balochistan">Balochistanhi</option>
                        <option value="Khyber">Khyber</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="zip"><b>ZipCode :</b></label>
                    <input type="text" class="form-control" id="zip" placeholder="ZipCode" name="user-zipcode">             
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
 
    