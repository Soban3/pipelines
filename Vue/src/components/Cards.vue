<template>
<div class="cards flex-grow overflow-y-auto my-2">
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

<style>
/*
 *  STYLE 3
 */

.cards::-webkit-scrollbar-track {
  background-color: #ece9e9;
}

.cards::-webkit-scrollbar {
  width: 6px;
  background-color: #ece9e9;
}

.cards::-webkit-scrollbar-thumb {
  background-color: #ece9e9;
}

.cards {
  max-height: 650px;
  min-height: 650px;
}
</style>
