<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Log;

class Employee extends Model
{
    protected $table = "employees";
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getEmployee($limit,$page_no)
    {
        try{
            Paginator::currentPageResolver(function () use ($page_no) {
                return $page_no;
            });

            $result = $this->orderBy('created_at','DESC')
                            ->paginate($limit);
            if($result->count()){
                return $result;
            }
            return null;
        }catch (QueryException $ex){
            Log::info('EmployeeModel Error',['getEmployee'=> $ex->getMessage()]);
            return null;
        }
    }

    public function addEmployee($name ,$position, $office, $age,$start_date,$salary)
    {
        try{
            $this->name = $name;
            $this->position = $position;
            $this->office = $office;
            $this->age = $age;
            $this->start_date = $start_date;
            $this->salary = $salary;

            if ($this->save()){
                return true;
            }
            return false;
        }catch (QueryException $ex){
            Log::info('EmployeeModel Error',['getEmployee'=> $ex->getMessage()]);
            return true;
        }
    }

    public function getSingleEmployee($id)
    {

        try{
            $sqlQuery = $this->newQuery();
            $sqlQuery->where("id",$id);
            if ($sqlQuery->first()){
                return $sqlQuery->first();
            }
            return null;
        }catch (QueryException $ex){
            Log::info('EmployeeModel Error',['getSingleEmployee'=> $ex->getMessage()]);
            return null;
        }
    }

    public function updateEmployee($id,$name ,$position, $office, $age,$start_date,$salary)
    {
        try{
           $sqlQuery = $this->newQuery();

           $sqlQuery->where('id',$id);
           $sqlQuery->update(['name'=>$name,'position'=>$position,'office'=>$office,'age'=>$age,'start_date'=>$start_date,'salary'=>$salary]);
            if ($sqlQuery){
                return true;
            }
            return false;
        }catch (QueryException $ex){
            Log::info('EmployeeModel Error',['updateEmployee'=> $ex->getMessage()]);
            return false;
        }
    }

    public function deleteEmployee($id)
    {
        try{
            $sqlQuery = $this->newQuery();
            $sqlQuery->where("id",$id);
            if ($sqlQuery->delete()){
                return true;
            }
            return false;
        }catch (QueryException $ex){
            Log::info('EmployeeModel Error',['getSingleEmployee'=> $ex->getMessage()]);
            return false;
        }
    }

}
