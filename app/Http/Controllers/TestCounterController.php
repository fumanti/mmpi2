<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TestCounter as TestCounter;
use Request;
use Input;

class TestCounterController extends Controller {

	public function counter() {
		if(Request::ajax()) {
          	$data = Input::all();
          	$test_id = $data['test_id'];
          	$test_counter = TestCounter::where('test_id', $test_id)->first();
          	return $test_counter;
        }
	}
}