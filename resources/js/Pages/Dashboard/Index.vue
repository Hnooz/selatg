<template>
    <layout>
        <div class="w-full mx-auto">
            <div>
                <!-- Card stats -->
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 md:w-1/3">
                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                        <h5 class="text-xs font-bold text-gray-500 uppercase">
                                            المستخدمين
                                        </h5>
                                        <span class="text-xl font-semibold text-gray-800">
                                          {{userCount}}
                                        </span>
                                    </div>
                                    <div class="relative flex-initial w-auto px-2">
                                        <div
                                            class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-orange-500 rounded-full shadow-lg">
                                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                 stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/3">
                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                        <h5 class="text-xs font-bold text-gray-500 uppercase">
                                            السلع
                                        </h5>
                                        <span class="text-xl font-semibold text-gray-800">
                                            {{productCount}}
                                        </span>
                                    </div>
                                    <div class="relative flex-initial w-auto px-2">
                                        <div
                                            class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-pink-500 rounded-full shadow-lg">
                                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                 stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/3">
                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                        <h5 class="text-xs font-bold text-gray-500 uppercase">
                                            الشكاوي
                                        </h5>
                                        <span class="text-xl font-semibold text-gray-800">
                                            {{reportsCount}}
                                        </span>
                                    </div>
                                    <div class="relative flex-initial w-auto px-2">
                                        <div
                                            class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-blue-500 rounded-full shadow-lg">
                                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                 stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12">
            <h2 class="text-2xl font-medium text-gray-700">اخر {{reports.length}} شكاوي</h2>
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
                                        {{report.state}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{report.region}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{report.section}}
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
    import Layout from "../../Shared/Layout";

    export default {
        components: {Layout},
        props:['userCount', 'productCount', 'reportsCount', 'reports'],
        data() {
            return {
                toggleModal:false,
                body:'',            }
        },
        methods: {
            showModal(report){
                this.toggleModal = true;
                this.body = report.body
            },
        },
    }
</script>
