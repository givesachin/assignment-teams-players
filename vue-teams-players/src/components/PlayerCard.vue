<template>
  <div class="px-3 py-2 bg-blue-100 border rounded cursor-move">
    {{ player.name }}
  </div>
</template>

<script setup>
defineProps({
  player: {
    type: Object,
    required: true
  }
})
</script>
