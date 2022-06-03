<template>
  <div class="container-fluid">
      <div class="row my-4">
        <div class="col-lg-11 col-md-6 mb-md-0 mb-4 sec-bg-color">
          <div class="card sec-bg-color">
            <div class="card-header  sec-bg-color pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Task Manager</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">

                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Description</th>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="task in tasks" :key="task.id">
                      <td>
                            <p class="mb-0">{{task.description}} </p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Delete, Edit, Save, Upload </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!--<Footer></Footer>-->
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../../Footer.vue'

    import user_manager from "../../menus/user-manager.vue";

    export default defineComponent({
        components: {
            Footer,
            user_manager
        },

        data() {
            return {
                tasks: []
            }
        },

        methods: {
            getTasks()
            {
                axios.get('/api/tasks')
                .then((response)=>{
                   this.tasks = response.data
                   console.log(response)
                })
            }
        },
        mounted() {
           this.getTasks();
        },
    })
</script>

<style scoped>

.sec-bg-color
{
    background-color: rgb(149, 149, 245) !important;
}
</style>
