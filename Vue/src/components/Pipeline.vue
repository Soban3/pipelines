<template>
  <div class="pipeline-container">
    <div class="pipeline" v-for="pipeline in pipelines" :key="pipeline">
      {{ pipeline }}
    </div>
  </div>
</template>

<script>
export default {
  name: 'Pipeline',
  props: {
    pipelines: Array    
  }
}
</script>