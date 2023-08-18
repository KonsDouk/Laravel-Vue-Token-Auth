<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png" />
    <HelloWorld msg="Welcome to Your Vue.js App" />
    <button @click="showUsers">Show Users</button>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from "@/components/HelloWorld.vue";
import axios from 'axios'

export default {
  name: "HomeView",
  components: {
    HelloWorld,
  },
  mounted(){
    console.log('HomeView', this.$store.getters.getToken)
  },
  methods: {
    async showUsers(){
      console.log('users', this.$store.getters.getToken)
      const headers = {'Authorization': `Bearer ${this.$store.getters.getToken}`}

      const config = {
        headers: {Authorization: `Bearer ${this.$store.getters.getToken}`}
      }
      await axios.get('/api/users', config)
      .then((response)=> {
        console.log('response', response)
      })

      //
    }
  }
};
</script>
