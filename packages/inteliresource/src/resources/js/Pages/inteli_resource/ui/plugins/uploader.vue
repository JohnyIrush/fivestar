<template>
<div class="card body">
    <div class="wrapper">
    <header>
        Upload Files
    </header>
    <form @click="launchUploadDialog" action="#">
        <input @change="getFile" type="file" class="file-input" hidden>
        <i class="fas fa-cloud-upload-alt"></i>
        <p>Browse Files To upload</p>
    </form>
    <section class="progress-area">
      <li class="row">
          <i class="fas fa-file-alt"></i>
          <div class="content">
              <div class="details">
                  <span class="name">image_1.png . Uploading</span>
                  <span class="percent">50%</span>
              </div>
              <div class="progress-bar">
                  <!--<progress max="100" :value.prop="uploadPercentage"></progress>-->
                  <div class="progress"></div>
              </div>
          </div>
      </li>
    </section>
    <section class="uploaded-area">
      <li class="row">
          <i class="fas fa-file-alt"></i>
          <div class="content">
              <div class="details">
                  <span class="name">image_1.png . Uploaded</span>
                  <span class="percent">70KB</span>
              </div>
          </div>
          <i class="fas fa-check"></i>
      </li>
    </section>
</div>
</div>
</template>

<script>
    import { defineComponent } from 'vue'
    //import progres from "../components/progress/file-uploade-progress.vue";


    export default defineComponent({
        components: {
            //progress
        },

        methods:
        {
            launchUploadDialog()
            {
              //fileInput =  document.querySelector(".file-input");
              //progressArea =  document.querySelector(".progres-area");
              //puploadedArea =  document.querySelector(".uploaded-area");

              document.querySelector(".file-input").click();


            },
            getFile(event)
            {
                console.log(event)


                let file = event.target.files[0];

                if(file)
                {
                    let fileName = file.name;
                    this.uploadFile(file)
                }

            },

            uploadFile(file)
            {
                axios.post('api/upload', file)
                .then((response)=>{
                    console.log(response);
                })
                .catch((error)=>{
                    console.log(error);
                })
            }


        },
        mounted()
        {
            // const form = document.querySelector("form");
            // fileInput =  document.querySelector(".file-input");
            // progressArea =  document.querySelector(".progres-area");
            // puploadedArea =  document.querySelector(".uploaded-area");

        /*
            form.addEventListener("click", ()=>{
                fileInput.click();
            });
            */

            /*
            fileInput.onChange = ({target}) =>{
                let file = target.files[0];

                if(file)
                {
                    let fileName = file.name;
                    console.log(fileName)
                }
            }
            */


        },
    })
</script>

<style scoped>
.body
{
    display: flex;
    align-items: center;
    justify-content: center;
}

.wrapper
{
    width: 430px;
    padding: 30px;
    background: #fff;
    border-radius: 5px;
}


.wrapper header
{
    color: #6990f2;
    font-size: 27px;
    font-weight: 600;
    text-align: center;
}

.wrapper form
{
    height: 167px;
    display: flex;
    margin: 30px 0;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    border-radius: 5px;
    border: 2px dashed #6990f2;
}

form :where(i, p)
{
    color: #6990f2;
}

form i{
    font-size: 50px;
}

form p {
    font-size: 16px;
    margin-top: 15px;
}

section .row
{
    background: #e9f0ff;
    margin-bottom: 10px;
    list-style: none;
    padding: 15px 20px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

section .row i
{
  font-size: 30px;
  color: #6990f2;
}

.progress-area .row .content
{
    width: 100%;
    margin-left: 15px;
}


.progress-area  .details{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.progress-area .progress
{
    height: 100%;
    width: 50%;
    background: #6990f2;
    border-radius: inherit;
}

.progress-area .progress-bar
{
    height: 6px;
    width: 100%;
    background: #fff;
    border-radius: inherit;
}

.uploaded-area .row .content
{
    display: flex;
    align-items: center;
}

.uploaded-area .row .details
{
    display: flex;
    margin-left: 15px;
    flex-direction: column;
}

.uploaded-area .details .size
{
    font-size: 11px;
    color: #404040;
}
</style>
