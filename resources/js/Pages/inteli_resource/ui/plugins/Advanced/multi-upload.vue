<template>
<div>
    <input @change="upload($event)"
        type="file"
        name="picture"
        id="new-file"
        class="custom-file-input"
        aria-label="picture"
        multiple
        >
    <label class="custom-file-label" for="new-file">
        <span>File...</span>
        <span class="btn-primary">Browse</span>
    </label>
    <button @click="submit" type="button" >Submit</button>
</div>
</template>

<script>
    import MyFormData from "./MyFormData";

    export default {
        data() {
           return {
               form: new MyFormData({contract_id: 5, files: []})
           }
        },
        methods: {
            upload(event) {
                for (let file of event.target.files) {
                    try {
                        let reader = new FileReader();
                        reader.readAsDataURL(file); // Not sure if this will work in this context.
                        this.form.files.push(file);
                    } catch {}
                }
            },
            submit(){
                this.form.post('/api/upload')
                    .catch(errors => {
                        throw errors;
                    })
                    .then((response)=>{
                        console.log(response)
                    });
            }
        }
    }
</script>
