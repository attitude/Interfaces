<?php

namespace attitude\Interfaces;

interface ClientRequestInterface
{
    // query(`WHERE ~ ?type=<type>` (one) type, `WHERE ~ ?id=<id>` (multiple) id(s) = ?, `SELECT` (multiple) attribute(s) = ?, value = ?)

    // Input attributes:
    public function setMethod($method = '');
    public function setQuery(array $query = array());
    public function setData($data = '');
    public function setContentType($contentType = null);
    
    // Expected output attributes:
    public function setAccept($accept = '');
    public function setAcceptLanguage($acceptLanguage = '');
}
