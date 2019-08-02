<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;

class ComplaintsController extends Controller
{
    //
    public function index(){

      //$user = auth()->user();

      //$complaints = $user->complaints()->orderBy('created_at','DESC')->paginate(config('app.paginate'));
      $complaints = $this->getAllComplaints();

      return view('complaints.index')->with(compact('complaints'));
    }

    public function create(){
      return view('complaints.create');
    }

    public function store(Request $request){

      // //Request is an object
      // $title = $request->get('title');
      // $body =  $request->get('body');
      //
      // //Store data into Database
      // $p = new Complaint();
      // //$variable->column_name = $value
      // $p->title = $title;
      // $p->body = $body;
      // $p->save();

      $user = auth()->user();

      $complaint = $user->complaints()->create($request->only('title','body'));

      return redirect()->route('complaints_index')->with(['alert' => 'New complaint has been submitted!']);
    }

    //Need to have argument to fetch/catch data that will be passed
    //Display edit form
    public function edit(Complaint $complaint){
      //dd($post);
      //return view('posts.edit')->with(['post' => $post]);

      return view('complaints.edit')->with(compact('complaint'));
    }

    //Same with create, but added argument of post because it is already exist
    //Update post
    public function update(Request $request, Complaint $complaint){

      //update is passed with array
      $complaint->update($request->only('title','body','status'));

      return redirect()->route('complaints_index')->with(['alert' => 'Complaint has been updated!']);
    }

    public function delete(Complaint $complaint){
      $complaint->delete();
      return redirect()->route('complaints_index');
    }

    public function getAllComplaints(){
      return Complaint::sortable()->paginate(config('app.paginate'));
    }
}
