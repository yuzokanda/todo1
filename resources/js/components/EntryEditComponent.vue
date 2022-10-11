<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <table>
                <tr>
                <td v-bind:to="{name: 'entry.list'}">
                      <button class="btn btn-success" @click="submit()">一覧</button>
                    </td>
                </tr>
                </table>
                <form v-on:submit.prevent="submit">
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-model="entry_id">
                    </div>
                    <div class="form-group row">
                        <label for="entry-name" class="col-sm-3 col-form-label">Entry Name</label>
                        <input type="text" class="col-sm-9 form-control" id="entry-name" v-model="entry_name">
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-sm-3 col-form-label">Category</label>
                        <input type="text" class="col-sm-9 form-control" id="master-category" v-model="master_category">
                    </div>
                    <div class="form-group row">
                        <label for="amount" class="col-sm-3 col-form-label">Amount</label>
                        <input type="text" class="col-sm-9 form-control" id="amount" v-model="amount">
                    </div>
                    <div class="form-group row">
                        <label for="due-date" class="col-sm-3 col-form-label">Due Date</label>
                        <input type="text" class="col-sm-9 form-control" id="due-date" v-model="due_date">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button> 　
                
                </form>
            </div>
        </div>
    </div>
</template>

<script> 
    export default {
        // props: {
        //     entry_id: String
        //     // id_entry: String
        // }
        data: function () {
            return {
                entry: "",
                entry_id: "",
                entry_name: "",
                master_category: "",
                amount: "",
                due_date: "",
                param_id: "",
            }
        },        
        methods: {
            getEntry() {    
                console.log(this.entry);
                console.log(this.param_id);
                console.log("こんにちは");
                axios.get('/api/entries/' + this.param_id)

                    .then((res) => {
                        console.log('ききききき');
                        console.log(res.data.entry_name);
                        console.log(res);
                        console.log(res.data);
                        this.entry = res.data;

                        this.entry_id = res.data.id;
                        this.entry_name = res.data.entry_name;
                        console.log(res.data.master_category);
                        this.master_category = res.data.master_category;
                        console.log(res.data.amount);
                        this.amount = res.data.amount;
                        console.log(res.data.due_date);
                        this.due_date =res.data.due_date;
                        });
                
                    // console.log(this.entry)
            
            },
        
            
            getParam(name, url) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, " "));
            },
           submit() {
                
                console.log(this.entry_id);
                const data = {
                    entry_name: this.entry_name,
                    master_category: this.master_category,
                    amount: this.amount,
                    due_date: this.due_date,
                };
                axios.post('/api/entries/edit/' + this.entry_id, data)
                // axios.post('/api/entries/edit?=' + this.entry_id)
                    .then(function () {
                      // handle success
                    //   console.log(this.entry);
                    })
                    .catch(function (error) {
                      // handle error
                      console.log(error);
                    })
                    .finally(function () {
                      // always executed
                    });
                
            }
        },
        mounted() {  
            // const entryId = document.getElementById('this.entry');  
            // console.log(entryId,this.entry);    
            // document.getElementById("this.entry")
            console.log("ええええええええええ");
            // console.log(this.entryId);
            // console.log(this.id_entry);
            
            // var element = document.getElementById(this.entry);
            // console.log(this.entry);
            var param = location.search;
            console.log(param); 
            console.log(this.getParam('entry_id')); 
            this.param_id = this.getParam('entry_id');
            this.getEntry();
            
                
        },     
    }
</script>