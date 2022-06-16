<template>
<div class="flex mt-6">
    <div class="pipeline bg-gray-100 px-3 mr-4 w-56 rounded-lg flex flex-col" v-for="pipeline in pipelines" :key="pipeline.id">
        <span class="uppercase font-semibold text-blue-900 rounded-md bg-gray-200 mt-2 px-2 py-1 flex-none">
            {{ pipeline.pipeline_name }}
        </span>
        <cards :cards="pipeline.cards" />
    </div>
</div>
</template>

<script>
import Cards from './Cards.vue'

export default {
    name: 'Pipeline',
    props: {
        pipelines: Array
    },
    components: {
        Cards
    },
    data() {
        return {
            cards: [
                'Make a sidebar menu',
                'Complete invoice functionality',
                // 'Add translations',
                // 'Fix draggable rows',
                // 'Complete drag and drop feature',
                // 'Fix total price in invoice',
            ]
        };
    },
    methods: {

    },
    mounted() {

    }
}
</script>
