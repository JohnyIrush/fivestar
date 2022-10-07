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
          v-model="fieldDetails.title"
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
          v-model="fieldDetails.placeholder"
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
          v-model="fieldDetails.name"
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
          v-model="fieldDetails.default"
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
          v-model="fieldDetails.settings.minlength"
          type="number" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="minlenght-basic-addon">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
        <select 
          v-model="fieldDetails.settings.inputmode" 
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
          id="pattern-basic-addon">
          pattern
        </span>
        <input 
          v-model="fieldDetails.settings.pattern"
          type="text" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="pattern-basic-addon">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
      <div class="input-group ">
        <span 
          class="input-group-text" 
          id="maxlength-basic-addon">
          maxlength
        </span>
        <input 
          v-model="fieldDetails.settings.maxlength"
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
         v-model="fieldDetails.settings.required"
         class="form-check-input" 
         type="checkbox" 
         id="text-input-required-setting-check">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
      <div class="form-check form-switch">
        <label 
        class="form-check-label" 
        for="text-input-reuired-setting-check"
        >
        autocomplete
        </label>
        <input 
         v-model="fieldDetails.settings.autocomplete"
         class="form-check-input" 
         type="checkbox" 
         id="text-input-autocomplete-setting-check">
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
         v-model="fieldDetails.settings.disabled"
         class="form-check-input" 
         type="checkbox" 
         id="text-input-autocomplete-setting-check">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
      <div class="form-check form-switch">
        <label 
        class="form-check-label" 
        for="text-input-autocorrect-setting-check"
        >
        autocorrect
        </label>
        <input 
         v-model="fieldDetails.settings.autocorrect"
         class="form-check-input" 
         type="checkbox" 
         id="text-input-autocorrect-setting-check">
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
          v-model="fieldDetails.description"
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
       :id="fieldDetails.title + '-text-input-container'"  
       :class="' ' + formFieldContainerClasses">
       <label 
          :for="fieldDetails.title" 
          :class="'form-label' + formFieldLabelClasses">
          {{fieldDetails.title}}
       </label>
      <input 
         :id="fieldDetails.title + '-text-input'" 
         type="password" 
         :class="'form-control ' + formFieldClasses" 
         v-model="fieldDetails.default" 
         :name="fieldDetails.name || fieldDetails.title"  
         :placeholder="fieldDetails.placeholder"
         :autocomplete="fieldDetails.settings.autocomplete" 
         :minlength="fieldDetails.settings.minlength"
         :maxlength="fieldDetails.settings.maxlength"
         :pattern="fieldDetails.settings.pattern"
         :inputmode="fieldDetails.settings.inputmode"
         autofocus
         />
     <div 
     :id="fieldDetails.title + 'Help'" 
     class="form-text">
       {{fieldDetails.description}}
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
                       component : 'PasswordInput',
                       pattern: ""
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

              this.$emit("PasswordInputInput", newValue)
              console.log(this)

            const input = document.getElementById(oldValue.title + '-text-input');

            //console.log("field", newValue)
            if (newValue.settings.disabled)
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
