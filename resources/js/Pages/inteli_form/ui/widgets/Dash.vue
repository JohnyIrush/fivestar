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
       <div class="card text-center glass-content">
        <div 
          @click="toggleEditMode('form-header')" 
          @mouseover="toggleEditMode('form-header')" 
          class="row" >
         <div class="col-12 col-lg-11 col-xl-11">
          <!-- FORM TITLE AND DESCRIPTION -->
           <div class="card glass-content mt-2 mb-2">
             <div class="card-body">
               <text-input
                :formFieldClasses="' form-input-style'"
                :formFieldLabelClasses="'fs-1 fw-bold text-capitalize display-6 text-left'"
                :formFieldContainerClasses="'form-field-container'"
                :field="{
                  title: 'title',
                  default: 'Form Title',
                  placeholder: 'title',
                  settings:{
                    autocomplete : 'on',
                    required : 'true', 
                    disabled :  'false',
                    minlength :  '4',
                    maxlength :  '50',
                  }
                }"
               > 
               </text-input>
               <text-area-input
                :formFieldClasses="' form-input-style'"
                :formFieldLabelClasses="'fs-1 fw-bold text-capitalize display-6 text-left'"
                :formFieldContainerClasses="'form-field-container'"
                :field="{
                  title: 'Description',
                  default: 'Form Description',
                  placeholder: 'title',
                  settings:{
                    row: '5',
                    cols: '6',
                    autocomplete : 'on',
                    required : 'true', 
                    disabled :  'false',
                    minlength :  '30',
                    maxlength :  '200',
                  }
                }"
               > 
               </text-area-input>
             </div>
           </div>
          <!-- FORM TITLE AND DESCRIPTION -->
         </div>
         <div class="col-12 col-lg-1 col-xl-1">
           <div 
             id="form-builder-menu" 
             class="glass-content" 
             v-if="editMode.index == 'form-header'">
            <ul class="nav flex-column">
             <li class="nav-item">
               <a 
               role="button"
               class="nav-link active" 
               aria-current="page"
               data-bs-toggle="tooltip" 
               data-bs-placement="right" 
               title="Add Field"
               @click="addField('form-header')"
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
             <li class="nav-item">
               <a 
               class="nav-link" 
               aria-current="page"
               data-bs-toggle="tooltip" 
               data-bs-placement="right" 
               title="Add Section">
               <i class="fas fa-puzzle-piece fa-2x"></i>            
               </a>
             </li>
            </ul>
           </div>
         </div>
         </div>
        <div 
          class="row" 
          v-for="(field, index) in form.fields" 
          :key="index" 
          @click="toggleEditMode(index)" 
          @mouseover="toggleEditMode(index)" 
          >
         <div class="col-12 col-lg-11 col-xl-11">
           <div class="card glass-content mt-2 mb-2">
            <div class="card-header" v-if="editMode.index == index">
             <div class="row">
              <div class="col-8 align-self-start">
              </div>
              <div class="col-4 align-self-end">
               <div class="input-group flex-nowrap form-input-type-wrapper">
                 <span class="input-group-text" id="addon-wrapping" v-html="field.settings.icon"></span>
                 <input 
                    type="text" 
                    class="form-control form-input-type-input" 
                    placeholder="Type" aria-label="Type" 
                    aria-describedby="addon-wrapping" 
                    readonly 
                    v-model="field.settings.field"
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
                   @click="setTypeUpdateIndex(index)"
                   ></modal_button>
                 </span>
               </div>
              </div>
             </div>
            </div>
            <div class="card-body ">
              <component 
               :is="field.settings.component"
               :formFieldClasses="' form-input-style'"
               :formFieldLabelClasses="'fs-1 fw-bold text-capitalize display-6 text-left'"
               :formFieldContainerClasses="'form-field-container'"
               :fieldData="field"
               :fieldSettings="(editMode.index == index)"
               @TextInputInput="updateField($event,index)"
               @TextAreaInputInput="updateField($event,index)"
               @TelInputInput="updateField($event,index)"
               @PasswordInputInput="updateField($event,index)"
               @EmailInputInput="updateField($event,index)"
               @UrlInputInput="updateField($event,index)"
               @SearchInputInput="updateField($event,index)"
               @NumberInputInput="updateField($event,index)"
               @DateInputInput="updateField($event,index)"
               @TimeInputInput="updateField($event,index)"
               @RadioInputInput="updateField($event,index)"
               @CheckboxInputInput="updateField($event,index)"
              >
              </component>
            </div>
            <div v-if="editMode.index == index" class="card-footer border-2 border-dark">
             <div class="row align-items-end">
               <div class="col">
                
               </div>
               <div class="col">
                 
               </div>
               <div class="col d-flex flex-row mr-3">
                 <i class="fas fa-clone fa-2x mr-3" @click="dublicateField(index)"></i>
                 <i 
                   class="fas fa-trash-alt fa-2x mr-3" 
                   @click="removeField(index)">
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
          <div class="col-12 col-lg-1 col-xl-1">
           <div 
            v-if="editMode.index == index" 
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
               @click="addField(index)"
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
             <li class="nav-item">
               <a 
               class="nav-link" 
               aria-current="page"
               data-bs-toggle="tooltip" 
               data-bs-placement="right" 
               title="Add Section">
               <i class="fas fa-puzzle-piece fa-2x"></i>            
               </a>
             </li>
            </ul>
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

    export default defineComponent({
        components: {
            Footer,
            MainForm,
            modal_button,
            modal,
            TextInput,
            TextAreaInput,
            PasswordInput,
            EmailInput,
            UrlInput,
            SearchInput,
            NumberInput,
            DateInput,
            TimeInput,
            RangeInput,
            RadioInput,
            CheckboxInput
        },
        data() {
            return {
                selectedType: {
                     title: 'field title',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     settings:{
                       type: 'text',
                       autocomplete : 'off',
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       field: "Text",
                       type: "text",
                       icon: '<i class="fas fa-paragraph fa-2x"></i>',
                       component: 'TextInput',
                     }
                },
                analytics: [],
                inputTypes: [
                    {
                     title: 'field title',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     settings:{
                       type: 'text',
                       autocomplete : 'off',
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       field: "Text",
                       type: "text",
                       icon: '<i class="fas fa-paragraph fa-2x"></i>',
                       component: 'TextInput',
                     }
                    },
                    {
                     title: 'field title',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     settings:{
                       type: 'textarea',
                       cols: 4,
                       rows: 6,
                       autocomplete : 'off',
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       component : 'TextAreaInput',
                       field: "paragraph",
                       type: "textarea",
                       icon: '<i class="fas fa-water"></i>',
                     }
                    },
                    {
                     title: 'tel field title',
                     name: 'tel',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     settings:{
                       type: 'tel',
                       autocorrect: true,
                       autocomplete : false,
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       component : 'TextInput',
                       pattern: "",
                       field: "Phone",
                       type: "tel",
                       icon: '<i class="fas fa-phone fa-2x"></i>',
                     }
                    },
                    {
                     title: 'tel field title',
                     name: 'password',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     description: '',
                     settings:{
                       type: 'password',
                       inputmode: '',
                       autocorrect: true,
                       autocomplete : false,
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       field: "Password",
                       type: "password",
                       icon: '<i class="fas fa-lock fa-2x"></i>',
                       component: 'PasswordInput',
                       pattern: ""
                       }
                    },
                    {
                     title: 'radio field title',
                     name: '',
                     image: '',
                     description: '',
                     settings:{
                       type: 'radio',
                       required : false, 
                       disabled :  false,
                       field: "Radio",
                       type: "radio",
                       icon: '<i class="fas fa-dot-circle fa-2x"></i>',
                       component: 'RadioInput',
                     },
                     options:{
                      option1: {
                        name: "option 1",
                        value: ""
                      }
                     }
                    },
                     {
                     title: 'checkbox field title',
                     name: '',
                     image: '',
                     description: '',
                     settings:{
                       type: 'checkbox',
                       required : false, 
                       disabled :  false,
                       field: "Checkbox",
                       type: "checkbox",
                       icon: '<i class="fas fa-check-square fa-2x"></i>',
                       component: 'CheckboxInput',
                     },
                     options:{
                      option1: {
                        name: "option 1",
                        value: "",
                        image: ""
                      }
                     }
                    },
                    {
                     title: 'field title',
                     name: '',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     description: '',
                     settings:{
                       type: 'color',
                       required : false, 
                       disabled :  false,
                       field: "Color",
                       type: "color",
                       icon: '<i class="fas fa-palette fa-2x"></i>',
                       component: 'ColorInput',
                       }
                    },
                     {
                     title: 'field title',
                     name: 'date',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     description: '',
                     settings:{
                       type: 'date',
                       required : false, 
                       disabled :  false,
                       field: "Date",
                       type: "date",
                       icon: '<i class="fas fa-calendar-week fa-2x"></i>',
                       component: 'DateInput',
                     }
                    },
                     {
                     title: 'field title',
                     name: 'time',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     description: '',
                     settings:{
                       type: 'time',
                       min: "",
                       max: "",
                       required : false, 
                       disabled :  false,
                       field: "Time",
                       type: "time",
                       icon: '<i class="fas fa-clock fa-2x"></i>',
                       component: 'TimeInput',
                     }
                    },
                    {
                     title: 'email field title',
                     name: 'email',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     description: '',
                     settings:{
                       type: 'email',
                       autocorrect: true,
                       autocomplete : false,
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       field: "Email",
                       type: "email",
                       icon: '<i class="fas fa-inbox fa-2x"></i>',
                       component: 'EmailInput',
                       pattern: ""
                     }

                    },
                    {
                     title: 'field title',
                     name: 'number',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     description: '',
                     settings:{
                       type: 'file',
                       required : false, 
                       disabled :  false,
                       field: "File Upload",
                       type: "file",
                       icon: '<i class="fas fa-upload fa-2x"></i>',
                       component: 'FileInput',
                     }
                    },
                   {
                     title: 'field title',
                     name: 'number',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     description: '',
                     settings:{
                       type: 'number',
                       autocorrect: true,
                       autocomplete : false,
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       pattern: "",
                       field: "Number",
                       type: "number",
                       icon: '<i class="fas fa-sort-numeric-up-alt fa-2x"></i>',
                       component: 'NumberInput',
                     }
                    },
                    {
                     title: 'field title',
                     name: 'range',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     description: '',
                     settings:{
                       type: 'range',
                       autocorrect: true,
                       autocomplete : false,
                       required : false, 
                       disabled :  false,
                       min :  3,
                       max :  20,
                       field: "Range",
                       type: "range",
                       icon: '<i class="fas fa-weight fa-2x"></i>',
                       component: 'RangeInput',
                     }
                    },
                    {
                     title: 'tel field title',
                     name: 'tel',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     settings:{
                       type: 'tel',
                       autocorrect: true,
                       autocomplete : false,
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       field: "Search",
                       type: "search",
                       icon: '<i class="fas fa-search fa-2x"></i>',
                       component: 'SearchInput',
                     }
                    },
                    {
                     title: 'field title',
                     name: 'url',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     description: '',
                     settings:{
                       type: 'url',
                       autocorrect: true,
                       autocomplete : false,
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       field: "Url",
                       type: "url",
                       icon: '<i class="fas fa-link fa-2x"></i>',
                       component: 'UrlInput',
                       pattern: ""
                     }
                    },
                ],
                form:
                {
                  title: '',
                  description: '',
                  cover: '',
                  fields:{
                    /*
                  field1 : {
                     title: 'field title',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     settings:{
                       type: 'text',
                       autocomplete : 'off',
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       component : 'TextInput'
                     }
                  },
                  field2 : {
                     settings:{
                       field: "Text",
                       type: "text",
                       icon: '<i class="fas fa-paragraph fa-2x"></i>',
                       component: 'TextInput',
                     }
                  },*/
                }
                },
                updateTypeIndex: "",
                editMode: {
                  index: 'form-header',
                }
            }
        },

        methods: {
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
            updateField(event, index)
            {
              var field = this.cleanMergeObject(event, this.form.
                                 fields[index])

              var fieldSettings = this
                                  .cleanMergeObject(event.settings, this.form.
                                 fields[index].settings)

              field.settings = fieldSettings;

              this.form.fields[index] = field

              console.log(field, "field updated")

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
            dublicateField(index)
            {
              console.log(this.form.fields[index])
              this.addField(index, this.form.fields[index])
              console.log(this.form.fields)
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
          toggleEditMode(index)
          {
            this.editMode.index = index
          },
          removeField(index)
          {
            delete this.form.fields[index]
          },
          setTypeUpdateIndex(index)
          {
            this.updateTypeIndex = index
          },
          updateFieldType(index)
          {
            console.log("type",this.selectedType, "field",this.form.fields[index])
            this.form.fields[index].settings = this.selectedType.settings
          },
          addField(index, value = {}, key = "")
          {
            var keys = Object.keys(this.form.fields)

            var fieldName = !(key.length === 0)? 
                            key: 
                            "untitled field " + 
                             (keys.length + 1);

            var field = !(this.isEmpty(value))? value: this.selectedType;

            if(keys.length == 0)
            {
             this.form.fields[fieldName] =  field;
            } 
            else
            {
             var position = (keys.indexOf(index) !== -1)? keys.indexOf(index) + 1 : 0;

             if (position >= keys.length)
             {
              this.form.fields = this.addToObject(this.form.fields, fieldName, field)
             }
             else
             {
              this.form.fields = this.addToObject(this.form.fields, fieldName, field, position)
             }
            }
          },
          selectedListItem(event)
          {
              this.selectInputType(event)
          },
          selectInputType(type)
          {
            this.selectedType = type;
            this.updateFieldType(this.updateTypeIndex)

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
