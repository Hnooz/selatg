<template>
    <layout>

        <div class="mt-8">
            <div class="flex">
                <h2 class="text-3xl font-bold text-green-600">المستخدمين /<span class="text-green-500"> اضافه</span></h2>
            </div>

            <base-panel class="mt-4 md:max-w-3xl">
                <form @submit.prevent="submit">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <base-input label="الاسم" name="name" v-model="form.name" :error="$page.errors.name" required></base-input>
                        </div>
                        <div>
                            <base-input type="email" label="عنوان البريد" name="email" v-model="form.email" :error="$page.errors.email" required></base-input>
                        </div>
                        <div>
                            <base-input label="كلمه السر" type="password" v-model="form.password" :error="$page.errors.password" required></base-input>
                        </div>
                        <base-input label="تاكيد كلمه السر" type="password" v-model="form.password_confirmation" required></base-input>
                    </div>
                    <div class="flex justify-end mt-4">
                        <base-button class="bg-green-600 hover:bg-green-400">اضافه مستخدم</base-button>
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
        methods: {
            submit() {
                this.$inertia.post('/dashboard/users', this.form);
            }
        }
    }
</script>
