<template>
    <table>
        <thead>
            <tr>
                <th
                    v-for="column in columns"
                    @click="sortBy(column)"
                    :class="{
                        active: sortColumn === column,
                        asc: sortOrders[column] > 0,
                        dsc: sortOrders[column] <= 0
                    }"
                >
                    {{ column }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="row in dataToShow">
                <td v-for="column in columns">
                    {{ row[column] }}
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: {
            data: Array,
            columns: Array,
            search: String
        },
        data: function () {
            var sortOrders = {};

            this.columns.forEach(function (column) {
                sortOrders[column] = 1;
            });

            return {
                sortColumn: '',
                sortOrders: sortOrders
            };
        },
        computed: {
            dataToShow: function () {
                const sortColumn = this.sortColumn;
                const search = this.search;
                const order = this.sortOrders[sortColumn] || 1;

                var data = this.data;

                if (search) {
                    data = data.filter(function (row) {
                        return Object.keys(row).some(function (key) {
                            return String(row[key]).toLowerCase().indexOf(search.toLowerCase()) > -1;
                        });
                    })
                }

                if (sortColumn) {
                    data = data.slice().sort(function (a, b) {
                        a = a[sortColumn];
                        b = b[sortColumn];

                        return (a === b ? 0 : a > b ? 1 : -1) * order;
                    });
                }

                return data;
            }
        },
        methods: {
            sortBy: function (column) {
                this.sortColumn = column;
                this.sortOrders[column] = this.sortOrders[column] * -1;
            }
        }
    };
</script>

<style scoped>
    table {
        border: 2px solid #42b983;
        border-radius: 3px;
        background-color: #fff;
    }

    th {
        background-color: #42b983;
        color: rgba(255, 255, 255, 0.66);
        cursor: pointer;
        user-select: none;
        text-transform: capitalize;
    }

    td {
        background-color: #f9f9f9;
    }

    th, td {
        min-width: 120px;
        padding: 10px 20px;
    }

    th.active {
        color: rgb(255, 255, 255);
    }

    th.asc::after {
        content: "↑";
    }

    th.dsc::after {
        content: "↓";
    }
</style>
