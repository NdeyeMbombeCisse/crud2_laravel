<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('Affichage', [ArticleController::class,'liste_article']);
Route::get('Ajouter', [ArticleController::class,'ajouter_article']);
Route::post('ajouter/traitement' , [ArticleController::class, 'article_traitement']);
Route::get('update_article/{id}' , [ArticleController::class, 'update_article']);
Route::post('update_article/{id}' , [ArticleController::class, 'update_traitement']);
Route::get('delete_article/{id}' , [ArticleController::class, 'delete_article']);
Route::get('detail' , [ArticleController::class, 'detail_article']);
// partie comentaire
Route::get('Ajout_comments', [ArticleController::class,'ajouter_commentaire']);
Route::post('comments/traitement',[ArticleController::class,'comments_traitement']);
Route::get('list_comments', [ArticleController::class,'liste_commenatire']);
Route::get('delete_comments/{id}' , [ArticleController::class, 'delete_commenttaire']);
