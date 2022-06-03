<template>
<div class="btn-group">
    <li class="nav-link " aria-hidden="true" data-bs-toggle="dropdown" aria-expanded="false">Properties</li>
  <ul class="dropdown-menu">
   <table class="table table-striped table-dark">
     <!--<thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">First</th>
         <th scope="col">Last</th>
         <th scope="col">Handle</th>
       </tr>
     </thead>-->
     <tbody>
       <tr>
         <td>Directory</td>
         <td>{{properties.dirname}}</td>
       </tr>
       <tr>
         <td>Basename</td>
         <td>{{properties.basename}}</td>
       </tr>
       <tr>
         <td>extension</td>
         <td>{{properties.extension}}</td>
       </tr>
       <tr>
         <td>filename</td>
         <td>{{properties.filename}}</td>
       </tr>
       <tr>
         <td>size</td>
         <td>{{properties.size}}</td>
       </tr>
       <tr>
         <td>type</td>
         <td>{{properties.type}}</td>
       </tr>
     </tbody>
   </table>
  </ul>
</div>
</template>

<script>
    import { defineComponent } from 'vue'


    export default defineComponent({
        props: ['fileId'],
        components: {

        },
        data() {
            return {
                properties: {}
            }
        },
        methods: {
            getProperties()
            {
                axios.get('/api/file/properties' + '/' + this.fileId)
                .then((response)=>{
                    this.properties = response.data
                    console.log(response.data);
                })
            }
        },
        mounted() {
            this.getProperties();
        },
    })
</script>

<style scoped>

</style>
