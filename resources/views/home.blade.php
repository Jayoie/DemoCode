@extends('_layouts.default')

@section('content')
	<div id="title" style="text-align: center;">
		<h1>Learn Laravel 5</h1>
		<div style="padding: 5px; font-size: 16px;"><i class="am-icon-quote-left"></i>&nbsp;&nbsp;{{ Inspiring::quote() }}&nbsp;&nbsp;<i class="am-icon-quote-right"></i></div>
	</div>
	<hr>
	<div id="content">
		<ul>
			@foreach ($pages as $page)
			<li style="margin: 50px 0;list-style:none;">
				<div class="title">
					<a href="" style="float:right;text-decoration:none;">&nbsp;<i class="am-icon-heart-o good"></i></a>

					<a href="{{ URL('pages/'.$page->id) }}" style="float:right;">
						<i class="am-icon-commenting">&nbsp;{{ \App\Comment::where('page_id',$page->id)->count() }}</i>
					</a>

					<a href="{{ URL('pages/'.$page->id) }}">
						<h4>{{ $page->title }}</h4>
					</a>
				</div>
				<div class="body">
					<p>{{ $page->body }}</p>
				</div>
			</li>
			<hr>
			@endforeach
		</ul>
	</div>
@endsection

@section('js')
	<script type="text/javascript">
		$(function(){
			$(".good").click(function(){
				
			})
		})
	</script>
@endsection