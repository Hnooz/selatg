<template>
    <layout>

        <div class="mt-8">
            <div class="flex">
                <h2 class="text-3xl font-bold text-indigo-500">Products /<span class="text-gray-700"> Edit</span></h2>
            </div>

            <base-panel class="mt-4 md:max-w-3xl">
                <form @submit.prevent="submit">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <base-input label="Name" name="name" v-model="form.name" :error="$page.errors.name" required></base-input>
                        </div>
                        <div>
                            <base-input type="number" label="Price" name="price" v-model="form.price" :error="$page.errors.price" required></base-input>
                        </div>
                        <div>
                            <base-input type="text" label="Size" name="size" v-model="form.size" :error="$page.errors.size" required></base-input>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <base-button primary>Edit product</base-button>
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
        props:['product'],
        data() {
            return {
                form: {
                    name: '',
                    price: '',
                    size: '',
                }
            }
        },
        created() {
            this.form = this.product;
        },
        methods: {
            submit() {
                this.$inertia.put(this.$route('products.update', this.product.id), this.form);
            }
        }
    }
</script>
