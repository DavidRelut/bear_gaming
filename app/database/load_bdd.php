<!DOCTYPE html>
<html lang="en">

    <body>
        <?php
        
            function connection_mysql(){

                $user = 'root';
				$pass = '';

                try {
                    $bdd = new PDO('mysql:host=127.0.0.1;dbname=bear_gaming;charset=utf8', $user, $pass);
                    return $bdd;
                }
                catch (Exception $e){
                    print 'Erreur : ' . $e->getMessage() . "<br>";
                    die;
                }
            }
        
        ?>
    </body>
</html>