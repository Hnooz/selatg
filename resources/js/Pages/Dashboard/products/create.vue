<template>
    <layout>

        <div class="mt-8">
            <div class="flex">
                <h2 class="text-3xl font-bold text-indigo-500">المنتجات /<span class="text-gray-700"> اضافه</span></h2>
            </div>

            <base-panel class="mt-4 md:max-w-3xl">
                <form @submit.prevent="submit">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <base-input label="اسم المنتج" name="name" v-model="form.name" :error="$page.errors.name" required></base-input>
                        </div>
                        <div>
                            <base-input label="السعر" type="number" name="price" v-model="form.price" :error="$page.errors.price" required></base-input>
                        </div>
                        <div>
                            <base-input label="الحجم" type="text" name="size" v-model="form.size" :error="$page.errors.size" required></base-input>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <base-button primary>اضافه</base-button>
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
                    price: '',
                    size: '',
                }
            }
        },
        methods: {
            submit() {
                this.$inertia.post('/dashboard/products', this.form);
            }
        }
    }
</script>
