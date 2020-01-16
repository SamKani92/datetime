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
						<h3 class="card-title">Result</h3>
						<p>The difference between <b>{{ $date1 }} ({{ $date1->timezone }})</b> and <b>{{ $date2 }} ({{ $date2->timezone }})</b> is as follows:</p>
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