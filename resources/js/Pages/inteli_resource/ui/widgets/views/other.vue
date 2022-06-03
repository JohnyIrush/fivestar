<template>
  <div class="container-fluid py-4">
						<div class="row">
							<div class="col-lg-10 col-xl-11">
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6" v-for="file in other" ::key="file.id">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label">{{file.name}}</span>
												</label>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Images</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Music</h6>
												<span class="text-muted">897mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Downloads</h6>
												<span class="text-muted">453kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Vidoes</h6>
												<span class="text-muted">1.5gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Documents</h6>
												<span class="text-muted">234mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<i class="fa fa-music text-secondary"></i>
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">topmp4song.mp4</h6>
												<span class="text-muted">4kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">image.jpg</h6>
												<span class="text-muted">65kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">File documents</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4"> New Folder</h6>
												<span class="text-muted">897mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/word.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Word document</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-right ml-auto">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#"><i class="fe fe-edit mr-2"></i> Edit</a>
														<a class="dropdown-item" href="#"><i class="fe fe-share mr-2"></i> Share</a>
														<a class="dropdown-item" href="#"><i class="fe fe-download mr-2"></i> Download</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash mr-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{URL::asset('assets/images/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">document.pdf</h6>
												<span class="text-muted">23kb</span>
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
        props: ["other"],
        components: {
            files_options
        },

        mounted() {

        },
    })
</script>

<style scoped>

</style>
