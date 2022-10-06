<template>
    <div class="row">
      <!--<div class="col-2"></div>-->
      <div class="col-12">
        <CommunicationOption v-if="showCommunicationMenu" :dataPath="'communication/method/options/index'"></CommunicationOption>
      </div>
      <div class="col-12">
        <div class="card glass-content">
         <form id="auto-form" @submit.prevent="submit">
          <div class="row">
           <div :class="' ' + formFieldContainerClasses" v-for="field in fields" :key="field.field">
           <!-- start text/string input-->
           <div  v-if="renderInput(field.type,'text',field.field)" id="text-input" class="mb-3 form-field-container">
             <label :for="field.field" :class="'form-label' + formFieldLabelClasses">{{field.field}}</label>
             <input id="" type="text" class="form-control form-input-style" :value="formEditData[field.field]" :name="field.field" required autofocus :autocomplete="field.field" />
           </div>
           <!-- end text/string input-->


           <!-- start email input-->
           <div v-else-if="renderInput(field.type,'email',field.field)" id="email-input" :class="' ' + formFieldContainerClasses">
             <label :for="field.field" :class="'form-label' + formFieldLabelClasses">{{field.field}}</label>
             <input id="" type="email" class="form-control form-input-style" :value="formEditData[field.field]" :name="field.field" required autofocus :autocomplete="field.field" />
           </div>
           <!-- end email input-->

           <!-- start tel/phone input-->
           <div v-else-if="renderInput(field.type,'tel',field.field)" id="tel-input" :class="' ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label' + formFieldLabelClasses">{{field.field}}</label>
            <input id="" type="tel" class="form-control form-input-style" :value="formEditData[field.field]" :name="field.field" required autofocus :autocomplete="field.field" />
           </div>
           <!-- end tel/phone input-->
           
           <!-- start password input-->
           <div v-else-if="renderInput(field.type,'password',field.field)" id="password-input" :class="' ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label' + formFieldLabelClasses">{{field.field}}</label>
            <input id="" type="password" class="form-control form-input-style" :value="formEditData[field.field]" :name="field.field" required :autocomplete="field.field" />
           </div>
           <!-- end password input-->

           <!-- start number input-->
           <div v-else-if="renderInput(field.type,'number',field.field)" id="number-input" :class="' ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label' + formFieldLabelClasses">{{field.field}}</label>
            <input id="" type="number" class="form-control form-input-style" :value="formEditData[field.field]" :name="field.field" required :autocomplete="field.field" />
           </div>
           <!-- end number input-->

           <!-- start url/link/website input-->
           <div v-else-if="renderInput(field.type,'url',field.field)" id="url-input" :class="' ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label' + formFieldLabelClasses">{{field.field}}</label>
            <input id="" type="url" class="form-control form-input-style" :value="formEditData[field.field]" :name="field.field" required :autocomplete="field.field" />
           </div>
           <!-- end url/link/website input-->

           <!-- start date input-->
           <div v-else-if="renderInput(field.type,'date',field.field)" id="date-input" :class="' ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label'+ formFieldLabelClasses">{{field.field}}</label>
            <input id="date" type="date" class="form-control form-input-style" :value="formEditData[field.field]" :name="field.field" required :autocomplete="field.field" />
           </div>
           <!-- end date input-->

           <!-- start time input-->
           <div v-else-if="renderInput(field.type,'time',field.field)" id="time-input" :class="' ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label' + formFieldLabelClasses">{{field.field}}</label>
            <input id="time" type="time" class="form-control form-input-style" :value="formEditData[field.field]" :name="field.field" required :autocomplete="field.field" />
           </div>
           <!-- end time input-->

           <!-- start textarea input-->
           <div  v-else-if="renderInput(field.type,'textarea',field.field)" id="text-input" :class="'form-field-container ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label' + formFieldLabelClasses">{{field.field}}</label>
            <textarea :name="field.field" :value="formEditData[field.field]" class="form-control form-input-style" id="" rows="3"></textarea>
           </div>
           <!-- end textarea input-->

           <!-- start large textarea input-->
           <div v-else-if="renderInput(field.type,'textarea',field.field)" id="text-input" :class="' ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label' + formFieldLabelClasses">{{field.field}}</label>
            <textarea :name="field.field" :value="formEditData[field.field]" class="form-control" id="" rows="6"></textarea>
           </div>
           <!-- end large textarea input-->

           <!-- start radio input-->
           <div v-else-if="renderInput(field.type,'radio',field.field)" id="radio-input"   :class="'input-group ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label '+ formFieldLabelClasses">{{field.field}}</label>
             <div class="form-check" v-for="option in options[field.field][field.field]" :key="index">
             <input class="form-check-input" type="radio" :value="(option[options[field.field]['value']] != null)? option[options[field.field]['value']] : option" :name="field.field" id="">
             <label :class="'form-check-label '" :for="option">{{(option[options[field.field]['name']] != null)? option[options[field.field]['name']] : option}}</label>
             </div>
           </div>
           <!-- end radio input-->

           <!-- start checkbox input-->
           <div v-else-if="renderInput(field.type,'checkbox',field.field)" id="check-input" :class="'input-group ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label '+ formFieldLabelClasses">{{options[field.field]["name"]}}</label>
            <div  class="form-check" v-for="option in options[field.field][field.field]" :key="option.id" >
              <input class="form-check-input" type="checkbox"  :value="(option[options[field.field]['value']] != null)? option[options[field.field]['value']] : option" :name="field.field" id="">
              <label class="form-check-label" :for="field.field">{{(option[options[field.field]['name']] != null)? option[options[field.field]['name']] : option}}</label>
            </div>
           </div>
           <!-- end checkbox input-->

           <!-- start select input-->
          <div v-else-if="renderInput(field.type,'select',field.field)" id="select-input"  :class="' ' + formFieldContainerClasses">
            <label :for="field.field" :class="'form-label '+ formFieldLabelClasses">{{options[field.field]["name"]}}</label>
            <select :value="formEditData[field.field]" :name="field.field" class="form-select" :aria-label="field.field">
             <option  v-for="option in options[field.field][field.field]" :key="option.id" :value="(option[options[field.field]['value']] != null)? option[options[field.field]['value']] : option">{{(option[options[field.field]['name']] != null)? option[options[field.field]['name']] : option}}</option>
            </select>
           </div>
           <!-- end select input-->
           </div>
          </div>
          <button type="submit" class="btn sbtn-primary" v-if="showSubmitButton">Submit</button>
         </form>
        </div>
      </div>
      <!--<div class="col-2"></div>-->
    </div>
