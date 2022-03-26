<?php

namespace App\Http\Controllers;

use ColinODell\Indentation\Indentation;

class IndentationController extends Controller
{
    public function change() 
    {
        $composerJson = file_get_contents(storage_path('data/composer.json'));
        $composerJson = Indentation::change($composerJson, new Indentation(1, Indentation::TYPE_TAB));
        file_put_contents(storage_path('data/composer-backup.json'), $composerJson);
    }
}
