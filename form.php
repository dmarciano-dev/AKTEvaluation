<?php
// defines
define("DB_HOST", "db156.pair.com");
define("DB_USER", "virgo");
define("DB_PASS", "");
define("DB_NAME", "");

// perform post processing if all form fields have data
if (isset($_POST['first_name'], $_POST['last_name'], $_POST['phone'])) {
    include 'class.validation.php';
    $validate = new atk\Phone($_POST['phone']);

    $status = false;

    // bail if we don't have a valid number
    if (empty($validate->getPhone())) {
        $message = 'Fail';
    } else {
        $message = 'Success';
        $status = true;

        // we have a valid phone number, write out to db
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

        // store phone with country code stripped for indexing purposes
        // also we only support domestic county code currently, so its value is implicit
        $phone = $validate->getPhone();

        $statement = $db->prepare("INSERT INTO contact(first_name, last_name, phone) VALUES (:firstName, :lastName, :phone)");
        $statement->bindParam(":firstName", $_POST['first_name']);
        $statement->bindParam(":lastName", $_POST['last_name']);
        $statement->bindParam(":phone", $phone);
        $statement->execute();

        //die($statement->debugDumpParams());
    }

    //die($message);

    // redirect to confirmation page
    header("Location: /confirm.php?success=" . $status);
}
