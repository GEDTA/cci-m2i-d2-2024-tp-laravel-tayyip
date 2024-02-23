<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpKernel\Controller\ControllerResolver as Controller;


/**
 *
 *  PAS EU LE TEMPS SINON EASY
 *
 */
class AssocierControlleurs extends Controller {

    function index() {
        $asso = \DB::table('users')->get();
        return view('associer.index', ['users' => $asso]);
    }

    function create() {
        $new = new AssocierControlleurs();
        echo $new->rendu('create');
    }

    function store() {
        \DB::table('users')->insert(
            ['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password']]
        );
    }

    function show() {
        $id = $_GET['id'];
        $asso = \DB::table('users')->where('id', $id)->get();
        $this->rendu($asso->first());
    }

    function destroy() {
        $id = $_GET['id'];
        $r = \DB::table('users')->where('id', $id)->delete();
        if ($r) {
            $this->index();
        } else {
            echo 'Erreur';
        }
    }

    function rendu($vueName = '') {
        echo view('associer.'.$vueName);
    }

    function test($var) {
        // var_dump($var);
    }
}