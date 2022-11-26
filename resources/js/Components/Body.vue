<template>
  <div
    class="
      relative
      mx-auto
      mt-16
      grid
      w-full
      max-w-container
      grid-cols-1
      px-4
      sm:mt-20 sm:px-6
      lg:px-8
      xl:mt-32
    "
  >
    <div>
      <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <div class="px-4 py-6 sm:px-0">
          <div
            class="border-4 border-dashed border-gray-200 rounded-lg h-96"
          >
          <!-- <div v-for="anime in animes" :key="anime.id">
            <h1>{{ anime.title }}</h1>
            <h2>{{ anime.description }}</h2>
            <h3>{{ anime.episodes }}</h3>
            <h4>{{ anime.rating }}</h4>
            <h5>{{ anime.image }}</h5>
          </div> -->
          <!--  -->
        </div>
        </div>
        <!-- /End replace -->
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name: "Body",
    props: {
        // animes: Array,
    },
    methods: {
       
    },    
    created() {
        console.log(animes);
    console.log("Body created");
  },
};
</script>

<style>
</style>