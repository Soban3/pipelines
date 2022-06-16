<template>
<div class="p-24 divide-y divide-gray-200">
    <h2 class="text-3xl font-bold mb-4">Pipelines Board</h2>
    <div class="h-screen-full flex">
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
