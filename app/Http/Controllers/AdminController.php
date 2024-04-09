<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\department;
use App\Models\designation;
use App\Models\User;

class AdminController extends Controller
{
    
    public function view_details(Request $request){
        $get_datas=User::select('users.name as userName','department.name as depName','designation.name as desName')
        ->join('department','department.id','=','users.department_id')
        ->join('designation','designation.id','=','users.designation_id')
        ->get();

         return view('view_data',compact('get_datas'));
    }

    public function search_keyup(Request $request){
        $search_input=request('searchTerm');
        //dd($search_input);

        $query = User::select('users.name as userName','department.name as depName','designation.name as desName')
        ->join('department','department.id','=','users.department_id')
        ->join('designation','designation.id','=','users.designation_id');

        if ($search_input) {
            $query->where('users.name', 'LIKE', '%' . $search_input . '%')
            ->orWhere('department.name', 'LIKE', '%' . $search_input . '%')
            ->orWhere('designation.name', 'LIKE', '%' . $search_input . '%');
        }

        $results = $query->get();
        return $results;

    }
}
