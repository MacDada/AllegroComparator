<template>
    <table>
        <thead>
            <tr>
                <th
                    v-for="key in columns"
                    @click="sortBy(key)"
                    :class="{
                        active: sortKey === key,
                        asc: sortOrders[key] > 0,
                        dsc: sortOrders[key] <= 0
                    }"
                >
                    {{ key }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="entry in filteredData">
                <td v-for="key in columns">
                    {{entry[key]}}
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
            filterKey: String
        },
        data: function () {
            var sortOrders = {};

            this.columns.forEach(function (key) {
                sortOrders[key] = 1;
            });

            return {
                sortKey: '',
                sortOrders: sortOrders
            };
        },
        computed: {
            filteredData: function () {
                const sortKey = this.sortKey;
                const filterKey = this.filterKey && this.filterKey.toLowerCase();
                const order = this.sortOrders[sortKey] || 1;

                var data = this.data;

                if (filterKey) {
                    data = data.filter(function (row) {
                        return Object.keys(row).some(function (key) {
                            return String(row[key]).toLowerCase().indexOf(filterKey) > -1;
                        });
                    })
                }

                if (sortKey) {
                    data = data.slice().sort(function (a, b) {
                        a = a[sortKey];
                        b = b[sortKey];

                        return (a === b ? 0 : a > b ? 1 : -1) * order;
                    });
                }

                return data;
            }
        },
        methods: {
            sortBy: function (key) {
                this.sortKey = key;
                this.sortOrders[key] = this.sortOrders[key] * -1;
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
        color: rgba(255,255,255,0.66);
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
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
        color: #fff;
    }

    th.asc::after {
        content: "↑";
    }

    th.dsc::after {
        content: "↓";
    }
</style>
