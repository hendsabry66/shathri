<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use DataTables;
use App\User;
use App\Status;
use App\DataTables\UsersDataTable;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDataTable $dataTable)
    {
        //return getAuthUsers();
        return $dataTable->render('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::pluck('name', 'id');
        $grands = User::where('parent_id',0)->pluck('name', 'id');
        return view('admin.users.create',compact('statuses','grands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'phone' => 'required|numeric|min:11',
            'image' => 'required',
            'birth_date' => 'required',
            'academic_qualifications' => 'required|max:255',
            'definition' => 'required',
            'gender' => 'required',
            'status_id'=>'required'
        ]);

        if($request->hasfile('image')) { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension(); // getting image extension
              $filename =time().'.'.$extension;
              $file->move(public_path('upload'), $filename);
        }

        if($request->status_id == 1 || $request->status_id == 2 ){
            $parent_id = 0;
        }else{
            $parent_id = $request->parent_id ;
        }
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->image = $filename;
        $user->birth_date = $request->birth_date;
        $user->academic_qualifications = $request->academic_qualifications;
        $user->definition = $request->definition;
        $user->gender = $request->gender;
        $user->activation = 1;
        $user->parent_id = $parent_id;
        $user->status_id = $request->status_id;
        $user->save();

        
        return Redirect::route('users.index')->with('message', __('admin.create_user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
         return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $statuses = Status::pluck('name', 'id');
        $grands = User::where('parent_id',0)->pluck('name', 'id');
        return view('admin.users.edit',compact('user','statuses','grands'));
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
        $user = User::find($id);
          $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phone' => 'required|numeric|min:11',
            'birth_date' => 'required',
            'academic_qualifications' => 'required|max:255',
            'definition' => 'required',
            'gender' => 'required',
            'status_id'=>'required'
        ]);

        if($request->hasfile('image')) { 
            if($user->image){
                unlink(public_path('upload/'.$user->image));
            }
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension(); // getting image extension
              $filename =time().'.'.$extension;
              $file->move(public_path('upload'), $filename);
        }else{
            $filename =$user->image;
        }
        
        
        if($request->status_id == 1 || $request->status_id == 2 ){
            $parent_id = 0;
        }else{
            $parent_id = $request->parent_id ;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->image = $filename;
        $user->birth_date = $request->birth_date;
        $user->academic_qualifications = $request->academic_qualifications;
        $user->definition = $request->definition;
        $user->gender = $request->gender;
        $user->activation = $request->activation;
        $user->parent_id = $parent_id;
        $user->status_id = $request->status_id;
        $user->save();

        return Redirect::route('users.index')->with('message', __('admin.edit_user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
            if($user->image){
                unlink(public_path('upload/'.$user->image));
            }
        $user->delete();
        return Redirect::route('users.index')->with('message', __('admin.delete_user'));

    }

    public function login(){

        return view('admin.login');

    }

    public function postLogin(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
  
        // attempt to do the login
        if (Auth::attempt(['email' => $request->input('email'),'password'  => $request->input('password')])) {
            return Redirect::to('admin/users');
        } else {     
            return Redirect::to('admin/login');

        }
    }
}
