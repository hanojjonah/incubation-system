<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = $ku_student = $id_number = $date_incubated = $innovationStage = $tel = $email = $fileName = $partner = $IP_registered = $description = $innovation_category = "";


$errors = array(
    'name' => '', 'ku_student' => '', 'id_number' => '', 'date_incubated' => '',
    'innovationStage' => '', 'tel' => '', 'email' => '', 'photo' => '', 'partner' => '', 'IP_registered' => '',
    'description' => '', 'innovation_category' => '', 'submitFail'=>''
);

// check if the form has been submitted
if($_SERVER['REQUEST_METHOD'] == "POST") {


    // validation to check if field are filled
    if (empty($_POST['name'])) {
        $errors['name'] = "This field is required";
    } else {
        $name = test_input($_POST['name']);
        // second validation
        if (!preg_match('/^[a-zA-Z]{2,15} [a-zA-Z]{2,15}$/', $name)) {
            $errors['name'] = "Enter a Valid Name";
        }
    }
    // validation ID number
    if (empty($_POST['id_number'])) {
        $errors['id_number'] = "This field is required";
    } else {
        $id_number = test_input($_POST['id_number']);
        // second validation
        if (!preg_match('/^[\d]{8}$/', $id_number)) {
            $errors['id_number'] = "ID should be a number with 8 digits";
        }
    }
    // validate email
    if (empty($_POST['email'])) {
        $errors['email'] = "This field is required";
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "please enter a valid email address";
        }
    }
    // validate phone number
    if (empty($_POST['tel'])) {
        $errors['tel'] = "This field is required";
    } else {
        $tel = test_input($_POST['tel']);
        // second validation
        if (!preg_match('/^0(1|7)[\d]{8}$/', $tel)) {
            $errors['tel'] = "please enter a valid phone number";
        }
    }
    // validation of KU student
    if (empty($_POST['ku_student'])) {
        $errors['ku_student'] = "This field is required";
    } else {
        $ku_student = test_input($_POST['ku_student']) ;
    }
    // validate the IP registered
    if (empty($_POST['IP_registered'])) {
        $errors['IP_registered'] = "This field is required";
    } else {
        $IP_registered = test_input($_POST['IP_registered']);
    }

    // validate date Incubated
    if (empty($_POST['date_incubated'])) {
        $errors['date_incubated'] = "This field is required";
    } else {
        $date_incubated = test_input($_POST['date_incubated']);
    }

    // validate the passport
    if (!empty($_FILES['photo'])) {

        $img_name = $_FILES['photo']['name'];
        $img_type = $_FILES['photo']['type'];
        $img_size = $_FILES['photo']['size'];
        $img_tmp_name = $_FILES['photo']['tmp_name'];
        $error = $_FILES['photo']['error'];

        if ($error === 0) {
            if ($img_size > 1000000) {
                $errors['photo'] = "Sorry, your file is too large.";
            } else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_ex = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_ex)) {
                    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                    $img_upload_path = 'uploads/' . $new_img_name;
                    move_uploaded_file($img_tmp_name, $img_upload_path);

                    //insert into Database

                } else {
                    $errors['photo'] = "You can't upload files of this type";
                }
            }
        } else {
            $errors['photo'] = "unknown error occurred!";
        }
    }

    // validate the key partner
    if (!empty($_POST['partner'])) {
        $partner = test_input($_POST['partner']);
        if (!is_string($partner)) {
            $errors['partner'] = "Enter valid names, comma separated";
        } else {
            if (str_word_count($partner) > 20) {
                $errors['partner'] = "Thats a very Large value";
            }
        }
    }

    // validate stage of innovation
    if (isset($_POST['innovationStage']) && !empty($_POST['innovationStage'])) {
        $innovationStage = test_input($_POST['innovationStage']);
    } else {
        $errors['innovationStage'] = "This field is required";
    }
    // category of Innovation
    if (isset($_POST['innovation_category']) && !empty($_POST['innovation_category'])) {
        $innovation_category = test_input($_POST['innovation_category']);
    } else {
        $errors['innovation_category'] = "This field is required";
    }

    // validate the description
    if (empty($_POST['description'])) {
        $errors['description'] = "This field is required";
    } else {
        $description = test_input($_POST['description']);
        // check if it is string
        if (!is_string($description)) {
            $errors['description'] = "Description should be a string only";
        } else {
            $maxLength = 250;
            if (str_word_count($description) > $maxLength) {
                $errors['description'] = "Description should not exceed 250 words";
            }
        }
    }

    // check if there is errors in the form
    if (array_filter($errors)) {
        // echo errors in the form
    } else {

        include('database/db_connect.php');

        $query = "SELECT * FROM incubate_registrations WHERE email = '$email' && nationalid = '$id_number'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $errors['submitFail'] = "Sorry a record with the same email and national id exists.";
        } else {
            $sql = "INSERT INTO incubate_registrations(name, nationalid, email, phonenumber, kuStudent, registeredIP, incubationdate, photo, partner,innovationCategory, innovationStage, description)
          VALUES('$name', '$id_number', '$email', '$tel', '$ku_student', '$IP_registered', '$date_incubated', '$new_img_name', '$partner', '$innovation_category', '$innovationStage', '$description')";

            $result1 = mysqli_query($conn, $sql);

            if ($result1) {

                //Load Composer's autoloader
                require 'vendor/autoload.php';

                // Create instance of phpmailer
                $mail = new PHPMailer();

                try {
                    
                    $mail->isSMTP();
                    $mail->Host = "smtp.gmail.com";
                    $mail->SMTPAuth = true;
                    $mail->Username = 'hanojjonah7066@gmail.com';
                    $mail->Password = "jaomfwxyxhqtrpsm";
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port = 465;

                    // Recipients
                    $mail->setFrom("hanojjonah7066@gmail.com", "Mailer");
                    $mail->addAddress('hanojjonah7066@gmail.com', 'Joe user');

                    // content
                    $mail->isHTML(true);
                    $mail->Subject = "New Registration";
                    $mail->Body = $name. " has registered. Please confirm the registration.";

                    $mail->send();
                    echo "message has been sent";
                }catch (Exception $e){
                    echo "{$mail->ErrorInfo}";
                }
                // success
                 header('Location: registration_form.php');
            } else {
                echo "Error: "  . $sql . "<br>" . mysqli_error($conn);
            }
        }

         mysqli_close($conn);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
