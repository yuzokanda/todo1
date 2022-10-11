<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group row border-bottom">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id"
                               v-model="entry.id">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="entry-name" class="col-sm-3 col-form-label">Entry Name</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="entry-name"
                               v-model="entry.entry_name">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="category" class="col-sm-3 col-form-label">Category</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="category"
                               v-model="entry.category">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="amount" class="col-sm-3 col-form-label">Amount</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="amount"
                               v-model="entry.amount">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="due-date" class="col-sm-3 col-form-label">Due Date</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="due-date"
                               v-model="entry.due_date">
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            enryId: String
        },
        data: function () {
            return {
                entry: {}
            }
        },
        methods: {
            getEntry() {
                axios.get('/api/entries/' + this.entryId)
                    .then((res) => {
                        this.entry = res.data;
                    });
            }
        },
        mounted() {
            this.getEntry();
        }
    }
</script>