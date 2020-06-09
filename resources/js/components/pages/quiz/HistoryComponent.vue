<template>
<div class="bg-gray-200">
    <div class="container mx-auto p-8">
        <div class="flex flex-row flex-wrap -mx-2">
                <div class="md:w-3/4 mb-4 px-2">
                  <div class="relative bg-white rounded border">
                    <picture class="block bg-gray-100 border-b">

                       <div class="w-full px-2 mt-2 mb-4">
                          <div class="bg-white shadow-md rounded-lg overflow-hidden md:flex border-solid border-l-8 border-green-600">
                              <div class="w-full">
                                  <div class="p-4 md:p-5 bg-gray-100">
                                      <div class="flex justify-between items-center">
                                          <div>
                                              <p class="font-bold text-xl">History Quiz</p>
                                              <div class="flex items-start">
                                                  <span>
                                                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                          <path class="fill-current text-gray-500" d="M9,8.5 L9,4 L11,4 L11,9.58578644 L14.9497475,13.5355339 L13.5355339,14.9497475 L9,10.4142136 L9,8.5 Z M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 Z M10,18 C14.418278,18 18,14.418278 18,10 C18,5.581722 14.418278,2 10,2 C5.581722,2 2,5.581722 2,10 C2,14.418278 5.581722,18 10,18 Z"></path>
                                                      </svg>
                                                  </span>
                                                  <span class="text-gray-700 ml-2">Test your knowledge about the history</span>
                                              </div>
                                          </div>

                                          <button class="mt-3 sm:mt-0 py-2 px-5 md:py-3 md:px-6 bg-red-700 hover:bg-red-600 font-bold text-white rounded-lg shadow-md">
                                                      <span id="minutes">{{ minutes }}</span>
                                                        <span id="middle">:</span>
                                                        <span id="seconds">{{ seconds }}</span>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>


                        <div class="bg-white shadow-sm rounded px-8 pt-6 pb-8 m-5 mb-4 flex flex-col my-2 mt-2">
                          <div class="-mx-3 md:flex mb-6">

                            
                              <div v-if="loading" class="top-0 left-0 z-50 w-screen h-64 flex items-center justify-center">
                                <div class="bg-white border py-2 px-5 rounded-lg flex items-center flex-col">
                                  <div class="loader-dots block relative w-20 h-5 mt-2">
                                    <div class="absolute top-0 mt-1 w-3 h-3 rounded-full bg-green-500"></div>
                                    <div class="absolute top-0 mt-1 w-3 h-3 rounded-full bg-green-500"></div>
                                    <div class="absolute top-0 mt-1 w-3 h-3 rounded-full bg-green-500"></div>
                                    <div class="absolute top-0 mt-1 w-3 h-3 rounded-full bg-green-500"></div>
                                  </div>
                                  <div class="text-gray-500 text-xs font-light mt-2 text-center">
                                    Please wait...
                                  </div>
                                </div>
                              </div>
                            


                            <div v-else class="md:w-full px-3">
                              <label class="block uppercase tracking-wide text-grey-darker text-lg font-bold mb-2" for="grid-password">
                                {{ this.quest.question }}
                              </label>
                              <div class="ml-4 options">
                                <div v-for="que in this.quest.option"  v-bind:key="que.id" class="flex items-center mr-4 mb-4">
                                  <input :id="que" v-model="answer" :value="que" type="radio" name="radio" class="hidden" />
                                  <label :for="que" class="flex items-center cursor-pointer">
                                    <span class="w-4 h-4 inline-block mr-1 border border-grey"></span>
                                    {{ que }}
                                  </label>
                                </div>
                              </div>
                              <p class="mb-4 text-grey-dark text-xs italic">Click next to proceed to another question</p>
                              <a @click="nextQuestion" href="#" class="px-4 py-2 bg-teal-500 shadow-lg border rounded-lg text-white uppercase font-semibold tracking-wider focus:outline-none focus:shadow-outline hover:bg-teal-400 active:bg-teal-400">
                                Next
                              </a>
                            </div>
                          </div>
                      </div>
                   
                   
                    </picture>
                    <div class="p-4">
                      <h3 class="text-lg font-bold">
                        <a class="stretched-link" href="#" title="Card 5">
                          Play the quiz
                        </a>
                      </h3>
                      <time class="block mb-2 text-sm text-gray-600" datetime="2019-01-01">9th June 2020</time>

                    </div>
                  </div>
                </div>


                <div class="w-full md:w-1/4 mb-4 px-2">
                  <div class="relative bg-white rounded border">

                    <div class="p-3 block border-b">
                      <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                            Game Mode
                          </label>
                          <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                              <option selected>History Quiz</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="p-4">
                      <h3 class="text-lg font-bold">
                        <a class="stretched-link" href="#" title="Card 5">
                           Correct: {{ this.point }} 
                        </a>
                      </h3>
                      <time class="block mb-2 text-sm text-gray-600" datetime="2019-01-01">
                           Incorrect: {{ this.incorrectPoint }} 
                      </time>
                      <p>
                        Test your knowledge on the history of nepal....
                      </p>

                      <div class="mt-8 mb-3">
                        <a @click="reset" href="#"
                          id="start"
                          class="px-4 py-2 bg-teal-500 shadow-lg border rounded-lg text-white uppercase font-semibold tracking-wider focus:outline-none focus:shadow-outline hover:bg-teal-400 active:bg-teal-400">
                          Restart
                        </a>
                      </div>

                    </div>
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
      timer: null,
      totalTime: 0,
      answer: null,
      point: 0,
      incorrectPoint: 0,
      quiz_data: [],
      quest: '',
      loading: true,
    }
  },
  mounted() {
    this.$Progress.finish();
    this.startTimer();
  },
  created() {
    this.$Progress.start();
    this.fetchQuiz();
  },
  methods: {
    reset (){
      
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Game has been reset!!',
        showConfirmButton: true,
      })
      this.fetchQuiz();
    },
    fetchQuiz(){
      this.point = 0;
      this.incorrectPoint = 0;
      this.$Progress.start();
      axios.get('/api/quiz/history')
        .then(res =>res.data)
        .then(res => {
          this.quiz_data = res.data;
          this.quest = this.quiz_data[Math.floor(Math.random()*this.quiz_data.length)];
          this.quiz_data = this.quiz_data.filter(item => item !== this.quest);
          console.log(this.quiz_data);
          this.loading = false;
          this.$Progress.finish();
        });
    },
    nextQuestion(){
        axios.get(`/api/quiz/${this.quest.id}/${this.answer}`)
          .then(res => {
            if(res.data == 'correct') {
              this.point +=1
                  Toast.fire({
                    icon: 'success',
                      title: `Success! correct answer is ${this.answer} !!`
                  })
              }
              else if(res.data == 'incorrect'){
                this.incorrectPoint +=1
                Toast.fire({
                  icon: 'warning',
                        title: `Incorrect Answer!!`
                    })
              }
              this.quest = this.quiz_data[Math.floor(Math.random()*this.quiz_data.length)];
              this.quiz_data = this.quiz_data.filter(item => item !== this.quest);
              if(this.quiz_data.length == 0) {
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Congrats! you have completed the Game',
                  text: `Correct: ${this.point} Incorrect: ${this.incorrectPoint} Percent: ${this.point/10*100}%`,
                  showConfirmButton: false,
                  showCancelButton: true
                  })
              }
            })
            .catch(err => console.log(err))
    },




    startTimer: function() {
      this.timer = setInterval(() => this.countdown(), 1000);
    },
    padTime: function(time) {
      return (time < 10 ? '0' : '') + time;
    },
    countdown: function() {
        this.totalTime++;
    }


  },
  computed: {
    minutes: function() {
      const minutes = Math.floor(this.totalTime / 60);
      return this.padTime(minutes);
    },
    seconds: function() {
      const seconds = this.totalTime - (this.minutes * 60);
      return this.padTime(seconds);
    }
  }
};
</script>

