<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemira;

class PemiraController extends Controller
{
    //
    public function login()
    {
      return view('panitia/login');
    }

    public function inputPemira()
    {
      return view('panitia/input');
    }

    public function store(Request $request)
    {
      $this->validasi($request);

      Pemira::create([
        'nama_pres' => $request->nama_pres,
        'nama_wapres' => $request->nama_wapres,
        'nim_pres' => $request->nim_pres,
        'nim_wapres' => $request->nim_wapres,
        'progdi_pres' => $request->progdi_pres,
        'progdi_wapres' => $request->progdi_wapres,
        'ipk_pres'=> $request->ipk_pres,
        'ipk_wapres' => $request->ipk_wapres,
        'visi'=> $request->visi,
        'misi' =>$request->misi
      ]);

      return redirect('panitia/daftar');
    }

    public function daftarPemira()
    {
      $pemiras = Pemira::all();
      return view('panitia/daftar', ['pemiras' => $pemiras]);
    }

    public function showPemira()
    {

    }

    public function deletePemira($id)
    {
      Pemira::destroy($id);

      return $this->daftarPemira();
    }

    public function editPemira($id)
    {
      $pemira = Pemira::find($id);

      return view('panitia/edit', ['pemira'=>$pemira]);
    }

    public function update(Request $request, $id)
    {
      $this->validasi($request);

      Pemira::find($id)->update([
        'nama_pres' => $request->nama_pres,
        'nama_wapres' => $request->nama_wapres,
        'nim_pres' => $request->nim_pres,
        'nim_wapres' => $request->nim_wapres,
        'progdi_pres' => $request->progdi_pres,
        'progdi_wapres' => $request->progdi_wapres,
        'ipk_pres'=> $request->ipk_pres,
        'ipk_wapres' => $request->ipk_wapres,
        'visi'=> $request->visi,
        'misi' =>$request->misi
      ]);

      return redirect('panitia/daftar');
    }

    public function validasi($input)
    {
      $this->validate($input, [
        'nama_pres' => 'required|min:5',
        'nama_wapres' => 'required|min:5',
        'nim_pres' => 'required|min:5',
        'nim_wapres' => 'required|min:5',
        'visi'=> 'required|min:5',
        'misi' =>'required|min:5'
      ]);
    }

    public function destroy($id)
    {
      Pemira::destroy([$id ]);

      return redirect('panitia/daftar');
    }
}
