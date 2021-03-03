<template>
    <layout>

        <div class="mt-8">
            <div class="flex">
                <h2 class="text-3xl font-bold text-gray-700">الشكاوي</h2>
                 <div class="flex items-center text-xs text-gray-500 capitalize whitespace-no-wrap md:mx-10 md:text-base">
                        <div class="flex items-center mx-8">
                            <label for="">
                                <div class="relative inline-block text-left">
                                    <div>
                                        <button @click="isOpen = !isOpen" type="button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 capitalize bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none" id="options-menu" aria-haspopup="true" aria-expanded="true">
                                        الولايات
                                        <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        </button>
                                    </div>
                                    <div v-if="isOpen" :class="isOpen ? 'transition ease-out duration-100':'transition ease-in duration-75'" class="absolute right-0 w-32 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
                                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                            <a  href="/dashboard/reports?state=الخرطوم" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">الخرطوم</a>
                                            <a href="/dashboard/reports?state=امدرمان" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">امدرمان</a>
                                            <a href="/dashboard/reports?state=بحري" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">بحري</a>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>

                         <div class="flex items-center mx-8">
                            <label for="">
                                <div class="relative inline-block text-left">
                                    <div>
                                        <button @click="isOpenRegion = !isOpenRegion" type="button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 capitalize bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none" id="options-menu" aria-haspopup="true" aria-expanded="true">
                                        المحليات
                                        <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        </button>
                                    </div>
                                    <div v-if="isOpenRegion" :class="isOpenRegion ? 'transition ease-out duration-100':'transition ease-in duration-75'" class="absolute right-0 w-32 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
                                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                            <a  href="/dashboard/reports?region=كرري" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">كرري</a>
                                            <a href="/dashboard/reports?region=بحري" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">بحري</a>
                                            <a href="/dashboard/reports?region=شرق النيل" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">شرق النيل</a>
                                            <a href="/dashboard/reports?region=الجبل" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">الجبل</a>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                </div>
            </div>
            <div class="items-center md:flex">                  
               
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
                isOpen:false,
                isOpenRegion:false,
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