</template>

<script>
import { defineComponent } from 'vue'

import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

import {store} from "../../../../../store/store.js"

import CommunicationOption from "../../../../inteli_communication/ui/widgets/menus/CommunicationOption.vue"

export default defineComponent({
  name:"MainForm",
  props: {
    formPath: String,
    formFields: Array,
    showCommunicationMenu: Boolean,
    showSubmitButton:{
      type: Boolean,
      default: true
    },
    formBuilderFields: Array,
    formFieldLabelClasses: String,
    formFieldContainerClasses: String
  },
  components:{
    CommunicationOption
  },
  setup ()
  {

  },
 computed:{
  formBuilderFieldsData()
  {
    return this.formBuilderFields
  },
  formFieldsData()
  {
    return this.formFields
  },
  formEditData()
  {
    return store.state.form.formEditData
  },
  formType()
  {
    return store.state.form.formType
  },
  fields()
  {
    if (store.state.form.fields.length > 0)
      return store.state.form.fields[0]
    else if(this.formFieldEntries.length > 0)
      return this.formFieldEntries[0]
    //else if (this.formFieldsData.length > 0)
    //  return this.formFieldsData[0]
    //else if(this.formBuilderFields.length > 0)
    //  return this.formBuilderFields
  },
  options()
  {
    if (store.state.form.fields.length > 0)
      return store.state.form.fields[1]
    else if(this.formFieldEntries.length > 0)
      return this.formFieldEntries[1]
    //else if (this.formFieldsData.length > 0)
    //  return this.formFieldsData[1]
    //else if(this.formBuilderFieldsData.length > 0)
  },
  hidden()
  {
    if (store.state.form.fields.length > 0)
      return store.state.form.fields[2]
    else if(this.formFieldEntries.length > 0)
      return this.formFieldEntries[2]
    //else if (this.formFieldsData.length > 0)
    //  return this.formFieldsData[2]
    //else if(this.formBuilderFieldsData.length > 0)
  },
  crud()
  {
    if (store.state.form.fields.length > 0)
      return store.state.form.fields[3]
    else if(this.formFieldEntries.length > 0)
      return this.formFieldEntries[3]
    //else if (this.formFieldsData.length > 0)
    //  return this.formFieldsData[3]
    //else if(this.formBuilderFieldsData.length > 0)
  },
 },
  data (){
    return {
     form: [],
     formEditData: [],
     formType: '',
     formFieldEntries: []
   }
 },
   methods:{
    submit()
    {
      this.formFields()
      this.getFormData()

      var url = (this.formType == 'update')? this.crud.update: this.crud.store;

      axios.post(url, this.form)
      .then((response)=>{
        alert("success")
      })
      .catch((response)=>{
        alert("error")
      })
    },
    getFormData()
    {
       const Inputs = document.querySelectorAll('#auto-form input');

       Inputs.forEach(input => {
          this.form[input.name] = input.value
       });

       const select = document.querySelectorAll('#auto-form select');

       select.forEach(input => {
          this.form[input.name] = input.options[input.selectedIndex].value;
       });

       const textarea = document.querySelectorAll('#auto-form textarea');

       textarea.forEach(input => {
          this.form[input.name] = input.value;
       });
    },
    formFields()
    {
      var fields = [];

       for (var i = 0; i < this.fields.length;i++)
       {
         if (!this.isFieldHidden(this.fields[i].field))
         {
          fields.push(this.fields[i].field)
         }
       }

       this.form = fields.reduce((acc,curr)=> (acc[curr]='',acc),{});
    },
    isFieldHidden(fieldname)
    {
      return this.hidden.includes(fieldname);
    },
    checkFieldHasOpions(fieldname)
    {
      var keys = Object.keys(this.options);
      return keys.includes(fieldname);
    },
    checkDataType(fieldtype,type)
    {
      if((fieldtype))
        return fieldtype.search(type) != -1;
    },
    renderInput(fieldtype, inputtype, fieldname)
    {
      if (!this.isFieldHidden(fieldname))
      {
       /**text input check
        *text input takes(varchar, string) 
       */
       if (!this.checkFieldHasOpions(fieldname) && this.checkDataType(fieldtype,"varchar") && inputtype == "text")
       {
         return true;
       }
       /**email input check
        *email input takes(varchar, string) 
       */
       else if (!this.checkFieldHasOpions(fieldname) && this.checkDataType(fieldtype,"varchar") && inputtype == "email" && fieldname == "email" || fieldname == "e-mail")
       {
        return true;
       }
       /**tel input check
        *tel input takes(varchar, string) 
       */
       else if (!this.checkFieldHasOpions(fieldname) && inputtype == "tel" && fieldname == "tel" || fieldname == "phone" || fieldname == "mobile" || fieldname == "phone_number" || fieldname == "mobile_number")
       {
        return true;
       }
       /**password input check
        *password input takes(varchar, string) 
       */
       else if (!this.checkFieldHasOpions(fieldname) && inputtype == "password" && fieldname == "code," || fieldname == "key" || fieldname == "pin" || fieldname == "pincode" || fieldname == "secret" || fieldname == "securitykey")
       {
        return true;
       }
       else if (!this.checkFieldHasOpions(fieldname) && inputtype == "number" && (this.checkDataType(fieldtype,"int") || this.checkDataType(fieldtype,"integer") || this.checkDataType(fieldtype,"double") || this.checkDataType(fieldtype,"float") || this.checkDataType(fieldtype,"bigInteger")) )
       {
        return true;
       }
       else if (!this.checkFieldHasOpions(fieldname) && inputtype == "date" &&  fieldtype == "date" || this.checkDataType(fieldtype,"date") || this.checkDataType(fieldtype,"timestamp"))
       {
        return true;
       }
       else if (!this.checkFieldHasOpions(fieldname) && inputtype == "time" &&  fieldtype == "time" || this.checkDataType(fieldtype,"time"))
       {
        return true;
       }
       else if (!this.checkFieldHasOpions(fieldname) && inputtype == "time" &&  fieldtype == "hidden")
       {
        return true;
       }
       else if (!this.checkFieldHasOpions(fieldname) && inputtype == "textarea" &&  fieldtype == "text")
       {
        return true;
       }
       else if (!this.checkFieldHasOpions(fieldname) && inputtype == "textarea" &&  fieldtype == "longtext")
       {
        return true;
       }
       
       else if (this.checkFieldHasOpions(fieldname) && inputtype == "radio" && this.options[fieldname]["limit"] == 1 &&  (this.checkDataType(fieldtype,"tinyint") || this.checkDataType(fieldtype,"boolean") || this.checkDataType(fieldtype,"bool")))
       {
        return true;
       }
       else if (this.checkFieldHasOpions(fieldname) && inputtype == "checkbox" && this.options[fieldname]["limit"]  && this.options[fieldname]["limit"] >= 2)
       {
        return true;
       }
       else if (this.checkFieldHasOpions(fieldname) && inputtype == "select" && this.options[fieldname]["limit"] && this.options[fieldname]["limit"] == 1)
       {
        return true;
       }
       else
       {
         return false;
       }
      }
    },
    getFormFields(url)
    {
      axios.get(url)
      .then((response)=>{
        this.formFieldEntries = response.data
      })
    }
   },
   created()
   {
    this.getFormFields(this.formPath)
   },
   mounted()
   {
   },
   updated()
   {
   }
});
</script>

<style scoped>
.main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
}

.glass-container
{
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}

.glass-header
{
    position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

/*Content*/

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

.form-field-container
{
  border-bottom: 2px solid #adadad !important;
  margin: 30px 0 !important;
  width: 100% !important;

}

/*
.form-input-style
{
  width: 100% !important !important;
  padding: 0 5px !important;
  height: 40px !important;
  font-size: 16px !important;
  border: none !important;
  background: none !important;
  outline: none !important;
}
*/

.form-input-style
{
    background: transparent;
    border: none;
}

.form-input-style:focus {
  border-bottom: 5px solid purple !important;
}

</style>