<template>

</template>

<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';


    export default defineComponent({
        components: {
            Link,
        },
        mounted()
        {
  // 2. Initialize the JavaScript client library.
  gapi.client.init({
    'apiKey': 'AIzaSyCvikLMdO6UbRLG4GWTg8AJqntIXNmd_w8',
    // clientId and scope are optional if auth is not required.
    'clientId': '837860188674-9q0j1c07si2c82lecsk5n28aja707eih.apps.googleusercontent.com',
    'scope': 'profile',
  }).then(function() {
    // 3. Initialize and make the API request.
    return gapi.client.request({
      'path': 'https://people.googleapis.com/v1/people/me?requestMask.includeField=person.names',
    })
  }).then(function(response) {
    console.log(response.result);
  }, function(reason) {
    console.log('Error: ' + reason.result.error.message);
  });
// 1. Load the JavaScript client library.
gapi.load('client', start);
        }
    })
</script>

<style scoped>

</style>
