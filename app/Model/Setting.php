<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use App\Core\Sortable;
use App\Lib\Util\Arr;

class Setting extends Model
{
    use Sortable;

    /**
     * Indicates the default sort for Sortable trait
     * @var array
     */
    private $defaultSort = ['id', 'desc'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['key', 'value', 'description'];

    public function getAllList() {
        return $this->sortable()
                    ->paginate(Cache::get('setting')['recordPerPage']);
    }

    public function getKeyValueToStoreCache() {
        $collecton = $this->select('key', 'value')
                          ->get();

        return Arr::keyValue($collecton);
    }

    public function getIdsByType($type) {
         $collecton = $this->select('id')
                           ->where('type', $type)
                           ->get();

         return Arr::column($collecton, 'id');
    }
}
