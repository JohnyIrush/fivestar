<template>
  <div class="container-fluid">
      <div class="row my-4">
        <div class="col-lg-11 col-md-6 mb-md-0 mb-4 glass-content">
          <div class="card sec-bg-color">
            <div class="card-header  sec-bg-color pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Warehouse Manager</h6>
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
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Avatar</th>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">Phone</th>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="manager in managers" :key="manager.id">
                      <td>
                        <div class="mt-2">
                            <img :src="manager.profile_photo_path" alt="" srcset="">
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="mr-3">
                            <i class="fa fa-user fa-2x"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0">{{manager.name}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="mt-2">
                            {{manager.email}}
                        </div>
                      </td>
                      <td>
                        <div class="mt-2">
                           {{manager.phone}}
                        </div>
                      </td>
                      <td class="">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="font-weight-bold">Authors</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="mt-2">
                             <button class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i>Edit</button>
                            <button class="btn btn-danger btn-sm" > <i class="fa fa-trash"></i> Delete</button>
                            <button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Assign Role</button>
                            <button class="btn btn-dark btn-sm" ><i class="fa fa-edit"></i>Remove Role</button>
                            <button class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i>Give Permission</button>
                            <button class="btn btn-dark btn-sm" ><i class="fa fa-edit"></i>Revoke Permission</button>
                        </div>
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
</template>

<script>
import { defineComponent } from 'vue'


    export default defineComponent({
        components: {

        },
        data() {
            return {
                managers: [],
            }
        },
        methods: {
            getManagers()
            {
                axios.get('managers')
                .then((response)=>{
                    this.managers = response.data
                })
            },

        },
        mounted() {
            this.getManagers()
        },
    })
</script>

<style scoped>

.glass-container
{
    /*position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);*/
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}


.glass-header
{
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

/*Content*/

.glass-content
{
    transform: translateX(-100);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    padding: 5px;
}

.card, .card-header, .card-body
{
  background: transparent !important;
}

</style>
