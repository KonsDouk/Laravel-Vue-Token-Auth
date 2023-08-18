<template>
  <div>
    <form>
        <label for="username">Email</label>
        <input v-model="this.email" type="text">
        <label for="password">Password</label>
        <input v-model="this.password" type="password">
        <button @click="login">Login</button> 
        <button @click="logout">Logout</button> 
    </form>
  </div>
</template>

<script>
// import axios from 'axios'
export default {
    data(){
        return {
            email: 'kopap@gmail.com',
            password: 'password1',
            token: null,

        }
    },
    mounted(){
        console.log('this.$store.getters.getToken', this.$store.getters.getToken)
    },
    methods: {
        async login(){
            let params = {}
            params.email = this.email
            params.password = this.password
            console.log('params', params)
            
            await axios.post('/api/login', params)
            .then((response)=> {
                console.log('response', response)
                this.token = response.data.token
                this.$store.commit('setToken', this.token)
            })
        },

        async logout(){
            const headers = {'Authorization': `Bearer ${this.$store.getters.getToken}`}
            const data = {name: "test"}
            await axios.post('/api/logout', null, {headers} )
            .then((response) => {
                console.log('response', response)
            })
            await axios.post('/api/logout')
        }
    }
}
</script>

<style>

</style>