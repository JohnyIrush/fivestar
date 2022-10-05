<template>
 <!--<div class="container">-->
  <div class="row" >
   <div class="col-12 col-lg-9">
    <ul class="nav nav-tabs glass-content" id="formBuilderTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="questions-tab" data-bs-toggle="tab" data-bs-target="#questions" type="button" role="tab" aria-controls="questions" aria-selected="true"><i class="fas fa-question-circle"></i>Questions</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="response-tab" data-bs-toggle="tab" data-bs-target="#response" type="button" role="tab" aria-controls="response" aria-selected="false"><i class="fas fa-reply"></i>Response</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false"><i class="fas fa-cogs"></i>Settings</button>
      </li>
    </ul>
    <div class="tab-content glass-content" id="formBuilderTabContent">
      <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
       <div class="card text-center glass-content mt-2 mb-2">
         <div class="card-body">
           <main-form 
           :formPath="'form/create'"
           :showSubmitButton="false"
           ></main-form>
         </div>
       </div>
       <div class="card text-center glass-content">
         <div class="card-header">
          <div class="row">
           <div class="col-8 align-self-start">
            <div class="input-group flex-nowrap form-input-type-wrapper">
              <input type="text" class="form-control form-input-style" placeholder="Question" aria-label="Type" aria-describedby="addon-wrapping">
            </div>
           </div>
           <div class="col-4 align-self-end">
            <div class="input-group flex-nowrap form-input-type-wrapper">
              <span class="input-group-text" id="addon-wrapping" v-html="selectedType.icon"></span>
              <input type="text" class="form-control form-input-type-input" placeholder="Type" aria-label="Type" aria-describedby="addon-wrapping" readonly v-model="selectedType.field">
              <span class="input-group-text" id="addon-wrapping">
                <modal_button 
                @showmodal="launchModal('main-modal')" 
                :name="''" 
                :icon_classes="'fas fa-caret-square-down fa-2x'" 
                :title="''" :modalSize="'modal-sm'" 
                :modalWidth="'w-25'"  
                :componentType="''" 
                :componentName="'DataList'" 
                :dataPath="''" 
                :listData="inputTypes"
                :fieldName="'field'"
                :fieldIcon="'icon'"
                :modalClasses="''"
                :modalDialogClasses="'modal-dialog-scrollable '"
                :modalContentClasses="'modal-height'"
                :backDrop="false"
                ></modal_button>
              </span>
            </div>
           </div>
          </div>
         </div>
         <div class="card-body ">
            <main-form 
           :formBuilderFields="selectedType"
           :showSubmitButton="false"
           ></main-form>
         </div>
         <div class="card-footer border-2 border-dark">
          <div class="row align-items-end">
            <div class="col">
             
            </div>
            <div class="col">
              
            </div>
            <div class="col d-flex flex-row mr-3">
              <i class="fas fa-clone fa-2x mr-3"></i>
              <i class="fas fa-trash-alt fa-2x mr-3"></i>
              <div class="form-check form-switch mr-3">
                <label class="form-check-label" for="form-input-required">Required</label>
                <input class="form-check-input" type="checkbox" id="form-input-required">
              </div>
              <i class="fas fa-ellipsis-v fa-2x mr-3"></i>
            </div>
          </div>
         </div>
       </div>
      </div>
      <div class="tab-pane fade" id="response" role="tabpanel" aria-labelledby="response-tab">...</div>
      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">Platform Settings</h6>
                 </div>
                 <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                       </div>
                     </li>
                   </ul>
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0 pb-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
      </div>
    </div>
   </div>
   <div class="col-12 col-xl-3">
    <div class="card h-100">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-0">More</h6>
      </div>
      <div class="card-body p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
            <div class="avatar me-3">
               <i class="fa fa-comments text-secondary" aria-hidden="true"></i>
            </div>
            <div class="d-flex align-items-start flex-column justify-content-center">
              <h6 class="mb-0 text-sm">Notifications</h6>
              <p class="mb-0 text-xs">Important Noifications</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
   </div>
  </div>
 <!--</div>-->
 <Footer></Footer>
 <modal @selectedListItem="selectedListItem"></modal>
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../../../Theme/widgets/Footer.vue'

    import {store} from "../../../../store/store.js"

    import MainForm from '../../../inteli_library/ui/components/forms/MainForm.vue'

    import modal_button from '../../../inteli_library/ui/components/buttons/modal-button.vue'

    import modal from '../../../inteli_library/ui/components/modals/modal.vue'

    export default defineComponent({
        components: {
            Footer,
            MainForm,
            modal_button,
            modal
        },
        data() {
            return {
                selectedType: {
                    field: "Text",
                    type: "text",
                    icon: '<i class="fas fa-paragraph fa-2x"></i>'
                    },
                analytics: [],
                inputTypes: [
                    {
                    field: "Text",
                    type: "text",
                    icon: '<i class="fas fa-paragraph fa-2x"></i>'
                    },
                    {
                    field: "Phone",
                    type: "tel",
                    icon: '<i class="fas fa-phone fa-2x"></i>'
                    },
                    {
                    field: "Password",
                    type: "password",
                    icon: '<i class="fas fa-lock fa-2x"></i>'
                    },
                    {
                    field: "Radio",
                    type: "radio",
                    icon: '<i class="fas fa-dot-circle fa-2x"></i>'
                    },
                    {
                    field: "Checkbox",
                    type: "checkbox",
                    icon: '<i class="fas fa-check-square fa-2x"></i>'
                    },
                    {
                    field: "Color",
                    type: "color",
                    icon: '<i class="fas fa-palette fa-2x"></i>'
                    },
                    {
                    field: "Date",
                    type: "date",
                    icon: '<i class="fas fa-calendar-week fa-2x"></i>'
                    },
                    {
                    field: "Time",
                    type: "time",
                    icon: '<i class="fas fa-clock fa-2x"></i>'
                    },
                    {
                    field: "Email",
                    type: "email",
                    icon: '<i class="fas fa-inbox fa-2x"></i>'
                    },
                    {
                    field: "File Upload",
                    type: "file",
                    icon: '<i class="fas fa-upload fa-2x"></i>'
                    },
                    {
                    field: "Number",
                    type: "number",
                    icon: '<i class="fas fa-sort-numeric-up-alt fa-2x"></i>'
                    },
                    {
                    field: "Range",
                    type: "range",
                    icon: '<i class="fas fa-weight fa-2x"></i>'
                    },
                    {
                    field: "Search",
                    type: "search",
                    icon: '<i class="fas fa-search fa-2x"></i>'
                    },
                    {
                    field: "Url",
                    type: "url",
                    icon: '<i class="fas fa-link fa-2x"></i>'
                    },
                ]
            }
        },

        methods: {
          selectedListItem(event)
          {
              console.log("Form Builder",event)
              store.state.form.fields = event
              this.selectInputType(event)
          },
          selectInputType(type)
          {
            this.selectedType = type;
          },
          inputTypeDropdown()
          {
            var Dropdown = document.getElementById("form-input-type-dropdown");
            console.log(Dropdown)
            this.drop = !this.drop
          },
          launchModal(modal)
          {
            var modal = new bootstrap.Modal(document.getElementById(modal))
            modal.show()
          },
            trim(text, length, comment)
            {
                return text.substr(0,length) + comment;
            },
            getAnalytics(url)
            {
                axios.get(url)
                .then((response)=>{
                   this.analytics= response.data
                })
            },
        },
        mounted()
        {
            this.getAnalytics("analytics")

            var count = 1
            setTimeout(demo, 500)
            setTimeout(demo, 700)
            setTimeout(demo, 900)
            setTimeout(reset, 2000)

            setTimeout(demo, 2500)
            setTimeout(demo, 2750)
            setTimeout(demo, 3050)


            var mousein = false
            function demo() {
               if(mousein) return
               document.getElementById('demo' + count++)
               .classList.toggle('hover')
   
            }

            function demo2() {
               if(mousein) return
               document.getElementById('demo2')
                  .classList.toggle('hover')
            }

            function reset() {
               count = 1
               var hovers = document.querySelectorAll('.hover')
               for(var i = 0; i < hovers.length; i++ ) {
                  hovers[i].classList.remove('hover')
               }
            }

            document.addEventListener('mouseover', function() {
               mousein = true
               reset()
            })
        },
        created()
        {
          store.state.form.fields = this.selectedType
        }
    })
