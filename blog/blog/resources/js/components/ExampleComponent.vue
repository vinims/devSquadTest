<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                    <pre>{{result}}</pre>
                    <button @click="send">Send</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                result: {a: 1}
            }
        },


        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            async send() {
                this.result = await axios.post('/daniel', {
                    hello: 'World'
                })
            }
        }
    }
</script>
