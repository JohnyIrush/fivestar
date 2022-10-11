<template>
 <!--START INTELI FORM BUILDER-->
  <div class="row" >
   <div class="col-12">

    <div class="glass-header">
      <div class="row">
        <div class="col-6">
          
        </div>
        <div class="col-6">
          <i class="fas fa-palette fa-2x mr-3"></i>
          <i class="fas fa-eye fa-2x mr-3"></i>
          <i class="fas fa-undo fa-2x mr-3"></i>
          <i class="fas fa-redo fa-2x mr-3"></i>
          <i class="fas fa-share fa-2x"></i>
        </div>
      </div>
    </div>
   </div>
  <!--START INTELI FORM BUILDER BODY-->
   <div class="col-12 col-lg-9">
    <!-- START INTELI FORM BUILDER BODY MAIN MENU-->
    <ul class="nav nav-tabs glass-content" id="formBuilderTab" role="tablist">
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
               <text-input
                :formFieldClasses="' form-input-style'"
                :formFieldLabelClasses="'fs-1 fw-bold text-capitalize display-6 text-left'"
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
                :formFieldLabelClasses="'fs-1 fw-bold text-capitalize display-6 text-left'"
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
         <div class="col-12 col-lg-1 col-xl-1">
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
                 <div class="card-body">
                   <text-input
                    :formFieldClasses="' form-input-style'"
                    :formFieldLabelClasses="'fs-1 fw-bold text-capitalize display-6 text-left'"
                    :formFieldContainerClasses="'form-field-container'"
                    v-model="form.sections[sectionindex].title"
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
                   > 
                   </text-input>
                   <text-area-input
                    :formFieldClasses="' form-input-style'"
                    :formFieldLabelClasses="'fs-1 fw-bold text-capitalize display-6 text-left'"
                    :formFieldContainerClasses="'form-field-container'"
                    v-model="form.sections[sectionindex].description"
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
                   > 
                   </text-area-input>
                 </div>
               </div>
              </div>
              <!-- END FORM SECTION TITLE AND DESCRIPTION -->
              <!--START SECTION FORM BUILDER OPTIONS -->
             <div class="col-12 col-lg-1 col-xl-1">
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
               <div  
                 class="row" 
                 v-for="(field, index) in form.sections[sectionindex].fields" 
                 :key="index" 
                 @click="toggleEditMode(index,sectionindex)" 
                 >
                   <div class="col-12 col-lg-11 col-xl-11">
               <div class="card glass-content mt-2 mb-2">
                <div 
                  class="card-header" 
                   v-if="(editMode.fieldindex == index) && (editMode.sectionindex == sectionindex)" 
                  >
                 <div class="row">
                  <div class="col-8 align-self-start">
                  </div>
                  <div class="col-4 align-self-end">
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
                       @click="setTypeUpdateIndex(index,sectionindex)"
                       ></modal_button>
                     </span>
                   </div>
                  </div>
                 </div>
                </div>
                <div class="card-body ">
                  <component 
                   :is="field.settings.component.component"
                   :formFieldClasses="' form-input-style'"
                   :formFieldLabelClasses="'fs-1 fw-bold text-capitalize display-6 text-left'"
                   :formFieldContainerClasses="'form-field-container'"
                   :fieldData="field"
                   :optionid="optionid"
                   :fieldSettings="((editMode.fieldindex == index) 
                                    && 
                                    (editMode.sectionindex == sectionindex))"
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
                   v-if="editMode.fieldindex == index 
                   && 
                   editMode.sectionindex == sectionindex" 
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
                   <!-- START FORM SECTION FIELD FORM BUILDER OPTIONS -->
                   <div class="col-12 col-lg-1 col-xl-1">
               <div 
                v-if="(editMode.fieldindex == index) && (editMode.sectionindex == sectionindex)" 
                id=" index + '-form-builder-menu'" 
                class="glass-content">
                <ul class="nav flex-column">
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
               </div>
             </draggable>
            </div>
            <div>
                <div 
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
  <!--START INTELI FORM BUILDER SIDEBAR-->
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
  <!-- END INTELI FORM BUILDER SIDEBAR-->
  </div>
 <!-- END INTELI FORM BUILDER-->
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

    export default defineComponent({
        components: {
            VueLodash: { name: 'custom' , lodash: lodash },
            draggable: VueDraggableNext,
            Footer,
            MainForm,
            modal_button,
            modal,
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
            ColorInput
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
                form:
                {
                  id: '',
                  title: '',
                  description: '',
                  cover: '',
                  sections:{

                  },
                },
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
                initialresourceId: {}
            }
        },

        methods: {
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
           })
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
              console.log(event, "field updated")

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
                                  id: this.sectionid,
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
              this.fieldid = this.fieldid + 1; // increment form field id

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
            var section_id = this.sectionid;

            if (this.isEmpty(value)) // check section being duplicated(sectin id is increamented)
            {
                section_id += 1;// increment form section id
                console.log("sections id",section_id)
            }

            this.sectionid = section_id;

            console.log("sections id",this.sectionid)

            var keys = Object.keys(this.form.sections)

            var sectionName = !(key.length === 0)? 
                            key: 
                            "section" + 
                             (keys.length + 1);

            var section = !(this.isEmpty(value))? value: 
                                                {
                                                  id: section_id,
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
            }

            console.log("sections",this.form.sections)
          },
          addField(index, value = {}, key = "", sectionindex =  "")
          {
            var field_id = this.fieldid;

            if (this.isEmpty(value)) // check if field being duplicated(field id is increamented)
            {
                field_id = field_id + 1;// increment form field id
            }
            
            this.fieldid = field_id;

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
                                                id: field_id,
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
            }

            console.log("fields",this.form.sections)
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
            this.getAnalytics("analytics")
          axios.get('form/template/builder/last/id')
          .then((response)=>{
            console.log(response.data)
               this.initialresourceId = response.data
          })

          this.form.id = this.formid

        },
        created()
        {
          store.state.form.fields = this.selectedType

          /*
          setInterval(()=>{
              axios.post('form/builder/store', this.form)
              .then((response)=>{

                  this.form = response.data

                console.log("form",this.form,  "response", response.data)
              })
          }, 5000);
          */
        },
        watch: {
          form: {
            handler(newValue, oldValue)
            {
              axios.post('form/builder/store', newValue)
              .then((response)=>{

                console.log("form",this.form,  "response", response.data)

              })
            },
            deep: true
          }
        },

        computed:{
          formid()
          {
            return this.initialresourceId.form
          },
          sectionid()
          {
            return this.initialresourceId.section         
          },
          fieldid()
          {
            return this.initialresourceId.field         
          },
          optionid()
          {
            return this.initialresourceId.option         
          },
          settingid()
          {
            return this.initialresourceId.setting         
          }
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
