<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class TestController extends Controller{
    public function input(Request $request){
    	return view('input');
    }

    public function list(Request $request){
        $result = '';
    	if(Schema::hasTable('sinvien')){
            $result = DB::table('sinvien')->get();
        }
    	return view('list', ['data' => $result]);
    }

    public function home(Request $request){
        if(!Schema::hasTable('sinvien')){
            Schema::create('sinvien',function ($table){
                $table->increments('no');
                $table->string('fullname',100);
                $table->integer('age');
            }); 
        }
    	return view('homeStudent');
    }

    public function inputForm(Request $request){
        $input = $request->all();
        if(Schema::hasTable('sinvien')){
            $result = DB::table('sinvien')->where('fullname','=',$input['fullname'])->get();
            if(count($result) == 0){
                DB::table('sinvien')->insert([
                    'fullname' => $input['fullname'],
                    'age' => $input['age']
                ]);
            }
        }
        return view('input');
    }

    public function delete(Request $request, $id){
        DB::table('sinvien')->where('no','=',$id)->delete();
        return $this->list($request);
    }

    public function edit(Request $request, $id){
        $result = DB::table('sinvien')->where('no','=',$id)->get();
        return view('input', ['edit' => $result]);
    }

    public function update(Request $request, $id){
        $input = $request->all();
        if(Schema::hasTable('sinvien')){
            DB::table('sinvien')->where('no','=',$id)->update(
                array(
                    'fullname' => $input['fullname'],
                    'age' => $input['age']
                )
            );
        } 
        return redirect('student/input');
    }
}
