<template>
<!--START HORIZONTAL WIZARD {{JSON.stringify(WizardDetails["sections"])}}-->
<div v-if="orientation === 'horizontal'">
<nav>
  <div 
    class="nav nav-tabs" 
    :id="'nav-tab' + WizardTitle" 
    role="tablist">
    <button
      v-for="(pill, index) in WizardDetails[paneKeyName]"
      :key="index" 
      class="nav-link" 
      :id="'nav-' + index + '-tab'" 
      data-bs-toggle="tab" 
      :data-bs-target="'#nav-' + index" 
      type="button" 
      role="tab"
      :aria-controls="'nav-' + index" 
      aria-selected="false">
      {{pill[paneTitleName]}}
    </button>
  </div>
</nav>
<div 
  class="tab-content" 
  :id="'nav-tabContent' + WizardTitle">
  <div
    v-for="(pane, index) in WizardDetails[paneKeyName]"
    :key="pane" 
    class="tab-pane fade" 
    :id="'nav-' + index" 
    role="tabpanel" 
    :aria-labelledby="'nav-' + index + '-tab'">
    <div>
      <div v-if="PaneComponentDisplayType == 'single'">
        <component 
          :is="PaneComponentName"
          :Mode="false"
          :formDetails="
                {
                  id: (PaneComponentName == 'FormBuilder')? WizardDetails.id : '',
                  user_id: (PaneComponentName == 'FormBuilder')? WizardDetails.user_id : '',
                  title: (PaneComponentName == 'FormBuilder')? WizardDetails.title : '',
                  description: (PaneComponentName == 'FormBuilder')? WizardDetails.description : '',
                  cover: (PaneComponentName == 'FormBuilder')? WizardDetails.cover : '',
                  image: (PaneComponentName == 'FormBuilder')? WizardDetails.image : '',
                  sections: {index:pane},
              }"
        >
        </component>
      </div>
      <div v-if="PaneComponentDisplayType == 'diverse'"> 
        <component 
          :is="pane.component"
        >
        </component>
      </div>
    </div>
  </div>
</div>
</div>
<!--END HORIZONTAL WIZARD-->
<!--START VERTICAL WIZARD-->
<div v-if="orientation === 'vertical'">
<div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
  </div>
</div> 
</div>
<!--END VERTICAL WIZARD-->
</template>

<script>
    import { defineComponent } from 'vue'
    import FormBuilder from '../FormBuilder.vue'

    export default defineComponent({
        props:{
            orientation: String,
            WizardDetails: Object,
            WizardTitle: String,
            PaneComponentName: String,
            PaneComponentDisplayType: String,
            paneKeyName: String,
            paneTitleName:String
        },
        components: {
            FormBuilder
        },

        mounted() {
            console.log('WizardDetails',this.WizardDetails)
        },
    })
</script>

<style scoped>

</style>
