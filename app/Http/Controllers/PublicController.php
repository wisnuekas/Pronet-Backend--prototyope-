<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Pemira;
use App\Voter;

class PublicController extends Controller
{
    //
    public function index()
    {
      // $users = DB::table('user')->get();
      // $users = DB::table('user')
      //       ->leftJoin('progdi', 'user.progdi', '=', 'progdi.id')
      //       ->get();
      $pemiras = Pemira::all();

      return view('public/index', ['pemiras'=>$pemiras]);
    }

    public function vote()
    {
      return view('public/vote');
    }

    public function details($id)
    {
      // $daftarPemira = 'Data calon' .$id;
      // $pemiras = array('Wisnu', 'Eka', 'Saputa');

      $pemira = Pemira::find($id);

      if (!$pemira) {
        abort(404);
      }
      return view('public/details', ['pemira'=>$pemira ]);
    }

    public function login()
    {
      if (Hash::check('secret', $hashedPassword))
      {
        // The passwords match...
      }
    }

    public function register(Request $request){
      $nim = Voter::where('nim','=',$request->nim)->get();

      if ($nim != $request->nim) {
        Voter::create([
          'nim' => $request->nim,
          'nama' => $request->nama,
          'progdi' => $request->progdi,
          'password' =>  bcrypt($request->password),
          'level' => '0'
        ]);
      }

      return redirect('/');
    }
}
