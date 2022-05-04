<template>
      <footer class="footer glass-footer pt-3 mt-2 ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                
                 {{  new Date().getFullYear() }}
                
                Powered <i class="fa fa-heart"></i> by
                <a href="https://softwarescares.sparktalks.org/" class="font-weight-bold" target="_blank">SoftwaresCares</a>
                for a better Time Management.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://softwarescares.sparktalks.org" class="nav-link text-muted" target="_blank">SoftwaresCares</a>
                </li>
                <li class="nav-item">
                  <a href="https://softwarescares.sparktalks.org/about" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://softwarescares.sparktalks.org/development/" class="nav-link text-muted" target="_blank">Technology</a>
                </li>
                <li class="nav-item">
                  <a href="https://softwarescares.sparktalks.org" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
</template>

<script>
    import { defineComponent } from 'vue'


    export default defineComponent({
        components: {

        },
    })
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

.glass-footer
{
   /*
    position: absolute;
    top: -5px;
    right: 20px;
    left: 5px;
    */
    
    padding: 20px 50px !important;
    /*
    display: flex;
    justify-content: space-between;
    align-items: center;*/
    background: rgba(255, 255, 255, 0.2) !important;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05) !important;
    border-radius: 20px !important;
    backdrop-filter: blur(10px) !important;
    border: 1px solid rgba(255, 255, 255, 0.5) !important;
    border-top: 1px solid rgba(255, 255, 255, 0.25) !important;
    border-left: 1px solid rgba(255, 255, 255, 0.5) !important;
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
</style>