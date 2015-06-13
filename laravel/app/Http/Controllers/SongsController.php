<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Song;
use App\Http\Requests\CreateSongRequest;
use App\Http\Requests\UpdateSongRequest;

class SongsController extends Controller {


	public function __construct(Song $song){

		$this->song = $song;
	}
	//
	public function index(){


		//$songs = ['BoyGriend','Be Alright','Fall'];
		
		//call getSongs function 
		//$songs = $this->getSongs();

		
		//DB::table('songs')->insert(['title' => 'Fall' , 'created_at' => new DateTime,'updated_at' => new DateTime]);
		
		//DB::table('songs')->where('id','=',3)->delete();

		
		//$songs = DB::table('songs')->get();
		
		//use Eloquent
		//$songs = Song::get();

		$songs = $this->song->get();

		//dd($songs);		
		//$songs = ['id' => '1' , 'title' => 'fall'];

		//return view('songs.index')->with(compact('songs'));

		return view('songs.index',compact('songs'));

		//failed
		//return View::make('songs.index')->with(['songs' => $songs]);

	}

	/*public function show($id){

		//return $id;

		//$song = $this->getSongs()[$id];

		//$song = DB::table('songs')->find($id);

		//use Eloquent search by id
		$song = Song::find($id);
		
		return view('songs.show',compact('song'));
	}*/

	/* Tutorial 08
	public function show(Song $song){		
		return view('songs.show',compact('song'));
	}*/

	//show with slug
	public function show(Song $song){
		//use Eloquent search by slug
		//$song = $this->song->whereSlug($slug)->first();
		//print_r($song);die;
		return view('songs.show',compact('song'));
	}

	public function create(){

		return view('songs.create');
	}
//Request $request
	public function store(CreateSongRequest $request, Song $song){
		//dd($request->all());
		$song->create($request->all());

		return redirect()->route('songs.index');
	}

	public function edit(Song $song){
		//$song = $this->song->whereSlug($slug)->first();

		return view('songs.edit', compact('song'));
	}

	/*public function update($slug, Request $request){

		//dd(\Request::get('title'));
		$song = $this->song->whereSlug($slug)->first();
		//$song->fill(['title' => $request->get('title') , 'lyrics' => $request->get('lyrics')])->save();

		$song->fill($request->input())->save();

		//$song->title =  $request->get('title');
		//$song->save();

		return redirect('songs');

	}*/

	public function update(Song $song, UpdateSongRequest $request){

		$song->fill($request->input())->save();

		return redirect('songs');

	}

	public function destroy(Song $song){
		//dd($song);
		$song->delete();

		return redirect('songs');
	}

	private function getSongs(){

		$songs = ['BoyGriend','Be Alright','Fall'];

		return $songs;
	}

}
