<script>
import axios from 'axios';
import Project from "./partials/Project.vue";
import { store } from "../store";
export default {
  name: "Main",
  components: {
    Project
  },
  data() {
    return {
      store,
    };
  },
  methods: {
    apiCall() {
      axios
        .get(store.apiEndPoint)
        .then((results) => {
          store.apiResult = results.data;
        });
    },
    getImgPath() {
      axios.get(store.apiEndPoint + '/image')
        .then((results) => {
          store.imgPath = results.data;
        });
    }
  },
  mounted() {
    this.apiCall();
    this.getImgPath();
  },
};
</script>

<template>
  <main>
    <h1>Progetti</h1>
    <div class="project-container">
      <Project v-for="project in store.apiResult"
        :key="project.id"
        :project="project" />
    </div>
  </main>
</template>

<style lang="scss" scoped>
  .project-container {
    display: flex;
    flex-wrap: wrap;
  }
</style>
