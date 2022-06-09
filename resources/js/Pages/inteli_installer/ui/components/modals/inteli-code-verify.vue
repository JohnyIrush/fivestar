<template>
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="inteli-code-verify" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inteli-code-verify" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-c-center text-center">
      <div class="modal-content glass-content text-c-center text-center">
        <div class="modal-header text-c-center">
            <div class="col">
                <h3 class="modal-title" id="">Inteli Verification</h3>
            </div>
        </div>
        <div class="modal-body">
         <div class="mb-3">
           <label for="inteli-code" class="form-label text-font-size">Please Enter Inteli Code</label>
           <input type="text" class="form-control" id="inteli-code" placeholder="Inteli%67*">
         </div>
        </div>
        <div class="modal-footer">
         <div class="d-grid gap-2 col-6 mx-auto">
           <button class="btn btn-primary btn-styles" type="button" data-dismiss="modal">Verify</button>
         </div>
        </div>
      </div>
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
    methods:
    {
        /**This will be mapped using mapGetters */

        launchInteliVerifyModal()
        {
            //store.commit('reducePrice') // This will be committed via actions
            var modal = document.getElementById("inteli-code-verify");
            store.dispatch("launchInteliVerifyModal",modal)
        }

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
