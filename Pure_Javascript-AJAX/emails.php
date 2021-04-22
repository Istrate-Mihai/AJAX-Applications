<?php

$emails=array("first@gmail.com","second@gmail.com","third@gmail.com","fourth@gmail.com");
echo count( preg_grep("/^".$_GET['sent_Email']."$/",$emails) );






?>