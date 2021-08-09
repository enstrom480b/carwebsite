<?php

namespace App\Http\Controllers;

use App\Models\image;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
   
       $this->middleware('auth');
    }
   
   


    public function index()
    {
        $posts=\App\Models\post::all();
        return view('index',[
            'posts'=>$posts
        ]);
    }

  


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {





    return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            if($request->hasfile('cover'))
            {
            $file=$request->file('cover');
            $imagename=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('cover/'),$imagename);
            $post=new post([
             
                'carmake'=>$request->carmake,
                'carmodel'=>$request->carmodel, 
                'yearofmanufacture'=>$request->yearofmanufacture,
                'mileage'=>$request->mileage,
                'engine'=>$request->engine,
                'transmission'=>$request->transmission,
                'color'=>$request->color,
                'price'=>$request->price, 
                'location'=>$request->location,
                'description'=>$request->description,
                'condition'=>$request->condition,
                'bodytype'=>$request->bodytype,
                'duty'=>$request->duty,
                'interior'=>$request->interior, 
                'airbag'=>$request-> airbag,
                'electricmirrors'=>$request->electricmirrors,       
                'tractioncontrol'=>$request->tractioncontrol,
                'airconditioning'=>$request->airconditioning,
                'powersteering'=>$request->powersteering,
                'amfmradio'=>$request->amfmradio,
                'frontfoglamps'=>$request->frontfoglamps, 
                'electricwindows'=>$request->electricwindows,
                'alloywheels'=>$request->alloywheels,
                'foglights'=>$request->foglights,
                'airconditioning'=>$request->airconditioning,
                'thumbstart'=>$request->thumbstart,
                "cover" =>$imagename

            ]);
            $post->save();
        }
        if($request->hasfile('images'))
        {
            $files=$request->file('images');
            foreach($files as $file){

                $imagename=time().'_'.$file->getClientOriginalName();
                $request['post_id']=$post->id;
                $request['image']=$imagename;
                $file->move(\public_path('/images'),$imagename);
                image::create($request->all());
            }
        
    }
        return redirect('/');

    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $image=\App\Models\image::find($post);

        $post=\App\Models\post::find($post);
        return view('morelistings',[
            'post'=>$post,
            'image'=>$image
        ]);

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $posts=post::find($id);
       return view('edit',[
           'posts'=>$posts
       ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $post=post::find($id);

      if($request->hasFile('cover'))
      {
              if(File::exists('cover/'.$post->cover)){
                File::delete('cover/'.$post->cover); 
              }
              $file=$request->file('cover');
              $post->cover=time()."_".$file->getClientOriginalName();
              $file->move(\public_path('/cover',$post->cover));
              $request['cover']=$post->cover;

        }
        $post->update([
            'carmake'=>$request->carmake,
            'carmodel'=>$request->carmodel,
            'yearofmanufacture'=>$request->yearofmanufacture,
            'mileage'=>$request->mileage,
            'engine'=>$request->engine,
            'transmission'=>$request->transmission,
            'color'=>$request->color,
            'price'=>$request->price,
            'location'=>$request->location,
            'description'=>$request->description,
            'condition'=>$request->condition,
            'bodytype'=>$request->bodytype,
            'duty'=>$request->duty,
            'interior'=>$request->interior,
            'airbag'=>$request->airbag,
            'electricmirrors'=>$request->electricmirrors,
            'tractioncontrol'=>$request->tractioncontrol,
            'powersteering'=>$request->powersteering,
            'amfmradio'=>$request->amfmradio,
            'frontfoglamps'=>$request->frontfoglamps,
            'electricwindows'=>$request->electricwindows,
            'alloywheels'=>$request->alloywheels,
            'FogLights'=>$request->FogLights,
            'airconditioning'=>$request->airconditioning,
            'thumbstart'=>$request->thumbstart,
            'cover'=>$post->cover
        ]);
    
  
        if($request->hasFile('images')){
            $files=$request->file('images');
            foreach($files as $file)
            {
                $imagename=time()."_".$file->getClientOriginalName();
                $request['post_id']=$id;
                $request['image']=$imagename;
                $file->move(\public_path('images'),$imagename);
                image::create($request->all());


            }
        }
        return redirect()->back();
      }
  
    public function deleteimage($id)
    {
        $images=image::find($id);
        if(File::exists("images/".$images->image))
        {
            File::delete("images/".$images->image);
        }
        image::find($id)->delete();
         return back();
    }

    public function deletecover($id)
    {
        $cover=image::findorfail($id)->cover;
        if(File::exists("cover/".$cover))
        {
            File::delete("cover/".$cover);
        };
         return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
    
    $posts=post::findOrFail($post);
    if(File::exists('cover/'.$posts->cover))
    {

        $images=image::where('post_id',$posts->id)->get();
        foreach($images as $image){

            if(File::exists("images/".$image->image)){

              File::delete("images/".$image->image);
            }
            $posts->delete();
            return back();
        }
    }


    }
}
