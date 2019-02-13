<template>
	<div>
		<h4 class="text-center mb-4">
			<strong>Estimated Sell Price:</strong> {{ price.sb }} SB {{ price.gb }} GB
		</h4>
		<form method="POST" id="liogene_form">
			<div class="row">
				<div class="col col-lg-6">
					<!-- base color -->
					<label for="base_color" class="mt-2 mb-0">Base Color</label>
					<select name="base_color" class="form-control" v-model="form.base_color">
						<option selected disabled :value="null">-- Select a Gene --</option>
						<optgroup v-for="(_bases, group) in bases" :label="group">
							<option v-for="base in _bases" :value="base.id">{{ base.name }}</option>
						</optgroup>
					</select>
					<!-- eye color -->
					<label for="eye_color" class="mt-2 mb-0">Eye Color</label>
					<select name="eye_color" class="form-control" v-model="form.eye_color">
						<option v-for="eye in eyes" :value="eye.id">{{ eye.name }}</option>
					</select>
				</div>
				<div class="col col-lg-6">
					right
				</div>
			</div>
		</form>
	</div>
</template>

<script>
	export default {
		props: ['bases', 'eyes'],

		data()
		{
			return {
				form: {
					base_color: null,
					eye_color: null,
				},
				price:
				{
					sb: 0,
					gb: 0,
				}
			}
		},

		methods:
		{
			/**
			 * Submit the form data.
			 *
			 * @return void
			 */
			submit()
			{
				// set _self
				var _self = this;

				// send request
				axios.post('/liomart', this.form).then(function(response)
				{
					// set variables
					_self.price.sb = response.data.sb_price;
					_self.price.gb = response.data.gb_price;
				});
			},
		},

		watch:
		{
			'form':
			{
				handler: function()
				{
					this.submit();
				},
				deep: true,
			}
		}
	}
</script>