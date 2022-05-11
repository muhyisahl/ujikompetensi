<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\perjalanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class perjalananController extends Controller
{
    public function index(){
        $data = DB::table('perjalanans')
        ->join('users', 'users.id', '=', 'perjalanans.id_user')
        ->select('users.email', 'perjalanans.tanggal', 'perjalanans.jam', 'perjalanans.lokasi', 'perjalanans.suhu')
        ->where('users.name', '=', auth()->user()->name)
        // ->get();
        ->paginate(5);
        return view('Layouts.pages',['data'=>$data]);
    }

    Public function input(){
        return view('Layouts.form');
    }

    public function simpanData(Request $request){
        $data=[
            "id_user"=>auth()->user()->id,
            // 'id_user'=>"1",
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu
        ];

        // dd($data);
        perjalanan::create($data);
        return redirect('/page');
    }

    Public function urutkanPerjalanan(Request $request){
        $data = Perjalanan::all()->where('id_user', '=', auth()->user()->id);
        if ($request->input('tanggalDesc') == "Desc") {

            $sorted = perjalanan::where('id_user', auth()->user()->id)
                    ->orderByDesc('tanggal')
                    ->paginate(5)
                    ->withQueryString();

            return view('Layouts.pages', ['data' => $sorted]);
        } elseif ($request->input('tanggalAsc') == "Asc") {

            $sorted = perjalanan::where('id_user', auth()->user()->id)
                    ->orderBy('tanggal')
                    ->paginate(5)
                    ->withQueryString();

            return view('Layouts.pages', ['data' => $sorted]);
        } elseif ($request->input('jamDesc') == "Desc") {

            $sorted = perjalanan::where('id_user', auth()->user()->id)
                    ->orderByDesc('jam')
                    ->paginate(5)
                    ->withQueryString();

            return view('Layouts.pages', ['data' => $sorted]);
        } elseif ($request->input('jamAsc') == "Asc") {

            $sorted = perjalanan::where('id_user', auth()->user()->id)
                    ->orderBy('jam')
                    ->paginate(5)
                    ->withQueryString();

            return view('Layouts.pages', ['data' => $sorted]);
        } elseif ($request->input('suhuDesc') == "Desc") {

            $sorted = perjalanan::where('id_user', auth()->user()->id)
                    ->orderByDesc('suhu')
                    ->paginate(5)
                    ->withQueryString();

            return view('Layouts.pages', ['data' => $sorted]);
        } elseif ($request->input('suhuAsc') == "Asc") {

            $sorted = perjalanan::where('id_user', auth()->user()->id)
                    ->orderBy('suhu')
                    ->paginate(5)
                    ->withQueryString();

            return view('Layouts.pages', ['data' => $sorted]);
        }
    }

    public function cariPerjalanan(Request $request){
        if(!empty($request->input('lokasi'))&& empty($request->input('suhu'))&& empty($request->input('tanggal'))&& empty($request->input('jam'))){
            $cari=$request->lokasi;
            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
                ->Where(function ($query) use($cari) {
                    $query->where('users.name', auth()->user()->name)
                        ->Where('perjalanans.lokasi', 'LIKE', '%'.$cari.'%');
                })
                // ->get(['users.name', 'perjalanans.*']);
                ->paginate(5)
                ->withQueryString();
                if ($data) {
                    return view('layouts.pages',['data'=>$data])->with('alert','data di temukan');
                }else{
                    abort(404);
                }
        }elseif(empty($request->input('lokasi'))&& !empty($request->input('suhu'))&& empty($request->input('tanggal'))&& empty($request->input('jam'))){
            $cari=$request->suhu;
            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
                ->Where(function ($query) use($cari) {
                    $query->where('users.name', auth()->user()->name)
                        ->Where('perjalanans.suhu', 'LIKE', '%'.$cari.'%');
                })
                // ->get(['users.name', 'perjalanans.*']);
                ->paginate(5)
                ->withQueryString();
                if ($data) {
                    return view('layouts.pages',['data'=>$data])->with('alert','data di temukan');
                }else{
                    abort(404);
                }
        }elseif(empty($request->input('lokasi'))&& empty($request->input('suhu'))&& !empty($request->input('tanggal'))&& empty($request->input('jam'))){
            $cari=$request->tanggal;
            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
                ->Where(function ($query) use($cari) {
                    $query->where('users.name', auth()->user()->name)
                        ->Where('perjalanans.tanggal', 'LIKE', '%'.$cari.'%');
                })
                // ->get(['users.name', 'perjalanans.*']);
                ->paginate(5)
                ->withQueryString();
                if ($data) {
                    return view('layouts.pages',['data'=>$data])->with('alert','data di temukan');
                }else{
                    abort(404);
                }
        }elseif(empty($request->input('lokasi'))&& empty($request->input('suhu'))&& empty($request->input('tanggal'))&& !empty($request->input('jam'))){
            $cari=$request->jam;
            $data = User::join('perjalanans', 'perjalanans.id_user', '=', 'users.id')
                ->Where(function ($query) use($cari) {
                    $query->where('users.name', auth()->user()->name)
                        ->Where('perjalanans.jam', 'LIKE', '%'.$cari.'%');
                })
                // ->get(['users.name', 'perjalanans.*']);
                ->paginate(5)
                ->withQueryString();
                if ($data) {
                    return view('layouts.pages',['data'=>$data])->with('alert','data di temukan');
                }else{
                    return redirect('/dashboard')->with('message', 'Data Tidak Ditemukan!!!');
                }
        }else{
            $data = DB::table('perjalanans')
            ->join('users', 'users.id', '=', 'perjalanans.id_user')
            ->select('users.email', 'perjalanans.tanggal', 'perjalanans.jam', 'perjalanans.lokasi', 'perjalanans.suhu')
            ->where('users.name', '=', auth()->user()->name)
            ->get();
            return view('layouts.pages', ['data'=>$data]);
        }
    }

}
