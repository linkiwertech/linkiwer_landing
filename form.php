<?php

$conn = mysqli_connect("localhost","root","","linkiwer_stud");

if($conn)

{
    echo"database created";
}
else
{
    echo"some error";
}

?>


<html>
    <body>
        <form  name="studregisterform" method="POST">
        Name :- <input type="text" name="name" required></input><br>
         E-mail id :- <input type="text" name="email" required></input><br>
        Mobile No :- <input type="number" name="mobile" required></input><br>
        Company Name :- <input type="text" name="comname" required></input><br>
        Collage Name :- <input type="text" name="colname" required></input><br>


        <input type="submit" name="submit" value="Submit">

</form>
</body>
</html>

<?php

if(isset($_POST["submit"]))
{
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $mobile =$_POST["Mobile"];
    $comname =$_POST["Company"];
    $colname =$_POST["Collage"];


    $query = "INSERT INTO `linkivier`(`id`, `Name`, `Email`, `Mobile`,'Company','Collage') VALUES ('','$name',$email,'$mobile','$comname','$colname')";

    $result = mysqli_query($conn,$query);

    if($result)
{
    echo "data inserted Successfully";

}
else
{
echo "Something error";
}


}


?>