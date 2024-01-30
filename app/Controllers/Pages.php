<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    function index(): string
    {
        return view('welcome_message');
    }

    function view(string $page = 'home'): string
    {
        if (!is_file(APPPATH . "Views/pages/$page.php")) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
