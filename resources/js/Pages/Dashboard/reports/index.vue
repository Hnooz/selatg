<template>
    <layout>

        <div class="mt-8">
            <div class="flex justify-between">
                <h2 class="text-3xl font-bold text-gray-700">الشكاوي</h2>
            </div>
            <div class="mt-4">
                <div class="flex flex-col">
                    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6">
                        <div
                            class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full">
                                <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-right text-gray-500 uppercase border-b border-gray-200 bg-gray-50"
                                        style="text-align: start">
                                        الولايه
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase border-b border-gray-200 bg-gray-50"
                                        style="text-align: start">
                                        المحليه
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase border-b border-gray-200 bg-gray-50"
                                        style="text-align: start">
                                        القطاع
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase border-b border-gray-200 bg-gray-50"
                                        style="text-align: start">
                                        الشكوه
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="text-gray-700 bg-white">
                                <tr v-for="report in reports" :key="report.index">
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ report.state }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ report.region }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ report.section }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <button @click="showModal(report)">اضغط هنا لاظهار الشكوة</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div v-if="toggleModal" class="fixed inset-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto outline-none focus:outline-none">
        <div class="relative w-auto max-w-6xl mx-auto my-6">        
          <div class="relative flex flex-col w-full outline-none focus:outline-none">               
            <main class="">
                <div class="max-w-3xl px-6 py-8 text-xl bg-white shadow-lg">
                    <div class="absolute top-0 right-0 -mx-1 -mt-1">
                        <button class="text-gray-100 bg-gray-700 border-2 border-white rounded-full outline-none focus:outline-none" @click="toggleModal = !toggleModal">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </button>
                    </div>                        
                    <div class="text-gray-700">           
                        <p>{{body}} </p>              
                    </div>
                </div>
            </main>                   
          </div>
        </div>
    </div>
    <div v-if="toggleModal" class="fixed inset-0 z-40 bg-black opacity-25"></div>
    </layout>
</template>

<script>
    import Layout from "../../../Shared/Layout";

    export default {
        components: {Layout},
        props: ['reports'],
        data() {
            return {
                toggleModal:false,
                body:''
            }
        },
        methods: {
            showModal(report){
                this.toggleModal = true;
                this.body = report.body
            },
            Delete(report) {
                this.$inertia.delete(`/dashboard/reports/${report.id}`);
            },
        },
    }
</script>
