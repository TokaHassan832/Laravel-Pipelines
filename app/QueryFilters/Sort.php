<?php

namespace App\QueryFilters;

use Closure;

class Sort extends Filter
{


    protected function applyFilter($builder)
    {
        return $builder->OrderBy('title',\request($this->filterName()));
    }

}
