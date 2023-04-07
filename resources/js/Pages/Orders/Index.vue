<template>
    <Head title="Orders" />

    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex  align-items-center justify-content-between mb-3">
                        <h4 class="card-title pt-1">My Investment History</h4>
                        <Link href="/investment/new"><button class="btn btn-outline-primary btn-xs">Invest Now</button></Link>
                    </div>
                    <table class="table table-bordered table-stripe">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Investment Plan</th>
                                <th>Amount Invested</th>
                                <th>Daily Profit</th>
                                <th>Date Invested</th>
                                <th>Investment Ends</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="order in orders.data" :key="order.id">
                                <td>{{ order.id }}</td>
                                <td>{{ order.plan_name }}</td>
                                <td>{{vueNumberFormat(`${order.invested_amount * 100}`, {})}}</td>
                                <td>{{ order.daily_profit }}</td>
                                <td>{{ order.created_at }}</td>
                                <td>{{ order.end_date}}</td>
                                <td>
                                    <Link :href="`/investment/details/${order.id}`">
                                        <button class="btn btn-primary btn-sm "><i class="mdi mdi-eye"></i></button>
                                    </Link>
                                </td>
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
