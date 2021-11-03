<?php

namespace App\Http\Controllers;


use SVG\Nodes\Texts\SVGText;
use SVG\SVG;
use SVG\Nodes\Shapes\SVGRect;
use Illuminate\Http\Request;

class TextUploadController extends Controller
{
 public function create()
    {
    }

    public function getTextData(Request $request)
    {
        dd($request->all());
    }
    public function makeSvg(request $request)
    {
        $image = new SVG(400, 200);
        $doc = $image->getDocument();
        $font = new \SVG\Nodes\Structures\SVGFont('Arial', 'Helvetica, sans-serif');

// blue 40x40 square at (0, 0)
        $text = new SVGText($request['text-body'], 20, 50);
        $text->setFont($font);
        $text->setSize($request['text-size']);
        $text->setStyle('stroke', $request['text-color']);
        $text->setStyle('stroke-width', 1);
        $doc->addChild($text);

        header('Content-Type: image/svg+xml');
        echo $image;
    }
}
