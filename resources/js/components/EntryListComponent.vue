<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
                <!-- <div>
                <td v-bind:to="{name: 'entry.add'}">
                <button type="button" class="btn btn-success" @click="submit()">追加</button></td>
                </div> -->
            <tr>
                <th scope="col">#</th>
                <th scope="col">Entry Name</th>
                <th scope="col">Category</th>
                <th scope="col">Amount</th>
                <th scope="col">Due Date</th>
                <!-- <th scope="col">Show</th> -->
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="entry in entries" :key=entry.id>
                <td>{{ entry.id }}</td>
                <td>{{ entry.entry_name }}</td>
                <td>{{ entry.master_category }}</td>
                <td>{{ entry.amount }}</td>
                <td>{{ entry.due_date }}</td>
                <td><button type="button" class="btn btn-primary" @click="editEntry(entry.id)">編集</button></td>
                <td><button type="button" class="btn btn-danger" @click="deleteEntry(entry.id)">削除</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                entries: []
            }
        },
        methods: {
            getEntries() {
                axios.get('/api/entries_list')
                    .then((res) => {
                        console.log('ああああああ');
                        console.log(res.data);
                        this.entries = res.data;
                    });
            },
            deleteEntry(entryId) {
                axios.post('/api/entries/' + entryId)
                    .then((res) => {
                        this.getEntries();
                    });
            },

            editEntry(entryId) {
                let url = '/entries/edit?entry_id=' + entryId;
                location.href = url;

                // axios.get('/api/entries/{entry}/edit' + entry)
                //     .then((res) => {
                //         this.entries = res.data;
                //     });
            }
        },
        mounted() {
             this.getEntries();
        }
    }
</script>

