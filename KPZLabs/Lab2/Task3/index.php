<?php

require_once 'Authenticator.php';

$auth1 = Authenticator::getInstance();
$auth2 = Authenticator::getInstance();

if ($auth1 === $auth2) {
    echo "Same instance\n";
} else {
    echo "Different instances\n";
}

if ($auth1->authenticate("admin", "1234")) {
    echo "Authentication successful\n";
} else {
    echo "Authentication failed\n";
}
