<template>
  <div class="modal fade" id="inteli-paypal-pay" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inteli-paypal-pay" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-c-center text-center">
      <div class="modal-content glass-content text-c-center text-center">
        <div class="modal-header text-c-center">
            <div class="col">
                <h3 class="modal-title" id="">Paypal Payment</h3>
            </div>
        </div>
        <div class="modal-body">
           <div id="paypal-button-container"></div>
        </div>
        <div class="modal-footer">
         <div class="d-grid gap-2 col-6 mx-auto">
           <button id="inteli-paypal-pay-close"  class="btn btn-primary btn-styles" data-bs-dismiss="modal">Close</button>
         </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

/*Toast messages*/
import {Toaster,ToasterPosition,ToasterTimer,ToasterType,} from "bs-toaster";

export default
{
    components:
    {

    },
    data() {
        return {
            paypal:
            {
                amount: 0
            }
        }
    },
    methods:
    {
        payPalPayment(paypaldata)
        {
            axios.post('paypal', paypaldata)
            .then((response)=>{
                console.log(response);
            })
            .catch(()=>{

            })
        }
    },
    mounted()
    {
     paypal.Buttons({
       style: {
         layout: 'vertical',
         color:  'gold',
         shape:  'pill',
         label:  'pay',
       },
    createOrder: function(data, actions) {
      // Set up the transaction
      return actions.order.create({
        intent: "CAPTURE",
        purchase_units: [{
         reference_id: "REFID-000-1001",
          amount: {
            currency_code: "USD",
            value: '13'
          },
        payee: {
            email_address: "softwarescares@gmail.com"
        }
        }],
        application_context:
        {
            brand_name: "SoftwaresCares",
            landing_page: "NO_PREFERENCE",
            shipping_preference: "GET_FROM_FILE",
            user_action: "PAY_NOW",
            return_url: '',
            cancel_url: '',
            //stored_payment_source: ''
        }
      });


    },
    onApprove: function(data, actions) {
    // This function captures the funds from the transaction.
    return actions.order.capture().then(function(details) {
      // This function shows a transaction success message to your buyer.
      var toastMsg = new Toaster();

          toastMsg.create("Paypal Payment", "Paypal Payment Completed Successfully, Thank You!", {
            // DEFAULT, SUCCESS, DANGER, INFO, PRIMARY, WARNING, DARK
            type: ToasterType.SUCCESS,
            // ELAPSED, COUNTDOWN
            timer: ToasterTimer.COUNTDOWN,
            // Delay hiding the toast (ms)
            delay: 5000,
            // Enable/disable animation
            animation: true,
            // Custom toast icon
            //defaultIconMarkup: '<i class="fa fa-user-secret" aria-hidden="true"></i>',
            //position: ToasterPosition.TOP
          })

     var paypaldata = {
        'payment_id' : details.id,
        'create_time' : details.create_time,
        'payer_country_code' : details.payer.email_address,
        'payer_email' : details.payer.address.country_code,
        'payer_name' : details.payer.name.given_name + " " + details.payer.name.surname ,
        'payer_id' : details.payer.payer_id,

        'currency_code' : details.purchase_units[0].amount.currency_code,
        'amount' : details.purchase_units[0].amount.value,

        'payment_status' : details.status,

        'update_time' : details.update_time,
    };



    console.log(paypaldata);


    //var modal = new bootstrap.Modal(document.getElementById('inteli-paypal-pay'))
    var closeButton = document.getElementById("inteli-paypal-pay-close");
    axios.post('paypal', paypaldata)
    .then((response)=>{
        console.log(response);

      closeButton.click();

        //modal.hide();

    })
    .catch(()=>{

       // modal.show();

    })


    });
    },

    onCancel: function (data) {
      // Show a cancel page, or return to cart
        console.log("Cancel data " + data);
    },

    onError: function (err) {
      // For example, redirect to a specific error page
      //window.location.href = "/your-error-page-here";
      console.log("error data " + err);
    }

     }).render('#paypal-button-container');
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
