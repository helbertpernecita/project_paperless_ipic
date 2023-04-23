<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->get();
        return view('users.index', compact('data'));
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
        //
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
        //
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
    public function destroy($id)
    {
        //
    }

    // public function datatable()
    // {
    //     $data = DB::table('users')->get();

    //     return view('users.index', compact('data'));
    // }

    // public function datatable()
    // {
    //     $data = User::all();
    //     return datatable::of($data)
    //         ->addColumn('action', function($data){
    //             $url = url('/profile'.$data->id);
    //             $url_edit = url('/profile'.$data->id.'/edit');

    //             $view = "<a href='".$url."' class='btn btn-sm btn-info'>View Profile</a>";
    //             $view = "<a href='".$url."' class='btn btn-sm btn-info'>Edit</a>";
    //             return "<div class='btn-group mx-1'>".$url." | ".$url_edit."</div>";
    //         })
    //         ->rawColumns(['action'])
    //         ->make(true);
    // }
}
