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

if (!function_exists('url_append_to_current')) {
    /**
     * Appends a query paramenter to the current url.
     *
     * @param  string $key   the query key
     * @param  string $value the query value
     *
     * @return string
     */
    function url_append_to_current(string $key, string $value) {
        return url()->current() . '?' . http_build_query([$key => $value]);
    }
}
