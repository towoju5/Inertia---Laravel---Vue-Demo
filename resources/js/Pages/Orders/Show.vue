<template>
    <Head title="Invest now" />
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-header"><h3 class="text-dark">Plan Details</h3></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Created</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jacob</td>
                                <td>53275531</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-header"><h3 class="text-dark">Subscribe to plan</h3></div>
                <div class="card-body">
                    <form @submit.prevent="subscribeNow" autocomplete="off">
                        <div class="form-group mb-3">
                            <label for="plan_name" class="text-dark">Plan Name</label>
                            <input type="text" name="plan_name" id="plan_name" readonly v-bind:value="plan.plan_name" class="form-control form-control-lg">
                        </div>
                        <div class="form-group mb-3">
                            <label for="plan_duration" class="text-dark">Plan Duration <small>in Days</small></label>
                            <input type="text" name="plan_duration" id="plan_duration" readonly v-bind:value="plan.plan_duration" class="form-control form-control-lg">
                        </div>
                        <div class="form-group mb-3">
                              <label for="payment_method" class="text-dark">Select Payment Method</label>
                              <select class="form-control" name="" id="">
                                <option value="BTC">Bitcoin</option>
                                <option value="LTC">Litecoin</option>
                                <option value="BNB">Binance coin</option>
                              </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="amount" class="text-dark">Amount</label>
                            <input type="text" name="amount" id="amount" v-model="amount" class="form-control form-control-lg">
                        </div>
                        <div class="form-group mt-3 text-center">
                            <button class="btn btn-lg btn-outline-behance">Proceed...</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    plan: Object,
});
</script>
