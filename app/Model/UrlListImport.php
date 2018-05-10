<?php

namespace App\Model;

use \Input;

class UrlListImport extends \Maatwebsite\Excel\Files\ExcelFile
{

    public function getFile()
    {
        if (Input::hasFile('file')) {
            $file = Input::file('file');
            $file->move('uploads/', $file->getClientOriginalName());
            return "public_html/uploads/" . $file->getClientOriginalName();
        }

        return null;
    }

    public function getFilters()
    {
        return [
            'chunk'
        ];
    }

}
