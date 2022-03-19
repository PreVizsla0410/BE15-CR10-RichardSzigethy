<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $image = $data['img'];
        $title = $data['title'];
        $mediatype = $data['mediaType'];
        $description = $data['shortDescr'];
        $authorLastName = $data['authorLastName'];
        $authorFirstName = $data['authorFirstName'];
        $publisher = $data['publisherName'];
        $publisherAddress = $data['publisherAddress'];
        $publishedOn = $data['publishDate'];
        $status = $data['mediaStatus'];
        $isbn = $data['ISBN'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}


?>

<!DOCTYPE html>
<html>
    <head>
    <title>Big Library</title>
        <link rel="stylesheet" href="style/details.css">
        <?php require_once 'components/boot.php'?>
        
    </head>
    <header>
    <?php require_once 'components/navigation.php'?>
    </header>
    <body>

   <div class="container">
          <div class=" d-flex justify-content-center" >
          <img class="card-img-top"  src='<?php echo $image ?>' alt="<?php echo $title ?>">
          </div>
          <h2 >Insert your changes here:</h2>
            <form action="actions/a_update.php"  method="post">
            <table class='table  table-striped '>    
                    <tr>
                        <th>Title:</th>
                        <td><input class='form-control' type="text" name= "title" placeholder="Title" /></td>
                    </tr>
                    <tr>
                         <th>Media type:</th>
                        <td>
                        <select class='form-select'  name= "mediaType" aria-label="Default select example">
                                <option selected>Choose the type:</option>
                                    <option value="Book">Book</option>
                                    <option value="CD">CD</option>
                                    <option value="DVD">DVD</option>
                             </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Short Description:</th>
                        <td><input class='form-control' type="text" name="shortDescr" placeholder="Add description..." /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name:</th>
                        <td><input class='form-control' type="text" name="authorLastName" placeholder="Author Last Name" /></td>
                    </tr>
                    <tr>
                        <th>Author First Name:</th>
                        <td><input class='form-control' type="text" name="authorFirstName" placeholder="Author First name" /></td>
                    </tr>
                    <tr>
                        <th>Publisher:</th>
                        <td><input class='form-control' type="text" name="publisherName" placeholder="Publisher name" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name="publisherAddress" placeholder="Address" /></td>
                    </tr>
                    <tr>
                        <th>Published on:</th>
                        <td><input class='form-control' type="number" min="1900" max="2099" step="1" value="2022" name="publishDate" placeholder="date" /></td>
                    </tr>
                    <tr>
                        <th>Image:</th>
                        <td><input class='form-control' type="file" name="img"  placeholder="Image" /></td>
                    </tr> 
                    <tr>
                        <th>Media Status</th>
                        <td>
                        <select class='form-select'  name="mediaStatus" aria-label="Default select example" >      
                                  <option selected>Availablility</option>   
                                    <option value="Available">Available</option>
                                    <option value="Reserved">Not Available</option>       
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>ISBN Value</th>
                        <td><input class='form-control' type="text" name="ISBN" placeholder="ISBN Number" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "img" value= "<?php echo $data['img'] ?>" />
                        <td><button class="btn btn-primary" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-success" type="button"><i class="fas fa-reply"></i>  Back Home</button></a></td>
                    </tr>
                </table>
            </form>
            </div>
        <footer>
            <?php require_once 'components/footer.php' ?>
        </footer>
    </body>
</html>