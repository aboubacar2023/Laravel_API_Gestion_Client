<?php 

namespace App\Http\Services;

use Illuminate\Http\Request;

class ApiFilter{

    protected $safeParams = [];
    protected $columnMap = [];
    protected $operatorMap =[];
    public function transform(Request $request){
        $finalQuery = [];
        foreach ($this->safeParams as $param => $operators) {
            $query = $request->query($param);
            if(!isset($query)){
                continue;
            }
            $colomn = $this->columnMap[$param] ?? $param;

            foreach ($operators as $operator){
                if(isset($query[$operator])){
                    $finalQuery[] = [$colomn, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $finalQuery;
    }
}