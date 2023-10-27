<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\CategorieRequest;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $articles= Article::with('category')->get();

        return view('template.index',['articles'=>Article::all()]);
    }
    public function message() {
        return view('template.message');
    }
    public function create(){


        return view('template.create',[
            // 'articles'=>new Article(),
            // 'options'=>Categorie::pluck('name','id',),

            // 'articles'=>Article::select('id','title')->get(),
            'categories'=>Category::select('id','name')->get()
        ]);
    }
    public function store(ArticleRequest $request){

        if($request->hasFile('image')){
            $file=$request->file('image');


                $filename=$file->hashName();
                $file->move('images/',$filename);

            // $extension=$file->extension();

        }
        //git commit -m "Le message à enter"  Pour stagé les modifications
        // git add Ou git add --all (pour tout ajouter) nom_de_fichier_ou_dossier est égale à git commit -a -m "Message"

        // git status pour voir l'état de des git

        // git log Pour lister les dernier commit qui on été fait
        //git log --oneline

        //git diff Pour voir la différence entre les fichiers

        // git checkout id Permet de voir les modifications survenues sur les fichiers
        // git checkout id Nom_du_fichier_ou_dossier_parent Permet non seulement de voir, mais aussi de revenire telle que le fichier avent les modifications survenues
        // git checkout id master Permet de revenir sur les dernière modifications après avoir utislisé git checkout id

        // git commit --amend Permet de sauvegerder les commit dans le dernier commit

<<<<<<< HEAD
        //git rebase -i HEAD~3 Pour combiner et modifier les 3 derniers commit en partant de HEAD (squash)
=======
        //git rebase -i HEAD~3 Pour combiner et modifier les 3 derniers commit en partant de HEAD
>>>>>>> master
        $article=Article::create([

            'title'=>$request->input('title'),
            'price'=>$request->input('price'),
            'city'=>$request->input('city'),
            'description'=>$request->input('description'),
            'image'=>$filename,
            'category_id'=> $request->input('catgory_id'),
            // 'vendu'=>$request->input('vendu'),
        ]);

        return redirect()->back()->with('success',"Votre article a bien été publié");

    }

    public function admin(){
        return view("template.admin");
    }
    public function addcategorie(CategorieRequest $request){
        // $artcle=Article::create($request->validated());
        $article=Category::create([
            'name'=>$request->input('name'),
        ]);
        return redirect()->route('article.admin')->with('success',"Votre catégorie a bien été ajouté");

    }

    public function listecategorie($categorie){

        return view('template.categories.categorie');

    }
}
