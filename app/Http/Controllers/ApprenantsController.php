<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Apprenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Image;

class ApprenantsController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $apprenants = DB::table("apprenants")->get();
       return view('pages.register')->with('apprenants',$apprenants);


   }

   
   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
  {
    
      request()->validate([
          'nom'=>'required',
          'prenom'=>'required',
          'formation'=>'required',
          'lieu'=>'required',
          'email_user'=>'required',
          'email_teacher'=>'required',
          'email_mdef'=>'required',
          'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
         
      ]);
      

      Image::make($request->file('avatar'))->save(public_path().'/images/'.$request->email_user.'.'.$request->file('avatar')->getClientOriginalExtension());
      

      $input['nom']= $request->nom;
      $input['prenom']=$request->prenom;
      $input['formation']=$request->formation;
      $input['lieu']=$request->lieu;
      $input['email_user']=$request->email_user;
      $input['email_teacher']=$request->email_teacher;
      $input['email_mdef']=$request->email_mdef;
      $input['avatar']=$request->email_user.'.'.$request->file('avatar')->getClientOriginalExtension();
      

        Apprenant::create($input);
        
       return redirect()->action('ApprenantsController@index');

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
   public function destroy($email)
   {
       
   
   }
}