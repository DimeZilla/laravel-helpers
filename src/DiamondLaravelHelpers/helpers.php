<?php
/**
 * A simple set of functions to help out our laravel projects
 *
 * @package  DiamondLaravelHelpers
 * @author  Joshua Diamond
 * @version 1.0
 */

use Illuminate\Support\Facades\Log;

if (!function_exists('debug_log')) {
    /**
     * A helper function to globalize logging so that we don't
     * have to keep remembering where the debug log is or
     * adding use Illuminate\Support\Facades\Log to everything.
     *
     * @param string $message   The message you want to pass to the log debug
     * @param array $data   An array of data you want logged
     *
     * @return  void
     */
    function debug_log($message = '', $data = []) {
        if (!empty($data)) {
            Log::debug($message, $data);
            return;
        }
        Log::debug($message);
    }
}
