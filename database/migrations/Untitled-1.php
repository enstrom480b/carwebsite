<div class="container" style="margin-top: 50px;">
            <div class="row">
      <label>Car</label>          
<div class="col-lg-3">
    <form action="/deletecover/{{$posts->id}}" method="post">
    <button class="btn text-danger">X</button>
    @csrf
    @method("delete")
    </form>
     <img src="/cover/{{$posts->cover}}" class="img-responsiveness" style="max-height:100px;max-width: 100px;" alt="" src="">
<br>
<p>images</p>
@foreach($posts->images as $img)
<form action="/deleteimage/{{$img->id}}" method="post">
<button class="btn text-danger">X</button>
@csrf 
@method('delete')
</form>
<img src="/images/{{$img->image}}" class="img-responsiveness" style="max-height:100px;max-width: 100px;" alt="" src="">
@endforeach
</div>
                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Edit Post</b> </h3>
				 
                         @csrf
                         {{ method_field('PUT') }}
        				 <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{$posts->title}}">
        				 <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{$posts->author}}">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body"  value="{{$posts->body}}"></Textarea>
                         <label class="m-2">Cover Image</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                         <label class="m-2">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
            
                </div>
            </div>
</div>
$post->carmake=$request->carmake;
            $post->carmodel=$request->carmodel;
            $post->yearofmanufacture=$request->yearofmanufacture;
            $post->mileage=$request->mileage;
            $post->engine=$request->engine;
            $post->transmission=$request->transmission;
            $post->color=$request->color;
            $post->price=$request->price;
            $post->location=$request->location;
            $post->description=$request->description;
            $post->condition=$request->condition;
            $post->bodytype=$request->bodytype;
            $post->duty=$request->duty;
            $post->interior=$request->interior;
            $post->airbag=$request->airbag;
            $post->electricmirrors=$request->electricmirrors;
            $post->tractioncontrol=$request->tractioncontrol;
            $post->powersteering=$request->powersteering;
            $post->amfmradio=$request->amfmradio;
            $post->frontfoglamps=$request->frontfoglamps;

            $post->electricwindows=$request->electricwindows;
            $post->alloywheels=$request->alloywheels;
            $post->FogLights=$request->FogLights;
            $post->airconditioning=$request->airconditioning;
            $post->thumbstart=$request->thumbstart;
            $post->cover=$request->cover;
