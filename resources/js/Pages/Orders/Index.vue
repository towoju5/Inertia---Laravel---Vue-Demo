<template>
    <Head title="Orders" />

    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">My Investment History</h4>
                    <table class="table table-bordered table-stripe">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Investment Plan</th>
                                <th>Amount Invested</th>
                                <th>Date Invested</th>
                                <th>Investment Ends</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="order in orders.data" :key="order.id">
                                <td>{{ order.id }}</td>
                                <td>{{ order.plan_name }}</td>
                                <td>{{ order.invested_amount }}</td>
                                <td>{{ order.created_at }}</td>
                                <td>{{ order.end_date}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-2 card-body">
                    Paginator:
                    <Pagination :links="orders.links" />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    orders: Object,
});
</script>
