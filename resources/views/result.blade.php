@extends('app')

@section('title')
Result
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">Results</h3>
						<p>The difference between <b>{{ $date1 }}</b> and <b>{{ $date2 }}</b> is as follows:</p>
						<ul>
							<li>{{ $days }} ({{ $convertResult }})
							<li>{{ $weekdays }}
							<li>{{ $weeks }}
						</ul>
						<a href="/" class="btn btn-primary">Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection