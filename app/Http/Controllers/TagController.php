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
			return redirect()->back()->with('AddError','The Tag ' . $request->get('name') . ' already exist');
		}
		else
		{
			$tag = \App\Tag::create($request->all());
			return redirect()->back()->with('AddSuccess','The Tag ' . $request->get('name') . ' is successfully added');;
		}
	}
	public function delete(Request $request)
	{
		$tag = \App\Tag::where('id', '=', $request->get('name'))->first();
		if(!is_null($tag))
		{
			$tag->delete();
		}
		return redirect()->back()->with('DeleteSuccess','The Tag ' . $tag->name . ' is removed successfully');
	}

}
