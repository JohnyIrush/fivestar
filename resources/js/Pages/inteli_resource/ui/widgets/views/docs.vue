<template>
  <div class="container-fluid py-1">
	<div class="row">
		<div class="col-lg-10 col-xl-11">
			<div class="row">
				<div class="col-xl-3 col-md-4 col-sm-6 mt-2" v-for="doc in docs" :key="doc.id">
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
                              <img v-if="doc.extension == 'doc' || doc.extension == 'docx'" src="/Theme/assets/img/Icons/doc.png" alt="" srcset="" class="document-icon-size">
                              <img v-if="doc.extension == 'ppt' || doc.extension == 'pptx'" src="/Theme/assets/img/Icons/ppt.png" alt="" srcset="" class="document-icon-size">
                              <img v-if="doc.extension == 'xls' || doc.extension == 'xlsx'" src="/Theme/assets/img/Icons/xls.png" alt="" srcset="" class="document-icon-size">
                              <img v-if="doc.extension == 'txt'" src="/Theme/assets/img/Icons/txt.png" alt="" srcset="" class="document-icon-size">
                              <img v-if="doc.extension == 'pdf'" src="/Theme/assets/img/Icons/pdf.png" alt="" srcset="" class="document-icon-size">
						  	<h6 class="mb-1 font-weight-semibold mt-4">{{nameLengthFilter(doc.name)}}</h6>
						  	<span class="text-muted">{{doc.size}}</span>
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
    import file_actions from "../menus/file-actions.vue";

    export default defineComponent({
        props: ["docs"],
        components: {
            files_options,
            file_actions
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
.document-icon-size
{
    height: 100px !important;
    width: 100px !important;
}
</style>
