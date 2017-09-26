@extends('layout')
@section('content')
    <div id="app">
        <ol>
            <li v-for="skill in skills" v-text="skill"></li>
        </ol>
    </div>
@stop
@section('vuejs')
<script src="https://unpkg.com/vue@2.4.4/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
<script>
    Vue.prototype.$http = axios;
    new Vue({
        el: '#app',
        data: {
           skills: []
        },
        mounted(){
            this.$http.get('/test').then(response => this.skills = response.data);
        }
    });
</script>
@stop
