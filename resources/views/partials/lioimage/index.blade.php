<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">LioImage</div>
			<div class="card-body">
				<p class="card-text">
					A tool to easily allow you to save your Lioden lions as .png images, with optional background and decorations. Simply enter the full lion url below.
					<p class="text-center">
						Try using: <em>https://www.lioden.com/lion.php?mid=19352</em> to test it out.
						<br>
						<strong>THIS MAY TAKE SOME TIME, PLEASE BE PATIENT!</strong>
					</p>
				</p>
				<div class="row justify-content-md-center">
					<div class="col col-lg-6">
						<form method="POST" id="lioimage_form">
							{{ csrf_field() }}
							<!-- url -->
							<label for="url">URL</label>
							<div class="input-group">
								<input type="url" class="form-control" name="url" placeholder="https://www.lioden.com/lion.php?mid=19352">
								<div class="input-group-append">
									<input type="submit" class="btn btn-success" value="Submit">
								</div>
							</div>
							<br>
							<p class="text-center m-0">
								<!-- background -->
								<input name="background" type="checkbox">
								<label for="background" class="m-0">Include the Background?</label>
								&nbsp;&nbsp;&nbsp;
								<!-- decorations -->
								<input name="decorations" type="checkbox">
								<label for="decorations" class="m-0">Include the Decorations?</label>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<br>
		<div class="text-center" id="output_image"></div>
		<br>
	</div>
</div>