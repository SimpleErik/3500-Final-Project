@extends('layouts.nav')

@section('body')
	<div class="row">
		<div class="col-md-2" style="overflow-y: auto; height: 90%;">
			<h1><a href="{{route("gallery", ["catagory"=>$art->Catagory])}}">{{$art->Title}}</a></h1>
			@foreach($gallery as $pic)
				<a href="{{route("picture", ["id"=> $pic->id])}}">
					<div class="thumbnail">
						<img width="100%" src="{{asset("images/square/".$pic->Square)}}">
					</div>
				</a>
			@endforeach
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-9">
					<h1>{{$art->Title}}</h1>
					<img width="100%" src="{{asset("images/".$art->Photo)}}">
				</div>
				<div class="col-md-3">
					<br>
					<br>
					<br>
					<br>
					@if(isset($likes))
						<h1>
							@Auth
								<a href="{{route("like", ["id"=>$art->id])}}">
									<span class="glyphicon glyphicon-thumbs-up"></span>
								</a>
							@endAuth
							Likes: {{$likes->Likes}}
						</h1>
					@else
						<h1>
							@Auth
								<a href="{{route("like", ["id"=>$art->id])}}">
									<span class="glyphicon glyphicon-thumbs-up"></span> 
								</a>
							@endAuth
							Likes: 0
						</h1>
					@endif

					@if(isset($likes))
						<h1>
							@Auth
								<a href="{{route("dislike", ["id"=>$art->id])}}">
									<span class="glyphicon glyphicon-thumbs-down"></span>
								</a>
							@endAuth
						Dislikes: {{$likes->Dislikes}}
						</h1>
					@else
						<h1>
							@Auth
								<a href="{{route("dislike", ["id"=>$art->id])}}">
									<span class="glyphicon glyphicon-thumbs-down"></span>
								</a>
							@endAuth
							Dislikes: 0
						</h1>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection