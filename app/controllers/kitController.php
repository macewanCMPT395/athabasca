<?php

class kitController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$kits = DB::table('kitType')->lists('kitType');
		return View::make('kitManage.create')->with('kits', $kits);
	}

	public function create2()
	{

		$assets = Input::get('assets');
		$kitType = Input::get('kitType');
		$kits = DB::table('kitType')->lists('kitType');
		return View::make('kitManage.create2')->with('kits', $kits)->with('kitInput',$kitType)->with('assets',$assets);
	}

	public function create2add()
	{
		if(Input::get('add')){
			//return "iwasmade";
			Input::flash();
			$kits = DB::table('kitType')->lists('kitType');
			return View::make('kitManage.create2')->withInput(Input::all())->with('kits', $kits); //->with('assets',$assets);
		}

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
