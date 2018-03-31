<?php

namespace App\Filters;

class PostFilters extends QueryFilters
{
  public function popular($order = 'desc')
  {
    return $this->query->orderBy('likes', $order);
  }

  public function category($value = 'react')
  {
    return $this->query->where('category', $value);
  }
}
