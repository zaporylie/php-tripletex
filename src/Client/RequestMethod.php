<?php

namespace zaporylie\Tripletex\Client;

use Eloquent\Enumeration\AbstractEnumeration;

class RequestMethod extends AbstractEnumeration
{
    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const DELETE = 'DELETE';
}
