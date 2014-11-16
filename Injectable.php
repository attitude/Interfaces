<?php

namespace attitude\Interfaces;

interface Injectable
{
    public function __construct(array $injections = array());
}
