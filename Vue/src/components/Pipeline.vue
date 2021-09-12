<template>
<div class="flex">
    <div class="pipeline bg-gray-100 p-4 mr-4 w-56 rounded-lg" v-for="pipeline in pipelines" :key="pipeline">
        <span class="uppercase font-semibold text-blue-900 rounded-md bg-gray-200 px-2 py-1">
            {{ pipeline }}
        </span>
        <cards :cards="cards" />
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
}
</script>
