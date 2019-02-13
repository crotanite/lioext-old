<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">LioMart</div>
			<div class="card-body">
				<p class="card-text">
					description
				</p>
				<div class="row justify-content-md-center">
					<div class="col">
						<mart :bases='{!! json_encode($bases) !!}' :eyes='{!! json_encode($eyes) !!}'></mart>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>