<template>
    <!--<div v-if="startup == 'empty'">-->
        <!--<h2>Стартапы закончились</h2>-->
    <!--</div>-->
    <div v-else>
        <img src="/assets/img/backleft.png" alt="" class="backleft">
        <img src="/assets/img/backright.png" alt="" class="backright">
        <button class="no" @click="downvote(startup.id)"></button>
        <div class="tind">
            <div class="tind-wrapper1">
                <img class="tind-project" :src="'/uploads/startup/logo/'+ startup.logo" alt="">
                <div class="tind-info">
                    <div class="tind-info-inner">
                        <h1>{{ startup.title }}</h1>
                        <p>{{ startup.tagline }}</p>
                    </div>
                    <div class="tind-buttons">
                        <a @click="upvote(startup.id)">{{ vote }}</a>
                        <a :href="'/startup/'+startup.id">Podrobnee</a>
                    </div>
                </div>
            </div>
            <div class="tind-battery">
                <div class="innerr">
                    <img class="tind-battery-liquid" src="/assets/img/liquid1.svg">
                    <img class="tind-battery-liquid2" src="/assets/img/liquid2.svg">
                    <img class="tind-battery-liquid3" src="/assets/img/liquid3.svg">
                    <div class="tind-battery-inner-text">
                        <p>Наша цель:</p>
                        <h1>{{ formatMoney(startup.need_money) }}$</h1>
                    </div>
                    <a href="" id="tind-b1" class="tind-battery-button">
                        Пополнить
                    </a>
                </div>
            </div>
        </div>
        <button class="yes" @click="upvote(startup.id)"></button>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                startup: [],
                vote: 0,
            }
        },
        mounted() {
            this.getStartup();
        },
        methods: {
            getStartup: function() {
                axios.get('/api/startup').then((response) => {
                    this.startup = response.data;
                    this.vote = this.startup.likes;
                });
                console.log(this.startup);
            },

            upvote: function(id) {
                axios.post('/api/upvote/'+ id).then((response) => {
                    this.vote = response.data;
                    console.log(this.vote);
                    this.vote = this.vote.likes;
                });

                this.getStartup();
            },

            downvote: function(id) {
                axios.post('/api/downvote/'+ id).then((response) => {
                    this.vote = response.data;
                    console.log(this.vote);
                    this.vote = this.vote.likes;
                });
                this.getStartup();
            },



            formatMoney: function(need_money) {
                need_money = String(need_money);
                return need_money.replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 ');
            },

            putLike: function(id) {
                axios.post('/api/startup/'+ id + '/like').then((response) => {
                    for(let i = 0; i < this.startups.length; i++){
                        if(this.startups[i]['id'] == id){
                            this.startups[i]['likes'] = response.data;
                        }
                    }
                });
            },
        }
    }
</script>

<style>
</style>
