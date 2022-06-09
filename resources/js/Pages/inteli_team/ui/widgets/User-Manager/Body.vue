<template>
  <div class="container-fluid">
      <div class="row">
       <user_manager></user_manager>
      </div>
      <div class="row my-4">
        <div class="col-lg-11 col-md-6 mb-md-0 mb-4 glass-content">
          <div class="card sec-bg-color">
            <div class="card-header  sec-bg-color pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Users Manager</h6>
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
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">Role</th>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">Permission</th>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Team</th>
                      <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users" :key="user.id">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="mr-3">
                            <i class="fa fa-user fa-2x"></i>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0">{{user.name}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="mt-2">
                            <p v-for="role in user.roles" :key="role.id">{{role.name}}</p>
                        </div>
                      </td>
                      <td>
                        <div class="mt-2">
                            <p v-for="permission in user.permissions" :key="permission.id">{{permission.name}}</p>
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
                             <button class="btn btn-primary btn-sm" @click="launchAction('Edit', 'User','', 'edit-permission', user.id, 'permission-role-Modal', '')"><i class="fa fa-edit"></i>Edit</button>
                            <button class="btn btn-danger btn-sm" @click="destroy('Delete', 'User','','delete-permission', user.id, '')"> <i class="fa fa-trash"></i> Delete</button>
                            <button class="btn btn-warning btn-sm" @click="launchAction('Asign Role', 'Assign-User-Role','','assign-user-role', user.id,'assign-permission-role-Modal', '')"><i class="fa fa-edit"></i>Assign Role</button>
                            <button class="btn btn-dark btn-sm" @click="launchAction('Remove Role', 'Remove-Role','','assign-user-role', user.id,'assign-permission-role-Modal', user.roles)"><i class="fa fa-edit"></i>Remove Role</button>
                            <button class="btn btn-warning btn-sm" @click="launchAction('Give User Permission', 'Give-User-Permission',user,'give-user-permission', user.id,'assign-permission-role-Modal', user.permissions)"><i class="fa fa-edit"></i>Give Permission</button>
                            <button class="btn btn-dark btn-sm" @click="launchAction('Revoke User Permission', 'Revoke-User-Permission',user,'give-user-permission', user.id,'assign-permission-role-Modal', user.permissions)"><i class="fa fa-edit"></i>Revoke Permission</button>
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
<assign_permission_role_form_modal :form="form"></assign_permission_role_form_modal>
</template>

<script>
    import axios from 'axios'
import { defineComponent } from 'vue'

    import assign_permission_role_form_modal from "../../components/modals/assign-permission-role.vue";

    export default defineComponent({
        components: {
            assign_permission_role_form_modal
        },
        data() {
            return {
                users: {},
                roles: [],
                permissions: [],
                form: {
                    action: '',
                    type: '',
                    name: '',
                    guard_name: '',
                    url: '',
                    id: '',
                    rolespermissions: {}
                }
            }
        },
        methods: {
            getUsers()
            {
                axios.get('/users')
                .then((response)=>{
                    this.users = response.data
                })
            },
            destroy(action, type, data,url, id)
            {
                axios.post(url + '/' + id )
                .then((response)=>{

                })
            },
            launchAction(action, type, data,url, id, modal, assignedOptions)
            {
                this.form.rolespermissions = []
                this.form.action = action;
                this.form.type = type;
                this.form.name = data.name;
                this.form.guard_name = data.guard_name;
                this.form.url = url;
                this.form.id = id;

                if(type === "Role")
                {
                    this.form.rolespermissions = this.permissions
                }
                else if(type === "Permission")
                {
                    this.form.rolespermissions = this.roles
                }

                else if(type === "Revoke-Permission")
                {
                    this.form.rolespermissions = assignedOptions
                }
                else if(type === "Remove-Role")
                {
                    this.form.rolespermissions = assignedOptions
                }
                else if(type === "Assign-User-Role")
                {
                    this.form.rolespermissions = this.roles
                }
                else if(type === "Give-User-Permission")
                {
                    this.form.rolespermissions = this.permissions
                }
                else if(type === "Revoke-User-Permission")
                {
                    this.form.rolespermissions = assignedOptions
                }


                var permissionRoleModal = new bootstrap.Modal(document.getElementById(modal));
                permissionRoleModal.show();
            },
            getRoles()
            {
                axios.get('/roles')
                .then((response)=>{
                   this.roles = response.data
                   console.log(response)
                })
            },
            getPermissions()
            {
                axios.get('/permissions')
                .then((response)=>{
                   this.permissions = response.data
                   console.log(response)
                })
            }
        },
        mounted() {
            this.getUsers()
            this.getRoles()
             this.getPermissions()
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

/*
.glass-header
{
    position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}
*/
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
