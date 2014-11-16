<?php

namespace attitude\Interfaces;

interface Responder
{
    /**
     * Returns formated response
     *
     * @param mixed $result Data to respond
     * @return string Stream to send over HTTP
     *
     */
    public function respond(\attitude\Exception\Exception $result);

    /**
     * Set the data provider to extract related data needed to build full view
     *
     *
     * @param ServiceProviderInterface $provider Data provider
     * @return string Stream of response
     *
     */
    public function setProvider(ServiceProviderInterface $provider);
}
