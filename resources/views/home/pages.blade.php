@extends("_layouts.home")

@section('content')

	<aside class="fh5co-page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="fh5co-page-heading-lead">
						最新资讯
						<span class="fh5co-border"></span>
					</h1>

				</div>
			</div>
		</div>
	</aside>

	<div id="fh5co-main">

		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					@foreach($pages as $page)
						<div class="col-md-12 col-sm-12 fh5co-feature-border">
							<div class="fh5co-feature border">
								<div class="fh5co-feature-icon to-animate">
									<i class="icon-list"></i>
								</div>
								<div class="fh5co-feature-text">
									<h3>{{$page->title}}</h3>
									<p>{{$page->body}}</p>
									<p><a href="{{ URL('pages/'.$page->id) }}">Read more</a></p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		{{--分页--}}
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2">
				<div class="dataTables_info" id="sample-table-2_info">共{{$pages->total()}}条记录</div>
			</div>
			<div class="col-sm-6">
				<div class="dataTables_paginate paging_bootstrap">
					{!! $pages->render() !!}
				</div>
			</div>
		</div>
	</div>

@endsection
