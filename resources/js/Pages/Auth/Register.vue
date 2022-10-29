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

    import RadioInput from '../inteli/ui/widgets/inputs/RadioInput.vue'

    import {store} from '../../store/store.js'

    export default defineComponent({
        components: {
            Head, 
            Link, 
            useForm,
            AuthenticationCard,
            AuthenticationCardLogo,
            Checkbox,
            InputError,
            InputLabel,
            PrimaryButton,
            TextInput,
            RadioInput
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },
        setup(props,context)
        {    
            
            provide("Theme", store.state.Application.Theme);

            var userTypeId = (context.attrs.type != undefined)? context.attrs.type_id : 5;

            const form = useForm({
                name: '',
                email: '',
                user_type_id: userTypeId,
                password: '',
                password_confirmation: '',
                terms: false,
            });

            const submit = () => {
                form.post(route('register'), {
                    onFinish: () => form.reset('password', 'password_confirmation'),
            });


            return { 
              form,
              submit, 
              userTypeId
              }  
          }
        },
        computed:{
            Theme()
            {
                return store.state.Application.Theme
            }
        },
        data() {

        },
        methods: {
        },
        watch: {
          Theme: (val, oldVal) => {
            document.getElementById('app-body').classList.add(val.key + '-gradient');
          }
        },
        mounted()
        {
          document.getElementById('app-body').classList.add(this.Theme.key + '-gradient');

        if (false)
        {
          const menuWindowContainer = document.getElementById('login-sidebar');
          menuWindowContainer.style.background= `url(/assets/images/themes/${this.Theme.key + '-image.jpg'})` + ' ' + 'repeat 0 0'
        }
        }
    })
</script>

<template>
    <Head title="Register" />

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <radio-input
         :inputOptions="[]"
         :nameKey="''"
         :valueKeyKey="''"
         :variable="''"
         :field="''"
         :options_title_classes="Theme.key + '-text-color'"
         :options_label_classes="Theme.key + '-text-color m-2'"
         :isFormSwitch="false"
         :optionTitleComponent="'h4'"
         :eventName="'themeConfigSet'"
         @radioInput="userTypeId = $event.id"
         :datapath="'user/type/list'">
        </radio-input>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="name"
                />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
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
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />
                <TextInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">
                <InputLabel for="terms">
                    <div class="flex items-center">
                        <Checkbox id="terms" v-model:checked="form.terms" name="terms" required />

                        <div class="ml-2">
                            I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                        </div>
                    </div>
                    <InputError class="mt-2" :message="form.errors.terms" />
                </InputLabel>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Already registered?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>
