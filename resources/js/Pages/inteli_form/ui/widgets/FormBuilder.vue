<template>
 <!--START INTELI FORM BUILDER BUILDER-->
  <!--START INTELI FORM BUILDER BODY-->
   <div class="col-12">
    <!-- START INTELI FORM BUILDER BODY MAIN MENU-->
    <ul v-if="Mode" class="nav nav-tabs glass-content" id="formBuilderTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="questions-tab" data-bs-toggle="tab" data-bs-target="#questions" type="button" role="tab" aria-controls="questions" aria-selected="true"><i class="fas fa-question-circle"></i>Builder</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="response-tab" data-bs-toggle="tab" data-bs-target="#response" type="button" role="tab" aria-controls="response" aria-selected="false"><i class="fas fa-reply"></i>Response</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false"><i class="fas fa-cogs"></i>Settings</button>
      </li>
    </ul>
    <!-- END INTELI FORM BUILDER BODY MAIN MENU-->
    <!-- START INTELI FORM BUILDER BODY MAIN MENU-->
    <div class="tab-content glass-content" id="formBuilderTabContent">
      <!-- START INTELI FORM BUILDER-->
      <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
       <div class="card text-center glass-content">
        <!-- START FORM BUILDER HEADER-->
        <div 
          @click="toggleEditMode('form-header','')" 
          @mouseover="toggleEditMode('form-header', '')" 
          class="row" 
          >
         <div class="col-12 col-lg-11 col-xl-11">
          <!-- FORM TITLE AND DESCRIPTION -->
           <div class="card glass-content mt-2 mb-2">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <img src="/images/form/inteliform.jpg" class="w-100 form-cover-image" alt="">
                </div>
              </div>
            </div>
            <div class="card-body" v-if="!Mode">
              <div class="row">
                <div class="d-flex flex-column">
                  <h4 class=""> {{form.title}} </h4>
                  <p class="">{{form.description}}</p>
                </div>
              </div>
            </div>
             <div v-if="Mode" class="card-body">
               <text-input
                :formFieldClasses="' form-input-style'"
                :formFieldLabelClasses="'fs-1 fw-bold text-capitalize text-left'"
                :formFieldContainerClasses="'form-field-container'"
                :fieldData="{
                     title: 'form title',
                     image: '',
                     value: '',
                     description: 'form title, describes purpose of form',
                     name: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'text',
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: 'Text'
                       },
                       icon: {
                        id: '',
                        icon: ''
                       },
                       component: {
                        id: '',
                        component: 'TextInput'
                       },
                     }
                }"
                @TextInputInput="updateForm($event,'title')"
               > 
               </text-input>
               <text-area-input
                :formFieldClasses="' form-input-style'"
                :formFieldLabelClasses="'fs-1 fw-bold text-capitalize text-left'"
                :formFieldContainerClasses="'form-field-container'"
                :fieldData="{
                     title: 'form description',
                     image: '',
                     value: '',
                     description: 'explain the more about this form',
                     name: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'text',
                       },
                       cols: {
                        id: '',
                        cols: 4,
                       },
                       rows: {
                        id: '',
                        rows: 6
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: 'Text'
                       },
                       icon: {
                        id: '',
                        icon: ''
                       },
                       component: {
                        id: '',
                        component: 'TextInput'
                       },
                     }
                }"
                @TextAreaInputInput="updateForm($event, 'description')"
               > 
               </text-area-input>
             </div>
           </div>
          <!-- FORM TITLE AND DESCRIPTION -->
         </div>
         <!-- START FORM BUILDER MENU SIDEBAR-->
         <div v-if="Mode" class="col-12 col-lg-1 col-xl-1">
           <div 
             id="form-builder-menu" 
             class="glass-content" 
             v-if="editMode.fieldindex == 'form-header'">
            <ul class="nav flex-column">
             <li class="nav-item">
               <a 
               role="button"
               class="nav-link active" 
               aria-current="page"
               data-bs-toggle="tooltip" 
               data-bs-placement="right" 
               title="Add Field"
               @click="addField('form-header',{},'','section1')"
               >
               <i class="fas fa-plus-circle fa-2x"></i>
              </a>
             </li>
             <li class="nav-item">
               <a 
               class="nav-link" 
               aria-current="page"
               data-bs-toggle="tooltip" 
               data-bs-placement="right" 
               title="Add Section"
               @click="addSection('form-header')"
               >
               <i class="fas fa-puzzle-piece fa-2x"></i>            
               </a>
             </li>
             <li class="nav-item">
               <a 
               class="nav-link" 
               aria-current="page"
               data-bs-toggle="tooltip" 
               data-bs-placement="right" 
               title="Import Fields">
               <i class="fas fa-file-import fa-2x"></i>
              </a>
             </li>
             <li class="nav-item">
               <a 
               class="nav-link" 
               aria-current="page"
               data-bs-toggle="tooltip" 
               data-bs-placement="right" 
               title="Add Title And Description">
               <i class="fas fa-heading fa-2x"></i>
              </a>
             </li>
             <li class="nav-item">
               <a 
               class="nav-link" 
               aria-current="page"
               data-bs-toggle="tooltip" 
               data-bs-placement="right" 
               title="Add Image">
               <i class="fas fa-images fa-2x"></i>
              </a>
             </li>
             <li class="nav-item">
               <a 
               class="nav-link" 
               aria-current="page"
               data-bs-toggle="tooltip" 
               data-bs-placement="right" 
               title="Add Video">
               <i class="fas fa-video fa-2x"></i>
              </a>
             </li>
            </ul>
           </div>
         </div>
         <!-- END FORM BUILDER MENU SIDEBAR-->
        </div>
        <!-- END FORM BUILDER HEADER-->
        <!-- START FORM BUILDER BODY-->
        <draggable 
          class="dragArea list-group w-full" 
          :list="form.sections" 
          @change="log"
        >
        <div 
          class="row"
          v-for="(section, sectionindex) in form.sections" 
          :key="sectionindex" 
          >   
           <div class="col-12 card">
            <div class="card-header" >
           <div class="col-12">
            <div class="row">
              <!-- START FORM SECTION TITLE AND DESCRIPTION -->
              <div class="col-12 col-lg-11 col-xl-11">
               <div class="card glass-content mt-2 mb-2">
                 <div class="card-body" v-if="!Mode">
                   <div class="row">
                     <div class="d-flex flex-column">
                       <h6 class=""> {{section.title}} </h6>
                       <p class="">{{section.desription}}</p>
                     </div>
                   </div>
                </div>
                 <div class="card-body" v-if="Mode">
                   <text-input
                    :formFieldClasses="' form-input-style'"
                    :formFieldLabelClasses="'fs-1 fw-bold text-capitalize text-left'"
                    :formFieldContainerClasses="'form-field-container'"
                    :fieldData="{
                     title: 'field title',
                     image: '',
                     value: '',
                     description: '',
                     name: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'text',
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: 'Text'
                       },
                       icon: {
                        id: '',
                        icon: ''
                       },
                       component: {
                        id: '',
                        component: 'TextInput'
                       },
                     }
                    }"
                    @TextInputInput="updateSection($event,'title', sectionindex)"
                   > 
                   </text-input>
                   <text-area-input
                    :formFieldClasses="' form-input-style'"
                    :formFieldLabelClasses="'fs-1 fw-bold text-capitalize text-left'"
                    :formFieldContainerClasses="'form-field-container'"
                    :fieldData="{
                     title: 'field title',
                     image: '',
                     value: '',
                     description: '',
                     name: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'text',
                       },
                       cols: {
                        id: '',
                        cols: 4,
                       },
                       rows: {
                        id: '',
                        rows: 6
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: 'Text'
                       },
                       icon: {
                        id: '',
                        icon: ''
                       },
                       component: {
                        id: '',
                        component: 'TextAreaInput'
                       },
                     }
                    }"
                    @TextAreaInputInput="updateSection($event, 'description', sectionindex)"
                   > 
                   </text-area-input>
                 </div>
               </div>
              </div>
              <!-- END FORM SECTION TITLE AND DESCRIPTION -->
              <!--START SECTION FORM BUILDER OPTIONS -->
             <div v-if="Mode" class="col-12 col-lg-1 col-xl-1">
              <div 
                id="form-builder-section-menu" 
                class="glass-content"                  >
               <ul class="nav flex-column">
                <li class="nav-item">
                  <a 
                  role="button"
                  class="nav-link active" 
                  aria-current="page"
                  data-bs-toggle="tooltip" 
                  data-bs-placement="right" 
                  title="Add Field"
                  @click="addField('', {}, '', sectionindex)"
                  >
                  <i class="fas fa-plus-circle fa-2x"></i>
                 </a>
                </li>
                <li class="nav-item">
                  <a 
                  class="nav-link" 
                  aria-current="page"
                  data-bs-toggle="tooltip" 
                  data-bs-placement="right" 
                  title="Import Fields">
                  <i class="fas fa-file-import fa-2x"></i>
                 </a>
                </li>
                <li class="nav-item">
                  <a 
                  class="nav-link" 
                  aria-current="page"
                  data-bs-toggle="tooltip" 
                  data-bs-placement="right" 
                  title="Add Section"
                  @click="addSection(sectionindex)"
                  >
                  <i class="fas fa-puzzle-piece fa-2x"></i>            
                  </a>
                </li>
                <li class="nav-item">
                  <a 
                  class="nav-link" 
                  aria-current="page"
                  data-bs-toggle="tooltip" 
                  data-bs-placement="right" 
                  title="Add Title And Description">
                  <i class="fas fa-heading fa-2x"></i>
                 </a>
                </li>
                <li class="nav-item">
                  <a 
                  class="nav-link" 
                  aria-current="page"
                  data-bs-toggle="tooltip" 
                  data-bs-placement="right" 
                  title="Add Image">
                  <i class="fas fa-images fa-2x"></i>
                 </a>
                </li>
                <li class="nav-item">
                  <a 
                  class="nav-link" 
                  aria-current="page"
                  data-bs-toggle="tooltip" 
                  data-bs-placement="right" 
                  title="Add Video">
                  <i class="fas fa-video fa-2x"></i>
                 </a>
                </li>
               </ul>
              </div>
             </div>
             <!-- END SECTION FORM BUILDER OPTIONS -->
            </div>
           </div>
            </div>
            <div class="card-body">
              <draggable 
               class="dragArea list-group w-full" 
               :list="form.sections[sectionindex].fields" 
               @change="log">
          <div class="row">
           <div
             class="col-6"
             v-for="(field, index) in form.sections[sectionindex].fields" 
             :key="index" 
             @click="toggleEditMode(index,sectionindex)" 
           >
            <div class="row">
              <!-- START FORM SECTION FIELD FORM BUILDER OPTIONS -->
              <div class="col-12">
               <div 

                v-if="(editMode.fieldindex == index) && (editMode.sectionindex == sectionindex) && Mode" 
                id=" index + '-form-builder-menu'" 
                class="glass-content">
                <ul class="nav">
                 <li class="nav-item">
                   <a 
                   role="button"
                   class="nav-link active" 
                   aria-current="page"
                   data-bs-toggle="tooltip" 
                   data-bs-placement="right" 
                   title="Add Field"
                   @click="addField(index, {}, '', sectionindex)"
                   >
                   <i class="fas fa-plus-circle fa-2x"></i>
                  </a>
                 </li>
                <li class="nav-item">
                  <a 
                  class="nav-link" 
                  aria-current="page"
                  data-bs-toggle="tooltip" 
                  data-bs-placement="right" 
                  title="Add Section"
                  @click="addSection(sectionindex)"
                  >
                  <i class="fas fa-puzzle-piece fa-2x"></i>            
                  </a>
                </li>
                 <li class="nav-item">
                   <a 
                   class="nav-link" 
                   aria-current="page"
                   data-bs-toggle="tooltip" 
                   data-bs-placement="right" 
                   title="Import Fields">
                   <i class="fas fa-file-import fa-2x"></i>
                  </a>
                 </li>
                 <li class="nav-item">
                   <a 
                   class="nav-link" 
                   aria-current="page"
                   data-bs-toggle="tooltip" 
                   data-bs-placement="right" 
                   title="Add Title And Description">
                   <i class="fas fa-heading fa-2x"></i>
                  </a>
                 </li>
                 <li class="nav-item">
                   <a 
                   class="nav-link" 
                   aria-current="page"
                   data-bs-toggle="tooltip" 
                   data-bs-placement="right" 
                   title="Add Image">
                   <i class="fas fa-images fa-2x"></i>
                  </a>
                 </li>
                 <li class="nav-item">
                   <a 
                   class="nav-link" 
                   aria-current="page"
                   data-bs-toggle="tooltip" 
                   data-bs-placement="right" 
                   title="Add Video">
                   <i class="fas fa-video fa-2x"></i>
                  </a>
                 </li>
                </ul>
               </div>
              </div>
              <!-- END FORM SECTION FIELD FORM BUILDER OPTIONS -->
              <div class="col-12">
               <div class="card glass-content mt-2 mb-2">
                <div 
                  class="card-header" 
                   v-if="(editMode.fieldindex == index) && (editMode.sectionindex == sectionindex) && Mode" 
                  >
                 <div class="row">
                  <div class="col-4 align-self-start">
                  </div>
                  <div class="col-8 align-self-end">
                   <div class="input-group flex-nowrap form-input-type-wrapper">
                     <span class="input-group-text" id="addon-wrapping" v-html="field.settings.icon.icon"></span>
                     <input 
                        type="text" 
                        class="form-control form-input-type-input" 
                        placeholder="Type" aria-label="Type" 
                        aria-describedby="addon-wrapping" 
                        readonly 
                        v-model="field.settings.field.field"
                        >
                     <span class="input-group-text" id="addon-wrapping">
                       <modal-button 
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
                       @click="setTypeUpdateIndex(index,sectionindex)"
                       ></modal-button>
                     </span>
                   </div>
                  </div>
                 </div>
                </div>
                <div class="card-body ">
                  <component 
                   :is="field.settings.component.component"
                   :formFieldClasses="' form-input-style'"
                   :formFieldLabelClasses="'fs-1 fw-bold text-capitalize  text-left'"
                   :formFieldContainerClasses="'form-field-container'"
                   :fieldData="field"
                   :optionid="optionid"
                   :fieldSettings="((editMode.fieldindex == index) 
                                    && 
                                    (editMode.sectionindex == sectionindex) && Mode)"
                   @TextInputInput="updateField($event,index, sectionindex)"
                   @TextAreaInputInput="updateField($event,index, sectionindex)"
                   @TelInputInput="updateField($event,index)"
                   @PasswordInputInput="updateField($event,index, sectionindex)"
                   @EmailInputInput="updateField($event,index, sectionindex)"
                   @UrlInputInput="updateField($event,index)"
                   @SearchInputInput="updateField($event,index, sectionindex)"
                   @NumberInputInput="updateField($event,index, sectionindex)"
                   @DateInputInput="updateField($event,index, sectionindex)"
                   @TimeInputInput="updateField($event,index)"
                   @RadioInputInput="updateField($event,index, sectionindex)"
                   @CheckboxInputInput="updateField($event,index, sectionindex)"
                   @FileInputInput="updateField($event,index, sectionindex)"
                   @ColorInputInput="updateField($event,index, sectionindex)"
                   @DeleteFieldOption="deleteFieldOption"
                  >
                  </component>
                </div>
                <div 
                   v-if="(editMode.fieldindex == index) 
                   && 
                   (editMode.sectionindex == sectionindex) && Mode" 
                   class="card-footer border-2 border-dark">
                 <div class="row align-items-end">
                   <div class="col">
                    
                   </div>
                   <div class="col">
                     
                   </div>
                   <div class="col d-flex flex-row mr-3">
                     <i 
                      class="fas fa-clone fa-2x mr-3" 
                      @click="dublicateField(index, sectionindex)"
                      >
                      </i>
                     <i 
                       class="fas fa-trash-alt fa-2x mr-3" 
                       @click="removeField(index, sectionindex)">
                     </i>
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
            </div>
           </div> 
          </div>

             </draggable>
            </div>
            <div>
                <div 
                   v-if="Mode"
                   class="card-footer border-2 border-dark">
                 <div class="row align-items-end">
                   <div class="col">
                    
                   </div>
                   <div class="col">
                     
                   </div>
                   <div class="col d-flex flex-row mr-3">
                     <i 
                      class="fas fa-clone fa-2x mr-3" 
                      @click="dublicateSection(sectionindex)"
                      >
                      </i>
                     <i 
                       class="fas fa-trash-alt fa-2x mr-3" 
                       @click="removeSection(sectionindex)">
                     </i>
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
          </div>
        </draggable>
        <!-- END FORM BUILDER BODY-->
       </div>
      </div>
      <!-- END INTELI FORM BUILDER-->

      <!-- START INTELI FORM VALUES/RESPONSES-->
      <div class="tab-pane fade" id="response" role="tabpanel" aria-labelledby="response-tab">...</div>
      <!-- END INTELI FORM VALUES/RESPONSES-->

      <!-- START INTELI FORM SETTINGS-->
      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">Form Settings</h6>
                 </div>
                 <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Builder Settings</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Make this a quiz</label>
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
      <!-- END INTELI FORM SETTINGS-->
    </div>
   </div>
  <!-- END INTELI FORM BUILDER BODY-->
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../../../Theme/widgets/Footer.vue'

    import {store} from "../../../../store/store.js"

    import MainForm from '../../../inteli/ui/components/forms/MainForm.vue'

    import ModalButton from '../../../inteli/ui/components/buttons/ModalButton.vue'
    import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

    import TextInput from '../components/inputs/TextInput.vue'
    import TextAreaInput from '../components/inputs/TextAreaInput.vue'
    import TelInput from '../components/inputs/TelInput.vue'
    import PasswordInput from '../components/inputs/PasswordInput.vue'
    import EmailInput from '../components/inputs/EmailInput.vue'
    import UrlInput from '../components/inputs/UrlInput.vue'
    import SearchInput from '../components/inputs/SearchInput.vue'
    import NumberInput from '../components/inputs/NumberInput.vue'
    import DateInput from '../components/inputs/DateInput.vue'
    import TimeInput from '../components/inputs/TimeInput.vue'
    import RangeInput from '../components/inputs/RangeInput.vue'
    import RadioInput from '../components/inputs/RadioInput.vue'
    import CheckboxInput from '../components/inputs/CheckboxInput.vue'
    import FileInput from '../components/inputs/FileInput.vue'
    import ColorInput from '../components/inputs/ColorInput.vue'

    import { VueDraggableNext } from 'vue-draggable-next'

    import VueLodash from 'vue-lodash'
    import lodash from 'lodash'

    import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'
    import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

    export default defineComponent({
       name: "FormBuilder",
       props: {
          Mode: {
           type: Boolean, // String, Number, Boolean, Function, Object, Array
           required: true,
           default: true
         },
         formDetails: Object,
         Delta: Object,
         SelectedInputType: {
          type: Object,
          default: {
                      id: '',
                     title: 'field title',
                     image: '',
                     value: '',
                     description: 'text field description',
                     name: "",
                     settings:{
                       type: {
                        id: '',
                        type: 'text',
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: "Text"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-paragraph fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'TextInput'
                       },
                     },
                     options: {

                     }
                    },
         }
       },
        components: {
            VueLodash: { name: 'custom' , lodash: lodash },
            draggable: VueDraggableNext,
            Footer,
            MainForm,
            ModalButton,
            MainModal,
            TextInput,
            TextAreaInput,
            TelInput,
            PasswordInput,
            EmailInput,
            UrlInput,
            SearchInput,
            NumberInput,
            DateInput,
            TimeInput,
            RangeInput,
            RadioInput,
            CheckboxInput,
            FileInput,
            ColorInput,
            TabPane,
            Tab
        },
        data() {
            return {
                selectedType: {
                      id: '',
                     title: 'field title',
                     image: '',
                     value: '',
                     description: 'text field description',
                     name: "",
                     settings:{
                       type: {
                        id: '',
                        type: 'text',
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: "Text"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-paragraph fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'TextInput'
                       },
                     },
                     options: {

                     }
                    },
                analytics: [],
                inputTypes: [
                    {
                      id: '',
                     title: 'field title',
                     image: '',
                     value: '',
                     description: 'text field description',
                     name: "",
                     settings:{
                       type: {
                        id: '',
                        type: 'text',
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: "Text"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-paragraph fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'TextInput'
                       },
                     }
                    },
                    {
                      id: '',
                     title: 'field title',
                     image: '',
                     value: '',
                     description: '',
                     name: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'textarea',
                       },
                       cols: {
                        id: '',
                        cols: 4,
                       },
                       rows: {
                        id: '',
                        rows: 6
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: 'Paragraph'
                       },
                       icon: {
                        id: '',
                        icon: ''
                       },
                       component: {
                        id: '',
                        component: 'TextAreaInput'
                       },
                     }
                    },
                    {
                      id: '',
                     title: 'field title',
                     image: '',
                     value: '',
                     description: '',
                     name: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'tel',
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       pattern : {
                        id: '',
                        pattern : '',
                       },
                       field: {
                        id: '',
                        field: "Phone"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-phone fa-2x"></i>',
                       },
                       component: {
                        id: '',
                        component: 'TelInput',
                       },
                     }
                    },
                    {
                      id: '',
                     title: 'field title',
                     image: '',
                     value: '',
                     description: '',
                     name: "",
                     settings:{
                       type: {
                        id: '',
                        type: 'password',
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       inputmode: {
                        id: '',
                        inputmode: false
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: "Password",
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-lock fa-2x"></i>',
                       },
                       component: {
                        id: '',
                        component: 'PasswordInput',
                       },
                     }
                    },
                    {
                     title: 'field title',
                     image: '',
                     value: '',
                     description: '',
                     name: "",
                     settings:{
                       type: {
                        id: '',
                        type: 'radio'
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       disabled: {
                        id: '',
                        disabled: ''
                       },
                       required: {
                        id: '',
                        required: ''
                       },
                       field: {
                        id: '',
                        field: "Radio"
                       },
                       type: {
                        id: '',
                        type: "radio"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-dot-circle fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'RadioInput'
                       },
                     },
                     options:{

                     }
                    },
                     {
                      id: '',
                     title: 'checkbox field', 
                     image: '',
                     value: '',
                     description: '',
                     name: "",
                     settings:{
                       type: {
                        id: '',
                        type: 'checkbox'
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       disabled: {
                        id: '',
                        disabled: ''
                       },
                       required: {
                        id: '',
                        required: ''
                       },
                       field: {
                        id: '',
                        field: "Checkbox"
                       },
                       type: {
                        id: '',
                        type: "checkbox"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-check-square fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'CheckboxInput',
                       },
                     },
                     options:{

                     }
                    },
                    {
                      id: '',
                     title: 'color field title',
                     name: 'color',
                     image: '',
                     value: '',
                     description: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'color'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       field: {
                        id: '',
                        field: "Color"
                       },
                       type: {
                        id: '',
                        type: "color"
                       },
                       icon: {
                        id: '',
                        icons: '<i class="fas fa-palette fa-2x"></i>',
                      },
                       component: {
                        id: '',
                        component: 'ColorInput'
                       },
                     }
                    },
                     {
                      id: '',
                     title: 'field title',
                     name: '',
                     image: '',
                     value: '',
                     description: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'date'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       field: {
                        id: '',
                        field: "Date"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-calendar-week fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'DateInput'
                       },
                     }
                    },
                     {
                      id: '',
                     title: 'field title',
                     name: '',
                     image: '',
                     value: '',
                     description: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'time'
                       },
                       default : {
                        id: '',
                        default : false
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       min: {
                        id: '',
                        min :  ''
                       },
                       max: {
                        id: '',
                        max: ""
                       },
                       field: {
                        id: '',
                        field: "Time"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-clock fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'TimeInput'
                       },
                     }
                    },
                    {
                      id: '',
                     title: 'email field title',
                     name: '',
                     image: '',
                     value: '',
                     description: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'email'
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : 'off'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength :  {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20,
                       },
                       size: {
                        id: '',
                        size: ''
                       },
                       field: {
                        id: '',
                        field: "Email"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-inbox fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'EmailInput'
                       },
                     }

                    },
                    {
                      id: '',
                     title: 'field title',
                     name: '',
                     image: '',
                     value: '',
                     description: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'file'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       multiple: {
                        id: '',
                        multiple: false
                       },
                       accept: {
                        id: '',
                        accept: ""
                       },
                       maxNoOfFiles:{
                        id: '',
                        maxNoOfFiles: ''
                       },
                       maxFileSize:{
                        id: '',
                        maxFileSize: ''
                       },
                       field: {
                        id: '',
                        field: "File Upload"
                       },
                       type: {
                        id: '',
                        type: "file"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-upload fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'FileInput'
                       },
                     }
                    },
                   {
                    id: '',
                     title: 'number field title',
                     name: '',
                     image: '',
                     value: '',
                     description: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'number'
                       },
                       autocorrect: {
                        id: '',
                        autocorrect: true
                       },
                       default: {
                        id: '',
                        default: false
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : false
                       },
                       placeholder: {
                        id: '',
                        placeholder: 'field'
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength :  {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: "Number"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-sort-numeric-up-alt fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'NumberInput'
                       },
                     }
                    },
                    {
                      id: '',
                     title: 'field title',
                     name: '',
                     image: '',
                     value: '',
                     description: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'range'
                       },
                       autocorrect: {
                        id: '',
                        autocorrect: true
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : false
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       min :  {
                        id: '',
                        min :  20
                       },
                       max :  {
                        id: '',
                        max :  20
                       },
                       field: {
                        id: '',
                        field: "Range"
                       },
                       type: {
                        id: '',
                        type: "range"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-weight fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'RangeInput',
                       }
                     }
                    },
                    {
                      id: '',
                     title: 'field title',
                     name: '',
                     image: '',
                     value: '',
                     description: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'tel'
                       },
                       placeholder: {
                        id: '',
                        placeholder: true
                       },
                       default: {
                        id: '',
                        default: true
                       },
                       autocorrect: {
                        id: '',
                        autocorrect: true
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : false
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength : {
                        id: '',
                        minlength :  3
                       },
                       maxlength :  {
                        id: '',
                        maxlength :  20
                       },
                       field: {
                        id: '',
                        field: "Search"
                       },
                       type: {
                        id: '',
                        type: "search",
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-search fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'SearchInput'
                       },
                     }
                    },
                    {
                     id: '',
                     user_id: '',
                     title: 'field title',
                     name: '',
                     image: '',
                     value: '',
                     description: '',
                     settings:{
                       type: {
                        id: '',
                        type: 'url'
                       },
                       autocorrect: {
                        id: '',
                        autocorrect: true
                       },
                       autocomplete : {
                        id: '',
                        autocomplete : false
                       },
                       required : {
                        id: '',
                        required : false
                       }, 
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       minlength :  {
                        id: '',
                        minlength :  3
                       },
                       maxlength : {
                        id: '',
                        maxlength :  20
                       },
                       pattern: {
                        id: '',
                        pattern: ""
                       },
                       field: {
                        id: '',
                        field: "Url"
                       },
                       type: {
                        id: '',
                        type: "url"
                       },
                       icon: {
                        id: '',
                        icon: '<i class="fas fa-link fa-2x"></i>'
                       },
                       component: {
                        id: '',
                        component: 'UrlInput'
                       },
                     }
                    },
                ],
                updateTypeIndex: {
                  index: '',
                  sectionindex: '',
                },
                editMode: {
                  fieldindex: 'form-header',
                  sectionindex: '',
                },
                DragDrop:{
                  targetindex: "",
                  cardindex: "",
                  dragoverindex: ""
                },
                form: this.formDetails,
                initialresourceId: {},
                formResource: {},
                formScreenShot: '',
            }
        },

        methods: {
          screenShot(elementid = '', elemntclass = '', variable = '')
          {
            var self = this
            html2canvas(document.getElementById(elementid)).then(function(canvas){
            self[variable] = canvas.toDataURL()
            console.log("screenShot", self[variable])
          })
         },
          getRequest(url, variable = '')
          {
           axios.get(url)
           .then((response)=>{
            if (variable.length !== 0)
            {
              this[variable] = response.data
            }
           })
          },
          deleteFieldOption(event)
          {
            this.postRequest('form/field/option/destroy', {id: event.id})
          },
          postRequest(url, data = {}, variable = '')
          {
           axios.post(url, data)
           .then((response)=>{
            if (variable.length !== 0)
            {
              this[variable] = response.data
            }
            console.log('form',this.form,'response',response.data)
           })
          },
          updateSection(event, property, sectionindex)
          {
            this.form.sections[sectionindex][property] = event.value
          },
          updateForm(event, property)
          {
            this.form[property] = event.value
          },
           dragOver(event, index)
           {

           this.DragDrop.dragoverindex = index

           var keys = Object.keys(this.form.fields)

           this.form.fields = this.addToObject(this.form.fields, 
                             this.DragDrop.cardindex, 
                             this.form.fields[this.DragDrop.cardindex], 
                             keys.indexOf(this.DragDrop.dragoverindex))

            console.log("dragged over", index)
           },
           dragStart(event, index)
           {
           this.DragDrop.cardindex = index
           console.log("dragged", index)
           },
            drop(event, index)
            {
             this.DragDrop.targetindex = index

             this.DragDrop.dragoverindex = index

             var keys = Object.keys(this.form.fields)

             this.form.fields = this.addToObject(this.form.fields, 
                             this.DragDrop.cardindex, 
                             this.form.fields[this.DragDrop.cardindex], 
                             keys.indexOf(this.DragDrop.targetindex))
              
              console.log('dropped', index)
            },
            cleanMergeObject(objOne, objTwo )
            {
              return { ...objOne, ...objTwo };
            },
            replaceObject(newObj, obj)
            {
             let final = Object.entries(obj).reduce((op, [key,value]) => {
               let newKey = newObj[key]
               op[newKey || key ] = value
               return op
             },{})

             return final;
            },
            updateField(event, index, sectionindex)
            {
              this.form.id = this.formid

              var field = this.cleanMergeObject(event, this.form.sections[sectionindex].fields[index])

              var fieldSettings = this
                                  .cleanMergeObject(event.settings, this.form.sections[sectionindex].fields[index].settings)

              field.settings = fieldSettings;

              if (Object.keys(event).includes("options"))
              {
               field["options"] = event.options;
              }else
              {
                field["options"] = {}
              }

              this.form.sections[sectionindex].fields[index] = field

              this.screenShot('form-builder-screenshot', '', 'formScreenShot')
              this.form.image = this.formScreenShot 

            },
            mergeObject(objOne, objTwo)
            {
               var result = Object.keys(objOne).reduce((a, k) => {
                 a[k] = objTwo[k] === undefined || objOne[k] === objTwo[k] ? objOne[k] : [objOne[k], objTwo[k]];
                 return a;
               }, { ...objOne, ...objTwo });

               return result;
            },
            isEmpty(obj) {
              for(var prop in obj) {
                if(Object.prototype.hasOwnProperty.call(obj, prop)) {
                  return false;
                }
              }
            
              return JSON.stringify(obj) === JSON.stringify({});
            },
            dublicateSection(sectionindex)
            {
              //console.log(this.form.fields[index])
              this.addSection(sectionindex, 
                                {
                                  id: '',
                                  title: this.form.sections[sectionindex].title,
                                  description: this.form.sections[sectionindex].description,
                                  cover: this.form.sections[sectionindex].cover,
                                  fields: this.form.sections[sectionindex][fields]
                                },'',
                                sectionindex
                )
              //console.log(this.form.fields)
            },
            dublicateField(index, sectionindex)
            {
              this.addField(index, 
                                  {
                                  id: '',
                                  title: this.form.sections[sectionindex][fields][index].title,
                                  name: this.form.sections[sectionindex][fields][index].name,
                                  value: '',
                                  description: '',
                                  image: this.form.sections[sectionindex][fields][index].image,
                                  settings: this.form.sections[sectionindex][fields][index].settings
                                },'',
                                sectionindex
                )
            },
            addToObject(obj, key, value, index) 
            {
            // Create a temp object and index variable
            var temp = {};
            var i = 0;
            // Loop through the original object
            for (var prop in obj) {
              if (obj.hasOwnProperty(prop)) {
                // If the indexes match, add the new item
                if (i === index && key && value) {
                  temp[key] = value;
                }
                // Add the current item in the loop to the temp obj
                temp[prop] = obj[prop];
                // Increase the count
                i++;
              }
            }

            // If no index, add to the end
            if (!index && key && value) {
              temp[key] = value;
            }

            return temp;

          },
          toggleEditMode(index, sectionindex)
          {
            this.editMode.fieldindex = index
            this.editMode.sectionindex = sectionindex
          },
          removeSection(sectionindex)
          {
            delete this.form.sections[sectionindex];

            this.postRequest('form/section/destroy', {id: this.form.sections[sectionindex].id});
          },
          removeField(index, sectionindex)
          {
            delete this.form.sections[sectionindex].fields[index]

            this.postRequest('form/field/destroy', {id: this.form.sections[sectionindex].fields[index].id});
          },
          setTypeUpdateIndex(index, sectionindex)
          {
            this.updateTypeIndex.index = index
            this.updateTypeIndex.sectionindex = sectionindex
          },
          updateFieldType(index, sectionindex)
          {
            //console.log("type",this.selectedType, "field",this.form.fields[index])
            this.form.sections[sectionindex].fields[index].settings = this.selectedType.settings
          },
          addSection(index, value = {}, key = "")
          {
            this.form.id = this.formid

            var keys = Object.keys(this.form.sections)

            var sectionName = !(key.length === 0)? 
                            key: 
                            "section" + 
                             (keys.length + 1);

            var section = !(this.isEmpty(value))? value: 
                                                {
                                                  id: '',
                                                  title: '',
                                                  description: '',
                                                  cover: '',
                                                  fields:{

                                                  }
                                                };

            if(keys.length == 0)
            {
             this.form.sections[sectionName] =  section;
            } 
            else
            {
             var position = (keys.indexOf(index) !== -1)? keys.indexOf(index) + 1 : 0;

             if (position >= keys.length)
             {
              this.form.sections = this.addToObject(this.form.sections, sectionName, section)
             }
             else
             {
              this.form.sections = this.addToObject(this.form.sections, sectionName, section, position)
             }

            this.screenShot('form-builder-screenshot', '', 'formScreenShot')
            this.form.image = this.formScreenShot 
            }
          },
          addField(index, value = {}, key = "", sectionindex =  "")
          {
            this.form.id = this.formid

            if(!Object.keys(this.form.sections).includes(sectionindex))
            {
              this.addSection(sectionindex)
            }

            var keys = Object.keys(this.form.sections[sectionindex]['fields'])

            var fieldName = !(key.length === 0)? 
                            key:"field" + 
                            (keys.length + 1);

            var field = !(this.isEmpty(value))? value: 
                                                {
                                                id: '',
                                                title: fieldName,
                                                name: fieldName,
                                                value: '',
                                                description: '',
                                                image: '',
                                                settings: this.selectedType.settings};
                                
            if(keys.length == 0)
            {
             this.form.sections[sectionindex]['fields'][fieldName] =  field;
            } 
            else
            {
             var position = (keys.indexOf(index) !== -1)? keys.indexOf(index) + 1 : 0;

             if (position >= keys.length)
             {
              this.form.sections[sectionindex]['fields'] = this.addToObject(this.form.sections[sectionindex]['fields'], fieldName, field)
             }
             else
             {
              this.form.sections[sectionindex]['fields'] = this.addToObject(this.form.sections[sectionindex]['fields'], fieldName, field, position)
             }

            this.screenShot('form-builder-screenshot', '', 'formScreenShot')
            this.form.image = this.formScreenShot 
            }
          },
          selectedListItem(event)
          {
              this.selectInputType(event)
          },
          selectInputType(type)
          {
            this.selectedType = type;
            this.updateFieldType(this.updateTypeIndex.index,this.updateTypeIndex.sectionindex)

          },
          inputTypeDropdown()
          {
            var Dropdown = document.getElementById("form-input-type-dropdown");
            console.log(Dropdown)
            this.drop = !this.drop
          },
          launchModal(modal)
          {
            alert(modal)
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
            updateFormData(data)
            {
              this.form = data
            }
        },
        mounted()
        {
          this.getRequest('form/template/builder/last/id', 'initialresourceId')
          if (this.Mode)
          {
                this['form'] = {
                  id: '',
                  user_id: '',
                  title: '',
                  description: '',
                  cover: '',
                  image: '',
                  sections:{
                  },
                }
          }
        },
        created()
        {
          store.state.form.fields = this.selectedType
        },
        watch: {
          form: {
            handler(newValue, oldValue)
            {
              /*
              if (this.Mode)
              {
                console.log(newValue)
                this.postRequest('form/builder/store', newValue, 'formResource')
              }
              else
              {
                this.postRequest('form/store', newValue, 'formResource')
              }
              */
            },
            deep: true
          },
          formData: {
            handler(newValue, oldValue)
            {

            },
            deep: true
          },
          SelectedInputType: {
            handler(newValue, oldValue)
            {
              this.selectInputType(newValue)
            },
            deep: true
          },
        },
        computed:{
          formid()
          {
            return this.initialresourceId.form + 1
          },
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
    /*border-radius: 20px;*/
    justify-content: space-between;
}


.glass-content
{
    transform: translateX(-100);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    /*border-radius: 20px;*/
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}

.glass-header
{
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    /*border-radius: 20px;*/
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


.tab-content {
  width: 100% !important; 
}

.form-cover-image{
  height: 150px !important;
  width: 100% !important; 
}
</style>
