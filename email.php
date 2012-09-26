<?php
    mail($_SERVER['TEST_EMAIL'], "test message from my php app sans from", "This is just a test message to see if the mail is working without a from");
?>