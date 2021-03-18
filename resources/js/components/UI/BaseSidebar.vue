<template>
    <aside class="w-full bg-green-700 md:w-64 md:min-h-screen">
        <div class="flex items-center justify-between h-16 p-4 bg-green-800">
            <inertia-link href="/dashboard" class="flex items-center">
                <span class="mx-2 text-xl font-semibold text-gray-300">لوحه التحكم</span>
            </inertia-link>
            <div class="flex md:hidden">
                <button type="button" @click="isOpen = !isOpen"
                        class="text-gray-300 hover:text-gray-500 focus:outline-none focus:text-gray-500">
                    <svg class="w-8 fill-current" fill="none" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="px-2 py-6 md:block" :class="isOpen? 'block': 'hidden'">
            <ul>
                <li class="px-2 py-3 rounded hover:bg-green-900" :class="route().current('dashboard.index')? 'bg-green-900' : ''">
                    <inertia-link href="/dashboard" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">لوحه التحكم</span>
                    </inertia-link>
                </li>
                <li class="px-2 py-3 mt-2 rounded hover:bg-green-900" :class="route().current('users.*')? 'bg-green-900' : ''">
                    <inertia-link href="/dashboard/users" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">المستخدمين</span>
                    </inertia-link>
                </li>
                <li class="px-2 py-3 mt-2 rounded hover:bg-green-900" :class="route().current('products.*')? 'bg-green-900' : ''">
                    <inertia-link href="/dashboard/products" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        <span class="mx-2 text-gray-300">السلع</span>
                    </inertia-link>
                </li>
                <li class="px-2 py-3 mt-2 rounded hover:bg-green-900" :class="route().current('reports.*')? 'bg-green-900' : ''">
                    <inertia-link href="/dashboard/reports" class="flex items-center">
                        <svg class="w-6 text-gray-500" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">الشكاوي</span>
                    </inertia-link>
                </li>
            </ul>
            <div class="mt-2 -mx-2 border-t border-gray-700 md:hidden"></div>
            <ul class="mt-6 md:hidden">
                <li class="px-2 py-3 mt-2 rounded hover:bg-gray-900">
                    <button class="mx-2 text-gray-300" @click="logout">تسجيل خروج</button>
                </li>
            </ul>
        </div>
    </aside>
</template>

<script>
    export default {
        name: "BaseSidebar",
        data() {
            return {
                isOpen: false
            }
        },
        methods: {
            logout() {
                axios.post('/logout')
                    .then(() => location.reload());
            }
        }
    }
</script>

<style scoped>

</style>
