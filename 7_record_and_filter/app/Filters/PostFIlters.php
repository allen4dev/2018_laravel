<?php

namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PostFilters
{
  protected $request;

  public function __construct(Request $request)
  {
    $this->request = $request;
  }

  public function apply(Builder $query)
  {
    dd($this->request->all());
  }

  public function getFilters()
  {
    return $this->request;
  }

  public function popular()
  {
  }
}
