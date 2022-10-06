<template>
  <!-- start text/string input-->
   <!--START INPUT SETTINGS|OPTIONS|PROPERTIES -->
     <div class="row mt-3 mb-3" v-if="fieldSettings">
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
          v-model="field.placeholder"
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
          id="placeholder-basic-addon">
          Default
        </span>
        <input 
          v-model="field.default"
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
          v-model="field.settings.minlength"
          type="number" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="minlenght-basic-addon">
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
          v-model="field.settings.maxlength"
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
         v-model="field.settings.required"
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
         v-model="field.settings.autocomplete"
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
         v-model="field.settings.disabled"
         class="form-check-input" 
         type="checkbox" 
         id="text-input-autocomplete-setting-check">
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
         type="text" 
         :class="'form-control ' + formFieldClasses" 
         v-model="field.default" 
         :name="field.title"  
         :placeholder="field.placeholder"
         :autocomplete="field.settings.autocomplete" 
         :minlength="field.settings.minlength"
         :maxlength="field.settings.maxlength"
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
        name: "TextInput",
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
        components: {

        },
        data() {
            return {
                   field: {
                     type: 'text',
                     title: 'field title',
                     default: '',
                     placeholder: 'field',
                     image: '',
                     settings:{
                       autocomplete : 'off',
                       required : false, 
                       disabled :  false,
                       minlength :  3,
                       maxlength :  20,
                       component : 'TextInput'
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

            const input = document.getElementById(oldValue.title + '-text-input');

            console.log("field", newValue)
            if (newValue.settings.disabled)
            {
              input.disabled = newValue.settings.disabled
            }
            else
            {
              input.removeAttribute("disabled")
            }

            if (newValue.settings.required)
            {
              input.required = newValue.settings.required
            }else{
              input.removeAttribute("required")
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
