<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
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
    public function show(ArticleModel $articleModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArticleModel $articleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArticleModel $articleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArticleModel $articleModel)
    {
        //
    }
}
