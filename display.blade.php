<div>
<h1>list of all images</h1>
@foreach($imgData as $img)
<img style="width:200px;margin:10px;" src="{{url('storage'.$img->path)}}" alt="">
@endforeach
</div>