</script>


<style scoped>


.glass-container
{
   /*
    position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);
    */
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}


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

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
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

.avatar-size
{
    height: 150px !important;
    width: 150px !important;
}

.form-field-container
{
  border-bottom: 2px solid #adadad !important;
  /*margin: 30px 0 !important;*/
  width: 100% !important;

}

.form-input-style
{
    background: transparent;
    border: none;
}

.form-input-type-input{
  font-size: 24px !important;
}

.form-input-type-wrapper
{
  height: 50px !important;
}

.input-type-scroll{
  overflow: scroll;
}

.modal-height {
  height: 25vh !important; /* = 100% of the .modal-dialog block */
}

/* HTML Nav Styles */
/* HTML Nav Styles */
/* HTML Nav Styles */
nav menuitem {
   position:relative;
   display:block;
   opacity:0;
   cursor:pointer;
}

nav menuitem > menu {
   position: absolute;
   pointer-events:none;
}
nav > menu { display:flex; }

nav > menu > menuitem { pointer-events: all; opacity:1; }
menu menuitem a { white-space:nowrap; display:block; }
   
menuitem:hover > menu {
   pointer-events:initial;
}
menuitem:hover > menu > menuitem,
menu:hover > menuitem{
   opacity:1;
}
nav > menu > menuitem menuitem menu {
   transform:translateX(100%);
   top:0; right:0;
}
/* User Styles Below Not Required */
/* User Styles Below Not Required */
/* User Styles Below Not Required */

