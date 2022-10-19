<template>
  <div class="container-fluid">
      <div class="row my-4">
        <div class="col-lg-11 col-md-6 mb-md-0 mb-4 glass-content">
           <ul class="nav nav-tabs" id="myTab" role="tablist">
             <li class="nav-item" role="presentation">
               <button class="nav-link active" id="role-tab" data-bs-toggle="tab" data-bs-target="#role" type="button" role="tab" aria-controls="role" aria-selected="true">Roles</button>
             </li>
             <li class="nav-item" role="presentation">
               <button class="nav-link" id="permission-tab" data-bs-toggle="tab" data-bs-target="#permission" type="button" role="tab" aria-controls="permission" aria-selected="false">Permissions</button>
             </li>
           </ul>
           <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade show active" id="role" role="tabpanel" aria-labelledby="role-tab">
              <div class="card">
                <div class="card-header   pb-0">
                  <div class="row">
                    <div class="col-lg-4">
                      <h6>Role Manager</h6>
                    </div>
                    <div class="col-lg-4">
                      <button type="button" class="btn btn-info" @click="launchAction('create', 'Role', '','create-role', '', 'permission-role-Modal','')">Create <i class="fa fa-plus"></i></button>
                    </div>
                    <div class="col-lg-4 col-5 my-auto text-end">
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
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Role</th>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Guard Name</th>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Permissions</th>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="role in roles" :key="role.id">
                          <td>
                                <p class="mb-0">{{role.name}} </p>
                          </td>
                          <td>
                                <p class="mb-0">{{role.guard_name}} </p>
                          </td>
                          <td>
                                <p class="mb-0" v-for="permission in role.permissions" :key="permission.id"> {{permission.name}}</p>
                          </td>
                          <td class="text-sm">
                            <span class="font-weight-bold">
                                <button class="btn btn-primary btn-sm" @click="launchAction('Edit', 'Role',role,'edit-role', role.id, 'permission-role-Modal', '')"><i class="fa fa-edit"></i>Edit</button>
                                ,<button class="btn btn-danger btn-sm" @click="destroy('Delete', 'Role','','delete-role', role.id,'')"> <i class="fa fa-trash"></i> Delete</button>
                                ,<button class="btn btn-warning btn-sm" @click="launchAction('Give Permission', 'Role',role,'give-permission', role.id,'assign-permission-role-Modal', role.permissions)"><i class="fa fa-edit"></i>Give Permission</button>,
                                ,<button class="btn btn-dark btn-sm" @click="launchAction('Revoke Permission', 'Revoke-Permission',role,'give-permission', role.id,'assign-permission-role-Modal', role.permissions)"><i class="fa fa-edit"></i>Revoke Permission</button>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
             </div>
             <div class="tab-pane fade" id="permission" role="tabpanel" aria-labelledby="permission-tab">
              <div class="card">
                <div class="card-header   pb-0">
                  <div class="row">
                    <div class="col-lg-4">
                      <h6>Permissions Manager</h6>
                    </div>
                    <div class="col-lg-4">
                      <button type="button" class="btn btn-info"  @click="launchAction('Create', 'Permission','','create-permission', '', 'permission-role-Modal')">Create <i class="fa fa-plus"></i></button>
                    </div>
                    <div class="col-lg-4 col-5 my-auto text-end">
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
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Permission</th>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Guard Name</th>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Roles</th>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="permission in permissions" :key="permission.id">
                          <td>
                                <p class="mb-0">{{permission.name}} </p>
                          </td>
                          <td>
                                <p class="mb-0">{{permission.guard_name}} </p>
                          </td>
                          <td>
                               <p class="mb-0" v-for="role in permission.roles" :key="role.id"> {{role.name}}</p>
                          </td>
                          <td class="text-sm">
                            <span class="font-weight-bold">
                             <button class="btn btn-primary btn-sm" @click="launchAction('Edit', 'Permission',permission, 'edit-permission', permission.id, 'permission-role-Modal', '')"><i class="fa fa-edit"></i>Edit</button>
                            ,<button class="btn btn-danger btn-sm" @click="destroy('Delete', 'Permision','','delete-permission', permission.id, '')"> <i class="fa fa-trash"></i> Delete</button>
                            ,<button class="btn btn-warning btn-sm" @click="launchAction('Asign Role', 'Permission',permission,'assign-role', permission.id,'assign-permission-role-Modal', '')"><i class="fa fa-edit"></i>Assign Role</button>
                            ,<button class="btn btn-dark btn-sm" @click="launchAction('Remove Role', 'Remove-Role',permission,'assign-role', permission.id,'assign-permission-role-Modal', permission.roles)"><i class="fa fa-edit"></i>Remove Role</button>
                            </span>
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
      </div>
  </div>
  <permission_role_form_modal :form="form"></permission_role_form_modal>
  <assign_permission_role_form_modal :form="form"></assign_permission_role_form_modal>
</template>

<script>
    import { defineComponent } from 'vue'

    import permission_role_form_modal from "../components/modals/PermissionRole.vue";
    import assign_permission_role_form_modal from "../components/modals/assign-permission-role.vue";

    export default defineComponent({
        name: "PermissionRole",
        components: {
            permission_role_form_modal,
            assign_permission_role_form_modal
        },

        data() {
            return {
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
           this.getRoles();
           this.getPermissions();
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
