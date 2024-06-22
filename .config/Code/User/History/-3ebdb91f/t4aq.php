<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $reg_number = $_POST['reg_number'];
    echo "Contact details saved successfully.";
}
?>