<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use \Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Models\personalData;
use Carbon\Carbon;

class PersonalDataController extends Controller
{
    public function createData(Request $request)
    {
        $query = DB::table('personal_data')->insert([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone'),
            'dob'=>$request->input('dob'),
            'created_at' => Carbon::now()
        ]);   
    return redirect('/success');
    }

    public function getPersonalData(Request $request)
    {
        if ($request->ajax()) {
            $data = personalData::select([
                'firstname','lastname','address','phone','dob'
            ]);
            return Datatables::of($data)
                ->addIndexColumn()               
                ->make(true);
        }
       
    }
}
