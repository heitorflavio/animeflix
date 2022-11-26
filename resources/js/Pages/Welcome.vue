<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Navbar from "@/Components/Navbar.vue";
import Body from "@/Components/Body.vue";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
  animes: Array,
});
</script>

<template>
  <div class="animes">
    <Head title="Welcome" />
    <Navbar />
    <div class="content">
      <div v-for="anime in animes" :key="anime.id">
        <div style="background: transparent; border: none">
          <div>
            <!-- <span alt="teste">{{ anime.title }}</span> -->
            <img :src="anime.image" class="img" :title="anime.title" />
            <div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <Body  />  -->
</template>

<script>
export default {
  name: "Welcome",
  data() {
    return {
      card: true,
    };
  },
  methods: {
    mouseover(v) {},
    img(image) {
      return {
        backgroundImage: `url(${image})`,
        backgroundSize: "cover",
        backgroundPosition: "center",
        backgroundRepeat: "no-repeat",
        height: "200px",
        width: "200px",
        margin: "10px",
        borderRadius: "10px",
      };
    },
  },
  created() {},
};
</script>

<style scoped>
.content {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-auto-rows: minmax(100px, auto);
  grid-auto-flow: dense;
  background-color: #141414;
  padding: 60px;
  position: relative;
}
.img:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  transition: 0.3s;
}
.img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
  transition: 0.3s;
  transform: scale(0.9);
}
.content img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px 10px 0 0;
}
.title:hover {
  display: block;
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  text-align: center;
  float: left;
  position: absolute;
  margin: 0px 0px -50px 20px;
}

@media (max-width: 768px) {
  .content {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    /* grid-auto-rows: minmax(100px, auto);
    grid-auto-flow: dense; */
    background-color: #141414;
    /* display: inline-block; */
    margin-top: clamp(3rem, 2vw, 5rem);
    padding: 3.5vw;
  }
}
</style>

