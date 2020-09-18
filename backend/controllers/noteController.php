<?php
namespace App\backend\controllers;
use App\backend\Models\Note;

class noteController {
    public static function create($title, $body) {
        $note = new Note;
        $note -> title = $title;
        $note -> body = $body;
        return "ok";
    }

    public static function update($id, $title, $body) {
        $note =  Note::find($id);
        $note -> title = $title;
        $note -> body = $body;
        return "ok";
    }

    public static function delete($id) {
        Note::destroy($id);
        return($id);
    }

    public static function getAll() {
        return Note::all();
    }
}