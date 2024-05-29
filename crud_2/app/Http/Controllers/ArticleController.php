<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function ajouter_article(){
        
        return view('mes_articles.ajouter');
    }

    public function article_traitement(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
             'image' => 'required', 
            'nom' => 'required',
            'desc' => 'required',
            'date_creation' => 'required',
             'a_la_une' => 'required',
        ]);
    
        
    
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('images', 'public');
            
        // }
    
    
        
    
        // Créer un nouvel article avec les données du formulaire
        $article = new Article();
        $article->image = $request-> image;// Attribuez le chemin de l'image à la propriété 'image'
        $article->nom = $request->nom;
        $article->desc = $request->desc;
        $article->date_creation = $request->date_creation;
        $article->a_la_une = $request->a_la_une;
        $article->save();
        return redirect('/Ajouter')->with('status', 'L\'article a bien été ajouté avec succès');

    } public function liste_article(){
        $articles= Article ::All();
       return view('mes_articles.liste',compact('articles'));
    }

    public function update_article($id){
        $articles = Article :: find($id);
        return view('mes_articles.update',compact('articles'));
    }
    
    public function update_traitement(Request $request, $id){
        //   Valider les données du formulaire
          $request->validate([
            'image' => 'required', 
             'nom' => 'required',
             'desc' => 'required',
             'date_creation' => 'required',
              'a_la_une' => 'required',
         ]);
    
        
        // // /  if ($request->hasFile('image')) {
        //      $imagePath = $request->file('image')->store('images', 'public');
        //      }
    
    
        //  Créer un nouvel article avec les données du formulaire
     $article =  Article::find($id);
         $article->image = $request-> image;// Attribuez le chemin de l'image à la propriété 'image'
         $article->nom = $request->nom;
         $article->desc = $request->desc;
         $article->date_creation = $request->date_creation;
         $article->a_la_une = $request->a_la_une;
         $article->update();
        
     return redirect('Affichage')->with('status', 'L\'article a bien été modifi avec succès');



        
        
    }

    public function delete_article($id){
    $article= Article :: find($id);
    $article->delete();
    return redirect('Affichage')->with('status', 'L\'article a bien été supprime avec succès');
    


}

public function detail_article(){
    return view('mes_articles.detail');
}

// partie commentaire
public function ajouter_commentaire(){
    $articles= Article ::All();
    return view('mes_comments.ajout',compact('articles')); 
    return view('mes_comments.ajout');
}

public function comments_traitement(Request $request){
    $request->validate([

        'contenu'=> 'required',
        'auteur'=>'required',
        'date_heure_creation'=>'required',
        'articles_id'=>'required',


    ]);

    $comment = new Comment();
    $comment->contenu= $request-> contenu;
    $comment->auteur= $request-> auteur;
    $comment->date_heure_creation= $request-> date_heure_creation;
    $comment->articles_id= $request-> articles_id;

    $comment->save();
    return redirect('Ajout_comments')->with('status', 'L\'article a bien été ajouter avec succes avec succès');
   



}





}
