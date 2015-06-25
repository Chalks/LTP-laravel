<?php namespace App\Http\Controllers;

use Auth;
use App\League;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Redirect;

class LeagueController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = Auth::user();
		$leagues = League::all();

		if($user){
			return view('leagues.registered.index', compact('leagues', 'user'));
		} else {
			return view('leagues.unregistered.index', compact('leagues', 'user'));
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function show(League $league)
	{
		$user = Auth::user();
		if($user && $league->owner->id == $user->id) {
			return view('leagues.owner.show', compact('league', 'user'));
		} else if($user) {
			return view('leagues.registered.show', compact('league', 'user'));
		} else {
			return view('leagues.unregistered.show', compact('league'));
		}
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
