<template>
	<div class="row m-2">
		<div class="col-9">
            <ul class="nav nav-pills nav-fill">
              <li class="nav-item mt-2">
                <button  class="nav-link active btn btn-primary"><i class="fas fa-cloud-upload-alt"></i> Upload More</button>
              </li>
              <li class="nav-item mt-2">
                <button href="#" class="nav-link btn btn-secondary"><i class="fa fa-folder-open-o" aria-hidden="true"></i> New folder</button>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link"><i class="fa fa-ellipsis-h" aria-hidden="true"></i>More</a>
              </li>
              <li class="nav-item mt-2">
                <button href="#" class="nav-link btn btn-secondary"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</button>
              </li>
            </ul>
		</div>
		<div class="col-3 col-auto">
			<div class="form-group">
				<div class="input-icon">
					<span class="input-icon-addon">
						<i class="fe fe-search"></i>
					</span>
					<input type="text" class="form-control" placeholder="Search Files">
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    import { defineComponent } from 'vue'



    export default defineComponent({
        components: {

        },

        mounted() {

        },
    })
</script>

<style scoped>

</style>
