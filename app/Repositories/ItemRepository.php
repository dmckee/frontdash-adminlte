<?php

namespace App\Repositories;

use App\Models\Item;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ItemRepository
 * @package App\Repositories
 * @version May 29, 2018, 8:13 pm UTC
 *
 * @method Item findWithoutFail($id, $columns = ['*'])
 * @method Item find($id, $columns = ['*'])
 * @method Item first($columns = ['*'])
*/
class ItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'item_type',
        'category_id',
        'start_date',
        'end_date',
        'use_pin',
        'pin',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Item::class;
    }
}
