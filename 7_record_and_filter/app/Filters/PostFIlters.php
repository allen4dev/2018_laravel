<?php

namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PostFilters
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

  public function popular($order = 'desc')
  {
    return $this->query->orderBy('likes', $order);
  }

  public function category($value = 'react')
  {
    return $this->query->where('category', $value);
  }
}
