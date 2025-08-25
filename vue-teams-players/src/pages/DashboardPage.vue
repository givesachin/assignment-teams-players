<template>
  <div class="p-6">
    <!-- <h1 class="text-2xl font-bold mb-4">Dashboard</h1> -->

    <!-- Unassigned Players -->
    <section class="mb-8">
      <h2 class="text-xl font-semibold mb-2">Unassigned Players</h2>
      <UnassignedPlayers
        v-model="unassignedPlayers"
        :saveChanges="saveChanges"
      />
    </section>


    <!-- Teams -->
    <section>
      <h2 class="text-xl font-semibold mb-2">Teams</h2>
      <TeamsList
        v-model="teams"
        
      />
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import UnassignedPlayers from '../components/UnassignedPlayers.vue'
import TeamsList from '../components/TeamsList.vue'

const unassignedPlayers = ref([])
const teams = ref([])

onMounted(async () => {
  try {
    await axios.get('http://localhost:8000/api/players')
    .then((response) => {
      unassignedPlayers.value = response.data.data
    })
    await axios.get('http://localhost:8000/api/teams')
    .then((response) => {
      teams.value = response.data.data
    })
  } catch (error) {
    console.error('API error:', error)
  }
})

// async function saveChanges() {
//   try {
//     await axios.post('http://localhost:8000/api/save', {
//       unassignedPlayers: unassignedPlayers.value,
//       teams: teams.value
//     })
//   } catch (error) {
//     console.error('Save failed:', error)
//   }
// }
</script>
