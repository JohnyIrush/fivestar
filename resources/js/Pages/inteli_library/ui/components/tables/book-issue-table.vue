<template>
  <div class="row">
      <div class="col-11 col-xl-11 glass-content">
        <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">S.NO</th>
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Student Name</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Book Name</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">ISSUE DATE</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">RETURN DATE</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">STATUS</th>
                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="issue in issues" :key="issue.id">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{issue.id}}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{issue.student.firstname}}</span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{issue.book.title}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{issue.issue_date}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{issue.return_date}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold"> {{(issue.return_status == 1)? "Returned" : "Not Returned"}} </span>
                    </td>
                    <td class="align-middle">
                        <span class="text-xs font-weight-bold">  </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
       </div>
  </div>
</template>

<script>
import { defineComponent } from 'vue'


    export default defineComponent({
        props: ["issues"],
        components: {

        },
        data() {
            return {
            }
        },
        methods: {


        },
        mounted() {
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
