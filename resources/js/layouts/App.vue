<template>
    <div>
        <nav class="p-2 bg-white flex justify-between mb-6 shadow-lg">
            <ul class="flex items-center">
                <li
                    class="flex justify-center items-center text-sm text-gray-600 hover:text-black ml-4"
                >
                    <router-link to="/">
                        <img
                            src="http://snapepdz.org/wp-content/themes/snapep/img/logo.jpg"
                            class="rounded-full w-10 h-10 object-cover"
                            alt=""
                            srcset=""
                        />
                    </router-link>
                </li>
                <li
                    class="flex justify-center items-center text-sm text-gray-600 hover:text-black ml-2"
                >
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                        ></path>
                    </svg>
                    <router-link to="/" exact class="p-3 pr-1"
                        >الرئيسية</router-link
                    >
                </li>
                <li
                    class="flex justify-center items-center text-sm text-gray-600 hover:text-black ml-2"
                >
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z"
                        ></path>
                        <path
                            d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"
                        ></path>
                    </svg>
                    <router-link to="/about" exact class="p-3 pr-1"
                        >المنشورات</router-link
                    >
                </li>
                <li
                    class="flex justify-center items-center text-sm text-gray-600 hover:text-black ml-2"
                >
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <router-link to="/dashboard" class="p-3 pr-1"
                        >اﻹدارة</router-link
                    >
                </li>
            </ul>

            <ul class="flex items-center">
                <div class="relative">
                    <li
                    @click="showMenu = !showMenu"
                        class="flex justify-center items-center font-bold text-sm rounded-full text-gray-600 hover:text-black ml-2 px-3 hover:bg-gray-200"
                    >
                        <img
                            src="http://127.0.0.1:8000/img/avatar2.png"
                            class="rounded-full w-8 h-8 object-cover"
                            alt=""
                            srcset=""
                        />
                        <button
                            
                            class="p-3  pr-1 focus:outline-none"
                        >
                            الهادي عبد الله
                        </button>
                    </li>
                    <div @click="showMenu = false" v-if="showMenu" class="fixed top-0 right-0 bottom-0 left-0 h-full w-full bg-black opacity-0 cursor-default"></div>
                    <div
                        v-if="showMenu"
                        class="text-sm z-auto origin-top-right top-11 right-3 absolute mt-2 w-56 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5"
                    >
                        <router-link
                            @click.native="showMenu = false"
                            to="about"
                            class="flex items-center  px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600"
                            role="menuitem"
                        >
                            <svg
                                class="dark:text-white flex-shrink-0 h-6 w-6 ml-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="flex flex-col">
                                <span>
                                    الصفحة الشخصية
                                </span>
                            </span>
                        </router-link>

                        <router-link
                            @click.native="showMenu = false"
                            to="/"
                            class="flex items-center  px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600"
                            role="menuitem"
                        >
                            <svg
                                class="dark:text-white flex-shrink-0 h-6 w-6 ml-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="flex flex-col">
                                <span>
                                     معلومات
                                </span>
                            </span>
                        </router-link>
                        <router-link
                            @click.native="showMenu = false"
                            to="about"
                            class="flex items-center  px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600"
                            role="menuitem"
                        >
                            <svg
                                class="dark:text-white flex-shrink-0 h-6 w-6 ml-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span class="flex flex-col">
                                <span>
                                    تسجيل الخروج
                                </span>
                            </span>
                        </router-link>
                    </div>
                </div>

                <li
                    class="flex justify-center items-center text-sm text-gray-600 hover:text-black ml-2"
                >
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <router-link to="/login" class="p-3 pr-1"
                        >تسجيل الدخول</router-link
                    >
                </li>
                <li
                    class="flex justify-center items-center text-sm text-gray-600 hover:text-black ml-2"
                >
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"
                        ></path>
                    </svg>
                    <router-link to="/register" class="p-3 pr-1"
                        >التسجيل</router-link
                    >
                </li>
            </ul>
        </nav>
        <router-view class=""></router-view>
    </div>
</template>

<script>

export default {
    data() {
        return {
            showMenu: false
        };
    },
    methods: {

    },
    created() {
    },
};
</script>

<style>

</style>
