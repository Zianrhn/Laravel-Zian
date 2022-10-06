<?php

namespace App\Http\Controllers;

use App\activities_Model;
use Illuminate\Http\Request;

class activitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gso25a = activities_Model::all();
      return view('backend.activitiesend',['gso25a' => $gso25a]);
    }  

    public function activities()
    {
        $gso25a = activities_Model::latest()->paginate(3);
      return view('activities',['gso25a' => $gso25a]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tambahactivities');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Explanation' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048'
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        activities_Model::create($input);
    
        return redirect('/activitiesend');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(activities_Model $gso25a)
    {
        return view ('detailactivities', compact('gso25a'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(activities_Model $gso25a)
    {
        activities_Model::destroy($gso25a->id);
        return redirect('/activitiesend');
    }
}