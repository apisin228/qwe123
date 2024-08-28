<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

}
session_start();
require_once '/contact/submit';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$add = $contact->query("INSERT INTO 'contact' ('name','email', 'subject', 'message')
VALUES ('$name', '$email','$subject', '$message')");
if ($add == true){
    echo "Информация занесена в базу данных";
}else{
    echo "Информация не занесена в базу данных";
}

?>
