<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    private $employeeManager;
    public function __construct(Employee $employee)
    {
        $this->employeeManager = $employee;
    }
    public function getEmployee(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'limit' => 'required|int',
                'page_no' => 'required|int',
            ],[
                'limit.required'=> 'limit is required',
                'page_no.required'=> 'page number is required',
            ]);
            if($validator->fails()){
                $error = $validator->errors()->first();
                return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
            }

            $employee =  $this->employeeManager->getEmployee($request->limit,$request->page_no);
            if(!isset($employee) && empty($employee)){
                return response()->json(['status' => false,'message' => "data not found"])->setStatusCode(400);
            }
            $_data['total'] = $employee->total();
            $_data['is_last'] = !$employee->hasMorePages();
            $_data['current_item_count'] = $employee->count();
            $_data['current_page'] = $employee->currentPage();
            $_data['last_page'] = $employee->lastPage();
            $_data['data'] = $employee->items();

            return response()->json(['status' => true,'message' => 'employee get success','data' => $_data])->setStatusCode(200);
        }catch (\Exception $exception){
            return response()->json(['status' => false,'message' => 'public.internal_server_error' ])->setStatusCode(500);
        }
    }
    public function addEmployee(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'position' => 'required',
                'office' => 'required',
                'age' => 'required|integer',
                'start_date' => 'required',
                'salary' => 'required',
            ]);
            if($validator->fails()){
                $error = $validator->errors()->first();
                return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
            }
            $name = $request->name;
            $position = $request->position;
            $office = $request->office;
            $age = $request->age;
            $start_date = $request->start_date;
            $salary = $request->salary;
            $result =  $this->employeeManager->addEmployee($name ,$position, $office, $age,$start_date,$salary);

            if ($result){
                return response()->json(['status' => true,'message' => 'employee add success'])->setStatusCode(200);
            }
            return response()->json(['status' => false,'message' => 'employee add failed'])->setStatusCode(400);
        }catch (\Exception $exception){
            return response()->json(['status' => false,'message' => 'public.internal_server_error' ])->setStatusCode(500);
        }
    }
    public function getSingleEmployee(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
            ]);
            if($validator->fails()){
                $error = $validator->errors()->first();
                return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
            }
            $employeeDetail =  $this->employeeManager->getSingleEmployee($request->id);

            if(isset($employeeDetail) && !empty($employeeDetail)){
                return response()->json(['status' => true,'message' => 'employee get success','data' => $employeeDetail])->setStatusCode(200);
            }
            return response()->json(['status' => false,'message' => 'employee get success'])->setStatusCode(400);
        }catch (\Exception $exception){
            return response()->json(['status' => false,'message' => 'public.internal_server_error' ])->setStatusCode(500);
        }
    }
    public function updateEmployee(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
                'name' => 'required',
                'position' => 'required',
                'office' => 'required',
                'age' => 'required|integer',
                'start_date' => 'required',
                'salary' => 'required',
            ]);
            if($validator->fails()){
                $error = $validator->errors()->first();
                return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
            }
            $id = $request->id;
            $name = $request->name;
            $position = $request->position;
            $office = $request->office;
            $age = $request->age;
            $start_date = $request->start_date;
            $salary = $request->salary;
            $result_status =  $this->employeeManager->updateEmployee($id, $name ,$position, $office, $age,$start_date,$salary);

            if ($result_status){
                return response()->json(['status' => true,'message' => 'employee Update success'])->setStatusCode(200);
            }
            return response()->json(['status' => false,'message' => 'employee Update failed'])->setStatusCode(400);
        }catch (\Exception $exception){
            return response()->json(['status' => false,'message' => 'internal_server_error' ])->setStatusCode(500);
        }
    }
    public function deleteEmployee(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
            ]);
            if($validator->fails()){
                $error = $validator->errors()->first();
                return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
            }
            $deleteStatus =  $this->employeeManager->deleteEmployee($request->id);
            if($deleteStatus){
                return response()->json(['status' => true,'message' => 'employee delete success'])->setStatusCode(200);
            }
            return response()->json(['status' => false,'message' => 'employee delete failed'])->setStatusCode(400);
        }catch (\Exception $exception){
            return response()->json(['status' => false,'message' => 'internal_server_error' ])->setStatusCode(500);
        }
    }
}
