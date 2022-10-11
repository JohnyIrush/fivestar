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
          v-model="field.settings.placeholder"
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
          v-model="field.value"
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
      <div class="input-group ">
        <span 
          class="input-group-text" 
          id="pattern-basic-addon">
          pattern
        </span>
        <input 
          v-model="field.settings.pattern.pattern"
          type="number" 
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
        for="text-input-reuired-setting-check"
        >
        autocomplete
        </label>
        <input 
         v-model="field.settings.autocomplete.autocomplete"
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
         v-model="field.settings.disabled.disabled"
         class="form-check-input" 
         type="checkbox" 
         id="text-input-autocomplete-setting-check">
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
         type="tel" 
         :class="'form-control ' + formFieldClasses" 
         v-model="field.value" 
         :name="field.title"  
         :placeholder="field.settings.placeholder.placeholder"
         :autocomplete="field.settings.autocomplete.autocomplete" 
         :minlength="field.settings.minlength.minlength"
         :maxlength="field.settings.maxlength.maxlength"
         :pattern="field.settings.pattern.pattern"
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
        name: "TelInput",
        props:{
          formFieldLabelClasses: String,
          formFieldClasses: String,
          formFieldContainerClasses: String,
          field: Object,
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
                       pattern:{
                        id: '',
                        pattern: ''
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
                        icon: ''
                       },
                       component: {
                        id: '',
                        component: 'TextInput'
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
              this.fieldData = newValue
              this.$emit("TextInputInput", newValue)
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
