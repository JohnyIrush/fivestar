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
               <input v-model="mpesa.phone" type="text" name="Phone" class="form-control" id="Phone" placeholder="Phone">
             </div>
             <button type="submit" class="btn btn-primary">Lipa Na Mpesa</button>
        </div>
        <div class="modal-footer">
         <div class="d-grid gap-2 col-6 mx-auto">
           <button  class="btn btn-primary btn-styles" data-bs-dismiss="modal">Close</button>
         </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>


export default
{
    components:
    {
    },
    data() {
        return {
            mpesa:
            {
                amount: 1500,
                phone: ''
            }
        }
    },
    methods:
    {
        lipaNaMpesa()
        {
            axios.post('/mpesa-express')
            .then((response)=>{

              response = (JSON.parse(response));

              if(response.ResponseCode == "0")
              {
               console.log(response);
               //$('#pleaseWaitDialog').modal('hide');
               this.notificationAlert("Transaction Request Status",response.CustomerMessage, "success");
               //$('#pleaseWaitDialog').modal();
               setTimeout(() => {
                 //$('#pleaseWaitDialog').modal('hide');
                 this.transactionResultNotification();
               }, 7000);
              }
              else
              {// case where transaction is not accepted for processing
              console.log(response);
               this.notificationAlert("Transaction Request Status",response.errorMessage, "error");

              }
            })
            .catch((response)=>{
                console.log(response);
            })
        },
    transactionResultNotification()
    {
        axios.get("/transaction/result/notification")
        .then((response)=>{
          //response = (JSON.parse(response));
          console.log(response[0].data);

           if(response[0].data.ResultCode == 0)
           {
            console.log(response[0].data.ResultDesc);
           // alert(response[0].data.ResultDesc, "success");
            this.notificationAlert("Transaction Process Status",response[0].data.ResultDesc, "success");
            //$('#transaction-success-message').text(response[0].data.ResultDesc);
            //$('#transaction-success').toast("show")
            this.readNotification(response[0].id);
            this.paymentSuccess("success");
           }
           else
           {// case where transaction is not processed successfully

           console.log(response);
            this.notificationAlert("Transaction Process Status",response[0].data.ResultDesc, "error");
            //$('#transaction-error-message').text(response[0].data.ResultDesc);
            //$('#transaction-error').toast("show")
            this.readNotification(response[0].id);
            this.paymentSuccess("failed");
           }
        })
        .catch((response)=>{
           console.log(response);
        })
    },

    notificationAlert(title,message, ICON)
    {
      swal({
        title: title,
        text: message, //response.data.CustomerMessage,
        icon: ICON,
        button: "ok",
      });
    },

    readNotification(ID)
    {
        axios("transaction/result/notification/read")
        .then((response)=>{

        })
        .catch((response)=>{

        })

    },

    //--  This is specific for Current project should be removed from package after installing

    paymentSuccess(status)
    {

        axios("/deposit/mpesa-payment")
        .then((response)=>{

        })
        .catch((response)=>{

        })
    }
    }
    ,
    mounted()
    {

    }

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
