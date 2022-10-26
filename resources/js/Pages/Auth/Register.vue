<template>
    <Sign_Up_NavBar></Sign_Up_NavBar>
        <section :class="'min-vh-100 mb-8 main ' + Theme.key + '-container'">
          <div :class="'page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg ' + Theme.key + '-card'">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                  <h1 :class="' mb-2 mt-5 ' + Theme.key + '-text-color'">Welcome to Inteli System!</h1>
                  <p :class="'text-lead  ' + Theme.key + '-text-color'">Time Management and Excellence.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
              <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div :class=" 'z-index-0 '  + Theme.key + '-card'">
                  <div :class="'text-center pt-4 ' + Theme.key + '-text-color'">
                    <h5>Register with</h5>
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
                      <p :class="'text-sm font-weight-bold mb-2  d-inline z-index-2 bg-white px-3 ' + Theme.key + '-text-color'">
                        or
                      </p>
                    </div>
                  </div>
                  <div :class="'card-body '  + Theme.key + '-card'">
                   <Head title="Register" />
                   <jet-validation-errors class="mb-4" />

                    <section>
                            <div class="form-container">
                               <form @submit.prevent="submit">
                                    <div>
                                        <jet-label for="name" value="Name" />
                                        <jet-input id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="name" />
                                    </div>

                                    <div class="mt-4">
                                        <jet-label for="email" value="Email" />
                                        <jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required />
                                    </div>

                                    <div class="mt-4">
                                        <jet-label for="phone" value="Phone" />
                                        <jet-input id="phone" type="tel" class="mt-1 block w-full" v-model="form.phone" required />
                                    </div>

                                    <div class="mt-4">
                                        <jet-label for="password" value="Password" />
                                        <jet-input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
                                    </div>

                                    <div class="mt-4">
                                        <jet-label for="password_confirmation" value="Confirm Password" />
                                        <jet-input id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
                                    </div>


                                    <div class="mt-4" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
                                        <jet-label for="terms">
                                            <div class="flex items-center">
                                                <jet-checkbox name="terms" id="terms" v-model:checked="form.terms" />

                                                <div :class="'ml-2 '  + Theme.key + '-text-color'">
                                                    I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm hover:text-gray-900">Privacy Policy</a>
                                                </div>
                                            </div>
                                        </jet-label>
                                    </div>

                                    <div class="items-center  mt-4">
                                        <Link :href="route('login')" 
                                        :class="'underline text-center text-sm  hover:text-gray-900 '  + Theme.key + '-text-color'">
                                            Already registered?
                                        </Link>
                                    </div>
                                    <div class="items-center  mt-4">
                                        <button :class="'btn  w-100 my-4 mb-2 text-center ' + Theme.key + '-gradient'"  :disabled="form.processing">
                                            <span class="text-white">Register</span> 
                                        </button>
                                    </div>
                               </form>
                            </div>
                    </section>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</template>

<script>
    import { defineComponent, ref, inject, provide } from 'vue'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import Sign_Up_NavBar from '../Theme/widgets/Sign-Up-NavBar.vue'

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
            Sign_Up_NavBar
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
        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                    email: '',
                    phone: '',
                    password: '',
                    password_confirmation: '',
                    terms: false
                })
            }
        },
        computed:{
            Theme()
            {
                return store.state.Application.Theme
            }
        },
        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
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
