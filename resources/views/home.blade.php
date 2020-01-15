<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Datetime Test</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <style>
            body {
                margin-top: 1rem;
            }
        </style>
    </head>
    <body>
        <div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Datetime Test by Samer Jarmakani</h3>
							<form>
								<div class="form-group">
									<label for="datetime1">First Date</label>
									<input type="text" class="form-control datetime" id="datetime1">
								</div>
								<div class="form-group">
									<label for="datetime2">Second Date</label>
									<input type="text" class="form-control datetime" id="datetime2">
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap-datetimepicker.min.js"></script>
    <script>
	    $(".datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
	</script>
</html>