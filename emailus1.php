<?

$name_error = $surname_error =  $email_error  = $phone_error = "";
$name = $surname = $email =$phone = $message = "";


if(isset($_POST['button'])) {




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["name"])) {
       $name_error = "Name is required";
    
    
    }
    else {
        $name = test_input($_POST['name']);
        //check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_error ="Only letters and white space allowed";
        
        }
    }
    
        if(empty($_POST["surname"])) {
           $surname_error = "surname is required";
        
        
        }
        else {
        $surname = test_input($_POST['surname']);
        //check if surname only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z ]*$/", $surname)) {
            $surname_error ="Only letters and white space allowed";
        
        }
    }
        
            if(empty($_POST["email"])) {
               $email_error = "email is required";
            
            
            }
            else {
            $email = test_input($_POST['email']);
            //check if name only contains letters and whitespace
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_error ="Only letters and white space allowed";
            
            }
        }
            if (empty($_POST["phone"])) {
                $phone_error = "phone is required";
              } else {
                $phone= test_input($_POST["phone"]);
                if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
                    $phone_error = " invalid phone number";
                }
              }

              if (empty($_POST('message'))) {

                $message = "";

              } else {
                  $message = test_input($_POST["message"]);
              }
            }

              function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              } 
            }

              ?>
