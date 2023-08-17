import axios from 'axios'

if (this.$store.getters.getToken){
    axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.$store.getters.getToken
}