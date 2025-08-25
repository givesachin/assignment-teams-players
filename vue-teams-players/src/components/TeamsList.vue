<template>
  <div class="grid grid-cols-2 gap-4">
    <div v-for="team in modelValue" :key="team.id" class="p-4 border rounded bg-white shadow">
      <Team :team="team" />
    </div>
  </div>
</template>

<script setup>
import { defineProps } from 'vue'
import Team from './TeamCard.vue'

defineProps({
  modelValue: Array,
  saveChanges: Function
})
</script>
