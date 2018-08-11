<?php
/**
 * A simple set of functions to help out our laravel projects
 *
 * @package  DiamondLaravelHelpers
 * @author  Joshua Diamond
 * @version 1.0
 */

use Illuminate\Support\Facades\Log;

if (!function_exists('debug')) {
    /**
     * Adds a rule to the debugger to check if we are in debug mode before
     * we log anything.
     *
     * @param string $message   The message you want to pass to the log debug
     * @param array $data   An array of data you want logged
     *
     * @return  void
     */
    function debug($message = '', $data = []) {
        // don't log anything if we aren't in debug
        if (!config('app.debug')) {
            return;
        }

        if (!empty($data)) {
            Log::debug($message, $data);
            return;
        }
        Log::debug($message);
    }
}

if (!function_exists('append_to_current_query')) {
    /**
     * Appends a query paramenter to the current url.
     *
     * @param  string $params   the query key
     *
     * @return string
     */
    function append_to_current_query(array $params = []) {
        $url = url()->current();

        $bits = [];

        foreach ($params as $key => $value) {
            $bits[] = urlencode($key) . '=' . urlencode($value);
        }

        if (!empty($bits)) {
            $url .= '?' . join('&', $bits);
        }

        return $url;
    }
}
