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
     <div>  
       <draggable 
          class="dragArea list-group w-full" 
          :list="field.options" 
          @change="log"
        >
      <div 
        class="form-check d-flex flex-row mr-3" 
        v-for="(option, index) in field.options" 
        :key="index"
        @click="toggleEditMode(index)" 
        >
        <input 
        :class="'form-check-input'" 
        type="radio" 
        :name="index" 
        :id="index + 'flex-radio'"
        disabled
        >
        <!--<input 
         :id="field.title + '-text-input'" 
         type="text" 
         :class="'form-control radio-edit-input-style'" 
         v-model="field.options[index].name" 
         v-if="editMode.index == index" 
         />-->
        <label 
         :contenteditable="true"
         :class="'form-check-label form-check-label-edit'" 
         :for="index + 'flex-radio'"
         autofocus
         >
          {{option.name}}
        </label>
        <i 
        class="fas fa-times fa-2x ml-3"
        @click="removeOption(index)"
        ></i>
      </div>
      </draggable>
      <div  class="form-check">
        <input class="form-check-input" type="radio"  id="new-option-radio" disabled>
        <label 
          class="form-check-label d-flex flex-row" 
          for="new-option-radio"
          @click="addOption('')"
          >
          <i class="fas fa-plus mr-2"></i> <span>Add Option </span> 
        </label>
      </div>
     </div>
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

    import { VueDraggableNext } from 'vue-draggable-next'

    export default defineComponent({
        name: "RadioInput",
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
          draggable: VueDraggableNext,
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
                        type: 'radio'
                       },
                       default: {
                        id: '',
                        default: ''
                       },
                       disabled :  {
                        id: '',
                        disabled :  false
                       },
                       required : {
                        id: '',
                        required : false
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
                  editMode: {
                  index: ""
                 }
          }
        },
        methods: {
            isEmpty(obj) {
              for(var prop in obj) {
                if(Object.prototype.hasOwnProperty.call(obj, prop)) {
                  return false;
                }
              }
            
              return JSON.stringify(obj) === JSON.stringify({});
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
          removeOption(index)
          {
            delete this.field.options[index]
          },
          addOption(index, value = {}, key = "")
          {
            var keys = Object.keys(this.field.options)

            var optionName = !(key.length === 0)? 
                            key: 
                            "option" + 
                             (keys.length + 1);

            var option = !(this.isEmpty(value))? value: {id:'', name: optionName};

            if(keys.length == 0)
            {
             this.field.options[optionName] =  option;
            } 
            else
            {
             var position = (keys.indexOf(index) !== -1)? keys.indexOf(index) + 1 : keys.length + 1;

             if (position >= keys.length)
             {
              this.field.options = this.addToObject(this.field.options, optionName, option)
             }
             else
             {
              this.field.options = this.addToObject(this.field.options, optionName, option, position)
             }
            }

            this.field.options = this.field.options;
            console.log(this.field.options)

            //console.log(this.field)
          },
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

              this.$emit("RadioInputInput", newValue)
              console.log(this)

              //this.fieldData = newValue

            const input = document.getElementById(oldValue.title + '-text-input');

            /*
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

.radio-edit-input-style
{
    background: transparent !important;
    border: none !important;
    width: 100px !important;
}


.radio-edit-input-style:focus {
  border-bottom: 5px solid purple !important;
}

.radio-edit-input-style:hover {
  border-bottom: 5px solid purple !important;
}

.form-check-label-edit{
  min-width: 100px !important;
}
</style>
