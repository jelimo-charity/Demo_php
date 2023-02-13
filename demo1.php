<html>
    <body>
        <form method='post'>
            Enter Age:
            <input type='number'name="age"> <br>
            <input type='submit'name='age'value='TEST'>
        </form>

        <?php

        if(isset($_POST['submit'])) {
            $age = $_POST['age'];
            if($age > 25){
                echo "<h1>ADULT </h1>";
            } else {
                echo'child';
            }
        }

        ?>
    </body>
</html>