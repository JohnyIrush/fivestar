<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useSlots, useAttrs, computed, ref, provide, watch } from 'vue'
import SelectInput from '../inteli/ui/widgets/inputs/SelectInput.vue'
import {store} from '../../store/store.js'

const slots = useSlots()
const attrs = useAttrs()

const Theme = computed(function() {
     return store.state.Application.Theme
})

provide("Theme", Theme);

var userTypeId = ref((attrs.type != undefined)? attrs.type_id : 5);

const form = useForm({
    name: '',
    email: '',
    user_type_id: userTypeId,
    password: '',
    password_confirmation: '',
    terms: false,
});


       watch(() => userTypeId, function(newValue, oldValue) {
            form.user_type_id = newValue.value
       },
       {
           deep: true
       })

const submit = () => {
    alert(form.user_type_id)
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });

};
</script>

<template>
    <Head title="Register" />

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <form @submit.prevent="submit">
            <div>
             <SelectInput
              :inputOptions="[]"
              :nameKey="''"
              :valueKeyKey="''"
              :variable="''"
              :field="''"
              :options_title_classes="Theme.key + '-text-color'"
              :options_label_classes="Theme.key + '-text-color'"
              :isFormSwitch="false"
              :optionTitleComponent="'h4'"
              @selectInputEvent="userTypeId = $event.option.id"
              :input_wrapper_container_classes="''"
              :orientation="'d-flex flex-column'"
              :datapath="'api/user/type/list'"
              :labelName="'Register as'"
              :inputRequired="true"
              >
             </SelectInput>
             <InputError class="mt-2" :message="form.errors.user_type_id" />
            </div>
            <div class="mt-4">
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
