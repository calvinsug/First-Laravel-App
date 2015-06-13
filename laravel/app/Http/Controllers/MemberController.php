<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Member;

use App\Http\Requests\MemberRequest;

class MemberController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(Member $member){

		$this->member = $member;
	}

	public function index()
	{
		//
		$members = $this->member->get();

		return view('member.index',compact('members'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		return view('member.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MemberRequest $request, Member $member)
	{
		//
		$data = $request->all();
		if ($request->hasFile('photo')) {
			if ($request->file('photo')->isValid())
			{
				$file = $request->file('photo');
				$destinationPath = public_path(). '/images/member/';			
				$fileName = str_random(6).'_'.$file->getClientOriginalName();
				//dd($filename);
			  	$file->move($destinationPath, $fileName);

			  	$data['photo'] = $fileName;
			}
		}
		
		$member->create($data);
	
		return redirect()->route('member.index',['success' => '1']);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Member $member)
	{
		//
		return view('member.show',compact('member')); 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Member $member)
	{
		//	
		return view('member.edit', compact('member'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Member $member, MemberRequest $request)
	{
		$data = $request->input();
		
		if ($request->hasFile('photo')) {
			if ($request->file('photo')->isValid())
			{
				$file = $request->file('photo');
				$destinationPath = public_path(). '/images/member/';			
				$fileName = str_random(6).'_'.$file->getClientOriginalName();
				//dd($filename);
			  	$file->move($destinationPath, $fileName);

			  	$data['photo'] = $fileName;
			  	
			}
		}
		$member->fill($data)->save();
		return redirect()->route('member.index',['success' => '1']);
		//return redirect('member');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Member $member)
	{
		//dd($member);
		$member->delete();
		return redirect()->route('member.index',['success' => '1']);
		//return redirect('member');
		//
	}

}
