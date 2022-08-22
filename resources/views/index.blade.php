<h1>{{$Article->title}}</h1>
<p>{{$Article->description}}</p>
@forelse($Articles as $Article)
<a href="{{route('single' , $Article->id)}}">{{$Article->title}}</a>
@empty
<p>There is no articles</p>
@endforelse
