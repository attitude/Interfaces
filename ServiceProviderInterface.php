<?php

namespace attitude\Interfaces;

use \StdClass;

interface ServiceProviderInterface
{
    // Retrieval
    public function options($onKey, $callback = null);
    public function attr(StdClass $data, $field, $nocache = false);
    public function get(StdClass $data);
    public function fetch(array $args);

    // Changes
    public function set(StdClass $data, $resolveColision = 'new');
    public function delete(StdClass $data);

    // State
    public function head(array $args);
}
