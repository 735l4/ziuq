<template>
  <div>
      <div class="bg-gray-200">
       <!-- Card Start -->
            <div class="container mx-auto p-8">
              <div class="flex flex-row flex-wrap -mx-2">       
                <div class="w-full sm:w-1/2 md:w-1/3 mb-4 px-2">
                  <div class="relative bg-white rounded border">
                    <picture class="block bg-gray-200 border-b">
                      <img class="block" src="../../assets/images/quiz/map.jpg" alt="Card 1">
                    </picture>
                    <div class="p-4">
                      <h3 class="text-lg font-bold">
                        <a class="stretched-link" href="#" title="Card 1">
                          Map Quiz
                        </a>
                      </h3>
                      <time class="block mb-2 text-sm text-gray-600" datetime="2019-01-01">1st January 2019</time>
                      <p>
                        Know the places of nepal and also test your knowledge about the map of nepal by pin pointing the location of the given places. 
                      </p>
                      
                      <div class="mt-8 mb-3">
                        <router-link to="/quiz/map"
                          class="px-4 py-2 bg-teal-500 shadow-lg border rounded-lg text-white uppercase font-semibold tracking-wider focus:outline-none focus:shadow-outline hover:bg-teal-400 active:bg-teal-400">
                          Play
                        </router-link>
                      </div>

                    </div>
                  </div>
                </div>
                                
                <div class="w-full sm:w-1/2 md:w-1/3 mb-4 px-2">
                  <div class="relative bg-white rounded border">
                    <picture class="block bg-gray-200 border-b">
                      <img class="block" src="../../assets/images/quiz/history.jpg" alt="Card 2">
                    </picture>
                    <div class="p-4">
                      <h3 class="text-lg font-bold">
                        <a class="stretched-link" href="#" title="Card 2">
                          History Quiz
                        </a>
                      </h3>
                      <time class="block mb-2 text-sm text-gray-600" datetime="2019-01-01">1st January 2019</time>
                      <p>
                        Get to know about the history of nepal and play some fun and challanging quiz on the history of nepal.
                      </p>

                      <div class="mt-8 mb-3">
                        <router-link to="/quiz/history"
                          class="px-4 py-2 bg-teal-500 shadow-lg border rounded-lg text-white uppercase font-semibold tracking-wider focus:outline-none focus:shadow-outline hover:bg-teal-400 active:bg-teal-400">
                          Play
                        </router-link>
                      </div>

                    </div>
                  </div>
                </div>
                                
                <div class="w-full sm:w-1/2 md:w-1/3 mb-4 px-2">
                  <div class="relative bg-white rounded border">
                    <picture class="block bg-gray-200 border-b">
                      <img class="block" src="../../assets/images/quiz/politics.jpg" alt="Card 3">
                    </picture>
                    <div class="p-4">
                      <h3 class="text-lg font-bold">
                        <a class="stretched-link" href="#" title="Card 3">
                          Political Quiz
                        </a>
                      </h3>
                      <time class="block mb-2 text-sm text-gray-600" datetime="2019-01-01">1st January 2019</time>
                      <p>
                         Here you will get the knowledge about the political affairs of nepal and also get the quiz challange on this topic.
                      </p>

                      <div class="mt-8 mb-3">
                        <router-link to="/quiz/politics"
                          class="px-4 py-2 bg-teal-500 shadow-lg border rounded-lg text-white uppercase font-semibold tracking-wider focus:outline-none focus:shadow-outline hover:bg-teal-400 active:bg-teal-400">
                          Play
                        </router-link>
                      </div>

                    </div>
                  </div>
                </div>
                                
              </div>
            </div>
            <!-- ./Card End -->
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
    },
}
</script>

<style>

</style>