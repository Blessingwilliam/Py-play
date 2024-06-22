<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reg_number = $_POST['reg_number'];
    echo "Contact details for registration number $reg_number: <br>";
    echo "Phone: 1234567890 <br>";
    echo "Email: example@example.com <br>";
    echo "Address: 123 Example Street";
}
?>
chmod 755 filename.php
