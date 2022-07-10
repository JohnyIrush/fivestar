<template>
  <div class="modal fade" id="inteli-mpesa-pay" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inteli-paypal-pay" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-c-center text-center">
      <div class="modal-content glass-content text-c-center text-center">
        <div class="modal-header text-c-center">
            <div class="col">
                <h3 class="modal-title" id="">Mpesa Payment</h3>
            </div>
        </div>
        <form @submit.prevent="lipaNaMpesa()" id="mpesa-express-form" class="px-4 py-3">
        <div class="modal-body">
             <div class="form-group">
               <label for="Phone">Phone Number</label>
               <input v-model="mpesa.phone" type="text" name="Phone" class="form-control" id="Phone" placeholder="Phone" >
             </div>
             <div class="form-group">
               <label for="Phone">Amount</label>
               <input v-model="mpesa.amount" type="text" name="Amount" class="form-control" id="Amount" placeholder="Amount" >
             </div>
             <button type="submit" class="btn btn-primary">Lipa Na Mpesa</button>
        </div>
        <div class="modal-footer">
         <div class="d-grid gap-2 col-6 mx-auto">
           <button id="inteli-mpesa-pay-close"  class="btn btn-primary btn-styles" data-bs-dismiss="modal">Close</button>
         </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>

import { store } from '../../../../../store/store.js'

export default
{
    components:
    {
    },
    data() {
        return {
            mpesa:
            {
                amount: '',
                phone: '',
                version: '',
                user_id: ''
            }
        }
    },
    methods:
    {
        lipaNaMpesa()
        {
            this.mpesa.version = store.state.school.version
            this.mpesa.phone = store.state.school.admin_phone
            this.mpesa.amount = store.state.school.amount
            this.mpesa.user_id = store.state.school.user_id


             // var modal = new bootstrap.Modal(document.getElementById('inteli-mpesa-pay'))



            axios.post('/mpesa-express', this.mpesa)
            .then((response)=>{
                //modal.hide()
            })
            .catch((response)=>{
                console.log(response);
                //modal.show()
            })
        }
    }
    ,
    mounted()
    {

    },
    updated() {
        this.mpesa.phone = store.state.school.admin_phone
        this.mpesa.amount = store.state.school.amount
    },

}

</script>

<style scoped>
main
{

    background: linear-gradient(purple, pink);
    background-size: cover;
    padding: 15px;
}

.glass-container
{
    /*position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);*/
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}

.glass-header
{
    /*position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;*/
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


.modal-content
{
    background: transparent !important;
}


input
{
    width: 100%;
    background: white;
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: #000;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.text-c-center
{
    text-align: center !important;
}

.text-font-size
{
    font-size: 18px !important;
}
</style>
