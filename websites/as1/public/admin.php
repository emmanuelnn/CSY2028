<?php
$myTitle = 'Northampton News - Admin';
require '../header.php';

if (isset($_POST['submit'])) {
    
        //Check they entered the correct username/password
        if ($_POST['adminuser'] === 'admin@admin.com' && $_POST['adminpass'] === 'adminpassword') {

            $_SESSION['loggedin'] = true;

            echo '<h1>Admin login successful</h1>';

            echo '<p><a href="adminArticles.php">Manage article</a></p>';


            echo '<p><a href="admincategories.php">Manage Category</a></p>';

           
        }
         else {


            echo '<p>Admin Email and password is invalid</p>';

            echo '<a href="admin.php">Click here to try again</a>';
         }
    }

        
       
       else {
           
        ?>
        <form action="admin.php" method="POST">
         <label>email: </label> <input type="text" name="adminuser" />
         <label>Password: </label> <input type="password" name="adminpass" />
         <input type="submit" name="submit" value="Log In" />
        </form>
        <?php
        }
        ?>




<?php
require '../footer.php';
?>
