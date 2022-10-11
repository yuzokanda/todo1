<template>
  <div class="container">
    <div>
        <td v-bind:to="{name: 'entry.list'}">
        <button class="btn btn-success" @click="onClickButton">一覧</button>
        </td>
        <br>
    </div>

     <!-- <div class="header">
      <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Laravel Kakeibo</span>
                <div>
                    <table>
                    <tr>    
                    <td v-bind:to="{name: 'entry.list'}">
                      <button class="btn btn-success">LIST</button>
                    </td>

                    <td v-bind:to="{name: 'entry.add'}">
                      <button type="button" class="btn btn-success" @click="submit()">ADD</button>
                    </td>
                    </tr>
                    </table>
                </div>
            </nav>
        </div>
      </div>
     </div>            -->
    <form v-on:submit.prevent="submit">
        <div class="form-group row">
            <label for="entry-name" class="col-sm-3 col-form-label">Entry Name</label>
            <input type="text" class="col-sm-9 form-control" id="entry-name" v-model="entry.entry_name">
        </div>
        <div class="form-group row">
            <label for="master-category" class="col-sm-3 col-form-label">Category</label>
            <input type="text" class="col-sm-9 form-control" id="master-category" v-model="entry.master_category">
        </div>
        <div class="form-group row">
            <label for="amount" class="col-sm-3 col-form-label">Amount</label>
            <input type="text" class="col-sm-9 form-control" id="amount" v-model="entry.amount">
        </div>
        <div class="form-group row">
            <label for="due-date" class="col-sm-3 col-form-label">Due Date</label>
            <input type="text" class="col-sm-9 form-control" id="due-date" v-model="entry.due_date">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</template>

<script>
   export default {
        data: function () {
            return {
                entry: {}
            }
        },
        methods: {
            submit() {
                // console.log(this.entry);
                axios.post('/api/entries', this.entry)
                    .then((res) => {
                        this.entries.push(this.newEntry++)
                        this.entry = res.data;
                        //  console.log(this.entry);
                        location.href = "/entries" + this.entry
                    });
            },
            onClickButton() {
                let url = '/entries';
                location.href = url;                
             }
        }
    }
</script>