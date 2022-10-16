<template>
<div class="container">

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form>
            <div class="form-group row">
              <label for="" class="col-sm-2 form-control-label">Country</label>
              <div class="col-sm-10">
                <select class="form-control selectpicker" id="select-country" data-live-search="true">
                <option data-tokens="china">China</option>
  <option data-tokens="malayasia">Malayasia</option>
  <option data-tokens="singapore">Singapore</option>
                </select>

              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->   
</template>

<script>
import { defineComponent } from 'vue'

import { store } from '../../../../../store/store.js'

    export default defineComponent({
        name: "SearchSelectInput",
        props:{
        },
        components: {

        },
        data() {
            return {
  
            }
        },
        computed: {

        },
        methods: {

        },
        mounted() {

        },
    })
</script>

<style scoped>

</style>
