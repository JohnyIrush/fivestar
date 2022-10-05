<template>
              <menu>
                <menuitem id="demo1">
                  <span class="input-group-text" id="addon-wrapping" v-html="selectedType.icon"></span>
                  <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" readonly v-model="selectedType.field">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-caret-square-down"></i></span>
                  </div>
                  <menu>
                    <menuitem><a>about</a></menuitem>
                         <menuitem>
                            <a>settings</a>
                            <menu>
                               <menuitem><a>Test 1</a></menuitem>
                               <menuitem><a>Test 2</a></menuitem>
                               <menuitem><a>Test 3</a></menuitem>
                               <menuitem><a>Test 4</a></menuitem>
                            </menu>  
                         </menuitem>
                    <menuitem><a>help</a></menuitem>
                    <menuitem id="demo2">
                      <a>more</a>
                      <menu>
                        <menuitem id="demo3">
                          <a>deeper</a>
                          <menu>
                            <menuitem><a>deep 1</a></menuitem>
                            <menuitem><a>deep 2</a></menuitem>
                            <menuitem><a>deep 3</a></menuitem>
                          </menu>
                        </menuitem>
                        <menuitem><a>test</a></menuitem>
                      </menu>
                    </menuitem>
                  </menu>
                </menuitem>
              </menu>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        components: {

        },
        data() {
            return {
                inputtypes: [
                    {
                    field: "text",
                    type: "text"
                    },
                    {
                    field: "phone",
                    type: "tel"
                    },
                    {
                    field: "password",
                    type: "password"
                    },
                    {
                    field: "radio",
                    type: "radio"
                    },
                    {
                    field: "checkbox",
                    type: "checkbox"
                    },
                    {
                    field: "color",
                    type: "color"
                    },
                    {
                    field: "date",
                    type: "date"
                    },
                    {
                    field: "time",
                    type: "time"
                    },
                    {
                    field: "email",
                    type: "email"
                    },
                    {
                    field: "file",
                    type: "file"
                    },
                    {
                    field: "number",
                    type: "number"
                    },
                    {
                    field: "range",
                    type: "range"
                    },
                    {
                    field: "search",
                    type: "search"
                    },
                    {
                    field: "url",
                    type: "url"
                    },
                ]
            }
        },
    })
</script>

<style >

</style>
