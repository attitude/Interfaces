<?php

namespace attitude\Interfaces;

interface ServiceInterface
{
    public function serve();
    public function setRequest(ClientRequestInterface $object);
    public function setProvider(ServiceProviderInterface $service);
}
