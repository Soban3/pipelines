<template>
<div class="p-24">
    <h2 class="text-3xl font-bold">Pipelines Board</h2>
    <div class="h-screen-50 flex mt-8">
        <pipeline :pipelines="pipelines"></pipeline>
    </div>
</div>
</template>

<script>
import Pipeline from './Pipeline.vue'
export default {
    name: "Pipelines",
    components: {
        Pipeline,
    },
    props: {
        pipelines: Array,
    },
};
</script>
