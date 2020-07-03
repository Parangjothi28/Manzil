<?php

$email_from = "sankarshan.guru300@gmail.com"
$email_to = $_POST['data_5']
mail($email_to, 'Hotel html mail 1', ' this message is auto generated', 'from:sankarshan.guru300@gmail.com');

$email_to = $_POST['email']
mail($email_to, 'Hotel html mail 2', ' this message is auto generated', 'from:sankarshan.guru300@gmail.com');
?>