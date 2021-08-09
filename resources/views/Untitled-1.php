<div class="row" style="height: 20vh;">
  @if (count($post->images)>0)
   @foreach ($post->images as $img)
<img src="/images/{{ $img->image }}" style="height:150px;width: 150px;" alt="">
 @endforeach
  @endif