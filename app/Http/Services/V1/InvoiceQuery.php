<?php 

namespace App\Http\Services\V1;

use App\Http\Services\ApiFilter;

class InvoiceQuery extends ApiFilter{

    protected $safeParams = [
        'customerId' => ['eq', 'gt', 'lt'],
        'amount' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq',  'gt', 'lt'],
        'paidDate' => ['eq', 'gt', 'lt']
    ];
    protected $columnMap = [
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
        'customerId' => 'customer_id'
    ];
    protected $operatorMap =[
        'eq' => '=',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<=',
        'ne' => '!='
    ];
}