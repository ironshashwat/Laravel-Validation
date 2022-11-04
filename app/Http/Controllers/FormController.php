<?php
//FormController.php
namespace App\Http\Controllers;

use App\Http\Requests\FieldRequest;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(FieldRequest $request){
        // $validatedData = $request->validated();
        $validatedData = Validator::make($request->all(),[
            'item_name' => 'bail|required|max:255',
            'sku_no' => 'required|alpha_num',
            'price' => 'required|numeric',
        ])->validate();
        Form::create($validatedData);
        return response()->json('Form Submitted Successfully');
    }
}
