<?php

namespace zaporylie\Tripletex;

use zaporylie\Tripletex\Client\TripletexClient\TripletexClient;

class TripletexApp {

  /**
   * @var \zaporylie\Tripletex\Client\TripletexClient\TripletexClient
   */
  protected $client;

  /**
   * TripletexApp constructor.
   *
   * @param \zaporylie\Tripletex\Client\TripletexClient\TripletexClient $client
   */
  public function __construct(TripletexClient $client) {
    $this->client = $client;
  }
}
