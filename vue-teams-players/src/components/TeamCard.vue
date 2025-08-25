<template>
  <div>
    <h3 class="font-bold mb-2">{{ team.name }}</h3>
    <draggable
      v-model="localPlayers"
      group="players"
      item-key="id"
      class="min-h-[50px] border p-2 rounded bg-gray-50"
      @change="onDragEnd"
    >
      <template #item="{ element }">
        <PlayerCard :player="element" />
      </template>
    </draggable>
  </div>
</template>

<script setup>
import { ref, watch } from 'vue'
import draggable from 'vuedraggable'
import PlayerCard from './PlayerCard.vue'

const props = defineProps({
  team: {
    type: Object,
    required: true
  }
})

const emit = defineEmits(['update:team'])

// Local copy of players
const localPlayers = ref(Array.isArray(props.team.players) ? [...props.team.players] : [])

// Sync if parent updates team
watch(
  () => props.team.players,
  (val) => {
    localPlayers.value = Array.isArray(val) ? [...val] : []
  },
  { immediate: true }
)

function onDragEnd() {
  console.log('end');
  // Emit updated team object with new players order
  emit('update:team', {
    ...props.team,
    players: localPlayers.value
  })
}
</script>
