<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        $html = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>About</title>
            </head>
            <body>
            <table border="1rem">
                <thead>
                <tr>
                    <td>NIM</td>
                    <td>Name</td>
                    <td>Classroom</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2041720128</td>
                    <td>Maulana Ghofurur Rohim</td>
                    <td>TI-2D</td>
                </tr>
                </tbody>
            </table>
            </body>
            </html>
        ';
        return $html;
    }

    public function articles($id)
    {
        return 'your ID: ' . $id;
    }
}
