<template>
    <div>
        <b-card v-for="(video,index) in videos" no-body class="overflow-hidden mb-2" :key="index">
            <b-row no-gutters>
                <b-col md="2">
                    <b-button>{{video.episode_number}}</b-button>
                </b-col>
                <b-col md="10">
                    <b-card-body title="video.title">
                        <b-card-text>
                            {{video.description.substring(0,200) + ' ...'}}
                        </b-card-text>
                    </b-card-body>
                </b-col>
            </b-row>
        </b-card>
    </div>
</template>

<script>
    export default {
        name: "Episodes",
        props:['videos'],
    }
</script>

<style scoped>

</style>
