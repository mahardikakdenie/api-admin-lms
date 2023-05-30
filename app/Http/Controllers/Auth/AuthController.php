<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brryfrmnn\Transformers\Json;


class AuthController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function register(Request $request)
	{
		try {
			$user = new User();
			$user->name = $request->name;
			$user->email = $request->email;
			$user->password = Hash::make($request->password);
			$user->save();

			return Json::response($user);
		} catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
			return Json::exception('Error Model ' . $debug = env('APP_DEBUG', false) == true ? $e : '');
		} catch (\Illuminate\Database\QueryException $e) {
			return Json::exception('Error Query ' . $debug = env('APP_DEBUG', false) == true ? $e : '');
		} catch (\ErrorException $e) {
			return Json::exception('Error Exception ' . $debug = env('APP_DEBUG', false) == true ? e : '');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function login(Request $request)
	{
		try {
			$user = User::where('name', $request->email)
				->orWhere('email', $request->email)
				->first();

			if (!$user || !Hash::check($request->password, $user->password)) {
				return Json::exception("Password Salah");
			}

			$token = [
				'token' => $user->createToken('auth')->plainTextToken,
				"user" => $user,
			];

			return Json::response($token);
		} catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
			return Json::exception('Error Model ' . $debug = env('APP_DEBUG', false) == true ? $e : '');
		} catch (\Illuminate\Database\QueryException $e) {
			return Json::exception('Error Query ' . $debug = env('APP_DEBUG', false) == true ? $e : '');
		} catch (\ErrorException $e) {
			return Json::exception('Error Exception ' . $debug = env('APP_DEBUG', false) == true ? e : '');
		}
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
		//
	}
}
