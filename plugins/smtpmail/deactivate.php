<?php
$setsmtpmail = array(
    "smtpmail_host",
    "smtpmail_auth",
    "smtpmail_user",
    "smtpmail_password",
    "smtpmail_secure",
    "smtpmail_port",
    "smtpmail_format"
);

foreach( $setsmtpmail as $key ) {
    delete_option($key);
}