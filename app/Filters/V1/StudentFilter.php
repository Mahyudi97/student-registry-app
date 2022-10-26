<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class StudentFilter extends ApiFilter{
    protected $safeParms = [
        'id' => ['eq'],
        'name' => ['eq'],
        'email' => ['eq'],
    ];

    protected $columnMap = [
        // 'name' => 'Full_Name'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
    
}