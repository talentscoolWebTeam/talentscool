<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TagController extends Controller {

	//
	public function store(Request $request)
	{
		$tag = \App\Tag::where('name', '=', $request->get('name'))->first();
		
		if(!is_null($tag))
		{
			$ret = array('result'=>'failure', 'message'=>'The Tag ' . $request->get('name') . ' already exist');
			return \Response::json($ret);	
		}
		else
		{
			$tag = \App\Tag::create($request->all());
			$ret = array('result'=>'success', 'id' => $tag->id, 'message' => 'The Tag ' . $request->get('name') . ' is successfully added');
			return \Response::json($ret);
		}
	}
	public function delete(Request $request)
	{
		$tag = \App\Tag::where('id', '=', $request->get('name'))->first();
		if(!is_null($tag))
		{
			$tag->delete();
		}
		$ret = array('result'=>'success', 'message'=>'The Tag ' . $tag->name . ' is removed successfully');
		return \Response::json($ret);
	}

}
