<?php
include 'db_connection.php';
if(isset($_POST["psubmit"])){
    $name=$_POST['Pname'];
    $NIC_PP=$_POST['Pnic'];
    $DOB=$_POST['Pdob'];
    $ContactNo=$_POST['Pphone'];
    $email=$_POST['Pemail'];
    $educationLevel=$_POST['PeducationLevel'];
    $isPaid=1;
    $isPending=1;
    $isApproved=0;
    $isRejected=0;

    $sqlinsert = "INSERT INTO participants (FullName,NID,DOB,ContactNo,email,education_level,isPaid,isPending,isApproved,isRejected) values ('$name','$NIC_PP','$DOB','$ContactNo','$email','$educationLevel','$isPaid','$isPending','$isApproved','$isRejected')";

    $result=mysqli_query($con,$sqlinsert);
    if($result){
        echo '<script>
		alert("Inserted Successfully.");
        location.replace("./index.php")
    </script>';
    }else{
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>

<body class="bg-light">

    <!-- Registration Form -->
    <div style="height: 100px"></div>
    <div class="container bg-light">
        <div class="row">
            <div class="col-sm-1"></div>
            <div style="height: 75px" class="col-sm-4 px-0">
                <a class="navbar-brand text-muted" href="/index.html">
                    <img src="images/MNU_Logo.png" alt="" width="" height="24" class="d-inline-block align-text-top">
                    Maldives National University
                </a>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-lg-5 bg-white p-5 shadow">
                    <h1 class="h3 px-0 text-dark p-3">Submit your registration request</h1>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name='Pname'>
                        </div>
                        <div class="mb-3">
                            <label for="nic" class="form-label">NIC / PP Number</label>
                            <input type="text" class="form-control" id="nic" name='Pnic'>
                        </div>
                        <div class="mt-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name='Pdob'>
                        </div>
                        <div class="mt-3">
                            <label for="phone" class="form-label">Contact Number</label>
                            <input type="phone" class="form-control" id="phone" name='Pphone'>
                        </div>
                        <div class="mt-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name='Pemail'>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mt-3">
                            <label for="" class="form-label">Education Level</label>
                            <select class="form-select" aria-label="Select education level" name='PeducationLevel'>
                                <option selected></option>
                                <option value="Diploma">Diploma</option>
                                <option value="Bachelors Degree">Bachelors Degree</option>
                                <option value="Masters Degree">Masters Degree</option>
                                <option value="Doctoral">Doctoral</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="file" class="form-label">Payment Slip</label>
                            <input class="form-control" type="file" id="file">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary my-4" name="psubmit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-none d-lg-block justify-content-center align-items-center">
                    <img src="./images/registration.png" class="m-5" alt="">
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

</html>