<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'BookController@index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'BookController@create';

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'BookController@store';
    }

    public function show(string $id)
    {
        return "BookController@show, id: {$id}";
    }

    public function edit(string $id)
    {
        return "BookController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "BookController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return "BookController@destroy, id: {$id}";
    }
}
