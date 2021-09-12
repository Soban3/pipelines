<template>
<div>
    <div class="card bg-white mt-3 overflow-auto h-24 rounded-md" v-for="card in cards" :key="card">
        <p class="font-medium text-gray-600 px-2 py-1 line-clamp-2 hover:line-clamp-none">
            {{ card }}
        </p>
    </div>
</div>
</template>

<script>
export default {
    name: 'Card',
    props: {
        cards: Array
    },
}
</script>
