<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use PDF;
use Illuminate\Http\Request;

class HTMLPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $recipe = Recipe::all();
        $this->htmlToPdf();
        return view('recipes.htmlPdf', ['recipes'=>$recipe]);
    }

    /**
     * generate PDF file from blade view.
     *
     * @return \Illuminate\Http\Response
     */
    public function htmlToPdf()
    {
        // selecting PDF view
        $pdf = PDF::loadView('recipes.htmlPdf');

        // download pdf file
        return $pdf->download('pdfview.pdf');
    }
}
