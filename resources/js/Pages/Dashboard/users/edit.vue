<template>
    <layout>

        <div class="mt-8">
            <div class="flex">
                <h2 class="text-3xl font-bold text-green-600">المستخدمين /<span class="text-green-500">تعديل</span></h2>
            </div>

            <base-panel class="mt-4 md:max-w-3xl">
                <form @submit.prevent="submit">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <base-input label="الاسم" name="name" v-model="form.name" :error="$page.errors.name" required></base-input>
                        <base-input type="email" label="عنوان البريد" name="email" v-model="form.email" :error="$page.errors.email" required></base-input>
                        <base-input label="كلمه السر" type="password" v-model="form.password" :error="$page.errors.password"></base-input>
                        <base-input label="تاكيد كلمه السر" type="password"
                                    v-model="form.password_confirmation"></base-input>
                    </div>
                    <div class="flex justify-end mt-4">
                        <base-button class="bg-green-600 hover:bg-green-500">تعديل</base-button>
                    </div>
                </form>
            </base-panel>

        </div>

    </layout>
</template>

<script>
    import Layout from "../../../Shared/Layout";

    export default {
        components: {Layout},
        props: ['user'],
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                }
            }
        },
        created() {
            this.form = this.user;
        },
        methods: {
            submit() {
                this.$inertia.put(this.$route('users.update', this.user.id), this.form);
            }
        }
    }
</script>
