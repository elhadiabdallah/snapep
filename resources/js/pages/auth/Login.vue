<template>
    <div class="flex justify-center">
        <div class="w-full max-w-xs m-auto bg-white shadow-lg rounded p-5">
            <header>
                <img
                    class="w-20 mx-auto mb-5"
                    src="http://snapepdz.org/wp-content/themes/snapep/img/logo.jpg"
                />
            </header>

            <form method="post" action="" @submit.prevent="login" >
                <div>
                    <label class="block mb-2 text-gray-900" for="username"
                        >اسم المستخدم (البريد اﻹلكتروني)</label
                    >
                    <input
                        class="w-full p-2 mb-6 text-gray-700 border-b-2 border-gray-500 outline-none focus:bg-gray-300"
                        type="text"
                        name="username"
                        v-model="form.email"
                    />
                </div>
                <div>
                    <label class="block mb-2 text-gray-900" for="password"
                        >كلمة المرور</label
                    >
                    <input
                        class="w-full p-2 mb-6 text-gray-700 border-b-2 border-gray-500 outline-none focus:bg-gray-300"
                        type="password"
                        name="password"
                        v-model="form.password"

                    />
                </div>
                <div>
                    <input
                        class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded"
                        type="submit"
                        value="تسجيل الدخول"
                    />
                </div>
            </form>
            <footer>
                <a
                    class="text-indigo-700 hover:text-pink-700 text-sm float-left"
                    href="#"
                    >Forgot Password?</a
                >
                <a
                    class="text-indigo-700 hover:text-pink-700 text-sm float-right"
                    href="#"
                    >Create Account</a
                >
            </footer>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    metaInfo: {
        title: "تسجيل الدخول"
    },
    data() {
        return {
            form: {
                email: "",
                password: ""
            }
        };
    },
    created() {
    },

    methods: {
        async login(){
           await this.$store.dispatch('login', this.form)
        }
    }
};
</script>

<style></style>
