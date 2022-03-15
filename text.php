    <form method="POST">

        NAME  <input  type="text" name="n" required /> <br/>
        YOUR SPECIALITY (PATIENT,HOSPITAL,...)  <input type="text" name="n1" required /> <br/>
        PHONE NUMBER  <input  type="text" name="n2" required /> <br/>
        GROUP  <input  type="text" name="n3" required /> <br/>
        GOVERNMENT  <input type="text" name="n4" required /> <br/>
        <button  type="submit" name="B">Back</button>
        <button  type="submit" name="submit">Sign up</button>


    </form>

    <?php

    $dsn = 'mysql:host=localhost; dbname=blood_reg';
    $username = 'root';
    $password = '';

    $db = new PDO($dsn, $username, $password);

    if ($db) {
        if (isset($_POST['submit'])) {

            $con = $db->prepare("INSERT INTO donors(NAME, SPECIALITY, PHONE, GROUB, GOVERNMENT) VALUES(:na, :sp, :ph, :gr , :go)");
            $con->bindParam("na", $_POST['n']);
            $con->bindParam("sp", $_POST['n1']);
            $con->bindParam("ph", $_POST['n2']);
            $con->bindParam("gr", $_POST['n3']);
            $con->bindParam("go", $_POST['n4']);
            $con->execute();

           echo "Successfully Submit";
    }
        } 
     else {
           echo "  faild please back";
    }
    ?>
</main>



