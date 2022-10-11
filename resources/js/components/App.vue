<template>  
  <div class="header">
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Laravel Kakeibo</span>
                <div>
                <td v-bind:to="{name: 'entry.add'}">
                <button type="button" class="btn btn-success" @click="submit()">追加</button></td>
                </div>
            </nav>
        </div>
    </div>
  </div>
</template>
<script>
    export default {
        data: function () {
            return {
                entry: []
            }
        },
        methods: {
             submit() {
                let url = '/entries/create';
                location.href = url;
        //         this.$emit('input_entry');
                
             }
        }
        // methods: {
        //     submit() {
        //         console.log(this.entry);
        //         axios.get('/api/entries/create')
        //         // axios.get('/api/entries/create',this.entry)
        //             .then((res) => {
        //                 this.entries = res.data;
        //                 // this.entries.push(this.newEntry++)
                         
        //             });
        //     }
        // }
        // methods: {
        //     getEntries() {
        //         axios.get('/api/entries')
        //             .then((res) => {
        //                 this.entries = res.data;
        //             })
        //             .catch(function (error) {
        //                 console.log(error);
        //             });
        //     },
            
        // },
        // mounted() {
        //     // this.getEntries();
        // }
    }
</script>



