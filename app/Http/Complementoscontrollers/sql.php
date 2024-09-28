<?php

namespace App\Http\Complementoscontrollers;

use Illuminate\Support\Facades\DB;

trait sql
{
    public function disableForeignKeys()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    }

    public function enableForeignKeys()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    public function truncateTable($table)
    {
        $this->disableForeignKeys();
        DB::table($table)->truncate();
        $this->enableForeignKeys();
    }
}
