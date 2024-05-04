<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;
use App\Models\Article;
use App\Models\Commentaire;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($article_id)
    {
        $article = Article::findOrFail($article_id);
        $commentaires = Commentaire::where('article_id', $article_id)->get();
        return view('front-office.pages.commentaire.index', compact('article', 'commentaires'));
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
     * @param  \App\Http\Requests\StoreCommentaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentaireRequest $request)
    {
        $validatedData = $request->validated();

        Commentaire::create($validatedData);

        return redirect()->back()->with('success', 'Commentaire ajouter avec succes.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentaireRequest  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentaireRequest $request, Commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        //
    }
}
