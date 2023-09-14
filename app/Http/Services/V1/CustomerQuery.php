<?php 

namespace App\Http\Services\V1;

use App\Http\Services\ApiFilter;

class CustomerQuery extends ApiFilter{

    protected $safeParams = [
        'name' => ['eq'],
        'type' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
    ];
    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];
    protected $operatorMap =[
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
    ];
}