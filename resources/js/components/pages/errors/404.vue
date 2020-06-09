<template>
  <div>
      <div class="h-screen w-screen bg-gray-600 flex justify-center content-center flex-wrap">
        <p class="font-sans text-white error-text">Page not found</p>
        <br>
      </div>
    <div class="absolute w-screen bottom-0 mb-12 text-white text-center font-sans text-xl">
        <span class="text-white">Page Not Found</span>
    </div>

        <div class="absolute w-screen bottom-0 mb-6 text-white text-center font-sans text-xl">
            <span class="opacity-50">Take me back to</span>
            <a class="border-b" href="https://ziuqnepal.com">ziuqnepal.com</a>
        </div>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>
    .error-text {
      font-size: 100px;
    }

    @media (min-width: 768px) {
      .error-text {
        font-size: 100px;
      }
    }
</style>