<?php
namespace App\Core;

use \Illuminate\Support\Facades\Request;

trait Sortable
{
    /**
     * Listen to the user Request and sort accordingly
     *
     * @param  \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Query\Builder $query
     */
    public function scopeSortable($query)
    {
        $orderBy   = Request::get('o');
        $direction = Request::get('d');

        if ($orderBy && $direction) {
            return $query->orderBy($orderBy, $direction);
        } elseif ($this->defaultSort) {
            return $query->orderBy($this->defaultSort[0], $this->defaultSort[1]);
        }

        return $query;
    }
}