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
								<input type="text" class="form-control datetime" name="datetime1" readonly required>
							</div>
							<div class="form-group">
								<label for="datetime2">Second Date</label>
								<input type="text" class="form-control datetime" name="datetime2" readonly required>
							</div>
							<div class="form-group">
								<label for="convert">Also display days in</label>
								<select class="custom-select" name="convert">
									<option value="seconds" selected>Seconds</option>
									<option value="minutes">Minutes</option>
									<option value="hours">Hours</option>
									<option value="years">Years</option>
								</select>
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