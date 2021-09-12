<template>
<div class="p-24">
    <h2 class="text-3xl font-bold">Pipelines Board</h2>
    <div class="h-screen-50 flex mt-8">
        <div class="border-pink-400 flex">
            <div class="pipeline bg-gray-100 p-4 mr-4 w-56 rounded-lg" v-for="pipeline in pipelines" :key="pipeline">
                <span class="uppercase font-semibold text-blue-900 rounded-md bg-gray-200 px-2 py-1">
                    {{ pipeline }}
                </span>

                <div class="cards">
                    <div class="card bg-white mt-3 overflow-auto h-24 rounded-md" v-for="card in cards" :key="card">
                        <p class="font-medium text-gray-500 px-2 py-1">
                            {{ card }}
                        </p>
                    </div>
                </div>

            </div>
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
};
</script>
