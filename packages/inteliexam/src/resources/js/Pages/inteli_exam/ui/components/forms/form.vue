<template>
    <div class="row">
      <!--<div class="col-2"></div>-->
      <div class="col">
        <div class="card glass-content">
         <form id="auto-form" @submit.prevent="submit">
          <div class="row">
           <div class="col-6" v-for="field in fields" :key="field.field">
           <!-- start text/string input-->
           <div v-if="renderInput(field.type,'text',field.field)" id="text-input" class="mb-3">
             <label :for="field.field" class="form-label">{{field.field}}</label>
             <input id="" type="text" class="form-control" :value="formEditData[field.field]" :name="field.field" required autofocus :autocomplete="field.field" />
           </div>
           <!-- end text/string input-->

           <!-- start email input-->
           <div v-else-if="renderInput(field.type,'email',field.field)" id="email-input" class="mb-3">
             <label :for="field.field" class="form-label">{{field.field}}</label>
             <input id="" type="email" class="form-control" :value="formEditData[field.field]" :name="field.field" required autofocus :autocomplete="field.field" />
           </div>
           <!-- end email input-->

           <!-- start tel/phone input-->
           <div v-else-if="renderInput(field.type,'tel',field.field)" id="tel-input" class="mb-3">
            <label :for="field.field" class="form-label">{{field.field}}</label>
            <input id="" type="tel" class="form-control" :value="formEditData[field.field]" :name="field.field" required autofocus :autocomplete="field.field" />
           </div>
           <!-- end tel/phone input-->
           
           <!-- start password input-->
           <div v-else-if="renderInput(field.type,'password',field.field)" id="password-input" class="mb-3">
            <label :for="field.field" class="form-label">{{field.field}}</label>
            <input id="" type="password" class="form-control" :value="formEditData[field.field]" :name="field.field" required :autocomplete="field.field" />
           </div>
           <!-- end password input-->

           <!-- start number input-->
           <div v-else-if="renderInput(field.type,'number',field.field)" id="number-input" class="mb-3">
            <label :for="field.field" class="form-label">{{field.field}}</label>
            <input id="" type="number" class="form-control" :value="formEditData[field.field]" :name="field.field" required :autocomplete="field.field" />
           </div>
           <!-- end number input-->

           <!-- start url/link/website input-->
           <div v-else-if="renderInput(field.type,'url',field.field)" id="url-input" class="">
            <label :for="field.field" class="form-label">{{field.field}}</label>
            <input id="" type="url" class="form-control" :value="formEditData[field.field]" :name="field.field" required :autocomplete="field.field" />
           </div>
           <!-- end url/link/website input-->

           <!-- start date input-->
           <div v-else-if="renderInput(field.type,'date',field.field)" id="date-input" class="">
            <label :for="field.field" class="form-label">{{field.field}}</label>
            <input id="date" type="date" class="form-control" :value="formEditData[field.field]" :name="field.field" required :autocomplete="field.field" />
           </div>
           <!-- end date input-->

           <!-- start textarea input-->
           <div v-else-if="renderInput(field.type,'textarea',field.field)" id="text-input" class="">
            <label :for="field.field" class="form-label">{{field.field}}</label>
            <textarea :name="field.field" :value="formEditData[field.field]" class="form-control" id="" rows="3"></textarea>
           </div>
           <!-- end textarea input-->

           <!-- start radio input-->
           <div v-else-if="renderInput(field.type,'radio',field.field)" id="radio-input"  class="input-group">
            <label :for="field.field">{{field.field}}</label>
             <div class="form-check" v-for="option in options[field.field][field.field]" :key="index">
             <input class="form-check-input" type="radio" :value="(option[options[field.field]['value']] != null)? option[options[field.field]['value']] : option" :name="field.field" id="">
             <label class="form-check-label" :for="option">{{(option[options[field.field]['name']] != null)? option[options[field.field]['name']] : option}}</label>
             </div>
           </div>
           <!-- end radio input-->

           <!-- start checkbox input-->
           <div v-else-if="renderInput(field.type,'checkbox',field.field)" id="check-input" class="input-group mb-3">
            <label :for="field.field">{{options[field.field]["name"]}}</label>
            <div  class="form-check" v-for="option in options[field.field][field.field]" :key="option.id" >
              <input class="form-check-input" type="checkbox"  :value="(option[options[field.field]['value']] != null)? option[options[field.field]['value']] : option" :name="field.field" id="">
              <label class="form-check-label" :for="field.field">{{(option[options[field.field]['name']] != null)? option[options[field.field]['name']] : option}}</label>
            </div>
           </div>
           <!-- end checkbox input-->

           <!-- start select input-->
          <div v-else-if="renderInput(field.type,'select',field.field)" id="select-input"  class="">
            <label :for="field.field">{{options[field.field]["name"]}}</label>
            <select :value="formEditData[field.field]" :name="field.field" class="form-select" :aria-label="field.field">
             <option  v-for="option in options[field.field][field.field]" :key="option.id" :value="(option[options[field.field]['value']] != null)? option[options[field.field]['value']] : option">{{(option[options[field.field]['name']] != null)? option[options[field.field]['name']] : option}}</option>
            </select>
           </div>
           <!-- end select input-->
           </div>
          </div>
          <button type="submit" class="btn sbtn-primary">Submit</button>
         </form>
        </div>
      </div>
      <!--<div class="col-2"></div>-->
    </div>
</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

import {store} from "../../../../../store/store.js"

export default {
  name:'mainform',
  props: {
    formPath: String
  },
  setup ()
  {

  },
  data (){
    return {
     form: [],
     formEditData: [],
     formType: ''
   }
 },
 computed:{
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
    return store.state.form.fields[0]
  },
  options()
  {
    return store.state.form.fields[1]
  },
  hidden()
  {
    return store.state.form.fields[2]
  },
  crud()
  {
    return store.state.form.fields[3]
  },
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
       else if (!this.checkFieldHasOpions(fieldname) && inputtype == "textarea" &&  fieldtype == "text")
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
    getFields(url)
    {
      axios.get(url)
      .then((response)=>{
         this.fields = response.data[0]
         this.options = response.data[1]
         this.hidden = response.data[2]
         this.formFields()
         this.crud = response.data[3]
      })
    }
   },
   mounted()
   {
   }
}
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
</style>