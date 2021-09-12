<template>
  <div id="app" class="w-full border border-black">
    <pipelines :pipelines="pipelines"></pipelines>
  </div>
</template>

<script>
import Pipelines from './components/Pipelines.vue'

export default {
  name: 'App',
  components: {
    Pipelines
  },
  data() {
    return {
      pipelines: [
        'Time Estimations',
        'Planning',
        'Development',
        'Testing',
        'Bug Fixes',
        'Deployment',
        'Done',
        'Blocker',
        'To be discussed',
      ]
    }
  }
}
</script>