<?php



function fetchFromDatabase($host, $user, $password, $database, $table)
{
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn)
    {
        die("Could not connect: ".mysqli_connect_error());
    }

    $query = "select * from $table";
    $output = array();
    if($result = mysqli_query($conn, $query))
    {
        while($r = mysqli_fetch_assoc($result))
        {
            array_push($output, $r);
        }
    }
    else
    {
        $err = mysqli_error($conn);
        mysqli_close($conn);
        die("SQL Error: $err\r\n");
    }

    return $output;
}




// This is the function I use to dump the $farmer_address and $farmer_name to the  farmer_ledger
function InsertUser($host, $user, $password, $database, $table, $email, $firstname, $lastname, $title, $phone, $my_group, $church, $reg_code, $status)
{
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn)
    {
        die("Could not connect: ".mysqli_connect_error());
    }

    $sql = "insert $table set  email='$email', firstname='$firstname', lastname='$lastname', title='$title', phone='$phone', my_group='$my_group', church='$church', reg_code='$reg_code', status = '$status'";
    if ($conn->query($sql) === TRUE) {
       //echo "New Order Created successfully Thank You";
    } else {
      // echo "Error updating Order: " . $conn->error;
    }

    $conn->close();
}


// This is the function I use to dump the $farmer_address and $farmer_name to the  farmer_ledger
function InsertNewUser($host, $user, $password, $database, $table, $email, $firstname, $lastname, $title, $phone, $location, $status)
{
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn)
    {
        die("Could not connect: ".mysqli_connect_error());
    }

    $sql = "insert $table set  email='$email', firstname='$firstname', lastname='$lastname', title='$title', phone='$phone', location='$location', status = '$status'";
    if ($conn->query($sql) === TRUE) {
       //echo "New Order Created successfully Thank You";
    } else {
      // echo "Error updating Order: " . $conn->error;
    }

    $conn->close();
}






// This is the function I use to dump the $Request 
function InsertRequest($host, $user, $password, $database, $table, $subject, $content1, $request_code)
{
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn)
    {
        die("Could not connect: ".mysqli_connect_error());
    }

    $sql = "insert $table set subject='$subject', content='$content1', request_code='$request_code'";
    if ($conn->query($sql) === TRUE) {
       //echo "New Request Created successfully Thank You";
    } else {
      // echo "Error updating Order: " . $conn->error;
    }

    $conn->close();
}






// This is the function I use to dump the $farmer_address and $farmer_name to the  farmer_ledger
function InsertAgent($host, $user, $password, $database, $table, $name, $email, $phone, $password_1, $clearance_Id)
{
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn)
    {
       // die("Could not connect: ".mysqli_connect_error());
    }

    $sql = "insert $table set name='$name', email='$email', phone='$phone', password='$password_1', clearance_Id='$clearance_Id'";
    if ($conn->query($sql) === TRUE) {
      // echo "New Agent Created successfully Thank You";
    } else {
      //echo "Error updating Order: " . $conn->error;
    }

    $conn->close();
}

// This is to insert Token
function InsertToken($host, $user, $password, $database, $table, $token, $email_1)
{
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn)
    {
        die("Could not connect: ".mysqli_connect_error());
    }

    $sql = "insert $table set token='$token', email='$email_1'";
    if ($conn->query($sql) === TRUE) {
  //echo "Token Created successfully Thank You";
    } else {
 // echo "Error updating Order: " . $conn->error;
    }

    $conn->close();
}

// This is the function to update status
function updateTokenTable($host, $user, $password, $database, $table,  $token)
{
    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn)
    {
        die("Could not connect: ".mysqli_connect_error());
    }

    $sql = "update $table set status=1 where token='$token'";
    if ($conn->query($sql) === TRUE) {
       // echo "Record updated successfully";
    } else {
        //echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}


function Random($contract_Id){

  $no_of_digits=5;
  $var='';
  for($i=1; $i<=$no_of_digits; $i++){
  $var .=rand(0,9);
  $contract_ID ="CELL/GORDER/BEANS/$var";
  }


}

// $register_farmer_response = addFarmer($admin_address, 'Agrikore8546&', $farmer_address, 'ECJ4REAL', '1', $farmer_token);

// echo '<pre>'; print_r($register_farmer_response); echo '</pre>';

// $token = getToken('admin', 'Agrikore8546&');
// echo(register('ecj4real', '11111111', $token));
// $token = getToken('admin', 'Agrikore8546&');
// echo '<pre>'; print_r(keystore('11111111',$token)); echo '</pre>';