<style scoped>

  input[type="radio"] + label span {
      transition: background .2s,
        transform .2s;
  }

  input[type="radio"] + label span:hover,
  input[type="radio"] + label:hover span{
    transform: scale(1.2);
  } 

  input[type="radio"]:checked + label span {
    background-color: #1F9D55;
    box-shadow: 0px 0px 0px 2px white inset;
  }

  input[type="radio"]:checked + label{
    color: #1F9D55;
  }


  .loader-dots div {
    animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.loader-dots div:nth-child(1) {
    left: 8px;
    animation: loader-dots1 0.6s infinite;
}
.loader-dots div:nth-child(2) {
    left: 8px;
    animation: loader-dots2 0.6s infinite;
}
.loader-dots div:nth-child(3) {
    left: 32px;
    animation: loader-dots2 0.6s infinite;
}
.loader-dots div:nth-child(4) {
    left: 56px;
    animation: loader-dots3 0.6s infinite;
}
@keyframes loader-dots1 {
    0% {
        transform: scale(0);
    }
    100% {
        transform: scale(1);
    }
}
@keyframes loader-dots3 {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(0);
    }
}
@keyframes loader-dots2 {
    0% {
        transform: translate(0, 0);
    }
    100% {
        transform: translate(24px, 0);
    }
}
</style>