<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Pagination;

class ClientController extends Controller {

	//
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index(Request $request)
	{
		$clients = \App\Client::where('status', '=', '1')->paginate(3);
		$clients->setPath('clients/accpeted');
		$requestClients = \App\Client::where('status', '=', '2')->paginate(3);
		$requestClients->setPath('clients/requested');
		$decliendClients = \App\Client::where('status', '=', '0')->paginate(3);
		$decliendClients->setPath('clients/declined');
		return view('clients.app', compact('clients', 'requestClients', 'declinedCLients'));
	}
	public function requested(Request $request)
	{
		$pageVal = 5;
		if($request->has('count'))
			$pageVal = $request->get('count');
		if($request->has('filter') && $request->has('filterText'))
		{
			$filter = $request->get('filter');
			$filterText = $request->get('filterText');
			if($filter == "state")
			{
				$requestClients = \App\Client::where('status', '=', '2')->where('state','=',$filterText)->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$requestClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.requested', compact('requestClients', 'filters'));
			}
			else if($filter == "city")
			{
				$requestClients = \App\Client::where('status', '=', '2')->where('city','=',$filterText)->paginate($pageVal);
				$requestClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				return view('clients.requested', compact('requestClients', 'filters'));
			}
			else if($filter == "gender")
			{
				$requestClients = \App\Client::where('status', '=', '2')->where('gender','like',"%$filterText%")->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$requestClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.requested', compact('requestClients', 'filters'));
			}
			else if($filter == "talentCategory")
			{
				$requestClients = \App\Client::where('status', '=', '2')->whereHas('talents', function($q) use($filterText){
					$q->where('category', 'like', "%$filterText%");
				})->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$requestClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.requested', compact('requestClients', 'filters'));
			}
			else if($filter == "specificTalent")
			{
				$requestClients = \App\Client::where('status', '=', '2')->whereHas('talents', function($q) use($filterText){
					$q->where('specific_talent', 'like', "%$filterText%");
				})->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$requestClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.requested', compact('requestClients', 'filters'));
			}
			else if($filter == "name")
			{
				$requestClients = \App\Client::where('status', '=', '2')->where("fname", 'like', "%$filterText%")->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$requestClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.requested', compact('requestClients', 'filters'));
			}
			else if($filter == "date")
			{
				$requestClients = \App\Client::where('status', '=', '2')->where("created_at", 'like', "%$filterText%")->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$requestClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.requested', compact('requestClients', 'filters'));
			}
		}
		else
		{
			$filters ="";
			$requestClients = \App\Client::where('status', '=', '2')->latest('updated_at')->paginate($pageVal);
			return view('clients.requested', compact('requestClients', 'filters'));
		}
	}

	public function accepted(Request $request)
	{
		$pageVal = 5;
		if($request->has('count'))
			$pageVal = $request->get('count');
		if($request->has('filter')  && $request->has('filterText'))
		{
			$filter = $request->get('filter');
			$filterText = $request->get('filterText');
			if($filter == "tag")
			{
				//
				$acceptedClients = \App\Client::where('status', '=', '1')->whereHas('tags', function($q) use($filterText){
					$q->where('name', 'like', "%$filterText%");
				})->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$acceptedClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.accepted', compact('acceptedClients', 'filters'));
			}
			else if($filter == "state")
			{
				$acceptedClients = \App\Client::where('status', '=', '1')->where('state','=',$filterText)->paginate($pageVal);
				
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$acceptedClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.accepted', compact('acceptedClients', 'filters'));
			}
			else if($filter == "city")
			{
				$acceptedClients = \App\Client::where('status', '=', '1')->where('city','=',$filterText)->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$acceptedClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.accepted', compact('acceptedClients', 'filters'));
			}
			else if($filter == "gender")
			{
				$acceptedClients = \App\Client::where('gender', '=', $filterText)->where('status', '=', '1')->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$acceptedClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.accepted', compact('acceptedClients', 'filters'));
			}
			else if($filter == "talentCategory")
			{
				$acceptedClients = \App\Client::where('status', '=', '1')->whereHas('talents', function($q) use($filterText){
					$q->where('category', 'like', "%$filterText%");
				})->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$acceptedClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.accepted', compact('acceptedClients', 'filters'));
			}
			else if($filter == "specificTalent")
			{
				$acceptedClients = \App\Client::where('status', '=', '1')->whereHas('talents', function($q) use($filterText){
					$q->where('specific_talent', 'like', "%$filterText%");
				})->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$acceptedClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.accepted', compact('acceptedClients', 'filters'));
			}
			else if($filter == "name")
			{
				$acceptedClients = \App\Client::where('status', '=', '1')->where('fname', 'like', "%$filterText%")->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$acceptedClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.accepted', compact('acceptedClients', 'filters'));
			}
			else if($filter == "date")
			{
				$acceptedClients = \App\Client::where('status', '=', '1')->where("created_at", 'like', "%$filterText%")->paginate($pageVal);
				$filters = array('filter'=>$filter, 'filterText'=>$filterText);
				$acceptedClients->appends(array('filter' => $filter, 'filterText'=>$filterText, 'count'=> $pageVal));
				return view('clients.accepted', compact('acceptedClients', 'filters'));
			}
		}
		else 
		{
			$filters ="";
			$acceptedClients = \App\Client::where('status', '=', '1')->latest('updated_at')->paginate($pageVal);
			return view('clients.accepted', compact('acceptedClients', 'filters'));
		}
	}
	public function acceptedClientInfo($id)
	{
		$client = \App\Client::findOrFail($id);
		$tags = \App\Tag::lists('name', 'id');
		$clientTag = array();
		$i = 0;
		foreach($client->tags as $tag)
			$clientTag[$i++] = $tag->id; 
		return view('clients.acceptedClientInfo', compact('client', 'tags', 'clientTag'));
	}
	public function requestedClientInfo($id)
	{
		$client = \App\Client::findOrFail($id);
		$tags = \App\Tag::lists('name', 'id');
		return view('clients.requestedClientInfo', compact('client', 'tags'));
	}
	
	public function acceptClient(Request $request)
	{
		$id = $request['id'];
		$status = $request['status'];
		$client = \App\Client::findOrFail($id);
		$client->status = $status;
		$client->tags()->attach($request->get('tags'));
		$client->save();
		\Session::flash('Success', $client->fname . " " . $client->lname . " is successfully accepted");
		return redirect ('clients/accepted');
	}
	
	public function acceptedClientUpdate($id, Request $request)
	{
		if($request->get('tags') == '')
		{
			$client = \App\Client::findOrFail($id);
			$client->tags()->sync([]);
			$client->save();
		}
		else
		{
			$client = \App\Client::findOrFail($id);
			$client->tags()->sync($request->get('tags'));
			$client->save();
		}
		return redirect('clients/accepted/' . $id);
	}
}
