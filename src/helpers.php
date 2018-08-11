<?php
/**
 * A simple set of functions to help out our laravel projects
 *
 * @package  DiamondLaravelHelpers
 * @author  Joshua Diamond
 * @version 1.0
 */

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Collection;

if (!function_exists('debug')) {
    /**
     * Adds a rule to the debugger to check if we are in debug mode before
     * we log anything.
     *
     * @param string $message   The message you want to pass to the log debug
     * @param array $data   An array of data you want logged
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
     * Generates the current url with append query parameters.
     *
     * @see  https://laracasts.com/discuss/channels/laravel/add-query-string-to-current-url
     * @param  string $params   the query key
     * @return string
     */
    function append_to_current_query(array $params = []) {
        $request = request();
        $queries = $request->query();
        $new_queries = array_merge($queries, $params);
        return $request->fullUrlWithQuery($new_queries);
    }
}

if (!function_exists('is_collection')) {
    /**
     * Simply checks if a variable is a laravel collection
     * @param  mixed  $obj  any variable we want to test.
     * @return boolean
     */
    function is_collection($obj = null)
    {
        return $obj instanceof Collection;
    }
}

if(!function_exists('view_helpers')) {
    /**
     * Gets the ViewHelpers service provider
     * @return \DiamondLaravelHelpers\Handlers\View
     */
    function view_helpers() {
        return app('ViewHelpers');
    }
}
