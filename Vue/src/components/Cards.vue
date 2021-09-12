<template>
<div class="cards">
    <card :cards="cards" />
</div>
</template>

<script>
import Card from './Card.vue'
export default {
    props: {
        cards: Array
    },
    components: {
        Card
    }
}
</script>
