<template>
<div>
    <draggable :list="tickets">
        <div class="card bg-white mt-3 overflow-auto h-24 rounded-md" v-for="card in cards" :key="card">
            <p class="font-medium text-gray-600 px-2 py-1 line-clamp-2 hover:line-clamp-none">
                {{ card }}
            </p>
        </div>
    </draggable>
</div>
</template>

<script>
import draggable from 'vuedraggable'
export default {
    name: 'Card',
    props: {
        cards: Array
    },
    components: {
        draggable,
    },
    data() {
        return {
            tickets: [],
        }
    },
    mounted() {
        this.tickets = this.cards;
    }
}
</script>
