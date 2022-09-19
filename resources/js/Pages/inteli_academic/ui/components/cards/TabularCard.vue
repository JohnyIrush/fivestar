<template>
 <div class="container bg-dark">
   <div class="row align-items-start">
     <div class="col ms-auto">
       <div class="row">
           <div class="col">
            <div class="d-flex flex-row p-3 bg-light">
              <div class=" form-check">
               <input class="form-check-input" type="checkbox" value="" id="">
              </div>
              <div class="dropdown">
                <button class="" type="button" id="" data-bs-toggle="dropdown"><i class="fas fa-caret-down"></i></button>
                <ul  class="dropdown-menu" >
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
           </div>
           <div class="col">
            <div class="d-flex flex-row p-3 bg-light">
              <div class="mr-2">
                  <span>Show: All</span>
              </div>
              <div class="dropdown">
                <button class="" type="button" id="" data-bs-toggle="dropdown"><i class="fas fa-caret-down"></i></button>
                <ul  class="dropdown-menu" >
                  <li><a class="dropdown-item" href="#">All</a></li>
                  <li><a class="dropdown-item" href="#">Videos</a></li>
                  <li><a class="dropdown-item" href="#">Audios</a></li>
                </ul>
              </div>
            </div>
           </div>
           <div class="col">
            <div class="d-flex flex-row p-3 bg-light">
              <div class="mr-2">
                  <span>Sort: Most Recent</span>
              </div>
              <div class="dropdown">
                <button class="" type="button" id="" data-bs-toggle="dropdown"><i class="fas fa-caret-down"></i></button>
                <ul  class="dropdown-menu" >
                  <li><a class="dropdown-item" href="#">Most Recent</a></li>
                  <li><a class="dropdown-item" href="#">Last Played</a></li>
                  <li><a class="dropdown-item" href="#">A-Z</a></li>
                  <li><a class="dropdown-item" href="#">Z-A</a></li>
                </ul>
              </div>
            </div>
           </div>
       </div>
     </div>
     <div class="col me-auto">
       <div class="row">
           <div class="col">
           </div>
           <div class="col"></div>
           <div class="col">
            <div class="p-3 bg-light">
              <button class="" type="button" id="" data-bs-toggle="dropdown"><i class="fas fa-plus mr-2"></i> Add</button>
            </div>
           </div>
       </div>
     </div>
   </div>
     <div class="card">
       <div class="row">
           <div class="col ms-auto">
            <div class="row">
             <div class="col d-flex flex-row">
              <div class="">
               <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="" >
               </div>
              </div>
              <div class="">
               <div class="img-box-size">
                <img src="/images/components/wolves-1400819_640.jpg">
               </div>
              </div>
             </div>
             <div class="col">
              <div class="d-flex align-items-start flex-column">
                <div class="mb-auto p-2 bd-highlight">Flex item</div>
                <div class="p-2 bd-highlight">Flex item</div>
              </div>
             </div>
             <div class="col">
              <div class="d-flex align-items-start flex-column">
                <div class="mb-auto p-2 bd-highlight">Flex item</div>
                <div class="p-2 bd-highlight">Flex item</div>
              </div>
             </div>
            </div>
           </div>
           <div class="col me-auto">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                 <div class="d-flex flex-row">
                     <span class="mr-4"><i class="fas fa-share"></i> Share</span>
                     <span class="mr-4"><i class="fas fa-folder"></i></span>
                     <span class="mr-4"><i class="fas fa-trash-alt "></i></span>
                     <button class="mr-4"><i class="fas fa-caret-down" data-bs-toggle="collapse" data-bs-target="#card-more" aria-expanded="false" aria-controls="card-more"></i></button>
                 </div>
                </div>
            </div>
           </div>
       </div>
     </div>
    <div class="row">
      <div class="col">
        <div class="collapse multi-collapse" id="card-more">
          <div class="card card-body">
        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
          </div>
        </div>
      </div>
    </div>
 </div>
</template>

<script>

export default{
  name: "TabularCard",
	components:{

	},
   data (){
    return {

   }
 },
 computed:{

 },
 methods:{
    dropdown()
    {
      var dropdown = new bootstrap.Dropdown(document.getElementById('dropdown'))
      dropdown.toggle()
    }
 }
}

</script>

<style scoped>
	.img-box-size
    {
        height: 100% !important;
        width: 100px !important;
    }
</style>
