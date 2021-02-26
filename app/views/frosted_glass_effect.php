            <section>
            <!-- <div id="scratch"> -->
            <div class="card-information">
                <h1>INFORMATION PROFILE</h1><br><br>
                <?php
                    include("../database/load_bdd.php");
	                $bdd = connection_mysql(); 

                    #QUERY TO RETRIEVE PROFILE INFORMATION
                    $query = $bdd->prepare("SELECT pseudo, date_inscription FROM users WHERE email=:email");
                    $query->execute(['email'=>$email]);
                    $res = $query->fetch();
                    $pseudo = $res['pseudo'];
                    $date_inscription = $res['date_inscription'];

                    # PRINT PROFILE INFORMATION
                    echo "<b>Your pseudo is :</b><span> $pseudo</span>";
                    echo "<br><br><b> Your email is :</b><span> $email</span>";
                    echo "<br><br><b> Account created the :</b><span> $date_inscription</span><br><br><br><br>";

                    // PASSWORD ERROR MESSAGE
                    if (isset($_COOKIE['error_password_not_exist'])){
                        echo "<p style='color:red';><b> Old password entered is incorrect.</br></p>";

                    }
                    if(isset($_COOKIE['error_same_password'])){
                        echo "<p style='color:red';><b> The new password is the same as the old !</b></p>";
                    
                    }
                    if(isset($_COOKIE['update_password'])) {
                        echo "<p style='color:green';><b> Your password has been properly modified !</br></p>";
                    }

                    // PSEUDO ERROR MESSAGE

                    if (isset($_COOKIE['error_pseudo_not_exist'])){
                        echo "<p style='color:red';><b> Old pseudo entered is incorrect.</br></p>";

                    }
                    if(isset($_COOKIE['error_same_pseudo'])){
                        echo "<p style='color:red';><b> The new pseudo is the same as the old !</b></p>";
                    
                    }
                    if(isset($_COOKIE['update_pseudo'])) {
                        echo "<p style='color:green';><b> Your pseudo has been properly modified !</br></p>";
                    }
                ?>
            </div>
            <!-- </div> -->

             <!-- <div id="scratchy"> -->
            <div class="card-edit">
                <h1>EDIT PROFILE</h1><br><br>

                <form method="POST" action="../models/update_pseudo_post.php">
                    <label for="last_pseudo">Type your last pseudo : </label>
                    <input type="text" id="last_pseudo" name="last_pseudo"  required placeholder="Last Pseudo"/><br>

                    <label for="new_pseudo">New pseudo : </label>
                    <input type="text" id="new_pseudo" name="new_pseudo"  required placeholder="New Pseudo"/><br>
                    
                    <input type="submit" value="Update pseudo" />
                </form>    

                    <hr></hr><br>

                <form method="POST" action="../models/update_password_post.php">
                    <label for="last_password">Type your last password : </label>
                    <input type="password" id="last_password" name="last_password" required placeholder="Last password"/><br>

                    <label for="password">New password : </label>
                    <input type="password" id="new_password" name="new_password"  required placeholder="New Password"/><br>

                    <input type="submit" value="Update password" />          
                </form>
            </div>
            <!-- </div> -->

                <script 
                    src="https://code.jquery.com/jquery-2.2.4.min.js" 
                    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" 
                    crossorigin="anonymous">
                </script>
                <script src="../controllers/wScratchPad.min.js"></script>
                <script type="text/javascript">
                // document.styleSheets[0].insertRule('canvas { outline:none; border:none !important; }', 0);
                    $('#scratch').wScratchPad({
                        size        : 150,          // The size of the brush/scratch.
                        bg          : 'transparent',  // Background (image path or hex color).
                        fg          : '../public/images/frosted_glass.jpg',  // Foreground (image path or hex color).
                        // realtime    : true,       // Calculates percentage in realitime.
                        // scratchDown : null,       // Set scratchDown callback.
                        // scratchUp   : null,       // Set scratchUp callback.
                        // scratchMove : null,       // Set scratcMove callback.
                        cursor      : 'crosshair' // Set cursor.
                    });
                    $('#scratchy').wScratchPad({
                        size        : 150,          // The size of the brush/scratch.
                        bg          : 'transparent',  // Background (image path or hex color).
                        fg          : '../public/images/frosted_glass.jpg',  // Foreground (image path or hex color).
                        // realtime    : true,       // Calculates percentage in realitime.
                        // scratchDown : null,       // Set scratchDown callback.
                        // scratchUp   : null,       // Set scratchUp callback.
                        // scratchMove : null,       // Set scratcMove callback.
                        // cursor      : 'crosshair' // Set cursor.
                    });
                </script>
            <!-- </div> -->
            </section>
<!-- 
            // CARD INFORMATION
#scratch {
  position: relative;
  width: 30%;
  height: 17.5rem;
  // width: 100%;
  // display: flex;
  // height: 72vh;
  // justify-content: space-evenly;
  // align-items: center;
  // flex-direction: row;
}

canvas {
  outline: none;
  border: none;
}

.card-information {
  // position: absolute;
  height: 17.5rem;
}

span {
  color: $orange;
  letter-spacing: 1px;
}

// CARD EDIT
#scratchy {
  position: relative;
  width: 30%;
  height: 17.5rem;
  z-index: 10;
  :focus {
    z-index: 10;
  }
}
.card-edit {
  // position: absolute;
  height: 17.5rem;
  // :focus-visible {
  //   z-index: 11;
  // }
} -->
