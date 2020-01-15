@extends('app')

@section('title')
Home
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">Datetime Test by Samer Jarmakani</h3>
						<form method="POST" action="/result">
							@csrf
							<div class="form-group">
								<label for="datetime1">First Date</label>
								<input type="text" class="form-control datetime" id="datetime1" name="datetime1" required>
							</div>
							<div class="form-group">
								<label for="datetime2">Second Date</label>
								<input type="text" class="form-control datetime" id="datetime2" name="datetime2" required>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/js/jquery-3.4.1.min.js"></script>
	<script src="/js/bootstrap-datetimepicker.min.js"></script>
	<script>
	    $(".datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii:ss'});
	</script>
@endsection