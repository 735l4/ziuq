<template>
  <div class="bg-gray-200">
        <div class="p-20 bg-gray-100">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image: url(/images/login-bg.jpg)"></div>
            <div class="w-full p-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Forgot your Password?</h2>
                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-gray-500 uppercase">Reset your password</a>
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                </div>
                <form @submit.prevent="reset">
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                        <input v-model="email" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email">
                        
                        <p v-if="this.errorMessage" class="text-red-500 text-xs italic">{{ this.errorMessage.errors.email[0] }}</p>
                    </div>
                    <div class="mt-8">
                        <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Reset Password</button>
                    </div>
                </form>
                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 md:w-1/4"></span>
                    <router-link to="/login" class="text-xs text-gray-500 uppercase">or sign in</router-link>
                    <span class="border-b w-1/5 md:w-1/4"></span>
                </div>
            </div>
        </div>
  </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            errorMessage: ''
        }
    },
    methods: {
        reset (){
            // console.log("Reset Password!!!");
        }
    }

}
</script>

<style>

</style>