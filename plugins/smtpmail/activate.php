<?php


$setsmtpmail = array(
    "smtpmail_host"      => "mail.example.com",
    "smtpmail_auth"      => true,
    "smtpmail_user"      => "user@example.com",
    "smtpmail_password"  => base64_encode("123456H@43"),
    "smtpmail_secure"    => "ENCRYPTION_SMTPS",
    "smtpmail_port"      => 465,
    "smtpmail_format"    => "html",
);

foreach( $setsmtpmail as $key => $value ) {
    if( empty(get_option($key)) ) {
        add_option($key, $value, null, true);
    }
}

