<template>
  <Quick_NavBar></Quick_NavBar>
  <main class="main-content  mt-0 glass-container">
    <section class="main glass-container">
      <div class="page-header min-vh-75 main ">
        <div class="container glass-content">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                </div>
                  <div class="text-center pt-4">
                    <h5>Signin with</h5>
                  </div>
                  <div class="row px-xl-5 px-sm-4 px-3">
                    <div class="col-3 ms-auto px-1">
                      <a class="btn btn-outline-light w-100" href="javascript:;">
                        <i class="fab fa-github fa-2x text-primary"></i>
                      </a>
                    </div>
                    <div class="col-3 px-1">
                      <a class="btn btn-outline-light w-100" href="javascript:;">
                        <i class="fab fa-linkedin fa-2x text-primary"></i>
                      </a>
                    </div>
                    <div class="col-3 me-auto px-1">
                      <a class="btn btn-outline-light w-100" :href="route('google-redirect')">
                        <i class="fab fa-google fa-2x text-primary"></i>
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
                        <div class="color" v-if="false"></div>
                        <div class="color" v-if="false"></div>
                        <div class="color" v-if="false"></div>
                        <div class="box">
                            <div class="square" style="--i:0;"></div>
                            <div class="square" style="--i:1;"></div>
                            <div class="square" style="--i:2;"></div>
                            <div class="square" style="--i:3;"></div>
                            <div class="square" style="--i:4;"></div>
                            <div class="form-container">
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
           
                                   <div class="items-center mt-4">
                                       <button class="btn bg-gradient-info w-100 mt-4 mb-0 text-white" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                           Log in
                                       </button>
                                   </div>
                                   <div class="text-center mt-4">
                                       <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900 text-center">
                                           Forgot your password?
                                       </Link>
                                   </div>
                               </form>
                            </div>
                        </div>
                    </section>
                <div class="card-footer mt-4 text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto text-center text-primary text-gradient">
                    Don't have an account?
                    <Link :href="route('register')" class="text-info text-gradient font-weight-bold">Sign up</Link>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('/theme/assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>

<script>
    import { defineComponent } from 'vue'
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
        }
    })
</script>

<style scoped>
.main
{

    background: linear-gradient(purple, pink) !important;
    background-size: cover !important;
    padding: 15px !important;
}

.glass-container
{
    /*position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);*/
    background: rgba(255, 255, 255, 0.5) !important;
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05) !important;
    border-radius: 20px !important;
    justify-content: space-between !important;
}

.glass-header
{
    position: absolute !important;
    top: -5px !important;
    right: 20px !important;
    left: 5px !important;
    padding: 20px 50px !important;
    /*display: flex;
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
    transform: translateX(-100) !important;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05) !important;
    border-radius: 20px !important;
    backdrop-filter: blur(10px) !important;
    border: 1px solid rgba(255, 255, 255, 0.5) !important;
    border-top: 1px solid rgba(255, 255, 255, 0.25) !important;
    border-left: 1px solid rgba(255, 255, 255, 0.5) !important;
    padding: 5px !important;
}

/*

*
{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    box-sizing: border-box;
}

body
{
    overflow: hidden;
}

section
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(to bottom, #f1f4f9, #dff1ff);
}

*/

section .color
{
    position: absolute;
    filter: blur(150px);
}

section .color:nth-child(1)
{
    top: -350px;
    width: 600px;
    height: 600px;
    background: #ff359b;
}

section .color:nth-child(2)
{
    bottom: -150px;
    left: 100px;
    width: 500px;
    height: 500px;
    background: #fffd87;
}

section .color:nth-child(3)
{
    bottom: 50px;
    right: 100px;
    width: 300px;
    height: 300px;
    background: #00d2ff;
}

.box
{
    position: relative;
}

.box .square
{
    position: absolute;
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    background: rgba(255, 255, 255, 0.1);
    animation: animate 10s linear infinite;
    animation-delay: calc(-1s * var(--i));
}

@keyframes animate {
    0%, 100%
    {
        transform: translateY(-40px);
    }
    50%
    {
        transform: translateY(40px);
    }
}

.box .square:nth-child(1)
{
    top: -50px;
    right: -60px;
    width: 100px;
    height: 100px;
}


.box .square:nth-child(2)
{
    top: 150px;
    left: -100px;
    width: 120px;
    height: 120px;
    z-index: 2;
}

.box .square:nth-child(3)
{
    top: 50px;
    left: -60px;
    width: 80px;
    height: 80px;
    z-index: 2;
}

.box .square:nth-child(4)
{
    top: -80px;
    left: 100px;
    width: 50px;
    height: 50px;
}

.box .square:nth-child(5)
{
    top: -80px;
    left: 140px;
    width: 60px;
    height: 60px;
}


.form-container
{
    position: relative;
    /*
    width: 400px;
    min-height: 400px;
    */
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.form
{
    position: relative;
    width: 100%;
    height: 100%;
    padding: 40px;
}

.form h2
{ 
    position: relative;
    color: #fff;
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 40px;
}

.form h2::before
{ 
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 80px;
    height: 4px;
    background: #fff;
}

.form .inputBox input
{
    width: 100%;
    background: rgba(255, 255, 255, 0.2);
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: #fff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.form .inputBox input::placeholder
{
    color: #fff;
}

.form .inputBox input[type="submit"]
{
   background: #fff;
   color: #666; 
   max-width: 100px;
   cursor: pointer;
   font-weight: 600;
}

.forget
{
    margin-top: 5px;
    color: #fff;
}

.forget a
{
    color: #fff;
    font-weight: 600;
}
</style>