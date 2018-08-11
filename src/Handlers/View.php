<?php

namespace DiamondLaravelHelpers\Handlers;

class View {
    /**
     * Takes a db field and turns it into something readable in a view
     * @param  string $field  A db field. i.e db_field_1
     * @return string    so db_field_1 would become "Db Field 1"
     */
    public function labelizeDBField($field = '')
    {
        return ucwords( str_replace('_', ' ', $field) );
    }
}
