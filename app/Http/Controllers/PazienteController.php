<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Paziente as Paziente;
use Request;
use Redis;

class PazienteController extends Controller {

	// //
	// public function index()
	// {
	// 	$paziento = Paziente::all();

	// 	return view ('pazienti', compact('pazienti'));
	// }

	// public function nuovo()
	// {
	// 	return view ('test/nuovo');
	// }

	// public function store()
	// {
	// 	$input = Request::all();

	// 	$paziente = Paziente::create($input);
	// 	Redis::set('paziente', $paziente);
	// 	return redirect('test/nuovo');
	// }
}
