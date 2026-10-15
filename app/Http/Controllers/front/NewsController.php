<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
//اول طريقه لل middleware controller
class NewsController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['showstring', 'showstring2', 'showstring3', 'index', 'create', 'getindex']),
            // أو العكس: يطبق على دوال معينة بس
            // new Middleware('auth', only: ['store', 'update']),
        ];
    }
    // بنادي علي view صفحه html من ال contorller بروح اعمله route فيى ال Routes
    public function getindex()
    {
        // حالة لو ال array فاضيه دي تعمل معاها ال forelse
        $car =  [];
        // (object) ['color' => 'red', 'model' => 'BMW']; 
        // (object) ['color' => 'blue', 'model' => 'Audi']];
        $data2['Fname'] = 'ahmed';
        $data3['Mname'] = 'ali';
        $data4['Lname'] = 'Kmv';
        return view('welcome', $data2, compact('car'));
        // دلوقتي انا بباصي داتا من ال controller لل view وبصيت متغير ممكن برضه من ال route
        // return view('welcome')->with('data','New Laravel');
    }

    public function showstring()
    {
        return 'show string 1';
    }
    public function showstring2()
    {
        return 'show string 2';
    }
    public function showstring3()
    {
        return 'show string 3';
    }
    public function showstring4()
    {
        return 'show string 4';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return 'im method';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
