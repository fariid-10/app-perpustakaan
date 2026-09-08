<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return 'CategoryController@index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'CategoryController@create';

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'CategoryController@store';
    }


    public function edit(string $id)
    {
        return "CategoryController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "CategoryController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return "CategoryController@destroy, id: {$id}";
    }
}
