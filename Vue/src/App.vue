<template>
<div id="app" class="w-full">
    <pipelines :pipelines="pipelines"></pipelines>
</div>
</template>

<script>
import Pipelines from './components/Pipelines.vue'

export default {
    name: 'App',
    components: {
        Pipelines
    },
    data() {
        return {
            pipelines: [
                // 'Time Estimations',
                // 'Planning',
                // 'Development',
                // 'Testing',
                // 'Bug Fixes',
                // 'Deployment',
                // 'Done',
            ]
        }
    },
    methods: {
        getPipelines() {
            this.$axios.get('http://localhost:8000/api/pipelines').then(response => {
                this.pipelines = response.data.data
            }).catch(err => {
                console.log(err)
            })
        }
    },
    mounted() {
        this.getPipelines()
    }
}
</script>