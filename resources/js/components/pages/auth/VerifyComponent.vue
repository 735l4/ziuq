<template>
  <div>
    <div class="bg-gray-200">
        <div class="container mx-auto p-8">
            <div class="md:w-3/4 mx-12 sm:w-full rounded-lg shadow-lg bg-white my-3">
                <div class="flex justify-between border-b border-gray-100 px-5 py-4">
                    <div>
                    <i class="fa fa-exclamation-triangle text-orange-500"></i>
                    <span class="font-bold text-gray-700 text-lg">&nbsp;Verify your Email Address</span>
                    </div>
                    <div>
                    </div>
                </div>
            
                <div class="px-10 py-5 text-gray-600">
                    A fresh verification link has been sent to your email address.

                    Before proceeding, please check your email for a verification link.
                    If you did not receive the email. <a class="text-blue-600" href="#">Click here to request another</a>
                </div>
            
                <div class="px-5 py-4 flex justify-end">
                <button class="bg-orange-500 mr-1 rounded text-sm py-2 px-3 text-white hover:bg-orange-600 transition duration-150">Click Here to send another</button>
                </div>
            </div>
        </div>
        <Footer />

    </div>
  </div>
</template>

<script>
export default {
    mounted() {
        this.$Progress.finish();
    },
    created() {
        this.$Progress.start();
    }
}
</script>

<style>

</style>