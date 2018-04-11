<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Message;

class MessageController extends Controller
{
    public function index() {
        $msg = Message::all();
        return view('message.messages', compact('msg'));
    }

    public function create() {
        return view('message.create');
    }

    public function save(Request $request) {

        /*First*/
//        $msg = new Message();
//        $msg->title = $request->title;
//        $msg->body = $request->body;
//        $msg->save();

        /*Second*/
        $created = Message::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        if($created) {
            return redirect('/message/create')->with('message', 'added successfully.');
        }
    }

    public function show($id) {
        $msg = Message::find($id);
        return view('message.show', compact('msg'));
    }

    public function edit($id) {
        $msg = Message::find($id);
        return view('message.edit', compact('msg'));
    }

    public function update(Request $request) {
        $msg = Message::find($request->id);

        $msg->title = $request->title;
        $msg->body = $request->body;

        $msg->save();

        if($msg) {
            return redirect('/message/create')->with('message', 'Updated successfully.');
        }
    }


    public function delete($id) {
        $msg = Message::find($id);
        $deleted = $msg->delete();

        if($deleted) {
            return redirect('/message/create')->with('message', 'Deleted successfully.');
        }
    }

}
