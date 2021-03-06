<?php 
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .=   " 
        <tr>
            <td> <img  src='pictures/".$row['img']."' </td>   
            <td>" .$row['title']."</td>
            <td>" .$row['mediaType']."</td>
            <td>" .$row['authorLastName']."</td>
            <td>" .$row['authorFirstName']."</td>
            <td><a href='publisher.php?publisherName=".$row['publisherName']."'>".$row['publisherName']."</a> </td>
            <td>" .$row['publishDate']."</td>
            <td>" .$row['mediaStatus']."</td>
            <td>" .$row['ISBN']."</td>
            <td> 
        <div class='d-flex'>
            <a href='update.php?id=" .$row['id']."'><button class='btn btn-success' type='button' title='Edit the Product'>Edit</button><a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger' type='button' title='Delete the Product'>Delete</i>  </button></a>
            <a href='moredetails.php?id=" .$row['id']."'><button class='btn btn-primary' type='button' title='Show more info'>Info</button></a>    
        </div>
        </td>
            </tr>";
        
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}


mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Big Library</title>
        <link rel="stylesheet" href="style/index.css">
        <?php require_once 'components/boot.php'?>

        <style>
            img {
width: 50px;
            }
 </style>
            </head>
    <body>
    <header>
        <?php include_once 'components/navigation.php';   ?>
    </header>
       <main class="container" >
            <table class='table table-striped bg-white '>
                <thead class="table-success">
                    <tr>
                        <th>Image </th>   
                        <th>Title</th>
                        <th>Media Type</th>
                        <th>Author Last Name </th>
                        <th>Author First Name </th>
                        <th>Publisher</th>
                        <th>Published on</th>
                        <th>Status</th>
                        <th>ISBN</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
            <div class='mt-5 mb-5 d-flex justify-content-center'>
                <a href= "create.php"><button class='btn btn-success'type="button" >Add New Products</button></a>
                
            </div>
        </main>
        <footer>
            <?php require_once 'components/footer.php' ?>
        </footer>
    </body>
</html>
