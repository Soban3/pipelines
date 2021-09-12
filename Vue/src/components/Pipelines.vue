<template>
<div class="pipeline-container h-screen flex overflow-auto">
    <div class="pipelines border-pink-400 flex">
        <div class="pipeline border border-indigo-400 mx-1 w-52 text-center" v-for="pipeline in pipelines" :key="pipeline">
            {{ pipeline }}
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "Pipelines",
    props: {
        pipelines: Array,
    },
};
</script>
