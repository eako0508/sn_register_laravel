<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Sn_table;
class SerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(){
		/*
		$table = Sn_table::orderBy('created_at', 'DESC')->take(30)->get()->reverse();
		return view('layouts.index', compact('table'));
		*/
		return view('layouts.index');
		/*
		$result = Sn_table::orderBy('created_at', 'DESC')->take(30)->get()->reverse();
		return view('layouts.index', compact('result');
		*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
		/*
		//dd(request()->all());
		Sn_table::create(request(['company','invoice','product','product_sn','hdd','hdd_sn']));

		return redirect('/');
		*/

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
    public function destroy($id)
    {
		//$id;
		/*
		Sn_table::where('id',$id)->delete();
		return redirect('/');
		*/
    }

	public function lookup(){
		$table = Sn_table::orderBy('created_at', 'DESC')->take(30)->get()->reverse();
		return Response::json($table);
	}
}



























