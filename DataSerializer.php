<?php

namespace attitude\Interfaces;

interface DataSerializer
{
    /**
     * Encodes data
     *
     * @param bool $assoc When `TRUE`, returned objects will be converted into associative arrays.
     * @param int  $depth User specified recursion depth.
     * @param int  $options Bitmask of options
     * @return string
     *
     */
    public function encode($v, array $args = array());

    /**
     * Decodes data
     *
     * @param bool $assoc When `TRUE`, returned objects will be converted into associative arrays.
     * @param int  $depth User specified recursion depth.
     * @param int  $options Bitmask of options
     * @return mixed
     *
     */
    public function decode($v, array $args = array());
}
