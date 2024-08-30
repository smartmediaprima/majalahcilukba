<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {
        return view('landing.index');
    }

    public function majalah() {
        return view('landing.magazines', [
            'title' => 'Daftar Majalah | MajalahCilukba',
            'magazines' => Magazine::filter(request(['search', 'cat']))->latest()->simplePaginate(12)->withQueryString()
        ]);
    }

    public function category(Category $cat) {
        return view('landing.magazines', [
            'title' => 'Daftar Majalah ' . $cat->name . ' | MajalahCilukba',
            'magazines' => $cat->magazines
        ]);
    }

    public function edisi(Magazine $magazine, Category $cat) {
        return view('landing.magazines', [
            'title' => $cat->name . ' Edisi ' . $magazine->edisi,
            'magazine' => $magazine
        ]);
    }
}