nav { 
   margin-top: 40px;
   margin-left: 40px;
}

nav a {
   background:#75F;
   color:#FFF;
   min-width:190px;
   transition: background 0.5s, color 0.5s, transform 0.5s;
   margin:0px 6px 6px 0px;
   padding:20px 40px;
   box-sizing:border-box;
   border-radius:3px;
   box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
   position:relative;
}

nav a:hover:before {
   content: '';
   top:0;left:0;
   position:absolute;
   background:rgba(0, 0, 0, 0.2);
   width:100%;
   height:100%;
}

nav > menu > menuitem > a + menu:after{
   content: '';
   position:absolute;
   border:10px solid transparent;
   border-top: 10px solid white;
   left:12px;
   top: -40px;  
}
nav menuitem > menu > menuitem > a + menu:after{ 
   content: '';
   position:absolute;
   border:10px solid transparent;
   border-left: 10px solid white;
   top: 20px;
   left:-180px;
   transition: opacity 0.6, transform 0s;
}

nav > menu > menuitem > menu > menuitem{
   transition: transform 0.6s, opacity 0.6s;
   transform:translateY(150%);
   opacity:0;
}
nav > menu > menuitem:hover > menu > menuitem,
nav > menu > menuitem.hover > menu > menuitem{
   transform:translateY(0%);
   opacity: 1;
}

menuitem > menu > menuitem > menu > menuitem{
   transition: transform 0.6s, opacity 0.6s;
   transform:translateX(195px) translateY(0%);
   opacity: 0;
} 
menuitem > menu > menuitem:hover > menu > menuitem,  
menuitem > menu > menuitem.hover > menu > menuitem{  
   transform:translateX(0) translateY(0%);
   opacity: 1;
}

</style>
