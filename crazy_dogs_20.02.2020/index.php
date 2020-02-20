<?php
error_reporting(E_WARNING);
?>

<?php
    session_start();
    include './utils/user-managment.php';
    include './utils/redirect.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to my site</title>
        <link rel="stylesheet" href="style/index.css"/>
    </head>
    <body>
        <?php  
        
            if(isset($_POST['welcome_form_tokken']) AND $_POST['welcome_form_tokken'] == '1') {
            
                $username               = $_POST['user_name'];
                $isUsernameAvailable    = !empty($username);
               
               
                set_user_nickname($username);
                
                if($isUsernameAvailable) {
                                        
                    redirect("dashboard.php");
                }
                else {
                    echo "<div class='error'>Please enter username info</div>";
                }
            }
            
            
            if(isset($_GET['legal_page_rules']) && $_GET['legal_page_rules'] == 1) {
                
                if($_GET['legal-group'] == 'legal') {
                    header('Location: legal\page-rule.php');
                   

                }
              
                
                if($_GET['legal-group'] == 'advice') {
                    header('Location: legal\page-advice.php');

                }
              else {
                    echo "<div class='error'>Please select one option</div>";
                }
            }
            
         
        ?>
        
        <h2> Welcome</h2>
     <fieldset>
            
            <legend>Info</legend>
        
            <div class="main">
        
            <div class="section">
                   
        <form method="POST">
            <input type="text" name="user_name" placeholder="Nickname"/>
            <input type="hidden" name="welcome_form_tokken" value="1"/>
            <input type="submit" value="Submit">
        </form>
        </div>
                
                <br>
        
        
        <div class="section">
            <h4> Legal information </h4>
            
            <form method="GET">
                <label> Legal Advice</label>
                <input type="radio" value="advice" name="legal-group"/>
                <label> Legal rules</label>
                <input type="radio" value="legal" name="legal-group"/>
                <input type="hidden" name="legal_page_rules" value="1">
                <input type="submit" value="Read extra detail">
            </form>
        </div>
        
            </div> 
        
     </fieldset>
        
    </body>
</html>
