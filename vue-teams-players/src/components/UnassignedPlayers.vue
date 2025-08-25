<template>
  <draggable
    v-model="localPlayers"
    group="players"
    item-key="id"
    class="flex flex-wrap gap-2 border p-3 rounded bg-gray-50"
    @end="onDragEnd"
  >
    <template #item="{ element }">
      <Player :player="element" />
    </template>
  </draggable>
</template>

<script setup>
import { defineProps, defineEmits, ref, watch } from 'vue'
import draggable from 'vuedraggable'
import Player from './PlayerCard.vue'

const props = defineProps({
  modelValue: Array,
})

const emit = defineEmits(['update:modelValue'])

const localPlayers = ref([])

// Keep localPlayers in sync with parent prop
watch(
  () => props.modelValue,
  (val) => {
    localPlayers.value = Array.isArray(val) ? [...val] : []
  },
  { immediate: true } // also sync on mount
)

function onDragEnd() {
  emit('update:modelValue', localPlayers.value)
}
</script>
