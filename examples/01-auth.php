<?php

include __DIR__ . '/../vendor/autoload.php';

try {
    $client = new \zaporylie\Tripletex\Client\TripletexClient();
    $app = new \zaporylie\Tripletex\Tripletex($client);

    // Access session API.
    $session = $app->session();

    // Create new session based on customer a employee tokens (authorize).
    var_dump($session->create('', ''));

    // Check who's logged in.
    var_dump($session->whoAmI());

    // Delete current session (deauthorize).
    var_dump($session->delete());
}
catch (Exception $exception) {
    var_dump($exception);
}
