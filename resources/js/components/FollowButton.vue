<template>
    <div>
        <button class="btn btn-primary" style="margin-left: 10%" @click = "followUser" v-text="buttonText"></button>
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
                    this.status = !this.status;
                    console.log(response.data);
                })
                .catch(errors => {
                    if(errors.response.status == 401){
                        window.location = '/login';
                    }
                });
            }
        },
        props: ['user_id','follows'],
        data: function(){
            return {
                status:this.follows,
            }
        },
        computed:{
            buttonText(){
                return (this.status)? "Unfollow":"Follow";
            }
        }
    }
</script>
