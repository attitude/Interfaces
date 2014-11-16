<?php

namespace attitude\Interfaces;

interface Hookable
{
    /**
     * Injects requested value
     *
     * Pair function to `request()` method. Uses Closure return value for lazy
     * loading only when needed.
     *
     * @param string $hook Requested value hook name.
     * @param callable $v Value to be returned by Closure function.
     * @return mixed
     *
     */
    public static function inject($hook, callable $v);

    /**
     * Requests value to be injected
     *
     * Pair function to `request()` method. Uses Closure constrain to validate
     * injected value.
     *
     * @param string $hook Requested value hook name.
     * @param mixed $default Default value to be used if no injection is hooked.
     * @param callable $constrain Optional validation Closure function, throw exception on error.
     * @return mixed
     *
     */
    public static function request($hook, $default = null, $constrain = null);

    /**
     * Runs hooked actions during processing (on event)
     *
     * @param string $hook Event hook name.
     * @param callable $callback Action to run on event.
     * @param int $priority Sets order of importance, must be > 0 where 0 means runs as last.
     * @return void
     *
     */
    public static function on($hook, callable $callback, $priority = 10);

    // Private method cannot be defined within interfaces:
    // Suggestion to name and define private action triggering on event.
    //
    // private function trigger(/* string $hook, $arg1, $arg2, ...*/);
}
