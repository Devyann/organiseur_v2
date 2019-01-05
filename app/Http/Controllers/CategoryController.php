<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
        {
            return response()->json(Category::all()->toArray());
        }

        public function store(Request $request)
        {
            $category = Category::create($request->only('name'));

            return response()->json([
                'status' => (bool) $category,
                'message'=> $category ? 'Category Crée' : 'Erreur durant la création de la catégorie'
            ]);
        }

        public function show(Category $category)
        {
            return response()->json($category);
        }

        public function tasks(Category $category)
        {
            return response()->json($category->tasks()->orderBy('order')->get());
        }

        public function update(Request $request, Category $category)
        {
            $status = $category->update($request->only('name'));

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Categorie Mise à jour!' : 'Erreur durant la mise à jour de la catégorie'      
            ]);
        }

        public function destroy(Category $category)
        {
            $status  = $category->delete();

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Categorie Effacée' : 'Erreur durant la suppression de la categorie'
            ]);
        }
}
