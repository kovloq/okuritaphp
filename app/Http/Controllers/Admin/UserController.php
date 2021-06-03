<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user=User::paginate(10);
        return view("admin.user.index")->with(array("user"=>$user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        User::create(array(
            "email"=>$request->email,
            "name"=>$request->name
        ));
        return redirect("admin/user");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::find($id);
        $country=Country::all();
        return view("admin.user.edit")->with(array("user"=>$user,"country"=>$country));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(array(
            "name"=>"required|string|max:255",
            "email"=>"required|email",
            'country_id' => 'required|integer'
        ));
        $user=array(
            "name"=>$request->name,
            "email"=>$request->email,
            "is_newsletter"=>$request->is_newsletter,
            "gender"=>$request->gender,
            "country_id"=>$request->country_id
        );
        if($request->year || $request->month || $request->date){
            $year=($request->year)?$request->year:"0000";
            $month=($request->month)?$request->month:"01";
            $date=($request->date)?$request->date:"01";
            $user["birthdate"]=$year."-".$month."-".$date;
        }
        if($request->year && $request->month && $request->date){
            $user["birthdate"]=$request->year."-".$request->month."-".$request->date;
        }
        if(empty($request->year) && empty($request->month) && empty($request->date)){
            $user["birthdate"]=null;
        }

        User::find($id)->update($user);
        return redirect("admin/user")->with('success', 'Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::find($id)->delete();
        return redirect("admin/user");
    }
}
