<template>
  <!-- start text/string input-->
   <!--START INPUT SETTINGS|OPTIONS|PROPERTIES -->
     <div class="row mt-3 mb-3" v-if="showfieldSettings">
      <div class="col-3 mt-2 mb-2">
       <div class="input-group ">
        <span 
          class="input-group-text" 
          id="title-basic-addon">
          Title
        </span>
        <input 
          v-model="field.title"
          type="text" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="title-basic-addon">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
       <div class="input-group ">
        <span 
          class="input-group-text" 
          id="placeholder-basic-addon">
          Placeholder
        </span>
        <input 
          v-model="field.settings.placeholder.placeholder"
          type="text" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="placeholder-basic-addon">
        </div>
       </div>
      <div class="col-3 mt-2 mb-2">
       <div class="input-group ">
        <span 
          class="input-group-text" 
          id="name-basic-addon">
          Name
        </span>
        <input 
          v-model="field.name"
          type="text" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="name-basic-addon">
        </div>
       </div>
      <div class="col-3 mt-2 mb-2">
      <div class="input-group ">
        <span 
          class="input-group-text" 
          id="placeholder-basic-addon">
          Default
        </span>
        <input 
          v-model="field.settings.default.default"
          type="text" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="placeholder-basic-addon">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
      <div class="input-group ">
        <span 
          class="input-group-text" 
          id="minlength-basic-addon">
          minlength
        </span>
        <input 
          v-model="field.settings.minlength.minlength"
          type="number" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="minlenght-basic-addon">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
        <select 
          v-model="field.settings.inputmode.inputmode" 
          class="form-select" 
          aria-label="Default select example">
          <option selected>Input Type</option>
           <option value="none">none</option> 
           <option value="text">text</option> 
           <option value="decimal">decimal</option> 
           <option value="numeric">numeric</option> 
           <option value="tel">tel</option> 
           <option value="search">search</option> 
           <option value="email">email</option> 
           <option value="url">url</option>
          <option value="numeric">numeric</option>
        </select>
      </div>
      <div class="col-3 mt-2 mb-2">
      <div class="input-group ">
        <span 
          class="input-group-text" 
          id="maxlength-basic-addon">
          maxlength
        </span>
        <input 
          v-model="field.settings.maxlength.maxlength"
          type="number" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="maxlenght-basic-addon">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
      <div class="form-check form-switch">
        <label 
        class="form-check-label" 
        for="text-input-reuired-setting-check"
        >
        required
        </label>
        <input 
         v-model="field.settings.required.required"
         class="form-check-input" 
         type="checkbox" 
         id="text-input-required-setting-check">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
      <div class="form-check form-switch">
        <label 
        class="form-check-label" 
        for="text-input-disabled-setting-check"
        >
        disabled
        </label>
        <input 
         v-model="field.settings.disabled.disabled"
         class="form-check-input" 
         type="checkbox" 
         id="text-input-disabled-setting-check">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
      <div class="input-group ">
        <span 
          class="input-group-text" 
          id="description-basic-addon">
          description
        </span>
        <input 
          v-model="field.description"
          type="text" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="description-basic-addon">
       </div>
      </div>
     </div>
   <!--START INPUT SETTINGS|OPTIONS|PROPERTIES -->
   <!--START INPUT -->
    <div  
       :id="field.title + '-text-input-container'"  
       :class="' ' + formFieldContainerClasses">
       <label 
          :for="field.title" 
          :class="'form-label' + formFieldLabelClasses">
          {{field.title}}
       </label>
      <input 
         :id="field.title + '-text-input'" 
         type="password" 
         :class="'form-control ' + formFieldClasses" 
         v-model="field.default" 
         :name="field.name || field.title"  
         :placeholder="field.settings.placeholder.placeholder"
         :minlength="field.settings.minlength.minlength"
         :maxlength="field.settings.maxlength.maxlength"
         :inputmode="field.settings.inputmode.inputmode"
         autofocus
         />
     <div 
     :id="field.title + 'Help'" 
     class="form-text">
       {{field.description}}
     </div>
    </div>
   <!--END INPUT -->
  <!-- end text/string input-->
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        name: "PasswordInput",
        props:{
          formFieldLabelClasses: String,
          formFieldClasses: String,
          formFieldContainerClasses: String,
          fieldData: Object,
          fieldSettings: {
            type: Boolean,
            default: false
          }
        },
        computed:
        {
          showfieldSettings()
          {
            return this.fieldSettings
          },
          fieldDetails()
          {
            return this.fieldData || this.field
          }
        },
        components: {

        },
        data() {
            return {
                   field: {
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
                       inputmode: {
                        id: '',
                        inputmode: ''
                       },
                       default: {
                        id: '',
                        default: ''
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
                 }
            }
        },

        methods: {

        },
        created()
        {

        },
        mounted()
        {

        },
        watch: {
          field: {
            handler(newValue, oldValue) {

              //this.fieldData = newValue

              this.$emit("PasswordInputInput", newValue)
              console.log(this)

            const input = document.getElementById(oldValue.title + '-text-input');

            //console.log("field", newValue)
            /*if (newValue.settings.disabled)
            {
              //input.disabled = newValue.settings.disabled
            }
            else
            {
              //input.removeAttribute("disabled")
            }

            if (newValue.settings.required)
            {
              input.required = newValue.settings.required
            }else{
              //input.removeAttribute("required")
            }
            */
            },
            deep: true
          }
        }
    })
</script>


<style scoped>

.form-field-container
{
  border-bottom: 2px solid #adadad !important;
  width: 100% !important;

}

.form-input-style
{
    background: transparent !important;
    border: none !important;
}

.form-input-transparent
{
    background: transparent !important;
}

.form-input-style:focus {
  border-bottom: 5px solid purple !important;
}
</style>
