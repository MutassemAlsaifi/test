<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries=Country::OrderBy('id' , 'desc')->paginate(5);
        return response()->view('news.country.index' , compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('news.country.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all() , [
            'name' =>'required|string',
            'code' =>'required|numeric'
        ]);
        if($validator->fails()){
return response()->json(
    [
        'icon'=>'error',
        'title'=>$validator->getMessageBag()->first(),
    ],400);

        }else{
            $countries=new Country();
            $countries->name=$request->name;
            $countries->code=$request->code;
            $isCreated =$countries->save();

            if($isCreated){
                return response()->json(
                    [
                        'icon'=>'success',
                        'title'=>'add successfully',
                    ],200);
            }else{
                return response()->json(
                    [
                        'icon'=>'error',
                        'title'=>'the add is fails',
                    ],400);
            }


        }
    }
    public function update(Request $request, $id)
    {
        $validator=Validator($request->all(),[
            'name'=>'required|string',
            'code'=>'required|numeric',
                    ]);
if($validator->fails()){
    return response()->json([
        'icon'=>'error',
        'title'=>$validator->getMessageBag()->first(),
    ],400);

}else{
    $countries=Country::findOrFail($id);
    $countries->name=$request->get('name');
    $countries->code=$request->get('code');
    $countries->save();
    return redirect()->route('countries.index');
}


    }




    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $countries=Country::findOrFail($id);
        return response()->view('news.country.show' , compact('countries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $countries=Country::findOrFail($id);
        return response()->view('news.country.edit' , compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     */



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $countries=Country::destroy($id);

    }
}
