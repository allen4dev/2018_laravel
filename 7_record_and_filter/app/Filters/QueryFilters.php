<?php

namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

abstract class QueryFilters
{
  protected $request;
  protected $query;

  public function __construct(Request $request)
  {
    $this->request = $request;
  }

  public function apply(Builder $query)
  {
    $this->query = $query;
    
    foreach ($this->getFilters() as $filter => $value) {
      if (!method_exists($this, $filter)) {
        continue;
      }

      if (strlen($value)) {
        $this->$filter($value);
      } else {
        $this->$filter();
      }
    }

    return $this->query;
  }

  public function getFilters()
  {
    return $this->request->all();
  }
}
