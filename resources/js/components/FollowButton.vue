<template>
    <div>
        <button class="btn btn-primary" style="margin-left: 10%" @click = "followUser">Follow</button>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            followUser(){
                axios.post('/follow/' + this.user_id).then(response => {
                    alert(response.data);
                });
            }
        },
        props: ['user_id']
    }
</script>
