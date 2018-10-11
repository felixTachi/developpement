<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest $request
     * @param *\App\Repositories\CategoryRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request, CategoryRepository $repository)
    {
        $repository->store($request->all ());

        return redirect ()->route ('home')->with ('ok', __ ('La catégorie a bien été enregistrée'));
    }
}
