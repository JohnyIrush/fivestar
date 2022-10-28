<template>
 <div :class="' ' + Theme.key + '-container'">
  <Quick_NavBar></Quick_NavBar>
    <div class="container">
          <div class="row">
            <div class="col-4">
              <div :class="'mt-2 ' + Theme.key + '-card'">
                <div :class="'pb-0 text-left ' + Theme.key + '-card'">
                  <h3 :class="'font-weight-bolder ' + Theme.key + '-text-color'">Welcome back</h3>
                </div>
                  <div :class="'text-center pt-4 ' + Theme.key + '-text-color'">
                    <h5>Signin with</h5>
                  </div>
                  <div class="row px-xl-5 px-sm-4 px-3">
                    <div class="col-3 ms-auto px-1">
                      <a class="btn btn-outline-light w-100" href="javascript:;">
                        <i :class="'fab fa-github fa-2x ' + Theme.key + '-text-color'"></i>
                      </a>
                    </div>
                    <div class="col-3 px-1">
                      <a class="btn btn-outline-light w-100" href="javascript:;">
                        <i :class="'fab fa-linkedin fa-2x ' + Theme.key + '-text-color'"></i>
                      </a>
                    </div>
                    <div class="col-3 me-auto px-1">
                      <a class="btn btn-outline-light w-100" :href="route('google-redirect')">
                        <i :class="'fab fa-google fa-2x ' + Theme.key + '-text-color'"></i>
                      </a>
                    </div>
                    <div class="mt-2 position-relative text-center">
                      <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                        or
                      </p>
                    </div>
                  </div>
                <Head title="Log in" />

                    <jet-validation-errors class="mb-4" />

                    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                        {{ status }}
                    </div>
                    <section>
                            <div :class="'form-container ' + Theme.key + '-card'">
                               <form @submit.prevent="submit">
                                   <div>
                                       <jet-label for="email" value="Email" />
                                       <jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus />
                                   </div>
           
                                   <div class="mt-4">
                                       <jet-label for="password" value="Password" />
                                       <jet-input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
                                   </div>
           
                                   <div class="block mt-4">
                                       <label class="flex items-center">
                                           <jet-checkbox name="remember" v-model:checked="form.remember" />
                                           <span class="ml-2 text-sm text-gray-600">Remember me</span>
                                       </label>
                                   </div>
           
                                   <div class="items-center mt-2">
                                       <button :class="'btn w-100 mt-4 mb-0 text-white ' + Theme.key + '-gradient'"  :disabled="form.processing">
                                           Log in
                                       </button>
                                   </div>
                                   <div class="text-center mt-1">
                                       <Link v-if="canResetPassword" :href="route('password.request')" :class="'underline text-sm  hover:text-gray-90 text-center ' + Theme.key + '-text-color'">
                                           Forgot your password?
                                       </Link>
                                   </div>
                               </form>
                            </div>
                    </section>
                <div class="card-footer mt-1 text-center pt-0 px-lg-2 px-1">
                  <p :class="'mb-4 text-sm mx-auto text-center ' + Theme.key + '-text-color'">
                    Don't have an account?
                    <Link :href="route('register')" :class="'font-weight-bold ' + Theme.key + '-text-color'">Sign up</Link>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-8">
                <div id="login-sidebar" class="h-100 w-100"></div>
            </div>
          </div>
    </div> 
 </div>   
</template>

<script>
    import { defineComponent, inject, ref, provide } from 'vue'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import QuickFooter from '../Theme/widgets/Quick-Footer.vue'
    import Quick_NavBar from '../Theme/widgets/Quick-NavBar.vue'

    import {store} from '../../store/store.js'

    export default defineComponent({
        components: {
            Head,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Link,
            QuickFooter,
            Quick_NavBar
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },
        setup(props,context)
        {    
            var Module = ref(context.attrs.module)
            var Display = ref(context.attrs.display)

            provide("Theme", store.state.Application.Theme);

            console.log("props",context.attrs)

            return { 
              Module, 
              Display 
              }  
        },
        computed:{
            Theme()
            {
                return store.state.Application.Theme
            }
        },
        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },
        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        },
        watch: {
          Theme: (val, oldVal) => {
            document.getElementById('app-body').classList.add(val.key + '-gradient');
          }
        },
        mounted()
        {
          document.getElementById('app-body').classList.add(this.Theme.key + '-gradient');

        const menuWindowContainer = document.getElementById('login-sidebar');
        if (true)
        {
          menuWindowContainer.style.background= `url(/assets/images/themes/${this.Theme.key + '-image.jpg'})` + ' ' + 'repeat 0 0'
        }
        }
    })
</script>

<style scoped>

</style>