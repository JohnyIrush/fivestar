<template>
  <div class="container-fluid py-4">
						<div class="row">
							<div class="col-lg-10 col-xl-11">
								<div class="row">
				                  <div class="col-xl-3 col-md-4 col-sm-6 mt-2" v-for="video in videos" :key="video.id">
				                  	<div class="card border p-0 shadow-none">
                                          <div class="row">
				                  		  <div class="col align-items-start px-4 pt-4">
				                  		  	<label class="custom-control custom-checkbox">
				                  		  		<input @change="launchFileActions" id="file-actions-check" type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
				                  		  	</label>
				                  		  </div>
                                            <div class="col"></div>
				                  		  <div class="col align-items-end px-4 pt-4">
                                               <file_actions></file_actions>
				                  		  </div>
                                          </div>
                                          <div class="row">
				                  		  <div class="card-body pt-0 text-center">
                                                <img v-if="video.extension == 'mp4'" src="/Theme/assets/img/Icons/mp4.png" alt="" srcset="" class="audio-icon-size">
				                  		  	<h6 class="mb-1 font-weight-semibold mt-4">{{nameLengthFilter(video.name)}}</h6>
				                  		  	<span class="text-muted">{{video.size}}</span>
				                  		  </div>
                                          </div>
				                  	</div>
				                  </div>
								</div>
								<ul class="pagination float-right mb-4">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</div>
						</div>
      <Footer></Footer>
  </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import files_options from "../menus/files-options.vue";


    export default defineComponent({
        props: ["videos"],
        components: {
            files_options
        },
        methods: {
           nameLengthFilter(name)
            {
                return name.length > 8 ? name.substring(0, 5) + "..." : name;
            }
        },
        mounted() {

        },
    })
</script>

<style scoped>
.audio-icon-size
{
    height: 100px !important;
    width: 100px !important;
}
</style>
