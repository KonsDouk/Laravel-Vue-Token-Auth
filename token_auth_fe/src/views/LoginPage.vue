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

            // await axios.get('/api/users')
            // .then((response) => {
            //     console.log('response', response)
            // })
        },
        async logout(){
            this.$store.getters.getToken
            await axios.post('/api/logout')
        }
    }
}
</script>

<style>

</style>