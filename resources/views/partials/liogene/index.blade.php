<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">LioGene</div>
			<div class="card-body">
				<p class="card-text">
					Enter the parents base colors to get a list of all potential bases from their breeding.
					<br>
					<strong>IMPORTANT NOTE:</strong> The percentages are not accurate to actual gameplay (they are only estimations) and do not reflect what you will receive.
				</p>
				<div class="row justify-content-md-center">
					<div class="col col-lg-6">
						<form method="POST" id="liogene_form">
							{{ csrf_field() }}
							<div class="form-row">
								<div class="col">
									<label for="father">Father</label>
									<select name="father" class="genes form-control">
										<option selected disabled>-- Select a Gene --</option>
										@foreach($bases as $group => $_bases)
											<optgroup label="{{ $group }}">
												@foreach($_bases as $base)
													<option value="{{ $base['color'] }}-{{ $base['group'] }}-{{ $base['shade'] }}-{{ $base['slug'] }}">{{ $base['name'] }}</option>
												@endforeach
											</optgroup>
										@endforeach
									</select>
								</div>
								<div class="col">
									<label for="mother">Mother</label>
									<select name="mother" class="genes form-control">
										<option selected disabled>-- Select a Gene --</option>
										@foreach($bases as $group => $_bases)
											<optgroup label="{{ $group }}">
												@foreach($_bases as $base)
													<option value="{{ $base['color'] }}-{{ $base['group'] }}-{{ $base['shade'] }}-{{ $base['slug'] }}">{{ $base['name'] }}</option>
												@endforeach
											</optgroup>
										@endforeach
									</select>
								</div>
							</div>
							<!-- Submit -->
							<div class="text-center mt-1">
								<input type="submit" class="btn btn-success" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Output -->
<div class="row">
	<div class="col py-2" id="liogene_output"></div>
</div>