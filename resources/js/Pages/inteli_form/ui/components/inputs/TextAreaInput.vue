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
          id="cols-basic-addon">
          cols
        </span>
        <input 
          v-model="field.settings.cols.cols"
          type="number" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="cols-basic-addon">
       </div>
      </div>
      <div class="col-3 mt-2 mb-2">
      <div class="input-group ">
        <span 
          class="input-group-text" 
          id="rows-basic-addon">
          rows
        </span>
        <input 
          v-model="field.settings.rows.rows"
          type="number" 
          class="form-control form-input-transparent" 
          aria-label="" 
          aria-describedby="rows-basic-addon">
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
     :id="field.field + '-text-input-container'"  
     :class="' ' + formFieldContainerClasses">
     <label 
        :for="field.title" 
        :class="'form-label' + formFieldLabelClasses">
        {{field.title}}
     </label>
    <textarea
       :id="field.title + '-text-input'" 
       type="text" 
       :class="'form-control ' + formFieldClasses" 
       v-model="field.value" 
       :name="field.title"  
       :placeholder="field.settings.placeholder.placeholder"
       :autocomplete="field.settings.minlength.autocomplete" 
       :minlength="field.settings.minlength.minlength"
       :maxlength="field.settings.maxlength.maxlength"
       :rows="field.settings.rows.rows" 
       :cols="field.settings.cols.cols"
       autofocus
       >
    </textarea> 
  </div>
     <div 
     :id="field.title + 'Help'" 
     class="form-text">
       {{field.description}}
     </div>
  <!-- end text/string input-->
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        name: "TextAreaInput",
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
        data() {
            return {
                   field: this.fieldData/*{
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
            }*/
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
              this.$emit("TextAreaInputInput", newValue)
              //console.log(this)

            const input = document.getElementById(oldValue.title + '-textarea-input');

            //console.log("field", newValue)
            //if (newValue.settings.disabled)
            //{
              //input.disabled = newValue.settings.disabled
            //}
            //else
            //{
              //input.removeAttribute("disabled")
            //}

            //if (newValue.settings.required)
            //{
              //input.required = newValue.settings.required
            //}else{
              //input.removeAttribute("required")
            //}
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

.form-input-style:focus {
  border-bottom: 5px solid purple !important;
}
</style>
