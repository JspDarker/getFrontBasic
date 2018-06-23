<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Response;



class PostController extends Controller
{
    //show table of posts
    public function index()
    {
        $posts = Post::all();
        return view('crud-app', compact('posts'));
    }


    public function addPost(Request $request){

        $valid = $this->validate($request,[
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        if($valid->fails()) {
            return Response::json(array('errors'=> $valid->getMessageBag()->toarray()));
        } else {

            $post = Post::create([
                'title'     =>$request['title'],
                'content'   =>$request['content']
            ]);

            return response()->json($post);
        }

        /*if ( $validator->fails()){
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        } else {
            $post = Post::create([
                'title'     =>$request['title'],
                'content'   =>$request['content']
            ]);
            return response()->json($post);
        }*/
    }




}


