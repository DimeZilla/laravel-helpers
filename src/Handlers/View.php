<?php

namespace DiamondLaravelHelpers\Handlers;

class View {
    public function labelizeDBField($field = '')
    {
        return ucwords( str_replace('_', ' ', $field) );
    }
}
