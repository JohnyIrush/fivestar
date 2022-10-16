<template>
 <div class="container">
     <form id="form1">
         <h3>Create Account</h3>
         <input type="email" name="" placeholder="Email" required>
         <input type="password" name="" placeholder="Password" required> 
         <input type="password" name="" placeholder="Confirm Password" required> 

         <div class="btn-box">
             <button type="buton">Next</button>
         </div>
     </form>
     <form id="form2">
         <h3>SOCIAL LINKS</h3>
         <input type="text" name="" placeholder="Medium">
         <input type="text" name="" placeholder="Github"> 
         <input type="text" name="" placeholder="Linkedin"> 

         <div class="btn-box">
             <button type="buton">Next</button>
             <button type="buton">Back</button>
         </div>
     </form>
     <form id="form3">
         <h3>PERSONAL INFO</h3>
         <input type="text" name="" placeholder="First Name" required>
         <input type="text" name="" placeholder="Last Name" required> 
         <input type="text" name="" placeholder="Mobile No." required> 

         <div class="btn-box">
             <button type="buton">Next</button>
             <button type="submit">Submit</button>
         </div>
     </form>

     <div class="step-row">
      <div id="progress"></div>
        <div class="step-col">
            <small>Step 1</small>
        </div>
        <div class="step-col">
            <small>Step 2</small>
        </div>
        <div class="step-col">
            <small>Step 3</small>
        </div>
     </div>
 </div>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        components: {

        },

        mounted() {

        },
    })
</script>

<style scoped>
  .container
  {
    width: 360px !important;
    height: 420px !important;
    margin: 8% auto !important;
    background: #fff !important;
    border-radius: 5px !important;
    position: relative !important;
  }  

  h3{
    text-align: center !important;
    margin-bottom: 40px !important;
    color: #777 !important;
  }

  .container form{
    width: 280px !important;
    position: absolute !important;
    top: 100px !important;
    left: 40px !important;
  }

  form input {
    width: 100% !important;
    padding: 10px 5px !important;
    margin: 5px 0 !important;
    border: 0 !important;
    border-bottom: 1px solid !important;
    outline: none !important;
    background: transparent !important;
  }

  ::placeholder{
    color: #777 !important;
  }

  .btn-box
  {
    width: 100% !important;
    margin: 30px auto !important;
    text-align: center !important;
  }

  form button{
    width: 110px !important;
    height: 35px !important;
    margin: 0 10px !important;
    background: linear-gradient(to right, #ff105f, #ffad06) !important;
    border-radius: 30px !important;
    border: 0 !important;
    outline: none !important;
    color: #fff !important;
    cursor: pointer !important;
  }

#form2
{
    left: 450px !important;
  }
  #form3{
    left: 450px !important;
  }

  .step-row
  {
    width: 300px !important;
    height: 40px !important;
    margin: 0 auto !important;
    display: flex !important;
    align-items: center !important;
    box-shadow: 0 -1px 5px -1px #000 !important;
  }

  .step-col{
    width: 120px !important;
    text-align: center !important;
    color: #333 !important;
  }

#progress{
    position: absolute;
    height: 100%;
    width: 120px;
    background: linear-gradient(to right, #ff105f, #ffad06);
}

#progress::after {
    content: '' !important;
    height: 0 !important;
    width: 0 !important;
    border-top: 20px solid !important;
    border-bottom: 20px solid !important;
    position: absolute !important;
    right: -20px !important;
    top: 0 !important;
    border-left: 20px solid #ffad06 !important;
}
</style>
