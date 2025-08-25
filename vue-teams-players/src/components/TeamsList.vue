<template>
  <div class="grid grid-cols-2 gap-4">
    <div v-for="team in localTeams" :key="team.id" class="p-4 border rounded bg-white shadow">
      <Team :team="team" @update:team="updateTeam" />
    </div>
    <button @click="saveTeams">Save</button>
  </div>
</template>

<script setup>
import { defineProps, defineEmits, ref, watch } from 'vue'
import Team from './TeamCard.vue'

const props = defineProps({
  modelValue: {
    type: Array,
    required: true
  },
  saveChanges: Function
})

const emit = defineEmits(['update:modelValue'])

const localTeams = ref([])

// Keep localTeams in sync with parent prop
watch(
  () => props.modelValue,
  (val) => {
    localTeams.value = Array.isArray(val) ? [...val] : []
  },
  { immediate: true } // also sync on mount
)

function updateTeam(team) {
  localTeams.value = localTeams.value.map(m =>
    m.id === team.id ? { ...m, players: [...team.players] } : m
  )
}

function saveTeams() {
   emit('update:modelValue', localTeams.value)
}
</script>

