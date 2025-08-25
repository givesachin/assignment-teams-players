<template>
  <div id="app" class="min-h-screen bg-gray-100">
    <!-- Navigation (if needed later) -->
    <header class="bg-blue-600 text-white p-4">
      <!-- <h1 class="text-xl font-bold">Teams & Players</h1> -->
    </header>

    <!-- Router View -->
    <main class="p-6">
      <router-view />
    </main>
  </div>
</template>

<script>

</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
