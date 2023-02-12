<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Participant;
use RealRashid\SweetAlert\Facades\Alert;


class UsersController extends Controller{
      function postData(Request $req){
            try{
                  $member = new Participant;
                  $member->first_name = $req->get('fname');
                  $member->last_name = $req->get('lname');
                  $member->phone = $req->get('phone');
                  $member->save();
                  Alert::success('It worked!', 'The form was submitted');
                  return redirect('/add-participant');
            
            }catch(err){
                  Alert::error('It is not worked!', 'The form was not submitted');
                  return redirect('/add-participant');
            }
      }

      function getData(){
                  $members = DB::select('select * from participants');
                  return view('prizegame',['members'=>$members]);
            }


}

?>