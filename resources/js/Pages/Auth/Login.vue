<script>

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<script>
    import { defineComponent, inject, ref, provide } from 'vue'
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
    import AuthenticationCard from '@/Components/AuthenticationCard.vue';
    import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
    import Checkbox from '@/Components/Checkbox.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';

    import QuickFooter from '../Theme/widgets/Quick-Footer.vue'
    import Quick_NavBar from '../Theme/widgets/Quick-NavBar.vue'

    import {store} from '../../store/store.js'

    export default defineComponent({
        props: {
          canResetPassword: Boolean,
          status: String,
        },
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


<template>
    <Head title="Log in" />

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox v-model:checked="form.remember" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Forgot your password?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>
